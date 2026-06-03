<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard - Daftar User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-700">
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">No. HP</th>
                            <th class="py-2 px-4">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b border-gray-700">
                            <td class="py-2 px-4">{{ $user->name }}</td>
                            <td class="py-2 px-4">{{ $user->email }}</td>
                            <td class="py-2 px-4">{{ $user->no_hp ?? '-' }}</td>
                            <td class="py-2 px-4">
                                <span class="px-2 py-1 text-xs rounded {{ $user->role === 'admin' ? 'bg-red-500 text-white' : 'bg-green-500 text-white' }}">
                                    {{ $user->role }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>