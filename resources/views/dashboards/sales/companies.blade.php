@extends('dashboards/base')

@section('sidebar')
    @include('dashboards.sales.sidebar')
@endsection

@section('app')
    <div


    @section('app')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6">

                <!-- Modal toggle -->
                <div class="flex mb-2">
                    <button
                        style="background-color: #212121; color: #ffd700; "
                        class="block text-white hover:bg-blue-800   rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 mr-2"
                        type="button" data-modal-toggle="authentication-modal">
                        Voeg bedrijf toe
                    </button>
                </div>
                <!-- include flowbite -->
                <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
                <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform
                                </h3>
                                <form class="space-y-6" action="{{ route('dashboard.companies.store') }}" method="post">

                                    @csrf
                                    <div>
                                        <label for="compname"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naam</label>
                                        <input type="text" name="compname" id="compname"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                               placeholder="Barroc Intens" >
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="telnr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefoonnummer </label>
                                        <input type="tel" id="telnr" name="telnr"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="0612345678" >
                                    </div>
                                    <div>
                                        <label for="street"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Straatnaam</label>
                                        <input type="text" name="street" id="street"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                               placeholder="Bredaseweg" >
                                    </div>
                                    <div>
                                        <label for="housenr"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Huisnummer</label>
                                        <input type="number" name="housenr" id="housenr"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                               placeholder="50" >
                                    </div>
                                    <div>
                                        <label for="city"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stad</label>
                                        <input type="text" name="city" id="city"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                               placeholder="Breda" >
                                    </div>
                                    <div>
                                        <label for="country_code"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefoonnummer voorvoegsel</label>
                                        <input type="text" name="country_code" id="country_code"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                               placeholder="+31" >
                                    </div>

                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Opslaan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="product-table">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400" style="background: #212121; color: #ffd700;">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Bedrijfs naam
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Telefoon Nummer
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Straatnaam
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Huisnummer
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Stad
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Telefoonnummer voorvoegsel
                            </th>
                            <th scope="col" class="py-3 px-6">
                                BKR-check
                            </th>
                            <th colspan="2" scope="col" class="py-3 px-6">
                                Options
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr class="border dark:border-gray-700" >
                                <td class="py-4 px-6">
                                    {{ $company->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $company->phone }}
                                </td>
                                <td class="py-4 px-6">
                                    {{$company->street}}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $company->house_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $company->city }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $company->country_code }}
                                </td>
                                <td class="py-4 px-6">
                                    @if($company->bkr_checked_at == null)
                                        <form action="{{ route('dashboard.companies.update', $company->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button
                                                style="background-color: white; color: #212121; padding: 10px;  border-radius: 20px; width: max-content;">
                                                Check BKR
                                            </button>
                                        </form>
                                    @else {{ $company->bkr_checked_at }}
                                    @endif

                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('dashboard.companies.edit', $company->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Wijzig</a>
                                </td>
                                <td class="py-4 px-6">
                                    <form action="{{ route('dashboard.companies.destroy', $company->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Verwijder</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>





            </div>
        </div>
        </div>
        <style>
            td{
                width: max-content;
            }
        </style>
    @endsection
