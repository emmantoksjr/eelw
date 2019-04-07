@extends('layouts.master')
@section('title', 'Schedules')
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

<!-- JQuery DataTable Css -->
<link href="/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Custom Css -->
<link href="/css/style.css" rel="stylesheet">

<!--  Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/css/all-themes.css" rel="stylesheet" />
@endsection
@section('content')
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Schedules Table
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    @if (session('status'))
                    <div id="success" class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Speaker</th>
                                <th>Topic</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Speaker</th>
                                <th>Topic</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{!! $id++ !!}</td>
                                <td>{!! $schedule->name !!}</td>
                                <td>{!! $schedule->date !!}</td>
                                <td>{!! $schedule->start !!}</td>
                                <td>{!! $schedule->end !!}</td>
                                <td>{!! $schedule->speaker !!}</td>
                                <td>{!! $schedule->topic !!}</td>
                                <td><a href="{!! action('ScheduleController@edit', $schedule->id)!!}">Edit</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->
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

<!-- Jquery DataTable Plugin Js -->
<script src="/js/jquery.dataTables.js"></script>
<script src="/js/dataTables.bootstrap.js"></script>
<script src="/js/dataTables.buttons.min.js"></script>
<script src="/js/buttons.flash.min.js"></script>
<script src="/js/jszip.min.js"></script>
<script src="/js/pdfmake.min.js"></script>
<script src="/js/vfs_fonts.js"></script>
<script src="/js/buttons.html5.min.js"></script>
<script src="/js/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="/js/admin.js"></script>
<script src="/js/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="/js/demo.js"></script>
@endsection
