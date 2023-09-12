<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
            
        });

        Book::create(['author' => 'Szervkereskedelem', 'title' => 'MC Isti írta így ingyen oda adjuk', 'pieces'=> 0]);
        Book::create(['author' => 'Ronaldo is Better', 'title' => 'Messi is **** RONALDO IS BETTER: IshowwSpeed', 'pieces'=> 10000]);
        Book::create(['author' => 'Hogyan legyél jó NPC ?', 'title' => 'Éetmutatás a könnyű pénz szerzéséhez', 'pieces'=> 2399]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
