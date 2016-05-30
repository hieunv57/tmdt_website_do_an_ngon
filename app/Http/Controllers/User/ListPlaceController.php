<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Place;
use Auth;
use App\WishListPlace;
use Illuminate\Http\Request;

class ListPlaceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function newplace()
	{
		$newplace = new Place;
		$newplace = $newplace->findNewPlace(1000)->paginate(9);
		$newplace->setPath('dia-diem-moi');
		$most_wishlist = new Place;
		$most_wishlist = $most_wishlist->findPlaceMostWishList(4)->get();
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		return view('fontend.pages.danh-sach.dia-diem-moi', compact('newplace','wishlist_place', 'most_wishlist'));
	}

	public function highpoint()
	{
		$place = new Place;
		$place = $place->findHighPoint(1000)->paginate(9);
		$place->setPath('dia-diem-duoc-danh-gia-cao');
		$most_wishlist = new Place;
		$most_wishlist = $most_wishlist->findPlaceMostWishList(4)->get();
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		return view('fontend.pages.danh-sach.dia-diem-danh-gia-cao', compact('place','most_wishlist','wishlist_place', 'most_wishlist'));
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

}
