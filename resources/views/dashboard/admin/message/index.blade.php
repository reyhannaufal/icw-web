<x-app-layout>

    {{--    section headings--}}
    <div>
        <div class="px-4 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Pesan Masuk
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Table dibawah ini merupakan data-data yang masuk pada bagian contact us.
                </p>
            </div>
        </div>
    </div>

    {{--    table--}}
    <div class="bg-gray-100 py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                            class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
                    >
                        <div
                                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                        >
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Nama
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Institusi
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Email
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        No Telepon
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Pesan
                                    </th>


                                </tr>
                                </thead>
                                <tbody x-max="2">
                                @foreach($messages as $message)
                                <tr class="bg-white" x-description="Odd row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        {{$message->first_name}} {{$message->last_name}}
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        {{$message->institution}}
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        {{$message->email}}
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                       {{$message->phone_number}}
                                    </td>
                                    <td
                                            class="px-6 py-4 text-sm text-gray-500"
                                    >
                                        {{$message->message}}
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
</x-app-layout>
