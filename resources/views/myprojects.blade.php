<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

            {{-- </div>
        </div>
    </div> --}}

    <div class="">

        
        {{-- @if(Session::has('success'))
        <div class="text-green-500 flex justify-center items-center">{{ Session::get('success') }}</div>
        @endif
    
    <div>
        @livewire('form')
    </div>  
    
    <div>
        @livewire('all-projects')
    </div> --}}

    <div>
        @livewire('my-projects')
    </div>
    
    </div>
</x-app-layout>
