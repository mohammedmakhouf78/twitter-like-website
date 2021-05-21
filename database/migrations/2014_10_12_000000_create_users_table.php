<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->boolean('male')->default(true);
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->text('about_me')->nullable();
            $table->boolean('graduate')->default(false);
            $table->boolean('working')->default(false);
            $table->string('studing_at')->nullable();
            $table->date('study_from')->nullable();
            $table->date('study_to')->nullable();
            $table->string('study_city')->nullable();
            $table->string('study_state')->nullable();
            $table->text('study_desc')->nullable();
            $table->text('interest_desc')->nullable();
            $table->boolean('enable_follow')->default(true);
            $table->boolean('send_notifications')->default(true);
            $table->boolean('text_messages')->default(false);
            $table->boolean('enabble_tagging')->default(false);
            $table->boolean('enable_sound_notifications')->default(false);
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->text('location')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instgram')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
