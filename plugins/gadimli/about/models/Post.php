<?php namespace Gadimli\About\Models;

use Model;

/**
 * Post Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'gadimli_about_posts';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
