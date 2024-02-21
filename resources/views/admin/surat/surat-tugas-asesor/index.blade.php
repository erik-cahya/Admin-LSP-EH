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
                <h1 class="m-0">Surat Tugas Asesor</h1>
            </div>
            <a href="{{ route('surat-tugas-asesor.create') }}" class="btn btn-success ml-3">Buat Surat<i
                    class="material-icons">add</i></a>
        </div>
    </div>


    <div class="container-fluid page__container">

        <div class="card card-form d-flex flex-column flex-sm-row">
            <div class="card-form__body card-body-form-group flex">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_name">Name</label>
                            <input id="filter_name" type="text" class="form-control" placeholder="Search by name">
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_category">Industry</label><br>
                            <select id="filter_category" class="custom-select" style="width: 200px;">
                                <option value="all">Any</option>
                                <option value="all">Software</option>
                                <option value="all">Production of Goods</option>
                                <option value="all">Health</option>
                                <option value="all">Sports</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_stock">Has Sales</label>
                            <div class="custom-control custom-checkbox mt-sm-2">
                                <input type="checkbox" class="custom-control-input" id="filter_stock" checked="">
                                <label class="custom-control-label" for="filter_stock">Yes</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group" style="width: 200px;">
                            <label for="filter_date">Created Date</label>
                            <input id="filter_date" type="text" class="form-control" placeholder="Select date ..."
                                value="13/03/2018 to 20/03/2018" data-toggle="flatpickr" data-flatpickr-mode="range"
                                data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="btn bg-white border-left border-top border-top-sm-0 rounded-top-0 rounded-top-sm rounded-left-sm-0"><i
                    class="material-icons text-primary icon-20pt">refresh</i></button>
        </div>

        <div class="card p-4" style="">

            <table id="example" class="display"class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th style="width: 30px;" class="text-center">NO SURAT</th>
                        <th>Company Name</th>
                        <th style="width: 120px;" class="text-center">Created</th>
                        <th class="text-center">Members</th>
                        <th class="text-center">Growth</th>
                        <th style="width: 50px;">#INV</th>
                        <th style="width: 120px;" class="text-right">Total Sales</th>
                        <th style="width: 50px;">
                            <div class="dropdown pull-right">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Bulk</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                            class="material-icons  mr-1">work</i> Update Status</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                            class="material-icons  mr-1">pin_drop</i> Add Location</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                            class="material-icons  mr-1">archive</i> Archive</a>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="list" id="companies">
                    @for ($i = 0; $i < 50; $i++)
                        <tr>
                            <td class="text-center">
                                <div class="badge badge-soft-dark">26/ST-LSP-EHI/IV/2023</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center">
                                        <i class="material-icons icon-16pt mr-1 text-blue">business</i>
                                        <a href="#">Moon Ltd</a>
                                    </div>

                                    <div class="badge badge-warning ml-2">PRO</div>

                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami,
                                        Florida, USA</small>
                                </div>
                            </td>
                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                05-05-2019</td>
                            <td style="width:80px" class="text-center">

                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a
                                    href="#">1</a>

                            </td>
                            <td class="text-center">3% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-right"><strong>$32,124</strong></td>
                            <td><a href="#" class="btn btn-sm btn-link"><i
                                        class="material-icons icon-16pt">arrow_forward</i></a> </td>
                        </tr>
                    @endfor




                </tbody>
            </table>

        </div>
    </div>
@endsection


@section('js_partials')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endsection
