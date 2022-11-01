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
        Schema::create('new_orders', function (Blueprint $table) {
      
            //table->datatype('column_name',length);
            // truncated
            $table->id();
            $table->string('name',100);
            $table->string('number',20);
            $table->text('address')->nullable();
            $table->timestamps(); //created_at, updated_at
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_orders');
    }
};
