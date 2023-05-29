<?php namespace Gadimli\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGadimliPostCreate extends Migration
{
    public function up()
    {
        Schema::table('gadimli_post_create', function($table)
        {
            $table->text('description')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('gadimli_post_create', function($table)
        {
            $table->string('description', 255)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
