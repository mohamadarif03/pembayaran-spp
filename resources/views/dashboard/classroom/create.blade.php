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
        <div class="flex flex-col mb-8 text-secondary-500 bg-white dark:bg-dark-card shadow rounded">
            <div class="p-6 pb-0 border-b dark:border-secondary-800">
                <h4 class="text-xl font-medium text-black dark:text-white mb-4">Classroom</h4>
            </div>
            <div class="p-6">
                <form action="/classroom" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-4">
                        <label class="inline-block mb-2 text-secondary-500 dark:text-white text-sm">Nama Kelas </label>
                        <input type="text" name="name" class="w-full px-4 py-2 text-secondary-500 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow dark:text-white text-sm" placeholder="Nama Kelas">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
