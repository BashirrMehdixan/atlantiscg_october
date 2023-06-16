<?php namespace Gadimli\Posts\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreatePostsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('gadimli_posts_posts', function(Blueprint $table) {
            $table->id();
<<<<<<< HEAD:plugins/gadimli/blog/updates/create_posts_table.php
            $table->string('header');
            $table->string('content');
=======
            $table->string("Header");
            $table->string("description");
>>>>>>> parent of f27e659 (created blog plugin):plugins/gadimli/posts/updates/create_posts_table.php
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('gadimli_posts_posts');
    }
};
