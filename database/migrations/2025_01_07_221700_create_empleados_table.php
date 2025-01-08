<?php

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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->string("title");
            $table->string("born_date");
            $table->string("sex");
            $table->string("marital_status");
            $table->string("phone");
            $table->string("address");
            $table->string("departament");
            $table->string("school");
            $table->string("institute");
            $table->string("in_date");
            $table->string("out_date");
            $table->string("active");
            $table->string("type_contract");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
