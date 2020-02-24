<?php

use App\role;
use Illuminate\Database\Seeder;

class RolesTablesSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin member','Finance member'];
        foreach($roles as $role){
            $new_role = new role();
            $new_role->role = $role;
            $new_role->save();
        }
    }
}
