<?php

namespace App\Helper;

/**
* Redirect Helper
*/
class Pagination
{
	public static function array_count_batc($number)
	{
		
	}
	public static function splitJson($json)
	{
		// Setting
		$number_array_dumper = [];
		$number_of_array = count($json);
		$numer_array_split = 0;

		$array_dumper = [];
		$array_dumper_sub = [];
		
		while (5 <= $number_of_array) {
			if ($number_of_array >= 5) {
				$number_of_array = $number_of_array-5;
				array_push($number_array_dumper, $numer_array_split = $numer_array_split + 1);
			}
		}

		if ($number_of_array > 0) {
			array_push($number_array_dumper, $numer_array_split = $numer_array_split + 1);
		}

		// 
		$number_array = count($json)-1;
		$no_loop = -1;
		for ($i=1; $i <= count($number_array_dumper); $i++) {
			for ($x=1; $x <= 5; $x++) { 
				if ($no_loop < $number_array) {
					array_push($array_dumper_sub, $json[$no_loop = $no_loop + 1]);
				}
			}
			$array_dumper['page'.$i] = $array_dumper_sub;
			$array_dumper_sub = [];
		}

		return (array) $array_dumper;
	}
}
