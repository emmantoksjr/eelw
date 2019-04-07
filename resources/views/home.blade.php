@extends('layouts.master')
@section('title', 'Home')
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

<!--  Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/css/all-themes.css" rel="stylesheet" />
@endsection
@section('content')
<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">email</i>
            </div>
            <div class="content">
                <div class="text">MESSAGES</div>
                <div class="number">15</div>
            </div>
        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">devices</i>
            </div>
            <div class="content">
                <div class="text">CPU USAGE</div>
                <div class="number">92%</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-indigo hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">face</i>
            </div>
            <div class="content">
                <div class="text">NEW MEMBERS</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-deep-purple hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">favorite</i>
            </div>
            <div class="content">
                <div class="text">LIKES</div>
                <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Widgets -->
<div class="row clearfix">
    <!-- Visitors -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-pink">
                <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                     data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                     data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                     data-fill-Color="rgba(0, 188, 212, 0)">
                </div>
                <div class="m-b--35 font-bold"> LATEST FACILITATOR</div>
                <ul class="dashboard-stat-list">
                    <li>
                    <span >1</span>
                    <span class="pull-right">TODAY</span>
                    </li>
                    <li>
                    <span >2</span>
                    <span class="pull-right">YESTERDAY</span>
                    </li>
                    <li>
                    <span >3</span>
                    <span class="pull-right">LAST WEEK</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Visitors -->
    <!-- Latest Social Trends -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-cyan">
                <div class="m-b--35 font-bold">LATEST TRAINERS</div>
                <ul class="dashboard-stat-list">
                    <li>
                    <span >1</span>
                    <span class="pull-right">TODAY</span>
                    </li>
                    <li>
                    <span >2</span>
                    <span class="pull-right">YESTERDAY</span>
                    </li>
                    <li>
                    <span >3</span>
                    <span class="pull-right">LAST WEEK</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Latest Social Trends -->
    <!-- Answered Tickets -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="body bg-teal">
                <div class="font-bold m-b--35">LATEST </div>
                <ul class="dashboard-stat-list">
                    <li>
                    <span >1</span>
                    <span class="pull-right">TODAY</span>
                    </li>
                    <li>
                    <span >2</span>
                    <span class="pull-right">YESTERDAY</span>
                    </li>
                    <li>
                    <span >3</span>
                    <span class="pull-right">LAST WEEK</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Answered Tickets -->
</div>
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
