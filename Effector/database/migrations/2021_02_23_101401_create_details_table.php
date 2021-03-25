<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('effector_id')->unsigned();
            $table->foreign('effector_id')->references('id')->on('effectors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type', 20);
            $table->string('memo', 300)->nullable();
            $table->string('brand', 20)->nullable();
            $table->integer('price')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=下書き, 1=アクティブ, 2=削除済');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
