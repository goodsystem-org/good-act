<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActsAndReviews extends Migration
{
    public function up()
    {
        Schema::create('acts', function (Blueprint $table) {
            $table->id();
            $table->string('summary')->index();
            $table->text('proof');
            $table->unsignedBigInteger('act_by_id')->index();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('summary')->index();
            $table->unsignedBigInteger('reviewable_id')->index();
            $table->string('reviewable_type')->index();
            $table->unsignedBigInteger('reviewed_by_id')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acts');
        Schema::dropIfExists('reviews');
    }
}
