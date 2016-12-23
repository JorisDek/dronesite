<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('frame_id')->unique();
            $table->integer('motor_id');
            $table->integer('fc_id');
            $table->integer('esc_id');
            $table->integer('vtx_id');
            $table->integer('cam_id');
            $table->integer('pdb_id');
            $table->integer('prop_id');
            $table->integer('osd_id');
            $table->integer('rx_id');
            $table->integer('user_id');
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
        Schema::drop('build');
    }
}
