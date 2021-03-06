<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Bloger'
            ],
            [
                'name' => 'Guest'
            ]
        ];
        \Illuminate\Support\Facades\DB::table('roles')->insert($roles);
    }
}
