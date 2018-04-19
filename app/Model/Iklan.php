<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = 'iklan';
    public static function insert($req, $file)
    {
    	$table = new self;
    	$table->nama_iklan = $req->input('nama');
    	$table->gambar_iklan = $file;
    	$table->expired = $req->input('expired');
    	$table->keterangan = $req->input('keterangan');
    	$table->position = $req->input('position');
    	$table->save();

    	return $table;
    }

    public static function render()
    {
    	return self::all();
    }

    public static function change($req, $id, $file)
    {
    	$table = self::find($id);
    	$table->nama_iklan = $req->input('nama');
    	if ($file) {
    		$table->gambar_iklan = $file;
    	}
    	$table->expired = $req->input('expired');
    	$table->keterangan = $req->input('keterangan');
    	$table->position = $req->input('position');
    	$table->save();

    	return $table;
    }

    public static function destroy($id)
    {
    	$table = self::find($id);
    	$table->delete();
    	return $table;
    }

    public static function detail($id){
        $table = self::find($id);
        return $table;
    }
}
