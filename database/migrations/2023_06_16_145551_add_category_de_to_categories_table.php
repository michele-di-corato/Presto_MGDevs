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
            $table->string('category_de')->after('category_fr');
        });
        $categories_de = [
            'Kleidung und Accessoires',
            'Möbel und Haushaltsgegenstände',
            'Elektronik',
            'Sport und Freizeit',
            'Bücher und Comics',
            'Werkzeuge und Ausrüstung',
            'Spiele und Spielzeug',
            'Vintage und Sammlerstücke',
            'Schönheit und Körperpflege',
            'Artikel für Haustiere',
        ];

        $categories = Category::all();

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]->update([
                'category_de' => $categories_de[$i],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('category_de');
        });
    }
};
