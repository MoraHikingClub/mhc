<?php

use App\Launch;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        $this->command->info('User table seeded!');

        $this->call(LaunchTableSeeder::class);

        $this->command->info('Launch table seeded!');
    }
}

class LaunchTableSeeder extends Seeder
{
    public function run()
    {
        $launch = new Launch();
        $launch->launch = false;
        $launch->save();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User();

        //personal details
        $user->fname = 'Web';
        $user->lname = 'Admin';
        $user->fullname = 'Web Admin';
        $user->dob = '2019-01-01';
        $user->nic_no = '981234567V';
        $user->gender = 'Male';
        $user->contact_no = '0712345678';
        $user->email = 'webadmin@morahiking.com';
        $user->password = bcrypt('Master@123');

        //university details
        $user->uni_reg_no = '123456A';
        $user->faculty = 'Information Technology';
        $user->degree = 'Information Technology';
        $user->level = 1;

        //club details
        $user->mem_cat = 1;

        //kinship details
        $user->kin_name = 'Lorem ipsum';
        $user->kinship = 'Lorem ipsum';
        $user->kin_no = '0712345678';
        $user->kin_address = '123, ABC lane, XYZ';

        //medical details
        $user->blood = 'A+';
        $user->first_aid = 'No';
        $user->med_allergy = 'No';
        $user->food_allergy = 'No';
        $user->other_allergy = 'No';
        $user->injury = 'No';
        $user->longterm_med_issue = 'No';
        $user->medicine = 'No';
        $user->api_token = sha1(time());

        $user->save();
    }
}
