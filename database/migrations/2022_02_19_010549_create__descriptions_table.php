<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model')->nullable();
            $table->string('ram')->nullable();
            $table->string('rom')->nullable();
            $table->string('expandable')->nullable();
            $table->string('camera')->nullable();
            $table->string('processor')->nullable();
            $table->string('display')->nullable();
            $table->string('battery')->nullable();
            $table->string('chargingspeed')->nullable();
            $table->string('glass')->nullable();
            $table->string('product_id');
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
        Schema::dropIfExists('_descriptions');
    }
}
