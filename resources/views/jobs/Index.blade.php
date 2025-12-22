<x-layout title="Job Listings" heading="Job Listings">
    <div class="grid gap-6">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}" 
               class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg hover:border-indigo-500 border border-gray-200 transition">

                <div class="text-sm text-gray-500">
                    {{ $job->employer->name ?? 'No employer' }}
                </div>

                <div class="mt-2 text-xl font-semibold text-gray-900">
                    {{ $job->title }}
                </div>

                <div class="mt-1 text-indigo-600 font-medium">
                    ₱{{ is_numeric($job->salary) ? number_format((float)$job->salary) : 'N/A' }} per year
                </div>
            </a>
        @endforeach

        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>