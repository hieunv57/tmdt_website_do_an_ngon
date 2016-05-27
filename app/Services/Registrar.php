<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		if($data['gender']=='Nam'){
			$data['avatar']='public/backend/images/users/nam.png';
		}
		if($data['gender']=='Nữ'){
			$data['avatar']='public/backend/images/users/nu.png';
		}
		if($data['gender']=='Không Xác Định'){
			$data['avatar']='public/backend/images/users/chuaxacdinh.png';
		}
		return User::create([
			'name' => $data['name'],
			'avatar' => $data['avatar'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'gender' => $data['gender'],
			'address' => $data['address'],
			'password' => bcrypt($data['password']),
			'facebook' => $data['facebook'],
		]);
	}

}
