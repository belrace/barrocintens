@extends('dashboards/base')

@section('sidebar')
@include('dashboards.maintenance.sidebar')
@endsection

@section('app')
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    use Carbon\Carbon;
    ?>
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
            padding-bottom: 50px;
        }

        .top-grid {
            padding-top: 100px;
            padding-bottom: 50px;
            padding-left: 50px;
            padding-right: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .logo-here {
            justify-content: right;
            align-items: center;
            display: flex;
        }

        .top-text {
            justify-content: left;
            align-items: center;
            display: flex;
        }

        .divider {
            margin-left: 50px;
            margin-right: 50px;
            border-radius: 10px;
            width: auto;
            height: 5px;
            background-color: #ffd700;
        }

        .title {
            font-size: 2.8rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
        }

        .date {
            font-size: 1rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-style: italic;
        }

        .middle-grid {
            padding-top: 50px;
            padding-left: 50px;
            padding-right: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10%;
        }

        .opdracht {
            border-color: #ffd700;
            border-style: solid;
            border-radius: 10px;
            background-color: #4D4D4D;
            height: auto;
            color: white;
        }

        .opdracht-top {
            padding-left: 2.5%;
            padding-bottom: 1.5%;
            padding-top: 1.5%;
            font-size: 1.25rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            background-color: #ffd700;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .opdracht-bottom {
            padding-left: 2.5%;
            padding-bottom: 1.5%;
            padding-top: 1.5%;
            font-size: 1rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-style: italic;
        }

        .uren {
            border-color: #ffd700;
            border-style: solid;
            border-radius: 10px;
            height: auto;
            color: white;
            margin-left: 50px;
            margin-right: 50px;
            background-color: #4D4D4D;
        }

        .uren-grid-1 {
            padding-top: 50px;
            padding-bottom: 25px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .uren-grid-2 {
            padding-top: 25px;
            padding-bottom: 50px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .uren-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: right;
            align-items: center;
        }

        .uren-top {
            padding-left: 2.5%;
            padding-bottom: 1%;
            padding-top: 1%;
            font-size: 1.25rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            background-color: #ffd700;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .divider-2 {
            margin-left: 2.5%;
            margin-right: 2.5%;
            border-radius: 10px;
            width: auto;
            height: 1px;
            background-color: #ffd700;
        }

        .Materials {
            border-color: #ffd700;
            border-style: solid;
            border-radius: 10px;
            height: auto;
            color: white;
            margin-left: 50px;
            margin-right: 50px;
            background-color: #4D4D4D;
        }

        .Materials-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: right;
            align-items: center;

        }

        .Materials-grid-1 {
            padding-top: 50px;
            padding-bottom: 25px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .Materials-grid-2 {
            padding-top: 25px;
            padding-bottom: 50px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .Materials-top {
            padding-left: 2.5%;
            padding-bottom: 1%;
            padding-top: 1%;
            font-size: 1.25rem;
            color: white;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            background-color: #ffd700;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .white-space {
            height: 50px;
        }

        .right {
            justify-content: right;
            align-items: center;
            display: flex;
            padding-right: 2.5%;
        }

        .modal-btn {
            background-color: #E6C300 !important;
            padding: 6px;
            font-size: 0.85em;
            border-radius: 10px;
            color: white;
        }

        .modal-btn:hover {
            background-color: #CCAD00 !important;

        }

        .icon {
            color: red;
        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body>
    <div class="white">
    </div>
    <div class="box">
        <div class="top-grid">
            <div class="top-text">
                <div>
                    <div class="title">
                        Werkbon
                    </div>
                    <div class="date">
                        20-10-2022
                    </div>
                </div>
            </div>
            <div class="logo-here">
                <img src="https://cdn.discordapp.com/attachments/917847326951870514/1032578945171853342/unknown.png" alt="">
            </div>
        </div>
        <div class="divider"></div>
        <div class="middle-grid">
            <div class="opdracht">
                <div class="opdracht-top">
                    Opdrachtgever
                </div>
                <div class="opdracht-bottom">
                    {{ $werkbon->Companies->name }}
                    <br>
                    {{ $werkbon->Companies->street }} {{ $werkbon->Companies->house_number }}
                    <br>
                    {{ $werkbon->Companies->zipcode }} {{ $werkbon->Companies->city }}
                </div>
            </div>
            <div class="opdracht">
                <div class="opdracht-top">
                    Opdrachtnemer
                </div>
                <div class="opdracht-bottom">
                    {{ $werkbon->user->name }}
                    <br>
                    bedrijfsweg 1
                    <br>
                    4551 GX ergens
                </div>
            </div>
        </div>
        <div class="white-space"></div>
        <div class="uren">
            <div class="uren-top">
                <div class="uren-top-grid">
                    <div class="left">Gewerkte uren</div>
                    <div class="right">
                        <button class="modal-btn" type="button" data-modal-toggle="uren-modal">
                            Toevoegen
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
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Voeg gewerkte uren
                                            toe</h3>
                                        <form class="space-y-6" action="{{ route('dashboard.werkuren.store') }}" method="post">
                                            @csrf
                                            <div>
                                                <label for="DatumL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Datum:</label>
                                                <input type="date" name="date" id="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                                                <label for="VanL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Van:</label>
                                                <input type="time" name="from" id="from" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                                                <label for="TotL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Tot:</label>
                                                <input type="time" name="until" id="until" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                                                <label for="UurtariefL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Uurtarief:</label>
                                                <input type="text" name="hourlypay" id="hourlypay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <input type="hidden" name="werkbon_id" value="{{ $werkbon->id }}">
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
                </div>
            </div>
            <div class="uren-middle">
                <div class="uren-grid-1">
                    <div>Datum</div>
                    <div>Van</div>
                    <div>Tot</div>
                    <div>Totaal</div>
                    <div>Uurtarief</div>
                    <div>Bedrag</div>
                </div>
                <div class="divider-2"></div>
            </div>
            <div class="uren-bottom">
                <div class="uren-grid-2">
                    @foreach ($hours as $hours)
                    <div>{{ $hours->date }}</div>
                    <div>{{ $hours->from }}</div>
                    <div>{{ $hours->until }}</div>
                    <div>
                        <?php
                        $diff = Carbon::parse($hours->until)->diffInSeconds(Carbon::parse($hours->from));
                        ?>
                        {{ gmdate('H:i:s', $diff) }}
                    </div>
                    <div>€ {{ $hours->hourlypay }}</div>
                    <div>€ {{ ($diff * $hours->hourlypay) / 60 / 60 }}</div>
                    <div>
                        <button type="button" data-modal-toggle="popup-modal">
                            <i class='bx bx-trash icon'></i>
                        </button>
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                        <form action="{{ route('dashboard.werkuren.destroy', $hours->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                        </form>
                                        <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="white-space"></div>
        <div class="Materials">
            <div class="Materials-top">
                <div class="Materials-top-grid">
                    <div class="left">Materialen</div>
                    <div class="right">
                        <button class="modal-btn" type="button" data-modal-toggle="Materialen-modal">
                            Toevoegen
                        </button>
                        <div id="Materialen-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="Materialen-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Materialen</h3>
                                        <form class="space-y-6" action="{{ route('dashboard.materialen.store') }}" method="post">
                                            @csrf
                                            <div>
                                                <label for="ArtikelL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Artikel:</label>
                                                <select name="material_id" id="Artikel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    @foreach ($materials as $material)
                                                    <option value="{{ $material->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        {{ $material->item }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="werkbon_id" value="{{ $werkbon->id }}">

                                                <label for="StuksL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    aantal:</label>
                                                <input type="text" name="amount" id="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
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
                </div>
            </div>
            <div class="Materials-middle">
                <div class="Materials-grid-1">
                    <div>Artikel</div>
                    <div>Eenheid</div>
                    <div>Stukprijs</div>
                    <div>Aantal</div>
                    <div>Bedrag</div>
                </div>
                <div class="divider-2"></div>
            </div>
            <div class="Materials-bottom">
                <div class="Materials-grid-2">
                    @foreach ($items as $item)
                    <div>{{ $item->Materials->item }}</div>
                    <div>{{ $item->Materials->unit }}</div>
                    <div>€ {{ $item->Materials->prijs }}</div>
                    <div>{{ $item->amount }}</div>
                    <div>€ {{ $item->amount * $item->Materials->prijs }}</div>
                    <div>
                        <button type="button" data-modal-toggle="popup-modal">
                            <i class='bx bx-trash icon'></i>
                        </button>
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                        <form action="{{ route('dashboard.materialen.destroy', $item->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                        </form>
                                        <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection