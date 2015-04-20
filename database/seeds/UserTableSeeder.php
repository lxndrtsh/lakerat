<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $now = new \Datetime;

        User::create([
            'name' => 'Default Admin',
            'email' => 'admin@lakerat.dev',
            'password' => Hash::make('default'),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}