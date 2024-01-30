<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('travel_agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel_agents');
    }
}
