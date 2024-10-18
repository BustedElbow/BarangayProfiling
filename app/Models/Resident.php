<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    
    public $incrementing = false;
    
    protected $table = 'residents';
    
    protected $primaryKey = 'resident_id';


    protected $casts = [
      'birthdate' => 'date',
    ];

    protected $fillable = [
      'identification_number',
      'image',
      'first_name',
      'middle_name',
      'last_name',
      'gender',
      'birthdate',
      'age',
      'civil_status',
      'occupation',
      'education_level',
      'contact_number',
      'address',
      'purok',
    ];

    public function user() {
      return $this->hasOne(User::class, 'resident_id', 'resident_id');
    }

}
