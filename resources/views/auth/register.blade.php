<x-layout>
    <x-slot:heading>
       Register
    </x-slot:heading>
<form method ="POST" action="/register">
    @csrf

  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black">Register</h2>
      <p class="mt-1 text-sm/6 text-gray-700">We just need a handful of details from you  .</p>

      <div class="sm:col-span-4">
 <x-form-label for="first_name">First name</x-form-label>

<div class="mt-2">
    <x-form-input 
        id="first_name"
        name="first_name"
        type="text"
    
        required
        value="{{ old('first_name') }}"
    />

    <x-form-error name="first_name" />
</div>



</div>
      <div class="sm:col-span-4">
 <x-form-label for="last_name">Last Name</x-form-label>
    <x-form-input 
        id="last_name"
        name="last_name"
        type="text"
        value="{{ old('last_name') }}"
        required
        
    />
    <x-form-error name="last_name" />
</div>

      <div class="sm:col-span-4">
 <x-form-label for="email">Email</x-form-label>
    <x-form-input 
        id="email"
        name="email"
        type="text"
        value="{{ old('email') }}"
        required
        
    />
    <x-form-error name="email" />
</div>

      <div class="sm:col-span-4">
 <x-form-label for="password">Password</x-form-label>
    <x-form-input 
        id="password"
        name="password"
        type="text"
        value="{{ old('password') }}"
        required
        
    />
    <x-form-error name="password" />
</div>
      <div class="sm:col-span-4">
 <x-form-label for="password_confirmation">Confirm Password</x-form-label>
    <x-form-input 
        id="password_confirmation"
        name="password_confirmation"
        type="password"
        value="{{ old('password_confirmation') }}"
        required
        
    />
    <x-form-error name="password_confirmation" />
</div>
       

  <div class="mt-6 flex items-center justify-end gap-x-6">
<a href="/" class="text-sm/6 font-semibold text-black">Cancel</a>
    <x-form-button>Register</x-form-button>
</form>
</x-layout>
