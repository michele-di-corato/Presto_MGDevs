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
            $table->string('category_fr')->after('category_es');
        });
        $categories_fr = [
            'Vêtements et accessoires',
            'Mobilier et objets pour la maison',
            'Électronique',
            'Sport et loisirs',
            'Livres et bandes dessinées',
            'Outils et équipement',
            'Jeux et jouets',
            'Vintage et objets de collection',
            'Beauté et soins personnels',
            'Articles pour animaux de compagnie',
        ];

        $categories = Category::all();

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]->update([
                'category_fr' => $categories_fr[$i],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('category_fr');
        });
    }
};
