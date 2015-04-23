<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class View
 * @package App
 */
class Content extends Model
{
    protected $table = 'content';

    protected $fillable = [
        'alias',
        'content',
        'created_at',
        'updated_at'
    ];
}