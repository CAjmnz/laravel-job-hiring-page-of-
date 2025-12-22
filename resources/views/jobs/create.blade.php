<x-layout>
    <x-slot:heading>
       Create Job
    </x-slot:heading>
<form method ="POST" action="/jobs">
    @csrf

  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black">Create Job</h2>
      <p class="mt-1 text-sm/6 text-gray-700">We just need a handful of details from you  .</p>

      <div class="sm:col-span-4">
 <x-form-label for="title">Title</x-form-label>

<div class="mt-2">
    <x-form-input 
        id="title"
        name="title"
        type="text"
        placeholder="Place your Job title here"
        required
        value="{{ old('title') }}"
    />

    <x-form-error name="title" />
</div>



</div>
      <div class="sm:col-span-4">
 <x-form-label for="salary">Salary</x-form-label>
    <x-form-input 
        id="salary"
        name="salary"
        type="text"
        placeholder="Place your salary"
        value="{{ old('salary') }}"
        required
        
    />
<p class="mt-2 text-sm text-gray-600">Enter the yearly salary in PHP or USD.</p>
    <x-form-error name="salary" />
</div>

       

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-black">Cancel</button>
    <x-form-button>save</x-form-button>
</form>
</x-layout>
