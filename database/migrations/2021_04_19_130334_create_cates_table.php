<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('分类名称')->nullable()->default('');
            $table->integer('pid')->comment('父级分类')->nullable()->default(0);
            $table->string('path')->comment('路径')->nullable()->default('');
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
        Schema::dropIfExists('cates');
    }
}
