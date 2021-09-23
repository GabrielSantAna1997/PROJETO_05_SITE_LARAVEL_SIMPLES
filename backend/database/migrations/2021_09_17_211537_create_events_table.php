<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
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
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->string('city');
            $table->boolean('private');
            $table->string('image');
            $table->string('items');
            $table->dateTime('date');
            //CRIA UMA CHAVE ESTRANGEIRA NO BANCO
            $table->integer('people');
            $table->foreignId('user_id')->constrained();
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
        $table->dropColumn('image');
        $table->dropColumn('items');
        $table->dateTime('date');
        $table->dropColumn('people');
        $table->foreignId('user_id')
        ->constrained()
        ->onDelete('cascade');


    }
}
