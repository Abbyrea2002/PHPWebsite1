<x-layout>
<x-slot name="heading">
    Job Listings
</x-slot>
 <div class="space-y-4"> 
  @foreach ($jobs as $job)
   
       <a href="/jobs/{{ $job['id']}}" class="block px-a py-6 border-gray-200 rounded-lg">
        <div class="font-bold text-blue-500 text-sm"> {{$job->employer->name}}</div>
         <div>
            <strong>{{ $job['title']}}</strong>: Pays {{ $job['salary']}} per year.
         </div>
       </a>   
    
    @endforeach
    <div> 
        {{$jobs->links()}}
    </div>
</div>
</x-layout>