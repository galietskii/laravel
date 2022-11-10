<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function admin()
    {
        return $this->belongsTo(User::class,'admin_id','id')->withDefault(['name'=>'<span class="text-danger">нет данных</span>']);
    }

    public static function active_count()
    {
        $active_count = self::where('id','!=',1)->count();
        return $active_count;
    }

    public function my_date()
    {
        $my_date = $this->date;
        return $my_date;
    }
}
