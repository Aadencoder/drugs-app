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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->longText('ingredients');
            $table->string('dose_form');
            $table->enum('approval_status',['pending','approved', 'rejected', 'expired'])->default('pending');
            $table->dateTime('approval_date')->nullable();
            $table->dateTime('expiration_date')->nullable();
             $table->longText('note')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('created_by');
            $table->foreign('updated_by')->nullable()->references('id')->on('users');
            $table->unsignedBigInteger('updated_by');
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
        Schema::dropIfExists('drugs');
    }
};
