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
            $table->text('status-other')->nullable();
            $table->text('affiliation')->nullable();
            $table->text('location')->nullable();
            $table->text('purpose')->nullable();
            $table->text('sponsor')->nullable();
            $table->text('principal')->nullable();
            $table->text('grant')->nullable();
            $table->text('non-funded')->nullable();
            $table->text('patient-care')->nullable();
            $table->text('other-sponsored')->nullable();
            $table->text('other-activities')->nullable();
            $table->text('resource')->nullable();
            $table->text('sesh')->nullable();
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
