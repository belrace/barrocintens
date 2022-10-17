@extends('dashboards/base')

@section('sidebar')
    @include('dashboards.finance.sidebar')
@endsection

@section('app')



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factuur</title>
    <style>
        * {
            color: white;
            text-decoration: none;
        }

        body {
            background-color: #212121;
            font-family: Arial, sans-serif;
        }

        .box-fac {
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            max-width: 1080px;
            height: 1000px;
            margin: auto;
            text-align: center;
            font-family: arial;
            background-color: #fff;
            margin-top: 150px;
            margin-bottom: 20px;
            color: black;
            padding-top: 40px;
            padding-bottom: 40px;
        }

    </style>
</head>

<body>

    <div class="box-fac">

    </div>

</body>

</html>
@endsection