<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategori';
    public static function insert($req)
    {
    	$table = new Kategori;
    	$table->kode_kategori = str_random(5);
    	$table->nama_kategori = $req->input('kategori');
    	$table->display = 'Yes';
    	$table->save();

    	return $table;
    }

    public static function render()
    {
    	return Kategori::all();
    }

    public static function change($req, $id)
    {
    	$table = Kategori::find($id);
    	$table->nama_kategori = $req->input('kategori');
    	$table->save();
    	return $table;
    }

    public static function destroy($id)
    {
    	$table = Kategori::find($id);
    	$table->display = 'No';
    	$table->save();
    	return $table;
    }

    public static function detail($id){
        $table = Kategori::find($id);
        return $table;
    }

    public static function as_menu($id)
    {
        $table = self::find($id);
        if ($table->as_menu) {
            $table->as_menu = null;
        } else {
            $table->as_menu = 'true';
        }
        $table->save();
        return $table;
    }
}
