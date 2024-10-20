<x-admin_navbar>

  <form class="bg-[#f5f5f5] border p-3" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="flex gap-3">
      <div class="flex flex-col">
        <label for="firstName">First Name</label>
        <input class="border" type="text" name="first_name">
      </div>
      <div class="flex flex-col">
        <label for="middleName">Middle Name</label>
        <input class="border" type="text" name="middle_name">
      </div>
      <div class="flex flex-col">
        <label for="lastName">Last Name</label>
        <input class="border" type="text" name="last_name">
      </div>
    </div>
    
    <div class="flex gap-3">
      <div class="flex flex-col">
        <label for="">Sex</label>
        <input class="border" type="text" name="sex">
      </div>
      <div class="flex flex-col">
        <label for="">Birthdate</label>
        <input class="border" type="date" name="birthdate">
      </div>
      <div class="flex flex-col">
        <label for="">Age</label>
        <input class="border" type="number" name="age">
      </div>
    </div>

    <div class="flex gap-3">
      <div class="flex flex-col">
        <label for="">Occupation</label>
        <input class="border" type="text" name="occupation">
      </div>
      <div class="flex flex-col">
        <label for="">Education Level</label>
        <input class="border" type="text" name="education_level">
      </div>
      <div class="flex flex-col">
        <label for="">Civil Status</label>
        <input class="border" type="text" name="civil_status">
      </div>
    </div>

    <div class="flex gap-3">
      <div class="flex flex-col">
        <label for="">Address</label>
        <input class="border" type="text" name="address">
      </div>
      <div class="flex flex-col">
        <label for="">Purok</label>
        <input class="border" type="text" name="purok">
      </div>
      <div class="flex flex-col">
        <label for="">Contact Number</label>
        <input class="border" type="number" name="contact_number">
      </div>
    </div>
    
    <button class="bg-barangay-main" type="submit" name="register">Register</button>
  </form>

  @if ($errors->any())
    <div class="text-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
</x-admin_navbar>