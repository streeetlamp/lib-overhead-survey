<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('status')->nullable();
            $table->text('status_other')->nullable();
            $table->text('affiliation')->nullable();
            $table->text('affiliation_other')->nullable();
            $table->text('location')->nullable();
            $table->text('purpose')->nullable();
            $table->text('sponsor')->nullable();
            $table->text('principal')->nullable();
            $table->text('grant')->nullable();
            $table->text('resource')->nullable();
            $table->text('session')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
