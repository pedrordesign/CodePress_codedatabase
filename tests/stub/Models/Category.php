<?php

namespace CodePress\CodeDatabase\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package CodePress\CodeCategory\Models
 */
class Category extends Model
{

    /**
     * @var string
     */
    protected $table = 'codepress_categories';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

}