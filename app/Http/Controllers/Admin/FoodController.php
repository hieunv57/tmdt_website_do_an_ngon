<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\UserFood;
use Auth;
use DB;
use Session;
use App\Foods;
use App\CategoryFood;
use Illuminate\Http\Request;

class FoodController extends Controller {

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
		$foods = new Foods;
		$foods = $foods->findAllFood()->paginate(10);
		// $place=DB::table('place')->paginate(10);
		$total=$foods->count();
		$foods->setPath('danh-sach');
		return view('backend.pages.foods.list', compact('foods', 'total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('backend.pages.foods.insert', compact('parent'));
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
        $food = new Foods;
        $food ->name = $input['name'];
        $food ->link = $this->stripUnicode($input['name']);
        $food ->address = $input['address'];
        $food ->description = $input['description'];
        $food ->video = $input['video'];
        $food ->price = $input['price'];
        $food ->image = $file_name;
        // $product ->cate_id = $request->sltParent;
        $request ->file('fImages')->move('public/backend/images/foods/',$file_name);
        $food ->save();
        // $products_id = $product->id;
        // if(Input::hasFile('fProductDetail'))
        // {
        //     foreach(Input::file('fProductDetail') as $file){
        //         $product_img = new ImagePlace();
        //         if(isset($file))
        //         {
        //             $product_img->image = $file->getClientOriginalName();
        //             $product_img->products_id = $products_id;
        //             $file->move('public/home/images/products_detail/',$file->getClientOriginalName());
        //             $product_img->save();
        //         }
        //     }
        // }
        $user_food = new UserFood;
        $user_food->food_id=$food->id;
        $user_food->user_id=Auth::user()->id;
        $user_food->save();


        $category_foods= new CategoryFood;
        $category_foods->food_id= $food->id;
        $category_foods->category_id= $input['category'];
        $category_foods->save();
        $category_food= new CategoryFood;
        $category_parent=DB::table('category')->select('parent_id')->where('id','=',$category_foods->category_id)->first();
        if ($category_parent->parent_id!=0){
            $category_food->food_id=$food->id;
            $category_food->category_id=$category_parent->parent_id;
            $category_food->save();
        }
        return redirect('admin/mon-an/danh-sach');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function search(Request $request){
        $input=$request->all();
        Session::put('searchFood',$input['search']);
        return redirect('admin/mon-an/ket-qua-tim-kiem');
    }

    public function searchResult(){
    	$searchPlace=Session('searcFood');
        $foods=new Foods;
		$parent = Category::select('id', 'name', 'parent_id')->get();
        $foods=$foods->searchFood(session('searchFood'))->paginate(10);
        $foods->setPath('ket-qua-tim-kiem');
        $total=$foods-> count();
        return view('backend.pages.foods.search',compact('foods','parent','total'));
    }

}
