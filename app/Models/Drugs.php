<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Drugs extends Model
{
    use HasFactory;

     protected $fillable = ['name','manufacturer', 'ingredients', 'expiration_date', 'dose_form', 'approval_status', ''];

     public static function boot()
     {
        parent::boot();
        static::creating(function($model)
        {
            $user = Auth::user();           
            $model->created_by = $user->id;
            $model->updated_by = $user->id;
        });
        static::updating(function($model)
        {
            $user = Auth::user();
            $model->updated_by = $user->id;
        });       
    }
}
