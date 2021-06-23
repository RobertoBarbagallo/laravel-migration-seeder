<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('titolo', 100)->nullable($value = false);
            $table->smallInteger('prezzo')->nullable($value = false);
            $table->char('destinazione', 100)->nullable($value = false);
            $table->tinyInteger('min_ospiti');
            $table->tinyInteger('max_ospiti');
            $table->char('mezzo_di_trasporto', 50);
            // $table->tinyInteger('mese_selezionato', 12)->;
            $table->text('descrizione');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
