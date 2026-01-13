<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('comments', function (Blueprint $table) {
//             $table->id();
//             $table->string('name', 100);
//             $table->string('email');
//             $table->text('comment');
//             $table->timestamps();
//         });
//     }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('comments');
    // }
// };


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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email');
            $table->text('comment');
            $table->timestamps();
            // $table->unsignedBigInteger('product_id')->nullable();

            // This links the comment to a product. 
            // constrained() ensures the product exists.
            // cascadeOnDelete() removes comments if the product is deleted.
            //users required to be logged in to comment(should add $table->foreignId('user_id')->constrained();)
            
            $table->foreignId('product_id')
                  ->nullable()
                  ->constrained('products') 
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};