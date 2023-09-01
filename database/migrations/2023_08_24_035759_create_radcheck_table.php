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
        Schema::create('radcheck', function (Blueprint $table) {
            $table->id();
            $table->char('username', 64);
            $table->char('attribute', 64);
            $table->char('op',2);
            $table->char('value',253);
            $table->string('nip', 25);
            $table->char('name',253);
            $table->date('tgl_lahir');
            $table->string('id_unit', 2);
            $table->string('id_jurusan', 2);
            $table->string('id_prodi', 2);
            $table->string('id_status', 2);
            $table->text('alamat');
            $table->string('telp', 12);
            $table->char('email',253);
            $table->char('photo',253);
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
        Schema::dropIfExists('radcheck');
    }
};
