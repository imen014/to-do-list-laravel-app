<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("tasks", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nom_tache");
            $table->string("creator");
            $table->string("creator_email")->required();
            $table->string("phone_creator")->nullable();
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
