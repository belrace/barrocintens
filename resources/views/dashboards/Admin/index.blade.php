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

        .content-middle-bottom {
            margin-top: 50px;
            height: auto;
        }

        .whitespace {
            height: 50px;
        }

        /* Start collapsible */

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
            background-color: #4D4D4D;
            color: #ffffff;
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
            background-color: #4D4D4D;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            opacity: 1;
            top: 0;
        }

        .collapsible-text .collapsible-grid {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 15px;
            color: #ffffff;
        }

        .collapsible-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 250px);
            grid-gap: 20px;
        }

        .collapsible-grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #666666;
            border-radius: 3px;
            padding: 5px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .collapsible-grid-item:hover {
            background-color: #ffd700;
        }

        /* End collapsible */

        .divider {
            border-radius: 10px;
            width: auto;
            height: 1px;
            background-color: #ffd700;
        }

        .content-middle-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10%;
        }

        .content-middle-top-grid-card-left {
            color: #ffffff;
            padding: 15px;
        }



        .card-input {
            min-width: 250px;
        }

        .whitespace-form {
            height: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #ffffff;
        }

        .submit-form {
            background-color: #ffd700;
            padding: 10px;
            justify-content: center;
            align-items: center;
            display: flex;
            border-radius: 6px;
            min-width: 250px;
            font-weight: bold;
            font-size: 1.1em;
        }

        .button-submit-form {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }

        .button-submit-form :hover {
            background-color: #FFEC80;
            scale: 1.01;
        }

        .card-right-grid {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            height: 100%;
        }

        .card-right-grid-left {
            background-color: #4D4D4D;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-right-grid-middle {
            background-color: #4D4D4D;
            display: flex;
            justify-content: center;
        }

        .card-right-grid-right {
            background-color: #4D4D4D;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-right-grid-left-text {
            color: #ffd700;
            user-select: none;
            writing-mode: sideways-lr;
            font-size: 3em;
            font-family: "Big Shoulders Display", sans-serif;
            font-weight: bold;
            opacity: 0.3;
        }

        .card-right-grid-right-text {
            color: #ffd700;
            writing-mode: sideways-rl;
            user-select: none;
            font-size: 3em;
            font-family: "Big Shoulders Display", sans-serif;
            font-weight: bold;
            opacity: 0.3;
        }

        .content-middle-top-grid-card-left {
            background-color: #4D4D4D;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
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
            <div class="whitespace"></div>

            <div class="content-middle-top">
                <div class="content-middle-top-grid">
                    <div class="content-middle-top-grid-card-left">
                        <div class="scroll-box">
                            Werkbon overzicht, smoll, scrollable
                        </div>
                    </div>
                    <div class="card-right-grid">
                        <div class="card-right-grid-left">
                            <div class="card-right-grid-left-text">
                                Barroc Intens
                            </div>
                        </div>
                        <div class="card-right-grid-middle">
                            <form action="" method="post">
                                @csrf
                                <label for="" class="form-label">Username:</label><br>
                                <input type="text" placeholder="John Doe" name="" id="" class="card-input"><br>
                                <div class="whitespace-form"></div>
                                <label for="" class="form-label">Email:</label><br>
                                <input type="text" placeholder="example@gmail.com" name="" id="" class="card-input"><br>
                                <div class="whitespace-form"></div>
                                <label for="" class="form-label">Password:</label><br>
                                <input type="password" name="" id="" placeholder="Password" class="card-input"><br>
                                <div class="whitespace-form"></div>
                                <label for="" class="form-label">department:</label><br>
                                <select name="isEmployee" id="isEmployee" class="card-input">
                                    <option value="0">Klant</option>
                                    <option value="1">Maintenance</option>
                                    <option value="2">Sales</option>
                                    <option value="3">Inkoop</option>
                                    <option value="4">Finance</option>
                                    <option value="5">Admin</option>
                                </select>
                                <div class="whitespace-form"></div>
                                <div class="whitespace-form"></div>
                                <div class="button-submit-form">
                                    <button type="submit">
                                        <div class="submit-form">
                                            Create new user
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-right-grid-right">
                            <div class="card-right-grid-right-text">
                                Barroc Intens
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-middle-bottom">
                <div class="wrapper">
                    <div class="collapsible">
                        <input type="checkbox" id="collapsible-head">
                        <label for="collapsible-head">Onderdelen</label>
                        <div class="collapsible-text" id="collapsible-text">
                            <div class="collapsible-grid">
                                @foreach($items as $item)
                                <div class="collapsible-grid-item">
                                    {{$item->item}}
                                </div>
                                @endforeach
                            </div>
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