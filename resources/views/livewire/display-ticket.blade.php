<div>
    <div class="flex justify-center min-h-screen p-16">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold mb-4">ANTRIAN POLI</h1>
            <p class="text-lg mb-8">SELAMAT DATANG DI POLI</p>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3" wire:poll>
                @foreach ($tickets as $ticket)
                    <div class="block rounded-md bg-amber-300 border border-gray-300 p-4 shadow-sm sm:p-6">
                        <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">
                            <div class="mt-4 text-center sm:mt-0">
                                <h3 class="text-4xl font-medium text-pretty text-gray-700">
                                    {{ $ticket['name'] }}
                                </h3>

                                <p class="my-6 text-6xl font-bold line-clamp-2 text-pretty text-gray-900">
                                    {{ $ticket['ticket'] }}
                                </p>

                                <p class="mt-3 mb-4 text-gray-700 text-xl">Antrian belum terpanggil <br>
                                    <span class="text-3xl font-semibold">{{ $ticket['waiting'] }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
