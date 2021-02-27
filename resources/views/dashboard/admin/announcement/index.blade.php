<x-app-layout>
    <div class="md:pb-10 sm:pb-5">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Tabel Pengumuman</strong>
                </h3>

                {{-- Onlu master admin can create announcements --}}
                @if (auth()->user()->isMaster())
                    <div class="mt-3 sm:mt-0 sm:ml-4">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <a href="{{route('announcement.create')}}">
                                Buat Pengumuman
                            </a>
                        </button>
                    </div>
                @endif
            </div>
        </div>

        <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
            <!--Container-->
            <div class="container max-w-7xl mx-auto px-2">
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="example" class="stripe hover"
                           style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                        <tr>
                            <th data-priority="1">Judul</th>
                            <th data-priority="2">Isi</th>
                            <th data-priority="3">Created At</th>
                            <th data-priority="4">Updated At</th>

                            {{-- Onlu master admin can read and delete announcements --}}
                            @if (auth()->user()->isMaster())
                                <th data-priority="5">Edit</th>
                                <th data-priority="6">Delete</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($announcements as $announcement)
                            <tr>
                                <td>{{ $announcement->title }}</td>
                                <td>{{ $announcement->body }}</td>
                                <td>{{ $announcement->created_at }}</td>
                                <td>{{ $announcement->updated_at }}</td>
                                @if (auth()->user()->isMaster())
                                    <td>
                                        <form class="inline-block"
                                              action="{{ route('announcement.edit', $announcement->id) }}"
                                              method="GET">
                                            @csrf
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                                                Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="inline-block"
                                              action="{{ route('announcement.destroy', $announcement->id) }}"
                                              method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
            <!--/container-->
        </div>
    </div>
</x-app-layout>
