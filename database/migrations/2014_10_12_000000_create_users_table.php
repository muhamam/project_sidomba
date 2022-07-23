<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('avatar')->nullable();
            $table->bigInteger('NIK')->nullable();
            $table->string('username');
            $table->string('fullname')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('no_HP')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            /* Users: 0=>User, 1=>Admin */
            $table->tinyInteger('type')->default(0);
            $table->longText('id_chat_to')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
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
};
