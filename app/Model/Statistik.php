<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    protected $table = 'statistik';

    public static function getClientIp() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	public static function getUniqueIp()
	{
		$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$unique_validator = self::where('url', $url)->where('ip', self::getClientIp())->first();

    	if ($unique_validator) {
    		$unique = 'No';
    	} else {
    		$unique = 'Yes';
    	}

    	return $unique;
	}

    public static function insert($id = null)
    {
    	$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$unique = self::getUniqueIp();    	
    	
    	$table = new self;
    	$table->ip = self::getClientIp();
    	$table->url = $url;
    	$table->unique = $unique;
        $table->id_berita = $id;
    	$table->save();

        if ($table->unique == 'Yes') {
            Berita::countVisitor($id);
        }
    }

    public static function render()
    {
    	return self::all();
    }

    public static function change($req, $id, $source)
    {
    	$table = self::find($id);
    	$table->judul = $req->input('judul');
    	$table->konten = $req->input('konten');
    	$table->id_kategori = $req->input('kategori');
    	$table->source_type = $req->input('s_type');
    	if ($file_name) {
    		$table->source = $source;
    	}
    	$table->save();
    	return $table;
    }

    public static function destroy($id)
    {
    	$table = self::find($id);
    	$table->display = 'No';
    	$table->save();
    	return $table;
    }
}
