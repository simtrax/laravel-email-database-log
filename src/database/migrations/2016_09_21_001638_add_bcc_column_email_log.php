<?php

use Illuminate\Database\Migrations\Migration;

class AddBccColumnEmailLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('email_log', function ($table) {
            $table->text('to')->nullable()->change();
            $table->text('bcc')->after('to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email_log', function ($table) {
            $table->text('to')->change();
            $table->dropColumn('bcc');
        });
    }
}
