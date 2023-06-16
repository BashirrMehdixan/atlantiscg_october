<?php namespace Gadimli\Blog\Components;

use Cms\Classes\ComponentBase;

/**
 * PostComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class PostComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'postComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $posts = \gadimli\blog\Models\Post::all();
        $this ->page['posts'] = $posts;
//        dd($posts);
    }
}
