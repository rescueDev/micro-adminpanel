<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('employees', function (Blueprint $table) {
            $table->foreign('company_id', 'employee-company')
                ->references('id')
                ->on('companies');  //nome tabella da agganciare
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('employees', function (Blueprint $table) {

            $table->dropForeign('employee-company');
        });

    }
}