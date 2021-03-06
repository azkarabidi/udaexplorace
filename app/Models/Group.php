<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    public function user(){
        return $this->HasMany(User::class);
    }
    public function getCategoryAttribute($value)
    {
        if($value == 'U'){
            return 'UDA';
        }else if($value == 'P'){
            return 'Public';
        }else if($value =='M'){
            return 'Media';
        }
        else if($value =='T'){
            return 'Test';
        }
    else{
        return  NULL;
    }
    }
    //      public function getOutcomeAttribute($value)
    // {   
    //         return json_decode($value);
    // }

}
