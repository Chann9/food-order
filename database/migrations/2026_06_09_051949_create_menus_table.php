<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | RELASI RESTORAN
            |--------------------------------------------------------------------------
            */

           $table->foreignId('restoran_id')
      ->constrained('restorants');

            /*
            |--------------------------------------------------------------------------
            | DATA MENU
            |--------------------------------------------------------------------------
            */

            $table->string('nama_menu');

            $table->integer('harga');

            $table->text('deskripsi')->nullable();

            /*
            |--------------------------------------------------------------------------
            | STOCK
            |--------------------------------------------------------------------------
            */

            $table->integer('stok')
                  ->default(0);

            $table->boolean('tersedia')
                  ->default(true);

            /*
            |--------------------------------------------------------------------------
            | TIMESTAMP
            |--------------------------------------------------------------------------
            */

            $table->timestamps();

        });
    }

    /**
     * Reverse migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};