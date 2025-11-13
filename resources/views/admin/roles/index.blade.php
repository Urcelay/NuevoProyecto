<x-admin-layout :breadcrumbs="[
    [
    'name' => 'Dashboard',
    'href' => route('admin.dashboard'),
    ],

    ['name' => 'users'],
]">
    <div class="flex justify-end mb-4">
        <x-wire-button href="{{ route('admin.users.index') }}" blue>
            <i class="fa-solid fa-plus mr-2"></i> Nuevo
        </x-wire-button>
    </div>
    
    @livewire('admin.datatables.role-table')
</x-admin-layout>


