<?php

namespace App\Helper;

/**
* Time Helper
*/
use DateTime;
class Time
{
	public static function Indonesia($value)
	{
		$date = new DateTime($value);
		return $date->format('d-m-Y');
	}

	public static function IndonesiaMonth($value)
	{
		$date = new DateTime($value);
		$month = $date->format('m');
		if ($month == '01') {
			$month_name = 'Januari';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '02') {
			$month_name = 'Februari';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '03') {
			$month_name = 'Maret';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '04') {
			$month_name = 'April';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '05') {
			$month_name = 'Mei';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '06') {
			$month_name = 'Juni';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '07') {
			$month_name = 'Juli';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '08') {
			$month_name = 'Agustus';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '09') {
			$month_name = 'September';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '10') {
			$month_name = 'Oktober';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '11') {
			$month_name = 'November';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
		if ($month == '12') {
			$month_name = 'Desember';
			return $date->format('d').' '.$month_name.' '.$date->format('Y');
		}
	}

	public static function SysToIndonesia($value)
	{
		$date = new DateTime($value);
		return $date->format('Y-m-d H:i:s');
	}

	public static function IndonesiaToSys($value)
	{
		$date = new DateTime($value);
		return $date->format('d-m-Y H:i:s');
	}
}
