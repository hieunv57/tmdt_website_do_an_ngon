public function searchPlace($string){
        $chuoi=stripUnicode($string);
        $place=DB::table('place')->select('place.*', 'category.link as category_name', 'users.name as name_user')
        ->join('category_place','place.id','=','category_place.place_id')
        ->join('category','category_place.category_id','=','category.id')
        ->join('user_place','place.id','=','user_place.place_id')
        ->join('users','user_place.user_id','=','users.id')
        ->groupBy('place.id')
        ->where('place.name','like','%'.$string.'%')->orWhere('place.link','like','%'.$string.'%')
                ->orWhere('place.address','like','%'.$string.'%')->orWhere('place.price','like','%'.$string.'%')
                ->orwhere('users.name', 'like', '%'.$string.'%')->orwhere('place.kind', 'like', '%'.$string.'%');
        return $place;
    }