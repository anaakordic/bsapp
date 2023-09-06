<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a class="underline  text-gray-700 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.reservations.create') }}">
                    {{ __('New reservation') }}
                </a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full text-left text-sm font-light">
                        <thead
                          class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                          <tr>
                            <th></th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Date</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr >
                                    <td >
                                        <div class="flex space-x-2">
                                            
                                            <form class="px-4 py-2 hover:bg-red-700 rounded-lg text-white"
                                                method="POST"
                                                action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    &#10060; 
                                                </button>
                                            </form>
                                        </div>
                                        
                                    </td>
                                    <td
                                        >
                                        {{ $reservation->first_name }} {{ $reservation->last_name }}
                                    </td>
                                    <td
                                        >
                                        {{ $reservation->email }}
                                    </td>
                                    <td
                                        >
                                        {{ $reservation->res_date }}
                                    </td>
                                    {{-- <td
                                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $reservation->nesto->name }}
                                    </td> --}}
                                    
                                </tr>
                            @endforeach

                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</x-admin-layout>
