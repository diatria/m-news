<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table  = 'menu';

    public static function insert($req)
    {
    	$table = new self;
    	$table->nama_menu = $req->input('menu');
    	$table->parent = $req->input('parent');
    	$table->save();

    	return $table;
    }
}
