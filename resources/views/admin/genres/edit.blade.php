@extends('admin.mainlayout')

@section('title', 'Edit')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 order-2">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form id="genres-new" class="needs-validation" novalidate=""
                        action="{{ route('admin.genres.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('admin.genres._form')
                        <input type="hidden" name="_method" value="put">
                    </form>
                </div>

                <div class="card-footer">
                    <a class="btn btn-light" href="{{ route('admin.genres') }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary" form="genres-new">Save</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- End of Page Content -->

@endsection