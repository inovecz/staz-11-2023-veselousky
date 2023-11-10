<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('messague_subject');
            $table->text('messague_specs');
            $table->string('messague_attachment')->nullable();
            $table->timestamps();
        });
    }
};
