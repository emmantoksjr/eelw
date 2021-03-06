@extends('layouts.master')
@section('title', 'Feedback')
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
                    Feedback Table
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
                                <th>Student</th>
                                <th>Speaker</th>
                                <th>Date</th>                                
                                <th>Topic</th>
                                <th>Comment 1</th>
                                <th>comment 2</th>
                                <th>comment 3</th>
                                <th>comment 4</th>
                                <th>comment 5</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Student</th>
                                <th>Speaker</th>
                                <th>Date</th>                                
                                <th>Topic</th>
                                <th>Comment 1</th>
                                <th>comment 2</th>
                                <th>comment 3</th>
                                <th>comment 4</th>
                                <th>comment 5</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{!! $id++ !!}</td>
                                @foreach($names as $name)
                                @if($name->phone == $feedback->phone)
                                <td>{!! $name->name !!}</td>
                                @endif
                                @endforeach
                                <td>{!! $feedback->speaker !!}</td>
                                <td>{!! $feedback->date !!}</td>
                                <td>{!! $feedback->topic !!}</td>
                                <td>{!! $feedback->feed1 !!}</td>
                                <td>{!! $feedback->feed2 !!}</td>
                                <td>{!! $feedback->feed3 !!}</td>
                                <td>{!! $feedback->feed4 !!}</td>
                                <td>{!! $feedback->feed5 !!}</td>
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
