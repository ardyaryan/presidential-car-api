<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section('head')
    {{ HTML::style('public/css/style.css'); }}
    {{ HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'); }}
    {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.css'); }}
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'); }}
    {{ HTML::style('https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css'); }}
    {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css'); }}
    @show
</head>
<body>
    @if (Session::get('role') == 'admin')
        @include('layouts.partials.adminNavigation')
        @show
    @else
        @include('layouts.partials.driverNavigation')
        @show
    @endif


    @if (Session::get('role') == 'admin')
            @include('layouts.partials.adminNavigation')
        @else
            @include('layouts.partials.driverNavigation')
        @endif
        <!-- Header -->
        <a name="about"></a>
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            @yield('body')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    @include('layouts.partials.footer')
    @show
    @section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    @show
</body>
</html>