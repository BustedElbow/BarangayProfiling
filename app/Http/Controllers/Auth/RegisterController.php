<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Resident;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request) {
      $validateData = $request->validate([
        'first_name' => 'required|string',
        'middle_name' => 'nullable|string',
        'last_name' => 'required|string',
        'sex' => 'required|string',
        'birthdate' => 'required|date',
        'age' => 'required|integer',
        'occupation' => 'required|string',
        'education_level' => 'required|string',
        'civil_status' => 'required|string',
        'address' => 'required|string',
        'purok' => 'required|string',
        'contact_number' => 'required|integer',
      ]);
      
      $validateData['identification_number'] = $this->generateIdentificationNumber();

      $resident = Resident::create($validateData);

      $resident->refresh();

      Log::info('Created Resident:', [
        'resident' => $resident,
        'resident_id' => $resident->resident_id,
      ]);

      $this->createUserForResident($resident);

      return redirect()->back()->with('success', 'Resident registered and user created successfully.');

    }
    
    protected function generateIdentificationNumber() {
      return rand(100000, 999999);
    }

    protected function createUserForResident($resident) {
    User::create([
        'resident_id' => $resident->resident_id, // Associate the user with the resident
        'email' => $resident->first_name . '.' . $resident->last_name . '@example.com', // Or use a custom logic to generate an email
        'password' => Hash::make('default_password'), // Set a fixed password temporarily
    ]);
  }
}
