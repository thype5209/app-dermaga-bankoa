<x-guest-layout>
    <div style="background-image:linear-gradient(#c7d7fb00, #c7d7fba4) ,url({{ asset('img/dermaga.jpg') }});background-size:cover; background-position-y:0px;"
        class=" mx-auto mb-24 max-w-screen-xl text-center lg:my-20 xl:items-center    sm:mb-10 ">
        <div class="  text-gray-700 p-20">
            <h2
                class="m-0 w-full text-2xl leading-8 text-gray-900 font-bold sm:text-3xl sm:leading-9 md:text-4xl md:leading-10 lg:font-bold lg:text-4xl xl:text-5xl drop-shadow-md shadow-white whitespace-pre-line md:whitespace-nowrap wow fadeIn ">
                DERMAGA KAYU BANGKOA</h2>
        </div>
    </div>
    <div class="container mx-auto w-full flex justify-center h-64 py-6 bg-white shadow-black shadow-sm">
        {{-- Pemesanan Tiket --}}
        <div class="w-full-h-full bg-white">
            <form action="#" class=" relative grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 py-5 px-20 mx-auto">
                <div class="col-span-2">
                    <h3 class=" row-start-1 col-span-2 text-base text-gray-500">Tujuan</h3>
                    <div class=" row-start-2 col-span-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class=" relative grid grid-cols-4 text-center border border-gray-300 rounded-lg">
                            <label for="tujuan" id="icon"
                                class="col-span-1 font-mono text-sm px-3 py-1 text-center rounded-l-lg bg-white text-gray-600 h-full flex items-center">Dari</label>

                            <input
                                class="col-span-3 border-l border-t-0 border-b-0 border-r-0 border-black outline-none rounded-r-lg"
                                type="text" name="tujuan" id="tujuan" placeholder="Tujuan" disabled>
                            <div class="hidden md:block bg-blue-400 rounded-2xl p-1 absolute -right-5 top-2 z-30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                        </div>

                        <div class="relative grid grid-cols-4 text-center border border-gray-300 rounded-lg">
                            <label for="tujuan" id="icon"
                                class="col-span-1 font-mono text-sm px-3 py-1 text-center rounded-l-lg bg-white text-gray-600 h-full flex items-center">Ke</label>
                            <select name="tujuan" id="tujuan"
                                class="border-l border-t-0 border-b-0 border-r-0 col-span-3 rounded-r-lg text-gray-500">
                                <option value="--">Lokasi</option>
                                @foreach ($destinasi as $destinasis)
                                    <option value="{{ $destinasis->lokasi }}">{{ $destinasis->lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="tanggal_keberangkatan" class="text-gray-500 ">Tanggal Keberangkatan</label>
                    <input type="date" class="w-full border border-gray-300 rounded-lg text-gray-500"
                        min="27-07-2022" id="tgl_keberangkatan">
                </div>
                <div class=" col-span-1 flex flex-wrap ">
                    <label for="Penumpang" class="w-full">Jumlah</label>
                    <div class="flex border border-gray-300 rounded-lg px-2 w-full">
                        <div class="px-2 py-1"><img src="{{ asset('img/icon-male.png') }}" alt=""></div>
                        <select name="penumpang" id="penumpang" class="border-none w-full">
                        </select>
                    </div>
                </div>
                <button type="button" class="bg-blue-300 w-full h-full col-span-4 px-2 md:px-5 py-1 md:py-3 rounded">Pesan</button>
            </form>
        </div>
    </div>
    <div class="py-11 bg-white overflow-hidden shadow-md shadow-current">
        <div class="grid grid-cols-2 mt-5 gap-y-5 sm:gap-y-0 lg:mx-auto lg:max-w-4xl">
            <div class="col-span-2 sm:col-span-1 md:col-span-1 wow slideInLeft"><img alt="No alt"
                    src="{{ asset('img/logistik.jpg') }}" class="w-full bg-gray-50 " /></div>
            <div
                class="col-span-2 px-3 pb-3 dark:border-slate-700 border-gray-50 sm:col-span-1 sm:flex sm:flex-col sm:justify-center sm:pl-7 sm:border-t lg:border-r wow slideInRight">
                <h1
                    class="font-semibold text-red-700 tracking-tight text-2xl dark:text-gray-200 dark:divide-undefined sm:mb-2 md:my-1 lg:my-1">
                    Melayani Jasa Logistik</h1>
                <p
                    class="text-base font-normal tracking-tight leading-relaxed dark:divide-undefined dark:text-gray-300">
                    Melayani pengangkutan paket barang, dry/reefer container, general cargo, kendaraan maupun penyewaan
                    kapal angkutan komersial.</p>
            </div>
            <div
                class="col-span-2 px-3 pb-3 order-3 dark:border-slate-700 border-gray-50 sm:col-span-1 sm:flex sm:flex-col sm:justify-center sm:pl-7 sm:order-none sm:border-b lg:border-l wow slideInLeft">
                <h1
                    class="font-semibold text-red-700 tracking-tight text-2xl dark:text-gray-200 dark:divide-undefined sm:mb-2 md:my-1 lg:my-1">
                    Layanan Kapal</h1>
                <p
                    class="text-base font-normal tracking-tight leading-relaxed dark:divide-undefined dark:text-gray-300">
                    Nikmati pengalaman berwisata bahari dengan pantai-pantai dan alam bawah laut paling indah di
                    Indonesia.</p>
            </div>
            <div class="col-span-2 order-2 sm:col-span-1 sm:order-none md:col-span-1 wow slideInRight">
                <img alt="No alt" src="{{ asset('img/layanan.jpg') }}" class="w-full bg-gray-50 " />
            </div>
        </div>
    </div>
</x-guest-layout>
