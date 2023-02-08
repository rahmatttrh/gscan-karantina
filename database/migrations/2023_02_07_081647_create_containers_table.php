<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('containers', function (Blueprint $table) {
         $table->id();
         $table->dateTime('date')->nullable();
         $table->string('pib_no')->nullable();
         $table->date('pib_date')->nullable();
         $table->string('doc_type')->nullable();
         $table->string('lpn')->nullable();
         $table->string('front_cont')->nullable();
         $table->string('back_cont')->nullable();
         $table->string('rpm')->nullable();
         $table->string('cont_weight')->nullable();
         $table->string('status')->nullable();
         $table->string('verified_by')->nullable();
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
      Schema::dropIfExists('containers');
   }
}
