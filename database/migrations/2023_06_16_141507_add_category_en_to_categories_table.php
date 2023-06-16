<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_en')->after('name');
        });
        $categories_en = [
            'Clothing and Accessories',
            'Furniture and Home Decor',
            'Electronics',
            'Sports and Leisure',
            'Books and Comics',
            'Tools and Equipment',
            'Games and Toys',
            'Vintage and Collectibles',
            'Beauty and Personal Care',
            'Pet Supplies'
        ];

        $categories = Category::all();

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]->update([
                'category_en' => $categories_en[$i],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('category_en');
        });
    }
};
