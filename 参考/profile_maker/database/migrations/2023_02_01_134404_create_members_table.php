<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('name_furigana')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->integer('age')->nullable(true);
            $table->string('route')->nullable(true);
            $table->string('near_station')->nullable(true);
            $table->date('license_year_1')->nullable(true);
            $table->string('license_name_1')->nullable(true);
            $table->text('knowledge')->nullable(true);
            $table->text('pr')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
