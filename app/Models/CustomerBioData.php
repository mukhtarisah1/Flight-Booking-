<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBioData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function CustomerDestination(){
        return $this->hasMany(CustomerDestination::class, 'id');
    }

}
