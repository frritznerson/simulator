<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wheels extends Model
{
    private $id;
    protected $module_id;
    protected $tyre_type;
    protected $diameter;
    protected $suitable_chassis;

    protected $created_at;
    protected $updated_at;
}