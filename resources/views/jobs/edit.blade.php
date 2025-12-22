<x-layout>
    <x-slot:heading>
       Edit Job : {{$job->title  }}
    </x-slot:heading>
<form method ="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <div class="sm:col-span-4">
  <label for="title" class="block text-sm/6 font-medium text-black">Job Title</label>
  <div class="mt-2">
    <input 
      id="title" 
      type="text" 
      name="title" 
      placeholder="Place The Job Title here" 
      class="block w-full rounded-md border border-gray-400 bg-white px-3 py-2 text-base text-black placeholder:text-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm/6" 
      value="{{ $job->title }}"
    />
  </div>
</div>
<div class="sm:col-span-4">
  <label for="salary" class="block text-sm/6 font-medium text-black">Salary</label>
  <div class="mt-2">
    <input 
      id="salary" 
      type="text" 
      name="salary" 
      placeholder="50000" 
      class="block w-full rounded-md border border-gray-400 bg-white px-3 py-2 text-base text-black placeholder:text-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm/6" 
      value="{{ $job->salary }}"
    />
  </div>
  <p class="mt-2 text-sm text-gray-600">Enter the yearly salary in PHP or USD.</p>
</div>


@if ($errors->any())
    <ul class="text-red-500 list-disc pl-5">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif



       

  <div class="mt-6 flex items-center justify-between gap-x-6">

  <div clase=" flex items-center">
    <button form="delete-form"class="text-red-500 text-sm font-bold"> Delete </button>
  </div>
  <div>
     <a href="/jobs/{{ $job->id}}" class="text-sm/6 font-semibold text-black">Cancel</a>
    <button type="submit" 
    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
    Update
</button>
  </div>
  </div>
</form>
<form  method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>
</x-layout>
