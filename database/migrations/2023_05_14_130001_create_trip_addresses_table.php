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
        Schema::create('trip_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('trip_pic');
            $table->string('trip_signature');
            $table->string('trip_note');
            $table->integer('trip_id');
            $table->string('status')->default('on');
            $table->integer('created_by');
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
        Schema::dropIfExists('trip_addresses');
    }
};
