<?php namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Input;
use Session;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller {

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
		$total=DB::table('users')->count();
		$user=DB::table('users')->paginate(10);
		$user->setPath('danh-sach');
		return view('backend.pages.users.list', compact('user', 'total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.pages.users.insert');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input=$request->all();
        $user= new User;
        $user->name = $input['name'];
        $user->password = bcrypt($input['password']);
        $user->email = $input['email'];
        $user->avatar = $input['avatar']= 'public/backend/images/users/chuaxacdinh.png';
        $user -> save();
        
        return redirect('admin/thanh-vien/danh-sach');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user=User::find($id);
        return view('backend.pages.users.show',compact('user'));
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
		$user=User::find($id);
        $input= $request->all();
        $users = new User;
        $users ->name = $input['name'];
        $file= Input::file('avatar');
        if (Input::file('avatar')){
            $save_up= 'images/';
            $_avatar= rand(0, 50000).$file->getClientOriginalName();
            $avatar=$this->strIpUnicode($_avatar);
            $user->avatar=$save_up.$avatar;
            Input::file('avatar')->move($save_up, $avatar);
        } else {
            $users->avatar=$user->avatar;
        }
        $users->facebook=$input['facebook'];
        $users->address=$input['address'];
        $users->phone=$input['phone'];
        $users->gender=$input['gender'];
        // $user->birthday=$input['birthday'];
        $data= array(
            'name'  => $users->name,
            // 'avatar'    => $users->avatar,
            'address'=> $users->address,
            'phone'    => $users->phone,
            'gender' => $users->gender,
            'birthday' => $users->birthday,
            // 'role_id' =>$user->role_id,
        );
          
        $user->update($data);
        return view('backend.pages.users.show', compact('user'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user=User::find($id);
            User::find($id)->delete();
        return redirect('admin/thanh-vien/danh-sach');	
    }

    public function search(Request $request){
        $input=$request->all();
        Session::put('searchUser',$input['search']);
        return redirect('admin/thanh-vien/ket-qua-tim-kiem');
    }

    public function searchResult(){
    	$searchUser=Session('searchUser');
        $users=new User;
        $users=$users->findString(session('searchUser'))->paginate(5);
        $users->setPath('ket-qua-tim-kiem');
        return view('backend.pages.users.search', compact('users'));
    }

    public function createfromfile()
    {
    	return view('backend.pages.users.insertfromfile');
    }

    public function storefromfile(Request $request)
    {
    	$input=$request->all();
		$file_excel = $request->file('file');
		Excel::load($file_excel, function($reader) {
			$results = $reader->get();
				foreach ($results as $key => $value) {
					$insert[] = ['name' => $value->name, 'email' => $value->email, 'password' => $value->password, 
							'phone' => $value->phone, 'address' => $value->address, 'gender'=>$value->gender];
				}
				foreach($insert as $user)
                {
                    User::create($user);
                }
				// foreach($insert as $user)
				// {
				// 	$user = new User;
			 //        $user ->name = $value->name;
			 //        $user ->email = $value->email;
			 //        $user ->password = $value->password;
			 //        $user ->phone = $value->phone;
			 //        $user ->address = $value->address;
			 //        $user ->gender = $value->gender;
			 //        $user ->save();
			 //    }
		});

		return redirect('admin/thanh-vien/danh-sach');
    }

}
