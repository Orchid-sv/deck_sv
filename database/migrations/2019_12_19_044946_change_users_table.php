<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('icon_image')->nullable()->change();
            $table->text('header_image')->nullable()->change();
            $table->text('introduction')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('icon_image')->nullable(false)->change();
            $table->text('header_image')->nullable(false)->change();
            $table->text('introduction')->nullable(false)->change();
        });
    }
}
