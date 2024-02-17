@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Stories</li>
                    </ol>
                </nav>
                <h1 class="m-0">QR Code Generator</h1>
            </div>
            {{-- <a href="" class="btn btn-success ml-3">Create QR</a> --}}
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-signup">Create New
                QR</button>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="mb-3"><strong class="text-dark-gray">Popular</strong></div>
        <div class="stories-cards mb-4">

            @foreach ($data_qr as $qr)
                <div class="card stories-card">
                    <div class="stories-card__content d-flex align-items-center flex-wrap">

                        <div class="stories-card__title flex">
                            <h5 class="card-title m-0"><a href="" class="headings-color">{{ $qr->name }}</a></h5>
                            <small class="text-dark-gray">{{ Str::limit($qr->url, 30) }}</small>

                        </div>
                        <div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
                            <div class="mr-3 text-dark-gray stories-card__date">
                                <small>11 Nov, 2018 07:46 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal"
                                data-target="#modal-standard-{{ $qr->id }}">View QR</button>
                            <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="#" class="btn btn-sm btn-danger">DELETE</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection

@section('modal')
    <!-- Sign Up Modal -->
    <div id="modal-signup" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body
                    <div class="px-3">
                    <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                        <a href="javascript:void(0)" class="navbar-brand" style="min-width: 0">
                            <img class="navbar-brand-icon"
                                src="{{ asset('admin_panel') }}/assets/images/stack-logo-blue.svg" width="25"
                                alt="FlowDash">
                            <span>QR Code Generator</span>
                        </a>
                    </div>

                    <form action="/qr-code" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" type="text" id="name" name="name" required=""
                                placeholder="Input Nama QR" />
                        </div>
                        <div class="form-group">
                            <label for="url">URL:</label>
                            <input class="form-control" type="text" id="url" name="url" required=""
                                placeholder="Masukkan Link/URL" />
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Create New QR Code</button>
                        </div>
                    </form>

                </div>
            </div> <!-- // END .modal-body -->
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->

    {{-- View QR Modal --}}
    @foreach ($data_qr as $qr)
        <div id="modal-standard-{{ $qr->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="modal-standard-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-standard-title">Standard modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->

                    <div class="modal-body d-flex justify-content-center">
                        {!! QrCode::size(200)->generate($qr->url) !!}
                    </div> <!-- // END .modal-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> <!-- // END .modal-footer -->
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> <!-- // END .modal -->
    @endforeach
@endsection
