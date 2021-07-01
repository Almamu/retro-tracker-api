<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaseDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('collections', function ($table)
        {
            $table->increments ('id');
            $table->string ('name');
            $table->timestamps ();
        });

        Schema::create ('items', function ($table)
        {
            $table->increments ('id');
            $table->string ('name');
            $table->integer ('collection_id')->references ('id')->on ('collections');
            $table->string ('barcode')->nullable ();
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
