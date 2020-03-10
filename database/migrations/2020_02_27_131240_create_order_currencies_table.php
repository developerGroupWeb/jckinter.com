<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('track_order');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('amount_send');
            $table->bigInteger('amount_receive');
            $table->string('exchange');
            $table->string('devise_send');
            $table->string('devise_receive');
            $table->string('country');
            $table->integer('fees');
            $table->integer('total');

            $table->text('payment_intent_id')->nullable();
            $table->datetime('payment_created_at')->nullable();
            $table->boolean('status')->default(false);

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->integer('year')->nullable();
            $table->string('question')->nullable();
            $table->string('answer')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('processing')->default(false);
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
        Schema::dropIfExists('order_currencies');
    }
}
