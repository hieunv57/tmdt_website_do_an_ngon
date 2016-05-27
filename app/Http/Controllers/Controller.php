<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	function stripUnicode($str){ 
        if(!$str) 
            return false; 
        $unicode = array( 
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|A|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
            'd'=>'đ|Đ|D',
            'b'=> 'B',
            'c'=> 'C',
            'g'=>'G',
            'h'=>'H',
            'j'=>'J',
            'k'=>'K',
            'p'=>'P',
            'q'=>'Q',
            'z'=>'Z',
            'w'=>'W',
            'f'=>'F',
            'l'=>'L',
            'n'=>'N',
            't'=>'T',
            'r'=>'R',
            'm'=>'M',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|E|Ế|Ề|Ể|Ễ|Ệ', 
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị|I', 
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|O|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|U|Ự', 
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Y|Ỵ',
            '-'=>' ',
            '_'=>'\/',
        ); 
        foreach($unicode as $nonUnicode=>$uni)
            $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str; 
    }

}
