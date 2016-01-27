<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('pelanggan', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('alamat');
                $table->string('noantrian');
                $table->string('Jk');
                $table->string('notel');
                $table->string('user_id');
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
            Schema::drop('pelanggan');
    }

}
