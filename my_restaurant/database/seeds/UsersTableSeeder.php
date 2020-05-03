<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User([
        	'name'=>'admin',
        	'email'=> 'admin@admin.com',
        	'is_admin' => True,
        	'password'=>Hash::make('admin')
        ]);

        $admin->save();
    }
}
