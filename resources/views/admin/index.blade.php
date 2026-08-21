<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Daftar Tamu Undangan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-4xl mx-auto px-5 py-10">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-800">
            Daftar Tamu Undangan
        </h1>

        <p class="text-gray-500 mt-1">
            Tambahkan nama tamu untuk membuat link undangan khusus.
        </p>

    </div>


    <!-- PESAN BERHASIL -->

    @if(session('success'))

        <div class="mb-6 bg-green-100
                    border border-green-300
                    text-green-700
                    px-4 py-3 rounded-xl">

            {{ session('success') }}

        </div>

    @endif


    <!-- FORM TAMBAH TAMU -->

    <div class="bg-white rounded-2xl shadow p-6 mb-8">

        <h2 class="text-lg font-bold text-gray-800 mb-4">
            Tambah Tamu
        </h2>


        <form action="{{ route('admin.store') }}"
              method="POST">

            @csrf

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nama Tamu
            </label>


            <input
                type="text"
                name="name"
                placeholder="Contoh: Adee"
                value="{{ old('name') }}"
                class="w-full border border-gray-300
                       rounded-xl px-4 py-3
                       focus:outline-none
                       focus:ring-2
                       focus:ring-pink-400"
                required
            >


            @error('name')

                <p class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </p>

            @enderror


            <button
                type="submit"
                class="mt-4 bg-pink-600
                       hover:bg-pink-700
                       text-white font-semibold
                       px-6 py-3 rounded-xl
                       transition">

                + Tambah Tamu

            </button>

        </form>

    </div>


    <!-- DAFTAR TAMU -->

    <div class="bg-white rounded-2xl shadow overflow-hidden">

        <div class="px-6 py-5 border-b">

            <h2 class="text-lg font-bold text-gray-800">
                Daftar Tamu
            </h2>

        </div>


        @forelse($guests as $guest)

            <div class="px-6 py-5 border-b
                        last:border-b-0
                        flex flex-col gap-4">

                <div>

                    <h3 class="font-bold text-gray-800">
                        {{ $guest->name }}
                    </h3>

                </div>


                <div class="flex gap-2 flex-wrap">

                    <!-- LINK -->

                    <input
                        type="text"
                        readonly
                        value="{{ url('/?to=' . urlencode($guest->name)) }}"
                        class="flex-1 min-w-[250px]
                               bg-gray-100
                               border border-gray-200
                               rounded-lg px-3 py-2
                               text-sm"
                    >


                    <!-- SALIN LINK -->

                    <button
                        type="button"
                        onclick="copyLink(
                            '{{ url('/?to=' . urlencode($guest->name)) }}'
                        )"
                        class="bg-gray-800
                               hover:bg-gray-900
                               text-white
                               px-4 py-2
                               rounded-lg text-sm">

                        Salin Link

                    </button>


                    <!-- HAPUS -->

                    <form
                        action="{{ route('admin.destroy', $guest) }}"
                        method="POST"
                        onsubmit="return confirm('Hapus tamu ini?')">

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="bg-red-100
                                   hover:bg-red-200
                                   text-red-600
                                   px-4 py-2
                                   rounded-lg text-sm">

                            Hapus

                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="px-6 py-12 text-center">

                <p class="text-gray-400">
                    Belum ada tamu.
                </p>

            </div>

        @endforelse

    </div>

</div>


<script>

function copyLink(link)
{
    navigator.clipboard.writeText(link)

        .then(() => {

            alert('Link undangan berhasil disalin!');

        })

        .catch(() => {

            alert('Gagal menyalin link.');

        });
}

</script>

</body>
</html>