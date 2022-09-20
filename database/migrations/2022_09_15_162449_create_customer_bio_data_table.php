<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerBioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_bio_data', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->string('email');
            $table->string('gender');
            $table->string('mobile', 15);
            $table->string('country');
            $table->string('state');
            $table->string('special_requirements')->nullable();
            $table->date('date');
            $table->string('address');
            $table->integer('zip')->nullable();
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
        Schema::dropIfExists('customer_bio_data');
    }
}
