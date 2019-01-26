<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => "Arev",
            'email' => "arev@gmail.com",
            'password' => bcrypt("as1234"),
            'admin' => 1,
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'about' => "kuku bubu",
            'avatar' => "uploads/avatars/a.jpg",
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
        ]);
    }
}
