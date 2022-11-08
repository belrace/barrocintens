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

        /* .divider-2 {
                width: auto;
                height: 5px;
                background-color: #ffd700;
            } */

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
            background-color: #7D6A00;
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
            background-color: #7D6A00;
        }

        .uren-grid-1 {
            padding-top: 50px;
            padding-bottom: 25px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .uren-grid-2 {
            padding-top: 25px;
            padding-bottom: 50px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .uren-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: right;
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
            background-color: #7D6A00;
        }

        .Materials-top-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: right;
        }

        .Materials-grid-1 {
            padding-top: 50px;
            padding-bottom: 25px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            gap: 10%;
        }

        .Materials-grid-2 {
            padding-top: 25px;
            padding-bottom: 50px;
            padding-left: 2.5%;
            padding-right: 2.5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
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
                    Bedrijf
                    <br>
                    bedrijfsweg 1
                    <br>
                    4551 GX ergens
                </div>
            </div>
            <div class="opdracht">
                <div class="opdracht-top">
                    Opdrachtnemer
                </div>
                <div class="opdracht-bottom">
                    Bedrijf
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
                        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="uren-modal">
                            Toggle modal
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
                    <div>Totaal</div>
                </div>
                <div class="divider-2"></div>
            </div>
            <div class="uren-bottom">
                <div class="uren-grid-2">
                    @foreach ($hours as $hour)
                    <div>{{ $hour->date }}</div>
                    <div>{{ $hour->from }}</div>
                    <div>{{ $hour->until }}</div>
                    <div>1</div>
                    <div>{{ $hour->hourlypay }}</div>
                    <div>€692.50</div>
                    @endforeach
                </div>
                <!-- <div class="divider-2"></div> -->
            </div>
        </div>
        <div class="white-space"></div>
        <div class="Materials">
            <div class="Materials-top">
                <div class="Materials-top-grid">
                    <div class="left">Materialen</div>
                    <div class="right">
                        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="Materialen-modal">
                            Toggle modal
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
                                                <select name="Artikel" id="Artikel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    @foreach ($materials as $material)
                                                    <option value="{{ $material->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        {{ $material->item }}
                                                    </option>
                                                    @endforeach
                                                </select>

                                                <label for="StuksL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    aantal:</label>
                                                <input type="text" name="Stuks" id="Stuks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
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
                    <div>Stuks</div>
                    <div>Bedrag</div>
                </div>
                <div class="divider-2"></div>
            </div>
            <div class="Materials-bottom">
                <div class="Materials-grid-2">
                    @foreach ($werkbon_materials as $werkbon_material)
                    <div>{{ $werkbon_material->werkbon_id }}</div>
                    <div>{{ $werkbon_material->werkbon_id }}</div>
                    <div>€692.50</div>
                    @endforeach
                </div>
                <!-- <div class="divider-2"></div> -->
            </div>
        </div>
    </div>

</body>

</html>
@endsection