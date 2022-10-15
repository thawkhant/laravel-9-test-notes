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
        Schema::create('data_tables', function (Blueprint $table) {
             $table->id('customer_id');
            $table->boolean('confirmed');   // 1 0
            $table->string('customer_name');  // default 255
             $table->string('name',50);   // set as we like
             $table->char('charName',20)->nullable();  //string nat tu dal  // error ma tint daw buu
             $table->date('birthday')->nullable();     // just include d/m/y
             $table->dateTime('order_date');     // like timestamps;
             $table->timestamp('release_date');
             $table->float('amount')->default(10000);
             $table->integer('votes');
             $table->text('description');   // string net text ka tuu dal sir
             $table->string('myText');    // 255
             $table->mediumText('myTextMedium');
             $table->longText('myTextLong');
          
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tables');
    }
};
