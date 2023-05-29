<?php namespace Gadimli\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteGadimliPostCreate extends Migration
{
    public function up()
    {
        Schema::dropIfExists('gadimli_post_create');
    }
    
    public function down()
    {
        Schema::create('gadimli_post_create', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('header', 255);
            $table->text('description')->nullable();
        });
    }
}
