<x-layout>
    <x-slot:heading>
       Log-In
    </x-slot:heading>
<form method ="POST" action="/login">
    @csrf

  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black">Log-in</h2>
      <p class="mt-1 text-sm/6 text-gray-700">We just need a handful of details from you  .</p>


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
 <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>

  <div class="mt-6 flex items-center justify-end gap-x-6">
<a href="/" class="text-sm/6 font-semibold text-black">Cancel</a>
    <x-form-button>Log-in</x-form-button>
</form>
</x-layout>