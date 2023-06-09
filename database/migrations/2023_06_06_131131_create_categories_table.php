<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories = ['Abbigliamento e accessori', 'Arredamento e oggetti da casa', 'Elettronica', 'Sport e tempo libero', 'Libri e fumetti', 'Strumenti e attrezzature', 'Giochi e giocattoli', 'Vintage e collezionismo', 'Bellezza e cura personale', 'Articoli per animali domestici'];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
