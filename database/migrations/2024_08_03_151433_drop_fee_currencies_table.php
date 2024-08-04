<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFeeCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('fee_currencies');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('fee_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency', 10)->unique();
            $table->decimal('fee', 10, 10)->default(0);
            $table->timestamps();
        });
    }
}
