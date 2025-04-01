<x-layout>
    <x-slot:heading>
         Login
    </x-slot:heading>

    
    <p>
    <form method="POST" action="/login">
        @csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <x-form-field>  
        


        

        <x-form-label for="last_name">Email</x-form-label>

        <div class="mt-2">
            <x-form-input name="email" id="email" type="email" required/>

             <x-form-error name="email"> </x-form-error>
        
      </div>
   </x-form-field>
   <x-form-field>  
        

        <x-form-label for="password">Password</x-form-label>

        <div class="mt-2">
            <x-form-input name="password" id="password" type="password" required/>

             <x-form-error name="password"/> 
        
      </div>
   </x-form-field>


    

        <!-- <div class="mt-10">
             @if($errors->any())
             <ul> 
            @foreach($errors->all() as $error)
            <li class="text-red-500 italic"> {{ $error }} </li>
            @endforeach
             </ul>
           @endif
        </div> -->
        </div>
    </div>

   
 

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/"  class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>Login in</x-form-button>
  </div>
</form>
    </p>


</x-layout>