<x-app-layout>
    <div>
        <div class="px-4 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Membuat
                    pengumuman
                </h3>
                <div class="mt-3 sm:mt-0 sm:ml-4">
                    <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <a href="{{route('announcement.create')}}">
                            Buat
                            pengumuman
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
                                        Judul
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Isi
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Created At
                                    </th>
                                    <th
                                            scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Uopdate At
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody x-max="2">
                                @foreach($announcements as $announcement)
                                    <tr class="bg-white" x-description="Odd row">
                                        <td
                                                class="px-6 py-4  text-sm font-medium text-gray-900"
                                        >
                                            {{$announcement->title}}
                                        </td>
                                        <td
                                                class="px-6 py-4  text-sm text-gray-500"
                                        >
                                            {{$announcement->body}}
                                        </td>
                                        <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                        >
                                            {{$announcement->created_at}}
                                        </td>
                                        <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                        >
                                            {{$announcement->updated_at}}
                                        </td>
                                        <td
                                                class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                        >
                                            <form class="inline-block"
                                                  action="{{ route('announcement.destroy', $announcement->id) }}"
                                                  method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 bg-white mb-2 mr-2"
                                                       value="Delete">
                                            </form>
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