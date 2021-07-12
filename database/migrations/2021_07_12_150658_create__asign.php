<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_asign', function (Blueprint $table) {
            $table->id();
            $table->integer('NMHandler');
            $table->integer('JobHandler');
            $table->timestamp('start')->nullable();
            $table->timestamp('finish')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_asign');
    }
}
