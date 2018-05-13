<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    public static function insert($req, $id_user, $table_name, $id_berita)
    {
    	$table = new self;
    	$table->id_user = $id_user;
    	$table->id_berita = $id_berita;
    	$table->komentar = $req->input('komentar');
    	$table->berita_table = $table_name;
    	$table->save();

    	return $table;
    }
}
