<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('userEmail');
            $table->string('userName');
            $table->string('userPhone');
            $table->string('title');
            $table->string('pages')->nullable();
            $table->string('level')->nullable();
            $table->longText('instructions')->nullable();
            $table->string('referencing');
            $table->string('no_of_references');
            $table->string('subject_area');
            $table->string('paymentStatus');
            $table->string('completionStatus');
            $table->string('deadline');

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
        Schema::dropIfExists('assignments');
    }
}
