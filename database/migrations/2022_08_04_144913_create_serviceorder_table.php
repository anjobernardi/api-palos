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
        Schema::create('serviceorder', function (Blueprint $table) {
            $table->id();
            $table->foreign('asset_id')->references('id')->on('assets');
            $table->integer('user_id')->references('id')->on('users');
            $table->string('description');
            $table->string('priority');
            $table->string('status');
            $table->timestamp('finished_at')->nullable();
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
        Schema::dropIfExists('serviceorder');
    }
};
