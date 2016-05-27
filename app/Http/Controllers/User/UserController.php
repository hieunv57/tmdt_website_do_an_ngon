<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Input;
use App\WishListPlace;
use App\Place;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$place_new = new Place;
		$place_new = $place_new->find_New(9)->get();
		$place_posted = new Place;
		$place_posted = $place_posted->findPlaceUser()->get();
		$wishlist_place = new WishListPlace;
		$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		$id=Auth::user()->id;
		$user=User::find($id);
        return view('fontend.pages.user.show',compact('user', 'place_new', 'place_posted', 'wishlist_place'));
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
	public function update(Request $request)
	{
		$input=$request->all();
		 $id=Auth::user()->id;
        $users=User::find($id);
        $users ->name = $input['name'];
        $users->facebook=$input['facebook'];
        $users->address=$input['address'];
        $users->phone=$input['phone'];
        $users->gender=$input['gender'];

        $file= Input::file('avatar');
        if (Input::file('avatar')){
            $save_up= 'images/';
            $_avatar= rand(0, 50000).$file->getClientOriginalName();
            $avatar=$this->stripUnicode($_avatar);
            $users->avatar=$save_up.$avatar;
            Input::file('avatar')->move($save_up, $avatar);
        } else {
            $users->avatar=$users->avatar;
        }
        $data= array(
            'name'  => $users->name,
            'avatar'    => $users->avatar,
            'facebook'    => $users->facebook,
            'address'=> $users->address,
            'phone'    => $users->phone,
            'gender' => $users->gender,
            // 'role_id' =>$user->role_id,
        );
          
        $users->update($data);
       	return redirect('thong-tin-ca-nhan');
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

	public function lostpassword()
	{
		return view('fontend.pages.user.lostpassword');
	}

	public function showotheruser($idortheruser)
	{
		$place_new = new Place;
		$place_new = $place_new->find_New(9)->get();
		$user = new User;
		$user = $user->findUser($idortheruser);
		return view('fontend.pages.user.view_orther_user', compact('user'));
	}

}
