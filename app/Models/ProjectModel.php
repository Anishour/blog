<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    protected $table = 'projects_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keytype = 'int';
    public $timestapms = false;
}
