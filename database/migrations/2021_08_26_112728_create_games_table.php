<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type')->unique();
            $table->integer('number_of_teams');
            $table->integer('min_users_per_team');
            $table->integer('max_users_per_team');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
}
