<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('fullname');
            $table->date('dob');
            $table->char('nic_no', 12)->unique();
            $table->char('gender',6);
            $table->char('contact_no',10);
            $table->string('email')->unique();
            $table->string('password');

            //university details
            $table->char('uni_reg_no',7)->unique();
            $table->string('faculty');
            $table->string('degree');
            $table->integer('level');


            //club details
            $table->integer('mem_cat');
            $table->date('mem_exp_date')->nullable();
            $table->char('join_date', 7)->nullable();
            $table->text('skills')->nullable();
            $table->text('bio')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('insta_url')->nullable();

            //kinship 
            $table->string('kin_name');
            $table->string('kinship');
            $table->char('kin_no',10);
            $table->char('kin_no1',10)->nullable();
            $table->string('kin_address');

            //medical
            $table->char('blood',3);
            $table->string('first_aid');
            $table->string('med_allergy');
            $table->string('food_allergy');
            $table->string('other_allergy');
            $table->string('injury');
            $table->string('longterm_med_issue');
            $table->string('medicine');
            
            //admin
            $table->boolean('activated')->default(0);
            $table->bigInteger('role_id')->unsigned()->default(3);
            $table->timestamp('acc_activated_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        
        Schema::dropIfExists('users');
    }
}
