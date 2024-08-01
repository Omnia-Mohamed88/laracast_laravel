<x-layout>
<x-slot:heading>
        Job
</x-slot:heading>
<h2>{{ $job['title' ] }}</h2>
<p> This Job pays {{ $job['salary'] }} per year .</p>
<a href="/jobs/{{ $job->id }}/edit">Edit Job</a>
</x-layout>