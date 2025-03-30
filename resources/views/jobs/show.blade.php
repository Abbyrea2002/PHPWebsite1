<x-layout>
<x-slot name="heading">
    Job 
</x-slot>
<h2 class="font-bold text-lg">{{ $job->title}}</h2>
<p> 
    This job pays {{ $job->salary}} per yearnn.
</p>

<p class="mt-6">
    <x-button href="/jobs/{{ $job->id }}/edit">Edit job </x-button>
</p>
  
</x-layout>