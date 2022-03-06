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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('host_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('breed_id');
            $table->string('photo')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('name');
            $table->boolean('gender');
            $table->tinyText('bio')->nullable();
            $table->boolean('is_handicapped')->default(0);
            $table->boolean('is_in_shelter')->default(1);
            $table->boolean('is_waiting_for_adoption')->default(0);
            $table->boolean('is_accepting_donations')->default(1);
            $table->boolean('is_adopted')->default(0);
            $table->boolean('is_missing')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('animals');
    }
};
