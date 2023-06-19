<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();
        $user->user_name = 'etudiant';
        $user->user_firstname = 'test';
        $user->email = 'etudiantTest@gmail.com';
        $user->fk_role_id = 5;
        $user->password = Hash::make('password');
        $user->save();

        
    }
}
