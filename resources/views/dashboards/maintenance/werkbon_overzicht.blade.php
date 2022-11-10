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
            width: auto;
            height: auto;
            margin-left: 2.5%;
            margin-right: 2.5%;
            background-color: #3D3D3D;
            border-radius: 10px;
        }

        .itembox {
            padding-left: 45px;
            padding-right: 45px;
            padding-bottom: 45px;
            padding-top: 20px;
        }

        .item {
            background-color: #4D4D4D;
            color: white;
            padding: 5px;
            border-radius: 5px;
        }

        .item-grid {
            display: grid;
            padding-left: 10px;
            align-items: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
            grid-template-columns: 1fr 1fr;
        }

        .title {
            font-size: 2em;
        }

        .icon-arrow {
            justify-content: center;
            align-items: center;
            align-content: center;
            transform: rotate(180deg);
        }

        .top-btn {
            padding-left: 45px;
            padding-top: 45px;
            padding-right: 45px;
        }

        .content-top-btn {
            padding: 2.5px;
            background-color: #FFD700;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            color: white;
            font-size: 1.75em;
            width: 100%;
        }

        .content-top-btn:hover {
            scale: 1.02;
            background-color: #FFEC80;
        }

        .divider {
            height: 1px;
            width: 100%;
            background-color: #FFD700;
            opacity: 0.2;
            border-radius: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .button {
            background-color: #FFD700;
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
            display: flex;
            border-radius: 100px;
            font-size: 2.2em;
        }

        .button:hover {
            background-color: #FFEC80;
            scale: 1.1;
        }

        .btn-right {
            display: flex;
            justify-content: right;
        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body>
    <div class="white">
    </div>
    <div class="box">
        <div class="top-btn">
            <button class="content-top-btn" data-modal-toggle="uren-modal">
                Create Werkbon
            </button>
            <div id="uren-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="uren-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Maak een werkbon aan</h3>
                            <form class="space-y-6" action="{{ route('dashboard.werkbon.store') }}" method="post">
                                @csrf
                                <div>
                                    <label for="UurtariefL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        title:
                                    </label>
                                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="title" required>
                                    <br>
                                    <label for="UurtariefL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Bedrijven:
                                    </label>
                                    <select id="company" name='company_id'>
                                        @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Sla gegevens op
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="itembox">
            <div class="item">
                @foreach($werkbonnen as $werkbon)
                <div class="item-grid">
                    <div class="title">
                        {{$werkbon->Companies->name}}
                        -
                        {{$werkbon->title}}
                    </div>
                    <div class="btn-right">
                        <a href="/dashboard/maintenance/werkbon/{{$werkbon->id}}">
                            <div class="button">
                                <i class='bx bx-chevron-right'></i>
                            </div>
                        </a>
                    </div>
                </div>
                @if($werkbon->id == $lastWerkbon->id)
                @else
                <div class="divider"></div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
@endsection