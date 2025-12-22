@props(['title' => null, 'heading' => null])

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">

  <!-- Navbar -->
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">

        <!-- Left side links -->
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
                 alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
          </div>
        </div>

        <!-- Right side -->
        <div class="hidden md:flex items-center space-x-4">

          <!-- Register & Login Buttons -->
           @guest
          <x-nav-link href="/register" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">
            Register
          </x-nav-link>
          <x-nav-link href="/login" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">
            Login
          </x-nav-link>
          @endguest
          
          <!-- Notification bell -->
          <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500 ml-6">
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.8 23.8 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9a6 6 0 1 0-12 0v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.25 24.25 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative ml-4 group">
            <button class="flex items-center rounded-full focus:outline-none ml-4">
              <img class="size-8 rounded-full" 
                   src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                   alt="User avatar">
            </button>

            <div class="absolute right-0 z-10 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 group-hover:block">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>

              @auth
              <form method="POST" action="/logout">
                @csrf
                
                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  Logout
                </button>
              </form>
              @endauth
            </div>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">
        {{ $heading ?? $title ?? 'Page' }}
      </h1>
      <x-button href="/jobs/create">Create Jobs</x-button>
    </div>
  </header>

  <!-- Page Content -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>
</body>
</html>
