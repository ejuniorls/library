@extends('admin.mainlayout')

@section('title', 'Authors')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Authors</h1>

        <nav aria-label="breadcrumbd">
            <ol class="breadcrumb d-none d-lg-block w-100">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Books</li>
            </ol>
        </nav>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('admin.authors.new') }}" id="btn_add"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="far fa-fw fa-plus fa-sm text-white-50"></i> New Entry
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 order-2">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap utility classes. By
                    using utility classes, the style of the card component can be easily modified with no need for any
                    custom CSS!
                </div>
            </div>

        </div>

        <div class="col-lg-12 order-1">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Select Action:</div>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-copy fa-fw mr-2 text-gray-500"></i>
                                Copy</a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-file-pdf fa-fw mr-2 text-gray-500"></i>
                                Export as PDF</a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-file-excel fa-fw mr-2 text-gray-500"></i>
                                Export as Excel</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt fa-fw mr-2 text-gray-500"></i>
                                Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTable_length"><label>Show <select
                                                name="dataTable_length" aria-controls="dataTable"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="dataTable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" role="grid"
                                        aria-describedby="dataTable_info" style="width: 100%;" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" style="width: 5px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1"></label>
                                                    </div>
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" style="width: 100px;"
                                                    aria-label="Position: activate to sort column ascending">Popular
                                                    Name
                                                </th>
                                                <th class="sorting " tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" style="width: 60px;"
                                                    aria-label="Position: activate to sort column ascending">First Name
                                                </th>
                                                <th class="sorting " tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" style="width: 100px;"
                                                    aria-label="Position: activate to sort column ascending">Last Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" style="width: 100px;"
                                                    aria-label="Position: activate to sort column ascending">Birth
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" style="width: 100px;"
                                                    aria-label="Position: activate to sort column ascending">Death
                                                </th>
                                                <th class="text-center" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" style="width: 100px;"
                                                    aria-label="Position: activate to sort column ascending">Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1"></label>
                                                    </div>
                                                </th>
                                                <th rowspan="1" colspan="1">Popular Name</th>
                                                <th rowspan="1" colspan="1" class="">First Name</th>
                                                <th rowspan="1" colspan="1" class="">Last Name</th>
                                                <th rowspan="1" colspan="1">Birth</th>
                                                <th rowspan="1" colspan="1">Death</th>
                                                <th rowspan="1" colspan="1" class="text-center">Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($authors as $author)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 align-middle text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">{{ $author->popularName }}</td>
                                                <td class="align-middle">{{ $author->firstName }}</td>
                                                <td class="align-middle ">{{ $author->lastName }}</td>
                                                <td class="align-middle">{{ $author->birth }}</td>
                                                <td class="align-middle">{{ $author->death }}</td>
                                                <td class="text-center align-middle">
                                                    <div class="dropdown show no-arrow d-inline-block">
                                                        <a class="btn btn-sm btn-primary dropdown-toggle no-arrow"
                                                            href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="far fa-bars"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">Select Action:</div>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="far fa-copy fa-fw mr-2 text-gray-500"></i>
                                                                Copy</a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="far fa-file-pdf fa-fw mr-2 text-gray-500"></i>
                                                                Save as PDF</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="far fa-eye fa-fw mr-2 text-gray-500"></i>
                                                                View</a>
                                                            <a class="dropdown-item d-xl-none" href="#"
                                                                data-toggle="modal" data-target="#editModal">
                                                                <i class="far fa-edit fa-fw mr-2 text-gray-500"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item d-xl-none" href="#"
                                                                data-toggle="modal" data-target="#deleteModal">
                                                                <i
                                                                    class="far fa-trash-alt fa-fw mr-2 text-gray-500"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>

                                                    <a class="btn btn-sm btn-primary d-none d-xl-inline-block"
                                                        href="{{ route('admin.authors.edit', $author->id) }}">
                                                        <i class="far fa-edit"></i>
                                                    </a>

                                                    <a class="btn btn-sm btn-primary d-none d-xl-inline-block"
                                                        href="{{ route('admin.authors.delete', $author->id) }}">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            

                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                        {{ $authors->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- End of Page Content -->

<!-- Modal -->
@include('admin.authors.modal')
<!-- End of Modal -->

@endsection