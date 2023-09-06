<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.thepostoakhotel.com/img/wellness/salon-hero-7.jpg">
        <link rel="stylesheet" href="styles.css">
        <title>Font Awesome Icons</title>
    </head>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.services.create') }}"
                    class="px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white">New Service</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="relative py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Image</th>
                            <th scope="col" class="px-6 py-4">Price</th>
                            

                          </tr>
                        </thead>
                        <tbody >
                            @foreach ($services as $service)
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                        class="whitespace-nowrap px-6 py-4">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="px-4 py-2  hover:bg-green-700 rounded-lg text-white">&#9998;</a>
                                            <form
                                                class="px-4 py-2 hover:bg-red-700 rounded-lg text-white"
                                                method="POST"
                                                action="{{ route('admin.services.destroy', $service->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">&#10060;</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td
                                    class="whitespace-nowrap px-6 py-4 font-medium">
                                        {{ $service->name }}
                                    </td>
                                    <td
                                    class="whitespace-nowrap px-6 py-4">
                                        <img src="{{ Storage::url($service->image) }}" class="w-16 h-16 rounded">
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4">
                                        {{ $service->price }}
                                    </td>
                                    
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
