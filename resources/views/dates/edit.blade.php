@extends('layouts.master')
@section('title', 'Date')
@section('css')
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link href="/css/bootstrap.css" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="/css/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="/css/animate.css" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="/css/morris.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="/css/style.css" rel="stylesheet">

<!-- Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/css/all-themes.css" rel="stylesheet" />
@endsection
@section('content')
<!-- Vertical Layout | With Floating Label -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Event Dates
                </h2>
            </div>
            @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            @if (session('status'))
                            <div id='success' class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
            <div class="body">
                <form method="POST">
                    @csrf
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="date" name="date" id="name" value="{!! $date->date !!}" required class="form-control">
                            <label class="form-label">Date</label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect ">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Vertical Layout | With Floating Label -->
@endsection

@section('js')

<!-- Jquery Core Js -->
<script src="/js/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="/js/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="/js/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="/js/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="/js/raphael.min.js"></script>
<script src="/js/morris.js"></script>

<!-- ChartJs -->
<script src="/js/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="/js/jquery.flot.js"></script>
<script src="/js/jquery.flot.resize.js"></script>
<script src="/js/jquery.flot.pie.js"></script>
<script src="/js/jquery.flot.categories.js"></script>
<script src="/js/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="/js/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="/js/admin.js"></script>
<script src="/js/index.js"></script>

<!-- Demo Js -->
<script src="/js/demo.js"></script>
@endsection