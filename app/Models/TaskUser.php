<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    use HasFactory;
    protected $table = 'task_user';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function task(){
        return $this->belongsTo('App\Models\Task');
    }
}
