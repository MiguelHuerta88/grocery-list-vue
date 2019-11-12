<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groceries extends Model
{
    /**
     * Table to be used by this model
     * @var string
     */
    public $table = 'groceries';

    /**
     * Mass-Assignment array
     * @var array
     */
    protected $fillable = ['name', 'quantity', 'notes'];
}
