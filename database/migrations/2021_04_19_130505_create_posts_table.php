<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('')->comment('标题');
            $table->mediumText('content')->nullable();
            $table->integer('user_id')->nullable()->unsigned()->default(0)->comment('作者ID');
            $table->integer('cate_id')->nullable()->unsigned()->default(0)->comment('分类ID');
            $table->string('img')->nullable()->default('')->comment('文章主图');
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
        Schema::dropIfExists('posts');
    }
}
