<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDorctorInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorctor_informations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('phone', 15);
            $table->string('degree', 200);
            $table->string('experience', 100);
            $table->string('field', 30);
            $table->string('image', 15)->nullable();
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
        Schema::dropIfExists('dorctor_informations');
    }
}
