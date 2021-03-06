<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Helper\Time;

class Foto extends Model
{
    protected $table = 'foto';

    public static function countVisitor($id)
    {
        $visitor = self::find($id)->first();
        $table = self::find($id);
        $table->visitor = $visitor->visitor == null ? 0 + 1 : $visitor->visitor + 1;;
        $table->save();
    }

    public static function insert($req, $source)
    {
    	$table = new self;
    	$table->judul = $req->input('judul');
    	$table->konten = $req->input('konten');
        $table->id_kategori = $req->input('kategori');
    	$table->source = $source;
        $table->source_type = $req->input('s_type');
    	$table->url = str_slug($req->input('judul'));
    	$table->display = 'Yes';
        $table->time = Time::SysToIndonesia($req->input('tgl_upload'));
    	$table->save();

    	return $table;
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
        $table->url = str_slug($req->input('judul'));
        $table->time = Time::SysToIndonesia($req->input('tgl_upload'));
    	if ($source) {
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
