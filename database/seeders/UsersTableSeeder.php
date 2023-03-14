<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$n7EDdM7xZAlCrXCJ3cJBVuFjRQ3G.kd5HNYIjI6Q0uwFpQkljNWQu',
                'remember_token' => 'kCdNl67qN8xdjiAAYeK2MdZLR4bP4A8cDl3UGU5D9eSovxRmEQfA28ygp1Mg',
                'settings' => NULL,
                'created_at' => '2023-03-13 18:32:20',
                'updated_at' => '2023-03-13 18:32:20',
            ),
        ));
        
        
    }
}