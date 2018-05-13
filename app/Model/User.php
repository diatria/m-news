<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'users';
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function insert($req, $role)
    {
        $table = new self;
        $table->username = $req->input('username');
        $table->name = $req->input('nama');
        $table->email = $req->input('email');
        $table->password = Hash::make($req->input('password'));
        $table->role = $role;
        // if ($source) {
        //     $table->foto = $source;
        // }
        $table->active = 'true';
        $table->save();

        return $table;
    }

    public static function insertSocial($name, $email, $avatar, $role)
    {
        $table = new self;
        $table->username = $email;
        $table->name = $name;
        $table->email = $email;
        $table->password = Hash::make($email);
        $table->foto = $avatar;
        $table->role = $role;
        $table->active = 'true';
        $table->save();

        return $table;
    }

    public static function render()
    {
        return self::all();
    }

    public static function change($req, $id, $source, $role)
    {
        $table = self::find($id);
        $table->username = $req->input('username');
        $table->name = $req->input('nama');
        $table->email = $req->input('email');
        if ($req->input('password')) {
            $table->password = Hash::make($req->input('password'));
        }
        $table->role = $role;
        if ($source) {
            $table->foto = $source;
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
