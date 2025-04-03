<x-layout>
<x-slot name="heading">
    Job 
</x-slot>
<h2 class="font-bold text-lg">Edit Job: {{ $job->title}}</h2>
<p> 
    This job pays {{ $job->salary}} per yearnn.
</p>
@can('edit', $job)
  <p class="mt-6">
      <x-button href="/jobs/{{ $job->id }}/edit">Edit job </x-button>
  </p>
@endcan
</x-layout>