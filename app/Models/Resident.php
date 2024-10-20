<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
      
    protected $table = 'residents';

    protected $primaryKey = 'resident_id';

    public $incrementing = true;

    protected $casts = [
      'birthdate' => 'date',
    ];

    protected $fillable = [
      'identification_number',
      'image',
      'first_name',
      'middle_name',
      'last_name',
      'sex',
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
