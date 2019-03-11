<?php

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role_user = App\Role::where('nombre', 'user')->get()->first();
        // $status_user = App\Status::where('nombre','Activo')->get()->first();
        // $new_user = new App\User;
        // $new_user->name = 'Usuario 3';
        // $new_user->email = 'u3@mifake.cl';
        // $new_user->password = Hash::make('123123123');
        // $new_user->role()->associate($role_user);
        // $new_user->status()->associate($status_user);
        // $new_user->save();
        for ($i = 0; $i < 20; $i++) {
            $user_foto = App\User::find(rand(2,4));

            $new_foto = new App\Foto;
            $new_foto->nombre = 'foto_' . date('YmdHisu');
            $new_foto->ruta = 'https://picsum.photos/' . rand(800,1000) . '/' . rand(800,1000);
            $new_foto->user()->associate($user_foto);
            $new_foto->save();
            // DB::table('fotos')->insert([
            //     'nombre' => 'foto_' . date('YmdHisu'),
            //     'ruta' => 'https://picsum.photos/' . rand(200,300) . '/' . rand(200,300), 
            // ]);
        }
    }
}
