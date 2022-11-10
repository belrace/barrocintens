@extends('dashboards/base')

@section('sidebar')
@include('dashboards.admin.sidebar')
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
            height: auto;
            width: auto;
            margin-left: 50px;
            margin-right: 50px;
            background-color: #3D3D3D;
            border-radius: 10px;
        }

        .content {
            margin-left: 50px;
            margin-right: 50px;
            padding: 50px;
        }

        .content-top {
            font-size: 3em;
            font-weight: bold;
            color: white;
        }

        .content-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: center;
            align-items: center;
        }

        .content-top-text {
            font-family: "Big Shoulders Display", sans-serif;
            display: flex;
            justify-content: right;
        }

        .content-middle {
            margin-top: 50px;
            height: auto;
        }

        .whitespace {
            height: 50px;
        }

        .wrapper {
            width: 100%;
            justify-content: center;
        }

        .collapsible {

            width: 100%;
            overflow: hidden;
            font-weight: 500;
        }

        .collapsible input {
            display: none;
        }

        .collapsible label {
            position: relative;
            font-weight: 600;
            background: #ffffff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            z-index: 1;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .collapsible label:after {
            content: "";
            position: absolute;
            right: 15px;
            top: 15px;
            width: 18px;
            height: 18px;
            background: url("/icons/bx-chevron-right.svg") no-repeat 0 0;
            transition: all 0.3s ease;
        }

        .collapsible input:checked+label:after {
            transform: rotate(90deg);
        }

        .collapsible-text {
            max-height: 1px;
            overflow: hidden;
            border-radius: 4px;
            line-height: 1.4;
            position: relative;
            top: -100%;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .collapsible input:checked~.collapsible-text {
            max-height: 300px;
            padding-bottom: 25px;
            background: #ffffff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            opacity: 1;
            top: 0;
        }

        .collapsible-text h2 {
            margin-bottom: 10px;
            padding: 15px 15px 0;
            color: #1c1c6b;
        }

        .collapsible-text p {
            padding-left: 15px;
            padding-right: 15px;
        }

        .divider {
            border-radius: 10px;
            width: auto;
            height: 1px;
            background-color: #ffd700;
        }
    </style>
</head>

<body>
    <div class="white"></div>
    <div class="box">
        <div class="content">
            <div class="content-top">
                <div class="content-top-grid">
                    <img src="/img/barroc1.png" alt="">
                    <div class="content-top-text">
                        Admin-Portal
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="divider"></div>
            <div class="content-middle">
                <div class="wrapper">
                    <div class="collapsible">
                        <input type="checkbox" id="collapsible-head">
                        <label for="collapsible-head">Onderdelen</label>
                        <div class="collapsible-text">
                            <h2>Lijst met onderdelen</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sit vel modi harum aut autem, sequi quis repellat, aperiam repudiandae accusamus sint incidunt delectus fugiat dolore odio facilis provident eum.</p>
                        </div>
                    </div>
                </div>
                <div class="whitespace"></div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection