<x-app-layout>
    <div class="pb-10">
        {{-- Section Heading --}}
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Pesan Masuk</strong>
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Tabel dibawah ini merupakan data-data yang masuk pada bagian contact us.
                </p>
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
                            <th data-priority="2">Pesan</th>
                            <th data-priority="3">Tanggal Kirim</th>
                            <th data-priority="4">Status</th>
                            <th data-priority="5">Show</th>
                            <th data-priority="6">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->first_name }}  {{ $message->last_name }}</td>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->created_at }}</td>
                                <td>{{ $message->status }}</td>
                                <td>
                                    <form class="inline-block"
                                          action="{{ route('message.show', $message->id) }}"
                                          method="GET">
                                        @csrf
                                        <button
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                                            Show
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form class="inline-block"
                                          action="{{ route('message.destroy', $message->id) }}"
                                          method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                            Delete
                                        </button>
                                    </form>
                                </td>
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
