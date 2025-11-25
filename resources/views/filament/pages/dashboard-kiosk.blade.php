<div class="flex flex-col flex-grow p-4" wire:poll.500ms="callNextQueue">
    <div class="grid grid-cols-2 gap-6 justify-center">
        @foreach($counters as $counter)
        <div class="p-6 rounded-lg shadow-lg text-center 
            @if($counter->activeQueue && $counter->activeQueue->called_at && is_null($counter->activeQueue->served_at)) 
                bg-green-100 
            @elseif($counter->is_active && !$counter->is_available) 
                bg-gray 
            @endif">

            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-1">{{ $counter->name }}</h2>

                {{-- CEK APAKAH SERVICE MASIH ADA --}}
                <p class="text-red-600">
                    {{ $counter->service?->name ?? 'Layanan dihapus' }}
                </p>
            </div>

            <div class="space-y-2">
                @if($counter->activeQueue)
                <div class="text-4xl font-bold text-blue-600">
                    {{ $counter->activeQueue->number }}
                </div>

                <div class="text-lg font-semibold px-4 py-1 rounded-full inline-block bg-yellow-200 text-black-800">
                    {{ $counter->activeQueue->kiosk_label }}
                </div>
                @else
                <div class="text-4xl font-bold text-gray-500">
                    ---
                </div>
                <div class="text-lg text-gray-500">
                    Tidak ada antrian
                </div>
                @endif
            </div>

            <div class="mt-4">
                <p class="text-sm font-medium rounded-full px-3 py-1 inline-block">
                    @if(!$counter->is_active)
                    Loket tidak aktif
                    @elseif($counter->is_available)
                    Siap Melayani
                    @else
                    Sedang Melayani
                    @endif
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>