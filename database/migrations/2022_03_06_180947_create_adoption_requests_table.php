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
        Schema::create('adoption_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('host_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('member_id');
            $table->boolean('has_own_animal_before');
            $table->string('where_will_you_keep');
            $table->boolean('will_keep_inside');
            $table->string('will_live_with_other_animal');
            $table->tinyInteger('how_many_hours_will_be_alone_in_one_day');
            $table->string('who_will_take_care_while_vacation');
            $table->string('status');
            $table->dateTime('approved_at')->nullable();
            $table->dateTime('rejected_at')->nullable();
            $table->unsignedBigInteger('approved_by');
            $table->unsignedBigInteger('rejected_by');
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
        Schema::dropIfExists('adoption_requests');
    }
};
