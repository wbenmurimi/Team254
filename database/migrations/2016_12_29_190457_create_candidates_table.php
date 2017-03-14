<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Candidates', function (Blueprint $table) {
 
            $table->increments('id');
            $table->string('name',100);
            $table->string('age',5);
             $table->string('party',50);
            $table->enum('category', ['Presidential', 'Govenor']);
            $table->string('description',1000);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('Candidates');
    }
}
