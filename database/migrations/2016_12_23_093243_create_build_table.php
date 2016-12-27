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

            $table->foreign('frame_id')
                ->references('id')
                ->on('frames')
                ->onDelete('cascade');

            $table->foreign('motor_id')
                ->references('id')
                ->on('motors')
                ->onDelete('cascade');

            $table->foreign('fc_id')
                ->references('id')
                ->on('fcs')
                ->onDelete('cascade');

            $table->foreign('esc_id')
                ->references('id')
                ->on('escs')
                ->onDelete('cascade');

            $table->foreign('vtx_id')
                ->references('id')
                ->on('vtxs')
                ->onDelete('cascade');

            $table->foreign('cam_id')
                ->references('id')
                ->on('cams')
                ->onDelete('cascade');

            $table->foreign('pdb_id')
                ->references('id')
                ->on('pdbs')
                ->onDelete('cascade');

            $table->foreign('prop_id')
                ->references('id')
                ->on('props')
                ->onDelete('cascade');

            $table->foreign('osd_id')
                ->references('id')
                ->on('osds')
                ->onDelete('cascade');

            $table->foreign('rx_id')
                ->references('id')
                ->on('rxs')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
