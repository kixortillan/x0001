<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('accounts', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->string('email_add');
            $table->primary('email_add');
            $table->string('name', 60);
            $table->string('password', 32);
            $table->string('mobile_num', 15)->nullable();
            $table->string('address1', 15);
            $table->string('address2', 15)->nullable();
            $table->string('postal_code', 6);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('accounts');
    }

}
