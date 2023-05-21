<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table="job";
    
    protected $fillable =[
        'title',
        'description',
        'salary',
        'location',
        'organization_id'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

}
