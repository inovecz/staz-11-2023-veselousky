<x-app-layout>
    <x-slot name="header">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight row justify-content-center">
                            Administratíva
                        </h1>
                        <div class="btn-group row justify-content-center">
                            <button><a href="{{ route('clients.index') }}" class="btn btn-secondary" role="button" aria-pressed="true">Clients</a></button>
                            
                            <button><a href="{{ route('tenants.index') }}" class="btn btn-secondary mx-2" role="button" aria-pressed="true">Tenats</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div>
            
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
