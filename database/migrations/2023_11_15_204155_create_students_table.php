<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('institution_id');
            $table->string('inst_reg', 50);
            $table->date('registration_date');
            $table->integer('curriculum_id');
            $table->timestamps();

            $table->foreignId('institution_id')->constrained('educational_institutions');
            $table->foreignId('curriculum_id')->constrained('curricula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
