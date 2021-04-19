<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->default(0)->unsigned()->comment('用户ID');
            $table->mediumText('content')->nullable()->comment('评论内容');
            $table->integer('pid')->nullable()->default(0)->unsigned()->comment('父级评论ID 0=评论,>0=回复');
            $table->integer('post_id')->nullable()->default(0)->unsigned()->comment('文章ID');
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
        Schema::dropIfExists('comments');
    }
}
