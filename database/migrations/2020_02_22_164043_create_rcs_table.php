<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->softDeletes();

            $table->bigInteger('date',10)->default(0)->comment("时间");
            $table->string('address',30)->default('')->comment("地点");
            $table->string('who',50)->default('')->comment("人物");
            $table->string('thing',50)->default('')->comment("干什么");
            $table->string('project',20)->default('')->comment("项目");
            $table->string('remark',60)->default('')->comment("备注");
            $table->string('pic',100)->default('')->comment("图片");
            $table->bigInteger('uptime',10)->default(0)->comment("修改时间");
            $table->tinyInteger('is_enabled',1)->default(1)->comment("是否正确(0:否,1:是)");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rcs');
    }
}
