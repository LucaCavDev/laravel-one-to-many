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
        Schema::table('tasks', function (Blueprint $table) {

            $table -> foreign('employee_id', 'task-employee')
                    -> references('id')
                    -> on('employees');

        });

        Schema::table('employee_location', function (Blueprint $table) {

            $table -> foreign('employee_id', 'el-employee')
                    -> references('id')
                    -> on('employees');
            $table -> foreign('location_id', 'el-location')
                    -> references('id')
                    -> on('locations');

        });

        Schema::table('task_typology', function (Blueprint $table) {

            $table -> foreign('task_id', 'tt-task')
                    -> references('id')
                    -> on('tasks');
            $table -> foreign('typology_id', 'tt-typology')
                    -> references('id')
                    -> on('typologies');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_typology', function (Blueprint $table) {
            $table->dropForeign('tt-typology');
            $table->dropForeign('tt-task');
        });

        Schema::table('employee_location', function (Blueprint $table) {
            $table->dropForeign('el-location');
            $table->dropForeign('el-employee');
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign('task-employee');
        });


    }
}
