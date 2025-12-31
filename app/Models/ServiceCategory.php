<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class ServiceCategory extends Model
{
    protected $fillable = ['name', 'image_path', 'description', 'status'];
    protected $casts = [
        'status' => 'boolean',

    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
