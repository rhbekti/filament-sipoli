<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="flex justify-center min-h-screen p-16">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold mb-4">Antrian Poli</h1>
            <p class="text-lg mb-8">Silahkan pilih poli yang ingin anda kunjungi</p>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($tickets as $ticket)
                    <form action="{{ route('tickets.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="poli_id" value="{{ $ticket['id'] }}">
                        <div class="block rounded-md border border-gray-300 p-4 shadow-sm sm:p-6">
                            <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">
                                <div class="mt-4 text-center sm:mt-0">
                                    <h3 class="text-lg font-medium text-pretty text-gray-700">
                                        {{ $ticket['name'] }}
                                    </h3>

                                    <p class="my-4 text-2xl font-bold line-clamp-2 text-pretty text-gray-900">
                                        {{ $ticket['ticket'] }}
                                    </p>

                                    <p class="mt-1 mb-4 text-sm text-gray-700">Antrial belum terpanggil :
                                        {{ $ticket['waiting'] }}</p>

                                    <button
                                        class="inline-block rounded-sm border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:ring-3 focus:outline-hidden"
                                        type="submit">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
