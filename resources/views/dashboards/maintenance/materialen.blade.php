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
        .collapsible-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 200px);
            grid-gap: 20px;
            color: #fff;
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
    </style>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body>
    <div class="white">
    </div>
    <div class="box">
        <div class="content">
            <div class="collapsible-grid">
                @foreach ($items as $item)
                <div class="collapsible-grid-item">
                    {{ $item->item }}
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
@endsection