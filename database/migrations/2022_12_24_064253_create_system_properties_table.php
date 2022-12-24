<?php

use App\Models\SystemProperties;
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
        Schema::create('system_properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('value')->nullable();
            $table->timestamps();
        });

        SystemProperties::create([
            'name' => 'current',
            'value' => 2.2
        ]);


        SystemProperties::create([
            'name' => 'savings',
            'value' => 2.3
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_properties');
    }
};
