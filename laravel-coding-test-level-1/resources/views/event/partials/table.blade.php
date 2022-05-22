<div class="container mx-auto pt-4">
    <div class="flex flex-col">
        <div class="w-full">
            @include('event.partials.session-message')

            <div class="p-12 border rounded-md border-gray-200 shadow">

                <table class="divide-y divide-gray-300 py-8 table-auto min-w-full" id="dataTable">
                    <thead class="bg-indigo-400">
                        <tr>
                            <th class="px-6 py-2 text-xs text-white">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-white">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-white">
                                Slug
                            </th>
                            <th class="px-6 py-2 text-xs text-white">
                                Start At
                            </th>
                            <th class="px-6 py-2 text-xs text-white">
                                End At
                            </th>
                            <th class="px-6 py-2 text-xs text-white">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @php $no = 1; @endphp
                        @foreach( $events as $event)
                        <tr class="text-left whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $no++ }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $event->name }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $event->slug }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $event->startAt }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $event->endAt }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form method="POST" action="{{ route('events.destroy', $event) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('events.show', $event) }}" class="inline-block text-center pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('events.edit', $event) }}" class="inline-block text-center pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" class="inline-block text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
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

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();

    });
</script>