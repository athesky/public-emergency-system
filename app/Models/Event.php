<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];

    public static function countToday(){
        return Event::whereDate("created_at","=",Carbon::today())->get()->count();
    }
}
