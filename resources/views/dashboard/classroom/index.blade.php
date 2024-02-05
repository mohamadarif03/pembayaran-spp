@extends('layouts.app')
@section('subcontent')
    <div class="text-white h-48 sub-header">
        <div class="w-full p-8">
            <div class="row">
                <div class="px-4 col-md-12">
                    <div class="flex flex-wrap items-center justify-between">
                        <div>
                            <h1 class="text-white mb-2 mr-16">Halo Qompac!</h1>
                            <p class="mb-4 text-white mr-16">Experience a simple yet powerful way to build
                                Dashboards with
                                Qompac UI.</p>
                        </div>
                        <a href="/classroom/create" class="text-white btn shadow-md border-dashed btn-soft-light hover:shadow-xl hover:bg-glass focus:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>Tambah Data
                        </a>
                        {{-- <div x-data="modal">
                            <button @click="toggle"
                                class="text-white btn shadow-md border-dashed btn-soft-light hover:shadow-xl hover:bg-glass focus:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>Tambah Data
                            </button>
                            <div class="fixed w-full h-full top-0 z-50" x-show="open">
                                <span x-show.transition="open" x-bind="backdropTransition"
                                    class="fixed bg-secondary-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
                                <!-- Mobile navbar -->
                                <nav class="fixed inset-x-0 w-auto max-w-lg mx-auto my-6 z-40 mt-4">
                                    <div x-show.transition="open" x-bind="modalFadeInUpTransition">
                                        <form>
                                            <div
                                                class="flex flex-col w-full bg-white dark:bg-dark-card dark:border-secondary-800 border rounded-lg shadow-lg outline-none focus:outline-none">
                                                <div
                                                    class="flex p-4 border-b border-secondary-200 dark:border-secondary-800 border-solid rounded-t">
                                                    <h5 class="mx-0 text-xl dark:text-white">Tambah Data</h5>
                                                    <button type="button"
                                                        class="px-6 py-2 m-1 ml-auto -mt-2 -mb-2 -mr-2 text-lg font-semibold text-center dark:text-secondary-600 text-black bg-transparent rounded b-0"
                                                        @click="toggle">X</button>
                                                </div>
                                                <div class="flex-auto p-4 text-secondary-600">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 text-secondary-500 dark:text-white text-sm">Nama
                                                            kelas: </label>
                                                        <input type="text" class="w-full px-4 py-2 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 focus:shadow dark:focus:border-primary-500">
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-wrap justify-end p-2 border-t border-secondary-200 dark:border-secondary-800 border-solid">
                                                    <button type="button"
                                                        class="btn bg-secondary-600 hover:bg-secondary-700 text-white mr-1"
                                                        @click="toggle">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </nav>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 h-80 img-height overflow-hidden" style="z-index: -1;">
            <img src="../../assets/images/dashboard/top-header.png" alt="header"
                class="animated-scaleX object-cover w-screen h-full rounded-2xl">
        </div>
    </div> <!-- Nav Header Component End -->
@endsection
@section('content')
    <div class="p-6 lg:p-8 footer-inner mx-auto main-container lg:py-0 py-0 container" x-bind:class="setting.page_layout">
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-3">
            @foreach ($classrooms as $class)
            <div class="w-full">
                <div class="relative flex flex-col mb-8 bg-white rounded shadow dark:bg-dark-card">
                    <div class="flex justify-center p-6">
                        <h4 class="mb-0 dark:text-white">{{$class->name}}</h4>
                    </div>
                    <div class="px-6 p-2">
                        <div class=" flex flex-wrap justify-center">
                            <a href="/classroom/{{$class->id}}/edit" type="button" x-on:click="scrolldisable()" @click="open = !open" class="btn btn-warning mb-4 mr-1">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="/classroom/{{$class->id}}/delete" type="button" x-on:click="scrolldisable()" @click="open = !open" class="btn btn-danger mb-4 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </a>
                            <div class="fixed w-full h-full left-0 z-50" x-show="open" style="display: none;">
                                <span x-on:click="scrollenable()" class="fixed bg-secondary-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
                                <!-- Mobile navbar -->
                                <nav class="left-0 md:w-96 w-full fixed top-0 py-4 bg-white backdrop-blur-sm dark:bg-secondary-800 h-full overflow-y-hidden z-40" x-show="open" @click.away="open=false" x-transition:enter="transform transition-transform duration-700" x-transition:enter-start="-translate-x-full" x-transition:enter-end="-translate-x-0" x-transition:leave="transform transition-transform duration-700" x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full" style="display: none;">
                                    <div class="p-3">
                                        <h3 class="text-2xl font-semibold text-secondary-700 dark:text-white">
                                            Offcanvas
                                        </h3>
                                        <a x-on:click="scrollenable()" class="absolute mr-2 top-1 right-5 cursor-pointer text-4xl text-black dark:text-white" @click="open = !open">×</a>
                                    </div>
                                    <div class="">
                                        <div class="dark:text-white text-secondary-600">Some text as placeholder. In real
                                            life you can have the elements you have
                                            chosen. Like, text, images, lists, etc.</div>
                                    </div>
                                    <p class="p-3 text-secondary-500 dark:text-white">....</p>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
