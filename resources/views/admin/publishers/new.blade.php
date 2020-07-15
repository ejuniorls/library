@extends('admin.mainlayout')

@section('title', 'New')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 order-2">

            @if (request()-> get('error'))
            <div class="alert alert-warning" role="alert">
                {{ app('request')->input('error') }}
            </div>
            @endif

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form id="author-new" class="needs-validation" novalidate
                        action="{{ route('admin.publishers.save') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('admin.publishers._form')
                    </form>
                </div>

                <div class="card-footer">
                    <a class="btn btn-light" href="{{ route('admin.publishers') }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary" form="author-new">Save</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- End of Page Content -->

@endsection