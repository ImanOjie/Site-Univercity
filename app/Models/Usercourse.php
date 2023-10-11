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


    public function xxx()
    {
        return $this->belongsTo(xxx::class, 'course_id');
    }


}
