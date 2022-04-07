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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('ps_id');
            $table->unsignedBigInteger('ps_user_id');
            $table->unsignedBigInteger('ps_ln_id');
            $table->string('ps_address');
            $table->string('ps_status');
            $table->timestamps();
            $table->timestamp('ps_confirm')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('ps_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ps_ln_id')->references('id')->on('layanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
