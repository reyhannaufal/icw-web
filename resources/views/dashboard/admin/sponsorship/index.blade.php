<x-app-layout>
    <div class="md:pb-10 sm:pb-5">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Tabel Sponsor</strong>
                </h3>
                <div class="mt-3 sm:mt-0 sm:ml-4">
                    <a href="{{ route('sponsor.export') }}">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cetak Sponsor
                        </button>
                    </a>
                </div>
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
                            <th data-priority="1">Nama</th>
                            <th data-priority="2">Insittusi</th>
                            <th data-priority="3">Email</th>
                            <th data-priority="4">No.Telpon</th>
                            <th data-priority="5">Opsi</th>
                            @if (auth()->user()->isMaster())
                                <th data-priority="6">Hapus</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sponsors as $sponsor)
                            <tr>
                                <td>{{ $sponsor->first_name}} {{$sponsor->last_name}}</td>
                                <td>{{ $sponsor->institution }}</td>
                                <td>{{ $sponsor->email }}</td>
                                <td>{{ $sponsor->phone_number}}</td>
                                <td>{{ $sponsor->option }}</td>
                                @if (auth()->user()->isMaster())
                                    <td>
                                        <form class="inline-block"
                                              action="{{ route('sponsor.destroy', $sponsor->id) }}"
                                              method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="hover:bg-red-500 hover:text-white hover:border-transparent
                                                bg-transparent text-red-700 font-semibold py-2 px-4 border
                                                border-red-500 rounded">
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
