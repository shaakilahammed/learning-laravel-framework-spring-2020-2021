<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media_channels', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('address');
            $table->string('phone');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('unit_prics');
            $table->string('quantity');
            $table->string('total_price');
            $table->string('payment_type');
            $table->string('status');
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
        Schema::dropIfExists('social_media_channel');
    }
}
