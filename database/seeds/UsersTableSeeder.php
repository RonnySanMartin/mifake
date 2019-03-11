<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = App\Role::where('nombre', 'admin')->get()->first();
        $status_user = App\Status::where('nombre','Activo')->get()->first();
        $new_user = new App\User;
        $new_user->name = 'Administrador';
        $new_user->email = 'admin@mifake.cl';
        $new_user->password = Hash::make('asdasdasd');
        $new_user->role()->associate($role_user);
        $new_user->status()->associate($status_user);
        $new_user->save();

        $role_user = App\Role::where('nombre', 'user')->get()->first();
        $status_user = App\Status::where('nombre','Activo')->get()->first();
        $new_user = new App\User;
        $new_user->name = 'Usuario 1';
        $new_user->email = 'u1@mifake.cl';
        $new_user->password = Hash::make('123123123');
        $new_user->role()->associate($role_user);
        $new_user->status()->associate($status_user);
        $new_user->save();

        $role_user = App\Role::where('nombre', 'user')->get()->first();
        $status_user = App\Status::where('nombre','Activo')->get()->first();
        $new_user = new App\User;
        $new_user->name = 'Usuario 2';
        $new_user->email = 'u2@mifake.cl';
        $new_user->password = Hash::make('123123123');
        $new_user->role()->associate($role_user);
        $new_user->status()->associate($status_user);
        $new_user->save();

        $role_user = App\Role::where('nombre', 'user')->get()->first();
        $status_user = App\Status::where('nombre','Activo')->get()->first();
        $new_user = new App\User;
        $new_user->name = 'Usuario 3';
        $new_user->email = 'u3@mifake.cl';
        $new_user->password = Hash::make('123123123');
        $new_user->role()->associate($role_user);
        $new_user->status()->associate($status_user);
        $new_user->save();
    }
}
