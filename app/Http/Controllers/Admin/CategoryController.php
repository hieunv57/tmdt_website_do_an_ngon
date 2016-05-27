<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

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
		return view('backend.pages.category.list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('backend.pages.category.insert', compact('parent'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cate=$request->all();
        $cate['link']=$this->stripUnicode($cate['name']);
        Category::create($cate);
        return redirect('admin/danh-muc/them-moi')->with(['flash_level'=>'success','flash_message'=> 'Thêm mới thành công']);
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
		$parent = Category::select('id', 'name', 'parent_id')->get();
        $cat=Category::find($id);
        return view('backend.pages.category.show', compact('cat', 'parent'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
    {

      $cateupdate=$request->all();
      $cateupdate['link']=$this->stripUnicode($cateupdate['name']);
      $cate=Category::find($id);
      $cate->update($cateupdate);
      return redirect('admin/danh-muc/danh-sach');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$parent = Category::where('parent_id', $id)->count();
		if($parent == 0){
			$cate=Category::find($id);
			$cate->delete();
	       	 return redirect('admin/danh-muc/danh-sach')->with(['flash_level'=>'success','flash_message'=> 'Xóa danh mục thành công']);
	    }
	    else
	    {
	    	echo "<script type='text/javascript'>
                alert('Sorry ! You Can Not Delete This Category');
                window.location = '";
                    echo route('admin/danh-muc/danh-sach');
            echo"'
            </script>";
	    }
	}

}
