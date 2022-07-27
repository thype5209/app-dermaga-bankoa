<x-app-layout>
    <div class="h-40 lg:h-20 w-full flex flex-wrap">
        <nav id="header"
            class="bg-gray-200 w-full lg:max-w-sm flex items-center border-b-1 border-gray-300 order-2 lg:order-1">

            <div class="px-2 w-full">
                <select name=""
                    class="bg-gray-300 border-2 border-gray-200 rounded-full w-full py-3 px-4 text-gray-500 font-bold leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                    id="form-field2">
                    <option value="Default">default</option>
                    <option value="A">report a</option>
                    <option value="B">report b</option>
                    <option value="C">report c</option>
                </select>
            </div>

        </nav>
        <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">

            <div class="flex h-full justify-between items-center">

                <!--Search-->
                <div class="relative w-full max-w-3xl px-6">
                    <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                        <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>

                    <input id="search-toggle" type="search" placeholder="search"
                        class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3"
                        onkeyup="updateSearchResults(this.value);">

                </div>
                <!-- / Search-->

                <!--Menu-->

                <div class="flex relative inline-block pr-6">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink"
                                enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                    </path>
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My
                                        account</a></li>
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- / Menu -->

            </div>

        </nav>
    </div>

    <!--Dash Content -->
    <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">

        <div class="w-1/2 lg:w-full">
            <div
                class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i
                                class="fa fa-wallet fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i
                                    class="fas fa-caret-up"></i></span></h3>
                        <h5 class="font-bold text-gray-500">Total Revenue</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div
                class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i
                                class="fas fa-users fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">249 <span class="text-orange-500"><i
                                    class="fas fa-exchange-alt"></i></span></h3>
                        <h5 class="font-bold text-gray-500">Total Users</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div
                class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i
                                class="fas fa-user-plus fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i
                                    class="fas fa-caret-up"></i></span></h3>
                        <h5 class="font-bold text-gray-500">New Users</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div
                class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i
                                class="fas fa-server fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">152 days</h3>
                        <h5 class="font-bold text-gray-500">Server Uptime</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Graph Content -->
    <div id="main-content" class="w-full flex-1">

        <div class="flex flex-1 flex-wrap">

            <div class="w-full xl:w-2/3 p-6 xl:max-w-6xl">

                <!--"Container" for the graphs"-->
                <div class="max-w-full lg:max-w-3xl xl:max-w-5xl">

                    <!--Graph Card-->
                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart1"></div>
                    </div>
                    <!--/Graph Card-->

                    <!--Table Card-->
                    <div class="p-3">
                        <div class="border-b p-3">
                            <h5 class="font-bold text-black">Table</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-blue-900">Name</th>
                                        <th class="text-left text-blue-900">Side</th>
                                        <th class="text-left text-blue-900">Role</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Obi Wan Kenobi</td>
                                        <td>Light</td>
                                        <td>Jedi</td>
                                    </tr>
                                    <tr>
                                        <td>Greedo</td>
                                        <td>South</td>
                                        <td>Scumbag</td>
                                    </tr>
                                    <tr>
                                        <td>Darth Vader</td>
                                        <td>Dark</td>
                                        <td>Sith</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#">See More issues...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->

                </div>

            </div>

            <div class="w-full xl:w-1/3 p-6 xl:max-w-4xl border-l-1 border-gray-300">

                <!--"Container" for the graphs"-->
                <div class="max-w-sm lg:max-w-3xl xl:max-w-5xl">

                    <!--Graph Card-->

                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart2"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Graph Card-->
                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart3"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Graph Card-->

                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart4"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Template Card-->
                    <div class="p-3">
                        <div class="border-b p-3">
                            <h5 class="font-bold text-black">Template</h5>
                        </div>
                        <div class="p-5">

                        </div>
                    </div>
                    <!--/Template Card-->

                </div>

            </div>

        </div>

    </div>
</x-app-layout>
