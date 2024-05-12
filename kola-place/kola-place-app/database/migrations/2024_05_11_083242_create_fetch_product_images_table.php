<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fetch_product_images', function (Blueprint $table) {
            $table->id();
            
            $table->string('product_id');
        
            $table->string('image_path_0');
            $table->string('image_alt_txt_0');
            $table->string('image_description_0');

            $table->string('image_path_1');
            $table->string('image_alt_txt_1');
            $table->string('image_description_1');

            /*this would be used to decide if there are more than 2 images 
            available, there would be another table dedicated to storing more 
            multimedia content */
            $table->string('product_multimedia_total');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fetch_product_images');
    }
};
