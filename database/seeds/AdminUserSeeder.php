<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::create([
            'name'=>'admin perpus',
            'email'=>'abdullah.hamzan@gmail.com',
            'password'=>bcrypt('abdul123'),
            'email_verified_at'=>now(),
        ]);
        $user->assignRole('admin');
        
    }
}
