<?php namespace Gadimli\Posts;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Posts',
            'description' => 'No description provided yet...',
            'author' => 'gadimli',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {

        return [
<<<<<<< HEAD:plugins/gadimli/blog/Plugin.php
            'Gadimli\Blog\Components\postComponent' => 'postComponent',
=======
            'Gadimli\Posts\Components\MyComponent' => 'myComponent',
>>>>>>> parent of f27e659 (created blog plugin):plugins/gadimli/posts/Plugin.php
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gadimli.posts.some_permission' => [
                'tab' => 'posts',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'posts' => [
                'label' => 'Posts',
                'url' => Backend::url('gadimli/posts/posts'),
                'icon' => 'icon-leaf',
                'permissions' => ['gadimli.posts.*'],
                'order' => 500,
            ],
        ];
    }
}
