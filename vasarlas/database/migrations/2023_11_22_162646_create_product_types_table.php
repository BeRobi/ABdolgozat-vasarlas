<?php

use App\Models\Product_type;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->integer('cost')->default(100);
            $table->timestamps();
        });

        Product_type::create([
            'name' => 'telefon',
            'description' => 'vezetek nelkuli',
        ]);

        Product_type::create([
            'name' => 'monitor',
            'description' => 'full hd',
        ]);

        Product_type::create([
            'name' => 'laptop',
            'description' => 'keskeny',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
