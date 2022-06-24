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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email', 50)->unique();
            $table->string('user_password', 100);
            $table->string('user_nama', 100);
            $table->text('user_alamat');
            $table->string('user_hp', 25);
            $table->string('user_pos', 5);
            $table->tinyInteger('user_role');
            $table->tinyInteger('user_aktif');
            $table->timestamp('created_at');
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
