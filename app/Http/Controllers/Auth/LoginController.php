<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Resident;

class LoginController extends Controller
{
    public function login(Request $request) {

      $request->validate([
        'userLogin' => 'required',
        'userPassword' => 'required'
      ]);

      $loginField = filter_var($request->input('userLogin'), FILTER_VALIDATE_EMAIL) ? 'email' : 'identification_number';

      if ($loginField == 'identication_number') {
        $resident = Resident::where('identification_number', $request->input('userLogin'))->first();
        
        if ($resident) {
          $user = User::where('resident_id', $resident->resident_id)->first();
        }
      } else {
        $user = User::where('email', $request->input('userLogin'))->first();
      }
      
      if ($user && Auth::attempt(['email' => $user->email, 'password' => $request->input('userPassword')], $request->remember)) {
        // Redirect to the dashboard upon successful login
        return redirect()->intended('dashboard');
      } else {
        // Return back with error if login fails
        return back()->withErrors(['loginError' => 'Invalid credentials'])->withInput();
  
      }

    }
}
