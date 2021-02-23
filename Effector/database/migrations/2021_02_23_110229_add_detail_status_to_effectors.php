<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailStatusToEffectors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('effectors', function (Blueprint $table) {
            $table->tinyInteger('detail_status')->default(0)->comment('0=詳細情報を持ってない, 1=詳細情報あり');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('effectors', function (Blueprint $table) {
            //
        });
    }
}
