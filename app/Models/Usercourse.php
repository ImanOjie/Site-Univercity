<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usercourse extends Model
{
    use HasFactory;

    protected $table='usercourse';
    protected $guarded=[];


    public function Course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


}
