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
            <a href="" class="btn btn-success ml-3">Create QR</a>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="mb-3"><strong class="text-dark-gray">Popular</strong></div>
        <div class="stories-cards mb-4">

            <div class="card stories-card">
                <div class="stories-card__content d-flex align-items-center flex-wrap">

                    <div class="stories-card__title flex">
                        <h5 class="card-title m-0"><a href="" class="headings-color">Cheap Romantic
                                Vacations</a></h5>
                        <small class="text-dark-gray">https://lsp-eh.com</small>
                    </div>
                    <div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
                        <div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
                            <i class="material-icons text-muted-light mr-1">folder_open</i> future
                        </div>
                        <div class="mr-3 text-dark-gray stories-card__date">
                            <small>11 Nov, 2018 07:46 AM</small>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-sm btn-secondary">VIEW QR</a>
                        <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="#" class="btn btn-sm btn-danger">DELETE</a>
                    </div>
                </div>
            </div>

            <div class="card stories-card">
                <div class="stories-card__content d-flex align-items-center flex-wrap">

                    <div class="stories-card__title flex">
                        <h5 class="card-title m-0"><a href="" class="headings-color">Cheap Romantic
                                Vacations</a></h5>
                        <small class="text-dark-gray">https://lsp-eh.com</small>
                    </div>
                    <div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
                        <div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
                            <i class="material-icons text-muted-light mr-1">folder_open</i> future
                        </div>
                        <div class="mr-3 text-dark-gray stories-card__date">
                            <small>11 Nov, 2018 07:46 AM</small>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-sm btn-secondary">VIEW QR</a>
                        <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="#" class="btn btn-sm btn-danger">DELETE</a>
                    </div>
                </div>
            </div>

            <div class="card stories-card">
                <div class="stories-card__content d-flex align-items-center flex-wrap">

                    <div class="stories-card__title flex">
                        <h5 class="card-title m-0"><a href="" class="headings-color">Cheap Romantic
                                Vacations</a></h5>
                        <small class="text-dark-gray">https://lsp-eh.com</small>
                    </div>
                    <div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
                        <div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
                            <i class="material-icons text-muted-light mr-1">folder_open</i> future
                        </div>
                        <div class="mr-3 text-dark-gray stories-card__date">
                            <small>11 Nov, 2018 07:46 AM</small>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-sm btn-secondary">VIEW QR</a>
                        <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="#" class="btn btn-sm btn-danger">DELETE</a>
                    </div>
                </div>
            </div>




        </div>

    </div>
@endsection
