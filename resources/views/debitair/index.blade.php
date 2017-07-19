<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Monitoring - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" media="all" type="text/css">

    <!-- Custom CSS -->
    <link href="{!! asset('css/sb-admin-2.css') !!}" rel="stylesheet" media="all" type="text/css">
    <link href="{!! asset('css/metisMenu.min.css') !!}" rel="stylesheet" media="all" type="text/css">
    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" media="all" type="text/css">
    <!-- Custom Fonts -->
{{--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{--<link rel="stylesheet" href="{!! asset('css/cmGauge.css')!!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('css/cmGauge.css')!!}">--}}

    {{--<script src="justgage.1.0.1.min.js"></script>--}}

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top navbar-color " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >Sistem Monitoring</a>
        </div>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="active">
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('forecast')}}">ForeCast</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="well well-custom">
                        {{--<div class="col-md-4 col-sm-12 col-xs-12">--}}
                            <table class="table static-text">
                                <tr class="text-custom">
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td>{{$aliran->tanggal}}</td>
                                </tr>
                                <tr>
                                    <td>Debit Air</td>
                                    <td>:</td>
                                    <td>{{$aliran->debit}} <i>m</i><span class="sup">3</span></td>
                                </tr>
                                <tr>
                                    <td>Kondisi</td>
                                    <td>:</td>
                                    <td>
                                        @if($image->kondisi >= 138.035)
                                            Tidak Banjir
                                        @else
                                            Banjir
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="gauge" class="gauge-red" data-field-id="{{$aliran2->debit}}"></div>
                </div>
                <div class="col-md-3">
                    <div id="gauge2"  data-field-id="{{$aliran->debit}}"></div>
                </div>
                <div class="col-md-12" >
                    <img src="{{asset('images/' . $image->gambar)}}" class="img-responsive img-full-width">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/metisMenu.min.js') !!}"></script>
<script src="{!! asset('js/sb-admin-2.js') !!}"></script>
<script src="{!! asset('js/raphael-2.1.4.min.js') !!}"></script>
<script src="{!! asset('js/justgage.js') !!}"></script>

</body>
<script>
    var fieldId = $('#gauge').data("field-id");
    var fieldId2 = $('#gauge2').data("field-id");
    var g = new JustGage({
        id: "gauge",
        value: fieldId,
        min: 0,
        max: 350,
        title: "Tahun 2016"
    });
    var f = new JustGage({
        id: "gauge2",
        value: fieldId2,
        min: 0,
        max: 350,
        title: "Tahun 2017"
    });
</script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
</html>
