<?php namespace Gadimli\About\Components;

use Cms\Classes\ComponentBase;

/**
 * AboutComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AboutComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'aboutComponent Component',
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
        $posts = \gadimli\about\Models\Post::all();
//        dd($posts);
        $this->page['posts'] = $posts;
    }
}
