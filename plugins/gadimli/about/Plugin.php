<?php namespace Gadimli\About;

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
            'name' => 'About',
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
            'Gadimli\About\Components\AboutComponent' => 'aboutComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gadimli.about.some_permission' => [
                'tab' => 'About',
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
            'about' => [
                'label' => 'About',
                'url' => Backend::url('gadimli/about/posts'),
                'icon' => 'icon-leaf',
                'permissions' => ['gadimli.about.*'],
                'order' => 500,
            ],
        ];
    }
}
