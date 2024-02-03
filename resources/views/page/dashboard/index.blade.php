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
                        <div x-data="modal">
                            <button @click="toggle"
                                class="text-white btn shadow-md border-dashed btn-soft-light hover:shadow-xl hover:bg-glass focus:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg>Tambah Data</button>
                            <div class="fixed w-full h-full top-0 z-50" x-show="open">
                                <span x-show.transition="open" x-bind="backdropTransition"
                                    class="fixed bg-secondary-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
                                <!-- Mobile navbar -->
                                <nav class="fixed inset-x-0 w-auto max-w-lg mx-auto my-6 z-40 mt-4">
                                    <div x-show.transition="open" x-bind="modalFadeInUpTransition">
                                        <div
                                            class="flex flex-col w-full bg-white dark:bg-dark-card dark:border-secondary-800 border rounded-lg shadow-lg outline-none focus:outline-none">
                                            <div
                                                class="flex p-4 border-b border-secondary-200 dark:border-secondary-800 border-solid rounded-t">
                                                <h5 class="mx-0 text-xl dark:text-white">Modal title</h5>
                                                <button type="button"
                                                    class="px-6 py-2 m-1 ml-auto -mt-2 -mb-2 -mr-2 text-lg font-semibold text-center dark:text-secondary-600 text-black bg-transparent rounded b-0"
                                                    @click="toggle">X</button>
                                            </div>
                                            <div class="flex-auto p-4 text-secondary-600">I will not close if you click
                                                outside
                                                me. Don't even try to press
                                                escape key.</div>
                                            <div
                                                class="flex flex-wrap justify-end p-2 border-t border-secondary-200 dark:border-secondary-800 border-solid">
                                                <button type="button"
                                                    class="btn bg-secondary-600 hover:bg-secondary-700 text-white mr-1"
                                                    @click="toggle">Close</button>
                                                <button type="button" class="btn btn-primary">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
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
    <div class="flex-auto w-full contet-inner">
        <div class="flex flex-col mb-8 overflow-hidden bg-white rounded shadow-lg dark:bg-dark-card">
            <div class="flex-auto">
                <div class="overflow-x-auto p-5">
                    <table id="basic-table"
                        class="min-w-full overflow-hidden border dark:border-secondary-800 border-rounded-lg">
                        <thead>
                            <tr class="bg-danger-100/[0.3] dark:bg-dark-bg">
                                <th
                                    class=" text-lg dark:text-white px-8 text-secondary-600 py-4 whitespace-nowrap text-left font-medium">
                                    Profile</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium text-lg dark:text-white">
                                    Contact</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium text-lg dark:text-white">
                                    Email ID</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium text-lg dark:text-white">
                                    Country</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium text-lg dark:text-white">
                                    Purchases</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium text-lg dark:text-white">
                                    Status</th>
                                <th
                                    class="px-6 text-secondary-600 py-4 whitespace-nowrap text-left font-medium  text-lg dark:text-white">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3  rounded" src="../../assets/images/avatars/11.png"
                                                alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Anne Teak
                                                </h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@musk</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class=" text-md  text-secondary-600 dark:text-white">(208) 555-0112</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white">musk.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="18" class="mr-2 rtl:ml-2" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="0.5" width="20" height="13.75" fill="#EEF3F8" />
                                                <rect y="0.5" width="11.25" height="8.75" fill="#41479B" />
                                                <rect x="11.25" y="0.5" width="8.75" height="1.25" fill="#DC251C" />
                                                <rect x="11.25" y="3" width="8.75" height="1.25" fill="#DC251C" />
                                                <rect x="11.25" y="5.5" width="8.75" height="1.25" fill="#DC251C" />
                                                <rect x="11.25" y="8" width="8.75" height="1.25" fill="#DC251C" />
                                                <rect y="10.5" width="20" height="1.25" fill="#DC251C" />
                                                <rect y="13" width="20" height="1.25" fill="#DC251C" />
                                                <rect x="1.25" y="1.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="3.75" y="1.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="6.25" y="1.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="8.75" y="1.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="1.25" y="4.25" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="3.75" y="4.25" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="6.25" y="4.25" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="2.5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="7.5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="2.5" y="3" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="5" y="3" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="7.5" y="3" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="8.75" y="4.25" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="1.25" y="6.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="3.75" y="6.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="6.25" y="6.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                                <rect x="8.75" y="6.75" width="1.25" height="1.25" fill="#C5D0EC" />
                                            </svg>USA
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">548</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-primary-500 dark:text-primary-500 bg-primary-500/10 px-2 py-1 rounded">
                                            Active</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-danger-100/[0.3] dark:bg-dark-bg">
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3 bg-primary-100 rounded"
                                                src="../../assets/images/avatars/12.png" alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Marie
                                                    Clark</h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@mclark
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 262-238</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">mclark@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-900 dark:text-white  inline-flex ">
                                            <svg width="18" class="mr-2 rtl:ml-2" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="15" transform="translate(0 0.5)"
                                                    fill="#FFD018" />
                                                <rect y="0.5" width="20" height="3.75" fill="#DC251C" />
                                                <rect y="11.75" width="20" height="3.75" fill="#DC251C" />
                                                <rect x="3.75" y="5.5" width="2.5" height="2.5" fill="#DC251C" />
                                                <path d="M3.75 8H6.25V10.5H4.75C4.19772 10.5 3.75 10.0523 3.75 9.5V8Z"
                                                    fill="#FF8718" />
                                                <path d="M6.25 8H8.75V9.5C8.75 10.0523 8.30228 10.5 7.75 10.5H6.25V8Z"
                                                    fill="#DC251C" />
                                                <rect x="6.25" y="5.5" width="2.5" height="2.5" fill="#A6A6A6" />
                                                <circle cx="6.25" cy="8" r="0.625" fill="#41479B" />
                                            </svg>SPN
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">327</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-warning-500 dark:text-warning-500 bg-warning-500/10 px-2 py-1 rounded">
                                            Pending</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3 bg-primary-100 rounded"
                                                src="../../assets/images/avatars/13.png" alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">James
                                                    Mason</h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@mason.j
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 326-4679</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">mason.j@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="18" class="mr-2 rtl:ml-2" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="0.5" width="20" height="15" fill="#F5F8FB"></rect>
                                                <rect y="0.5" width="6.25" height="15" fill="#2B9F5A"></rect>
                                                <rect x="13.75" y="0.5" width="6.25" height="15" fill="#DC251C">
                                                </rect>
                                            </svg>ITL
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">481</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-sm font-medium text-white bg-primary-500 px-2 py-1 rounded">Hold
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-danger-100/[0.3] dark:bg-dark-bg">
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3 bg-primary-100 rounded"
                                                src="../../assets/images/avatars/14.png" alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Clinette
                                                    Mark</h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@c.mark
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 346-4687</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">c.mark@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="18" class="mr-2 rtl:ml-2" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="15" transform="translate(0 0.5)"
                                                    fill="#F5F8FB" />
                                                <circle cx="9.5" cy="7.5" r="3.5" fill="#DC251C" />
                                            </svg>JPN
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">324</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-success-500 dark:text-success-500 bg-success-500/10 px-2 py-1 rounded">
                                            Complete</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3 bg-primary-100 rounded"
                                                src="../../assets/images/avatars/15.png" alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Jamie Park
                                                </h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@jpark
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white "> (208) 778-6878</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">park.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="22" class="mr-2 rtl:ml-2" viewBox="0 0 22 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="21.3333" height="16" fill="#272727" />
                                                <rect y="5.3335" width="21.3333" height="5.33333" fill="#E31D1C" />
                                                <rect y="10.6665" width="21.3333" height="5.33333" fill="#FFD018" />
                                            </svg>GER
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">123</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-danger-500 dark:text-danger-500 bg-danger-500/10 px-2 py-1 rounded">
                                            Inactive</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-danger-100/[0.3] dark:bg-dark-bg">
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3 bg-primary-100 rounded"
                                                src="../../assets/images/avatars/16.png" alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Dennis
                                                    Hall</h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@dennis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 555-0112</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">dennis.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="21" class="mr-2 rtl:ml-2" viewBox="0 0 21 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_80_4707)">
                                                    <path d="M0 0H21V5.33333H0V0Z" fill="#FF8718" />
                                                    <path d="M0 5.3335H21V10.6668H0V5.3335Z" fill="#F5F8FB" />
                                                    <path d="M0 10.6665H21V15.9998H0V10.6665Z" fill="#2B9F5A" />
                                                    <path
                                                        d="M11.813 8.00033C11.813 8.73671 11.2254 9.33366 10.5005 9.33366C9.77561 9.33366 9.18799 8.73671 9.18799 8.00033C9.18799 7.26395 9.77561 6.66699 10.5005 6.66699C11.2254 6.66699 11.813 7.26395 11.813 8.00033Z"
                                                        fill="#F5F8FB" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.4995 7.33333C10.1371 7.33333 9.84326 7.63181 9.84326 8C9.84326 8.36819 10.1371 8.66667 10.4995 8.66667C10.8619 8.66667 11.1558 8.36819 11.1558 8C11.1558 7.63181 10.8619 7.33333 10.4995 7.33333ZM8.53076 8C8.53076 6.89543 9.4122 6 10.4995 6C11.5868 6 12.4683 6.89543 12.4683 8C12.4683 9.10457 11.5868 10 10.4995 10C9.4122 10 8.53076 9.10457 8.53076 8Z"
                                                        fill="#41479B" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_80_4707">
                                                        <rect width="21" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>IND
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">210</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-primary-500 dark:text-primary-500 bg-primary-500/10 px-2 py-1 rounded">
                                            Active</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3  rounded" src="../../assets/images/avatars/17.png"
                                                alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Clara Mist
                                                </h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@mist.c
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 674-3424</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white "> mist.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="22" class="mr-2 rtl:ml-2" viewBox="0 0 22 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect y="5.3335" width="21.3333" height="5.33333" fill="#F5F8FB"></rect>
                                                <rect width="21.3333" height="5.33333" fill="#2B9F5A"></rect>
                                                <rect y="10.6665" width="21.3333" height="5.33333" fill="#272727"></rect>
                                                <rect width="6.66667" height="16" fill="#DC251C"></rect>
                                            </svg>UAE
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">327</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-warning-500 dark:text-warning-500 bg-warning-500/10 px-2 py-1 rounded">
                                            Pending</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-danger-100/[0.3] dark:bg-dark-bg">
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3  rounded" src="../../assets/images/avatars/18.png"
                                                alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Anne Teak
                                                </h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@musk
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">(208) 555-0112</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">musk.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="21" class="mr-2 rtl:ml-2" viewBox="0 0 21 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="21" height="16" fill="#F5F8FB" />
                                                <rect width="21" height="2" fill="#41479B" />
                                                <rect y="3" width="21" height="3" fill="#41479B" />
                                                <rect y="7" width="21" height="2" fill="#41479B" />
                                                <rect width="9" height="9" fill="#41479B" />
                                                <rect y="3" width="9" height="3" fill="#F5F8FB" />
                                                <rect x="3" y="9" width="9" height="3"
                                                    transform="rotate(-90 3 9)" fill="#F5F8FB" />
                                                <rect y="10" width="21" height="3" fill="#41479B" />
                                                <rect y="14" width="21" height="2" fill="#41479B" />
                                            </svg>GRC
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">548</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-sm font-medium text-white bg-primary-500 px-2 py-1 rounded">Hold
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <img class="w-14 h-15 mr-3  rounded" src="../../assets/images/avatars/19.png"
                                                alt="">
                                            <div class="rtl:mr-4">
                                                <h5 class="font-medium text-lg text-black dark:text-white mb-0 ">Anne Teak
                                                </h5>
                                                <p class="mb-0 text-secondary-600 text-md dark:text-secondary-500">@musk
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white">(208) 555-0112</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white ">musk.e@mail.com</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md text-secondary-600 dark:text-white  inline-flex ">
                                            <svg width="18" class="mr-2 rtl:ml-2" viewBox="0 0 21 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="21" height="16" fill="#F5F8FB" />
                                                <ellipse cx="10.5" cy="7.69231" rx="3.5" ry="3.69231"
                                                    fill="#DC251C" />
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                                    width="7" height="5">
                                                    <path
                                                        d="M14 12.0002V8.30792C12.832 6.15169 10.4961 7.92611 10.4961 7.92611C10.4961 7.92611 8.16538 9.53597 7 7.07715V12.0002H14Z"
                                                        fill="#C4C4C4" />
                                                </mask>
                                                <g mask="url(#mask0_80_4853)">
                                                    <ellipse cx="10.5" cy="7.69231" rx="3.5" ry="3.69231"
                                                        fill="#41479B" />
                                                </g>
                                                <path d="M2.16455 4.83789L4.32821 1.09033" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M3.12744 5.39551L5.2911 1.64795" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M4.09131 5.95117L6.25496 2.20361" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M18.9995 4.83789L16.8359 1.09033" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                                <path d="M18.0366 5.39551L15.873 1.64795" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M17.0728 5.95117L14.9091 2.20361" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                                <path d="M2.16406 11.5049L4.32772 15.2524" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M3.12744 10.9492L5.2911 14.6968" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                                <path d="M4.09082 10.3926L6.25447 14.1401" stroke="black"
                                                    stroke-width="0.5" />
                                                <path d="M18.9995 11.5049L16.8359 15.2524" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                                <path d="M18.0366 10.9492L15.873 14.6968" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                                <path d="M17.0732 10.3926L14.9096 14.1401" stroke="black"
                                                    stroke-width="0.5" stroke-dasharray="8 1" />
                                            </svg>S.KO
                                        </h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6 class="text-md  text-secondary-600 dark:text-white">548</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h6
                                            class="text-sm font-medium text-success-500 dark:text-success-500 bg-success-500/10 px-2 py-1 rounded">
                                            Complete</h6>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-sm btn-icon rounded-full mr-2" href="#"
                                            role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
