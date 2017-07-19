<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Monitoring</title>
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" media="all" type="text/css">
    <link href="{!! asset('css/sb-admin-2.css') !!}" rel="stylesheet" media="all" type="text/css">
    <link href="{!! asset('css/metisMenu.min.css') !!}" rel="stylesheet" media="all" type="text/css">
    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" media="all" type="text/css">
    <!-- Custom Fonts -->
    {{--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Sistem Monitoring</a>
        </div>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{route('dashboard')}}" >Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="#">ForeCast</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-center">Hasil peramalan 2017 dari data 2013-2016</h3>
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            {{--<th>No</th>--}}
                            <th>Bulan</th>
                            <th>Debit</th>
                            <th>Kondisi</th>
                        </tr>
                        @foreach($forecasts as $forecast)
                            <tr class="text-center">
                                {{--<td>{{$loop->iteration}}</td>--}}
                                <td><?php echo date('M Y', strtotime($forecast->tanggal)); ?></td>
                                <td>{{$forecast->debit}} <i>m</i><span class="sup">3</span></td>
                                <td>
                                    @if($forecast->debit >=138.035)
                                        Banjir
                                    @else
                                        Tidak Banjir
                                @endif
                                </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/metisMenu.min.js') !!}"></script>
<script src="{!! asset('js/sb-admin-2.js') !!}"></script>
</body>
</html>