<x-layout>
<x-slot:heading>
        About
</x-slot:heading>
<div class="space-y-4">
@foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
        <script>{{ $job['title'] }}:</script>pays {{ $job['salary']}} per year .
</div>
</a>
@endforeach
<div>
</div>
{{ $jobs->links() }}
</div>
</x-layout>