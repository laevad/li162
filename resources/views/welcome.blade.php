<x-app-layout>
    <div class="opacity-75" style="background-image: url('images/bg.png'); padding: 1%">
        <div class="flex items-center justify-center h-screen">
            <img src="{{ url('images/logo.png') }}" class="" alt="">
        </div>

    </div>
    <div class="flex items-center justify-center h-screen p-6 mt-1 shadow-lg">
        <span class="text-gray-600" style="font-weight: bolder; font-size: 25px; font-family: Tahoma,serif">The Employees' Pre-Owned Items System</span>
    </div>

    <div class="max-w-10x1 mx-auto sm:px-6 lg:px-8">

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Owner
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Price
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Description
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $product->user->name }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $product->name }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $product->price }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $product->description }}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $products->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
