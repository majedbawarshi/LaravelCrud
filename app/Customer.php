<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // fillable e.g.
    // protected $fillable = ['name', 'email', 'active'];

    // guarded e.g.
    protected $guarded = [];

    //model's default
    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attr)
    {
        return $this->activeOptions()[$attr];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInActive($query)
    {
        return $query->where('active', 0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-progress',
        ];
    }
}
