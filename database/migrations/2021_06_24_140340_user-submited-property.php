<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSubmitedProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit-property', function (Blueprint $table) {
            $table->id();
            $table->string('pics1')->default('default.jpg');
            $table->string('pics2')->default('default.jpg');
            $table->string('pics3')->default('default.jpg');
            $table->string('pname');
            $table->string('pprice');
            $table->string('pbuilt');
            $table->string('phone2');
            $table->string('email');
            $table->string('pdesc')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('storeroom')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('parking')->nullable();
            $table->string('ac')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('garden')->nullable();
            $table->string('spool')->nullable();
            $table->string('garages')->nullable();
            $table->string('pstatus')->nullable();
            $table->string('termes')->nullable();
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
        //
    }
}
