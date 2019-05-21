<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //


//$table->integer('holding_id')->unsigned()->change();
          $table->integer('cat_id')->unsigned()->change();
          $table->foreign('cat_id')->references('id')->on('categorys');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //

          //  $table->dropForeign('posts_cat_id_foreign');
        });
    }
}
