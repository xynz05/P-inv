<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        
        DB::unprepared("DROP TRIGGER IF EXISTS insert_barang_keluar");
        DB::unprepared(
          "CREATE TRIGGER after_insert_barang_keluar
            AFTER INSERT
            ON barangkeluar
            FOR EACH ROW
            BEGIN

            INSERT INTO logg (nama_barang, aktifitas, tgl) VALUES (
                new.nama_barang,  'barang keluar', NOW()
            );

            END;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_logg_barang_keluar');
    }
};
