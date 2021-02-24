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
                                <tr class="bg-white" x-description="Odd row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Jane Cooper
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Universitas Indonesia
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        jane.cooper@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        081311312312
                                    </td>
                                    <td
                                            class="px-6 py-4 text-sm text-gray-500"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores
                                        cupiditate error impedit minus molestiae nisi provident quibusdam recusandae
                                        reiciendis. A ab asperiores aut autem beatae earum fuga impedit, labore nisi,
                                        nostrum officia officiis quia quis sequi sit sunt tempora ut vitae voluptate
                                        voluptatibus? Consequuntur nemo nisi tempore unde voluptates.
                                    </td>
                                </tr>

                                <tr class="bg-gray-50" x-description="Even row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Cody Fisher
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Institut Teknologi Sepuluh Nopember
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        cody.fisher@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        08125356123512
                                    </td>
                                    <td
                                            class="px-6 py-4  text-sm text-gray-500"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                                        voluptatum!
                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>