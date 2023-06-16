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
            $table->string('category_es')->after('category_en');
        });
        $categories_es = [
            'Ropa y accesorios',
            'Muebles y artículos para el hogar',
            'Electrónica',
            'Deportes y ocio',
            'Libros y cómics',
            'Herramientas y equipamiento',
            'Juegos y juguetes',
            'Antigüedades y coleccionables',
            'Belleza y cuidado personal',
            'Suministros para mascotas'
        ];

        $categories = Category::all();

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]->update([
                'category_es' => $categories_es[$i],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('category_es');
        });
    }
};
