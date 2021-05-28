<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->string('title');
            // $table->string('slug');
            // $table->text('content');
            // $table->integer('category_id');
            // $table->string('image')->nullable();

         $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('image')->nullable();
     
           
            $table->string('blood_group');

            $table->string('date_of_birth');

            $table->string('profession');
            $table->string('designation');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('fb_link'); 
            $table->string('mobile');
            $table->string('b_f_m');
            $table->text('family_govt_job');

            $table->integer('category_id'); 
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
