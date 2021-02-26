<x-app-layout>
    {{-- status --}}
    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-12 lg:px-0 px-4 sm:px-6">
            <div>
                <h3 class="pb-2 border-b border-gray-200 text-lg leading-6 font-medium text-gray-900">
                   <strong>Statistik</strong>
                </h3>
                <div class="mt-5 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @include('dashboard.admin._stats-card', [
                        'title' => 'Event',
                        'count' => $event_name,
                        'icon' => 'fas fa-users',
                        'border_color' => 'border-blue-600',
                        'text_color' => 'text-blue-600'
                    ])
                    @include('dashboard.admin._stats-card', [
                        'title' => 'Jumlah Peserta Tertolak',
                        'count' => $failed_count,
                        'icon' => 'fa fa-exclamation-triangle',
                        'border_color' => 'border-red-500',
                        'text_color' => 'text-red-500'
                    ])
                    @include('dashboard.admin._stats-card', [
                        'title' => 'Jumlah Peserta Terkonfirmasi',
                        'count' => $success_count,
                        'icon' => 'fas fa-dollar-sign',
                        'border_color' => 'border-green-500',
                        'text_color' => 'text-green-500'
                    ])
                    @include('dashboard.admin._stats-card', [
                        'title' => 'Jumlah Peserta Pending',
                        'count' => $pending_count,
                        'icon' => 'fas fa-envelope-open-text',
                        'border_color' => 'border-yellow-500',
                        'text_color' => 'text-yellow-500'
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="md:pb-10 sm:pb-5">
        {{-- Section Heading --}}
        <div class="px-2 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Daftar Peserta</strong>
                </h3>
                <div class="mt-3 sm:mt-0 sm:ml-4">
                    <a href="{{ route('export', Str::slug($event_name, '-')) }}">
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cetak Peserta
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
                            <th data-priority="2">Email</th>
                            <th data-priority="3">Institusi</th>
                            <th data-priority="4">No. Telepon</th>
                            <th data-priority="5">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->institution }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ ucfirst($user->participation->payment_status) }}</td>
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
