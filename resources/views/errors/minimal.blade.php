<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body style="background: #dadada;">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card text-center mb-4 border-0 ">

                    <div class="card-header pt-4 pb-4 text-center bg-primary text-light rounded-0">
                        <h4><a href="{{ route('admin.home') }}">
                            LIBRARY
                        </a></h4>
                    </div>

                    <div class="card-body p-4">
                        <div class="text-center">
                            <h1 class="text-error">@yield('code')</h1>
                            <h4 class="text-uppercase text-danger mt-3">@yield('message')</h4>
                            <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry...
                                it happens to the best of us. Here's a
                                little tip that might help you get back on track.</p>

                            <a class="btn btn-info mt-3" href="{{ route('admin.home') }}"><i class="mdi mdi-reply"></i> Return Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer-scripts')
</body>

</html>