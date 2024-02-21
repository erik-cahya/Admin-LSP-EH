@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">SURAT</li>
                        <li class="breadcrumb-item active" aria-current="page">SURAT TUGAS ASESOR</li>
                    </ol>
                </nav>
                <h1 class="m-0">Create Surat Tugas Asesor</h1>
            </div>
            <a href="{{ route('surat-tugas-asesor.view') }}" class="btn btn-success ml-3">Lihat Surat<i
                    class="material-icons">add</i></a>
        </div>
    </div>
@endsection
