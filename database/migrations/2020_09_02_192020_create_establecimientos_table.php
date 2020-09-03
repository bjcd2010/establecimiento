<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('NAME');
            $table->foreignId('subcategories_id')->constrained();
            $table->string('image');
            $table->string('address');
            $table->string('Urbanization');
            $table->string('lat');
            $table->string('lng');
            $table->string('phone');
            $table->mediumText('description');
            $table->time('open');
            $table->time('close');
            $table->uuid('uuid');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('establecimientos');
    }
}
