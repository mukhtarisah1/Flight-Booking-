<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDestination extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function CustomerBioData(){
        return $this->belongsTo(CustomerBioData::class, 'user_id');
    }
}
