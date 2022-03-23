<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $document
 * @property $name
 * @property $pet
 * @property $hour
 * @property $start
 * @property $end
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'document' => 'required',
		'name' => 'required',
		'pet' => 'required',
		'hour' => 'required',
		'start' => 'required',
		'end' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['document','name','pet','hour','start','end'];



}
