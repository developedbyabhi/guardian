<?php
// src/Database/Migrations/CreateExceptionRecordsTable.php

namespace Guardian\ExceptionTracker\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('exception_records', function (Blueprint $table) {
            $table->id();
            $table->string('exception_message');
            $table->text('stack_trace');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exception_records');
    }
}
