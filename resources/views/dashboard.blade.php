<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 text-left w-1/3">Name</th>
                                        <th class="px-4 py-2 text-left w-1/3">Email</th>
                                        <th class="px-4 py-2 text-right w-1/6"></th>
                                        <th class="px-4 py-2 text-right w-1/6"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="px-4 py-2 w-1/3">{{ $user->name }}</td>
                                        <td class="px-4 py-2 w-1/3">{{ $user->email }}</td>
                                        <td class="px-4 py-2 w-1/6 flex justify-end"><span style="color: black; background-color: yellow; padding: 8px; border-radius: 5px; font-weight: bold;"><a href="">Update</a></td>
                                        <td></span> <span style="color: white; background-color: red; padding: 8px; border-radius: 5px; font-weight: bold;"><a href="">Delete</a></span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="py-4">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
