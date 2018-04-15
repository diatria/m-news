<?php

namespace App\Helper;

/**
* Redirect Helper
*/
class ResponseRedirect
{
	public static function go($path, $message, $status)
	{
		return redirect($path)
		->with('message', $message)
		->with('status', $status);
	}
}
