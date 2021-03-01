<x-app-layout>
    <div class="md:pb-10 sm:pb-5">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Tabel Paper</strong>
                </h3>
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
                            <th data-priority="1">Name</th>
                            <th data-priority="2">Paper</th>
                            <th data-priority="3">Nilai</th>
                            <th data-priority="4">Tanggal Submit</th>
                            <th data-priority="5">Institusi</th>
                            <th data-priority="6">Email</th>
                            <th data-priority="7">No.Telepon</th>
                            <th data-priority="7">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $participant)
                                <tr>
                                    <td>{{ $participant->name }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $participant->participation->paper_path) }}" target="_blank">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                                                Unduh
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="hidden" >
                                            {{ $participant->participation->paper_grade }}
                                        </div>
                                        <input type="text"
                                               name="paper_grade"
                                               id="grade_{{ $participant->id }}"
                                               class="grade text-center w-24 bg-transparent text-blue-700 font-semibold py-2 px-4 border border-transparent hover:border-blue-500 rounded"
                                               value="{{ $participant->participation->paper_grade }}"
                                        >
                                    </td>
                                    <td>{{ $participant->participation->updated_at->format('d-M-Y H:i') }}</td>
                                    <td>{{ $participant->institution }}</td>
                                    <td>{{ $participant->email }}</td>
                                    <td>{{ $participant->phone_number }}</td>
                                    <td>
                                        <form class="inline-block"
                                              action="{{ route('paper.destroy', $participant->id) }}"
                                              method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button {{ ($participant->participation->paper_grade == 0) ?: 'disabled' }}
                                                    class="{{ ($participant->participation->paper_grade == 0)
                                                    ? 'hover:bg-red-500 hover:text-white hover:border-transparent'
                                                    : 'disabled:opacity-50 cursor-not-allowed' }}
                                                bg-transparent text-red-700 font-semibold py-2 px-4 border border-red-500 rounded">
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
