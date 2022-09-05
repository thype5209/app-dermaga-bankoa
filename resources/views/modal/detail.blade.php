<section class="text-gray-600 body-font overflow-hidden ">
    <div class="container px-5 py-24 mx-auto bg-white" x-data="{ Tabs: 0, }">
        <div class="lg:w-4/5 mx-auto flex flex-wrap ">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 lg:px-3 mb-6 lg:mb-0 md:shadow-md">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Detail Kapal</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$pemilik_kapal}}</h1>
                <div class="flex mb-4">
                    <a :class="Tabs == 0 ?
                        'flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1 cursor-pointer' :
                        'flex-grow border-b-2 border-gray-300 py-2 text-lg px-1 cursor-pointer'"
                        x-on:click="Tabs = 0">Detail Pemberangkatan</a>
                    <a :class="Tabs == 1 ?
                        'flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1 cursor-pointer' :
                        'flex-grow border-b-2 border-gray-300 py-2 text-lg px-1 cursor-pointer'"
                        x-on:click="Tabs = 1">Ulasan</a>
                </div>
                <p  class="leading-relaxed mb-4">{{$deskripsi}}</p>
                <div  class="flex border-t border-gray-200 py-2">
                    <span class="text-gray-500">Batas Muatan : </span>
                    <span class="ml-auto text-gray-900">{{$batas_muatan}}</span>
                </div>
                <div  class="flex border-t border-gray-200 py-2">
                    <span class="text-gray-500">Ukuran :</span>
                    <span class="ml-auto text-gray-900">Medium</span>
                </div>
                <div  class="flex border-t border-b mb-6 border-gray-200 py-2">
                    <span class="text-gray-500">Tiket Tersisa :</span>
                    <span class="ml-auto text-gray-900">4</span>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">Harga</span>
                    <button
                        class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pesan
                        Tiket</button>
                    <button
                        class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                src="https://dummyimage.com/400x400">
        </div>
        <section class="text-gray-600 body-font overflow-hidden" x-show="Tabs == 1">
            <div class="container px-5 py-24 mx-auto">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                            <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion
                                axe chia unicorn</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist
                                pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke
                                vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                            <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Meditation bushwick direct trade
                                taxidermy shaman</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist
                                pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke
                                vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                            <span class="text-sm text-gray-500">12 Jun 2019</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Woke master cleanse drinking
                                vinegar salvia</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist
                                pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke
                                vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</section>
