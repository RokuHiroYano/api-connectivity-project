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
            $table->string('id', 30)->primary();
            $table->string('name', 30)->nullable(true);
            $table->string('name_furigana', 30)->nullable(true);
            $table->string('gender', 10)->nullable(true);
            $table->integer('age',)->nullable(true);
            $table->string('route')->nullable(true);
            $table->string('near_station')->nullable(true);
            $table->string('license_year_1')->nullable(true);
            $table->string('license_name_1')->nullable(true);
            $table->text('knowledge')->nullable(true);
            $table->text('pr')->nullable(true);
            $table->string('start_date_1')->nullable(true);
            $table->string('end_date_1')->nullable(true);
            $table->string('occupation_1')->nullable(true);
            $table->string('job_duties_1')->nullable(true);
            $table->string('tools_1')->nullable(true);
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
