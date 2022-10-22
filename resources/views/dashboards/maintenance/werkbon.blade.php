@extends('dashboards/base')

@section('sidebar')
@include('dashboards.maintenance.sidebar')
@endsection

@section('app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 95%;
            height: 200px;
            margin-left: 2.5%;
            margin-right: 2.5%;
            background-color: #3D3D3D;
            border-radius: 10px;
        }

        .top-grid {
            display: grid;
            grid-auto-rows: 1fr;
        }
    </style>
</head>

<body>
    <div class="white">
        <div class="box">
            <div class="top-grid">
                <div class="titel">

                </div>
                <div class="logo">

                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection