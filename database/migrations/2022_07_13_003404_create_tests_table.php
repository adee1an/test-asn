<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->integer('Request_Unique')->nullable();;
            $table->string('Transaction_Id')->nullable();;
            $table->string('Transaction_Status')->nullable();;
            $table->string('Description')->nullable();;
            $table->integer('Barcode')->nullable();;
            $table->integer('Balance')->nullable();;
            $table->DateTime('Create_Date')->nullable();;
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
