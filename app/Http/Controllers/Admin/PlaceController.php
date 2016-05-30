<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Place;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use Input;
use File;
use Session;
use App\CategoryPlace;
use Maatwebsite\Excel\Facades\Excel;
use App\UserPlace;
class PlaceController extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$place = new Place;
		$place = $place->findAllPlace()->paginate(10);
		// $place=DB::table('place')->paginate(10);
		$total=$place->count();
		$place->setPath('danh-sach');
		return view('backend.pages.place.list', compact('place','total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('backend.pages.place.insert', compact('parent'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input=$request->all();
		$fileimage = $request->file('fImages')->getClientOriginalName();
		$file_name=$this->stripUnicode($fileimage);
        $place = new Place;
        $place ->name = $input['name'];
        $place ->link = $this->stripUnicode($input['name']);
        $place ->address = $input['address'];
        $place ->description = $input['description'];
        $place ->video = $input['video'];
        $place ->phone = $input['phone'];
        $place ->timeopen = $input['timeopen'];
        $place ->price = $input['price'];
        $place ->image = $file_name;
        // $product ->cate_id = $request->sltParent;
        $request ->file('fImages')->move('public/backend/images/places/',$file_name);
        $place ->save();
        // $places_id = $product->id;
        // if(Input::hasFile('fProductDetail'))
        // {
        //     foreach(Input::file('fProductDetail') as $file){
        //         $product_img = new ImagePlace();
        //         if(isset($file))
        //         {
        //             $product_img->image = $file->getClientOriginalName();
        //             $product_img->$places_id = $places_id;
        //             $file->move('public/home/images/$places_detail/',$file->getClientOriginalName());
        //             $product_img->save();
        //         }
        //     }
        // }
        $user_places = new UserPlace;
        $user_places->place_id=$place->id;
        $user_places->user_id=Auth::user()->id;
        $user_places->save();


        $category_places= new CategoryPlace;
        $category_places->place_id= $place->id;
        $category_places->category_id= $input['category'];
        $category_places->save();
        $category_place= new CategoryPlace;
        $category_parent=DB::table('category')->select('parent_id')->where('id','=',$category_places->category_id)->first();
        if ($category_parent->parent_id!=0){
            $category_place->place_id=$place->id;
            $category_place->category_id=$category_parent->parent_id;
            $category_place->save();
        }
        return redirect('admin/dia-diem/danh-sach');
	}

	public function insert()
	{
		return view('backend.pages.place.insert_from_file');
	}

	public function insertnew(Request $request)
	{
		$input=$request->all();
		$file_excel = $request->file('file');
		Excel::load($file_excel, function($reader) {
			$results = $reader->get();
			foreach ($results as $key => $value) {
					$insert[] = ['name' => $value->name, 'address' => $value->address, 'description' => $value->description, 
									'phone' => $value->phone, 'kind' => $value->kind, 'timeopen'=>$value->timeopen];
				}
				$place = new Place;
		        $place ->name = $value->name;
		        $place ->address = $value->address;
		        $place ->description = $value->description;
		        $place ->phone = $value->phone;
		        $place ->kind = $value->kind;
		        $place ->timeopen = $value->timeopen;
		        $place ->link = $this->stripUnicode($value->name);
		        $place ->save();
		        $user_places = new UserPlace;
		        $user_places->place_id=$place->id;
		        $user_places->user_id=Auth::user()->id;
		        $user_places->save();
		});
		return redirect('admin/dia-diem/danh-sach');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$place=Place::find($id);
		$parent = Category::select('id', 'name', 'parent_id')->get();
        return view('backend.pages.place.show',compact('place', 'parent'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$places=Place::find($id);
		$input= $request->all();
		$places->name = $input['name'];
        $link=$this->strIpUnicode($input['name']);
        if (Input::file('Images')){
	        $fileimage = $request->file('Images')->getClientOriginalName();

			$places->image = $fileimage;
	        // $product ->cate_id = $request->sltParent;
	        $request ->file('Images')->move('public/home/images/places/',$fileimage);
	    } else {
            $places->image=$places->image;
        }

        $places->timeopen=$input['timeopen'];
        $places->price=$input['price'];
        $places->video=$input['video'];
        $places->address=$input['address'];
        $places->description=$input['description'];
        $data= array(
        	'link' => $places->link,
            'name'  => $places->name,
            'address' => $places->address,
            'image'    => $places->image,
            'timeopen'=> $places->timeopen,
            'price'    => $places->price,
            'description' => $places->description,
            // 'role_id' =>$user->role_id,
        );
        
        $places->update($data);

        
        $place=Place::find($id);
        $parent = Category::select('id', 'name', 'parent_id')->get();
        return Redirect::back()->with(['flash_level'=>'success','flash_message'=> 'Cập nhật thành công!']);;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// $product_detail = $places::find($id)->pimages;
  //       foreach($product_detail as $value)
  //       {
  //           File::delete('public/home/images/$places_detail/'.$value['image']);
  //       }
        $place = Place::find($id);
        File::delete('public/backend/images/places/'.$place->image); 
        $place->delete($id);
        return redirect('admin/dia-diem/danh-sach')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công!']);
	}

	public function search(Request $request){
        $input=$request->all();
        Session::put('searchPlace',$input['search']);
        return redirect('admin/dia-diem/ket-qua-tim-kiem');
    }

    public function searchResult(){
    	$searchPlace=Session('searchPlace');
        $place=new Place;
        $total=DB::table('place')->count();
		$parent = Category::select('id', 'name', 'parent_id')->get();
        $place=$place->searchPlace(session('searchPlace'))->paginate(10);
        $place->setPath('ket-qua-tim-kiem');
        return view('backend.pages.place.search',compact('place','parent','total'));
    }

}
