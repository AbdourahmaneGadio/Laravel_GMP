<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();
        $user->user_name = 'proffesseur';
        $user->user_firstname = 'test';
        $user->email = 'proffesseurTest@gmail.com';
        $user->fk_role_id = 4 ;
        $user->password = Hash::make('password+');
        $user->save();

        
    }
}
