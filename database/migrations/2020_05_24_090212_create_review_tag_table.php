<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("review_id")->references("id")->on("review");
            $table->unsignedBigInteger("tag_id")->references("id")->on("tag");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_tag');
    }
}
