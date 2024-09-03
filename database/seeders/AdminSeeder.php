<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::where('email','admin@gmail.com')->first();
        if (!$user) {
            $user= new User();
        }
       
        $user->name='Admin';
        $user->email='admin@gmail.com';
        $user->role=1;
        $user->password=Hash::make('admin123');
        $user->save();

    }
}
