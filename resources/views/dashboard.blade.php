<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <div class="container mt-4">
       <div class="row">
           <div class="col-md-5">
               <section class="sticky-top" style="top: 80px;">
                    @livewire('blog.crear')
               </section> 
           </div>
           <div class="col-md-7">
                @livewire('blog.index')   
           </div>
       </div>
   </div>
</x-app-layout>
