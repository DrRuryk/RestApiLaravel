<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
			$table->string('imie');
            $table->string('nazwisko');
            $table->string('numer_telefonu', 20);
            $table->string('ulica');
            $table->string('miasto');
            $table->string('kraj');
            $table->decimal('wzrost',5,2);
            $table->decimal('waga',5,2);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
