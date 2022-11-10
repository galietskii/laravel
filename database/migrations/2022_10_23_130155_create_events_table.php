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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->index()->nullable()->comment('slug');
            $table->string('title')->index()->nullable()->comment('title');
            $table->string('date')->index()->nullable()->default('2 January,2016')->comment('дата');
            $table->string('img')->nullable()->default('images/10.jpg')->comment('фото');
            $table->string('link')->nullable()->comment('ссылка');
            $table->text('text')->nullable()->comment('текст');
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
        Schema::dropIfExists('events');
    }
};
