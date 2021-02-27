<x-app-layout>

    {{--status--}}
    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                   Statistik
                </h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Peserta Event A
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                10
                            </dd>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Peserta Event B
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                10
                            </dd>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Keseluruhan Peserta
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                20
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    {{-- table--}}
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
                                        Name
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Title
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
                                        Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
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
                                        Regional Paradigm Technician
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        jane.cooper@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Admin
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
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
                                        Product Directives Officer
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        cody.fisher@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Owner
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
                                    </td>
                                </tr>

                                <tr class="bg-white" x-description="Odd row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Esther Howard
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Forward Response Developer
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        esther.howard@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Member
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
                                    </td>
                                </tr>

                                <tr class="bg-gray-50" x-description="Even row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Jenny Wilson
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Central Security Manager
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        jenny.wilson@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Member
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
                                    </td>
                                </tr>

                                <tr class="bg-white" x-description="Odd row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Kristin Watson
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Lead Implementation Liaison
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        kristin.watson@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Admin
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
                                    </td>
                                </tr>

                                <tr class="bg-gray-50" x-description="Even row">
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        Cameron Williamson
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Internal Applications Engineer
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        cameron.williamson@example.com
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        Member
                                    </td>
                                    <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <a
                                                href="#"
                                                class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a
                                        >
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
