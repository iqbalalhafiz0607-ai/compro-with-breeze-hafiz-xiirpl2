<x-guest-layout>
    {{--menampilkan data--}}
    {{--section anggap saja panel--}}
    <section class="w-full flex flex-col justify-start items-center border-4 border-emerald-500 p-8">
        <h1 class="text-3xl fontextrabold text-gray-600 text center">
            profile
        </h1>
        <p class="text-xl text-center">
            {{$dataCompany->profile}}
        </p>
    </section>

    {{--edit & menu--}}
    <section class="w-full flex flex-col justify-start items-center border-4 border-emerald-500 p-8">
        <form action="/update/{1}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="profile" cols="60" rows="10" class="w-3/4">
                {{$dataCompany->profile}}
            </textarea>

            <button type="submit" class="p-4 bg-blue-500 rounded-lg">
                Simpan
            </button>
        </form>
    </section>

</x-guest-layout>