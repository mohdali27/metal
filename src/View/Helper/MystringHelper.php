<?php
namespace App\View\Helper;
use Cake\View\Helper;
class MystringHelper extends Helper{
    public function turncate($string, $limit=50, $break=" ", $pad="..."){
	  if(strlen($string) <= $limit) return $string;
	  $string = substr($string, 0, $limit);
	  if(false !== ($breakpoint = strrpos($string, $break))) {
		$string = substr($string, 0, $breakpoint);
	  }
	  return $string . $pad;
	}
}
?>