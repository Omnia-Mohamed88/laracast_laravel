<x-layout>
<x-slot:heading>
        About
</x-slot:heading>
<ul>
@foreach ($jobs as $job)
<li> 
        <a href="/jobs/{{ $job['id'] }}">
        {{ $job['title'] }}: pays {{ $job['salary']}} per year 
</a>
</li>
@endforeach
</ul>
</x-layout>