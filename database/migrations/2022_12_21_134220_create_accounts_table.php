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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_number')->unique();
            $table->integer('user_id');
            $table->string('balance')->default(0);
            $table->string('account_type')->nullable();
            $table->timestamps();
        });

        $user = \App\Models\User::whereName('shreya')->first();
        \App\Models\Account::create([
            'account_number' => '000000000000',
            'user_id' => -1,
            'account_type' => 'world',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
