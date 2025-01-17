<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCartTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('image_1')->nullable()->default('default-image.jpg'); // Default image value
            $table->decimal('price', 8, 2)->nullable()->default(0); // Default price value
            $table->decimal('total_price', 8, 2)->nullable()->default(0); // Default total_price value
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn(['image_1', 'price', 'total_price']);
        });
    }
}
