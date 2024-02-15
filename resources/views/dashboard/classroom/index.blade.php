@extends('layouts.app')
@section('style')
    <style>
        .button-add:hover {
            background-color: #4E0C9E;
        }

        .button-add {
            background-color: #7016D0;
        }
    </style>
@endsection
@section('subcontent')
    <div class="p-6 flex justify-between">
        <div class=""></div>
        <div class="">

            <a href="{{ route('classroom.create') }}" class="button-add text-white btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                </svg>Tambah Data
            </a>
        </div>

    </div>
@endsection
@section('content')
    <div class="p-6 lg:p-8 footer-inner mx-auto main-container lg:py-0 py-0 container" x-bind:class="setting.page_layout">
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-3">
            <div class="">
                <div class="">
                    <img src="{{ asset('assets/images/classroom/Biru JPG.jpg') }}" alt="" class="rounded"
                        srcset="">
                </div>
                <div class="bg-white rounded-b-lg">
                    <div class="p-3">
                        <p class="font-medium text-black">Rekayasa Perangkat Lunak</p>
                        <p class="font-bold text-black mt-3 mb-3">XII RPL 1</p>
                        <p class="font-medium">Tahun Ajaran: 2024/2025</p>
                    </div>
                    <div class="p-3 flex justify-center">
                        <a href="">
                            <button type="button" class="btn btn-warning text-white">Edit</button>
                        </a>
                        <form action="" method="post">
                            <button type="button" class="btn btn-danger text-white ml-3">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
