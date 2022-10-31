@extends('dashboards/inkoop/index')

@section('app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <!-- Modal toggle -->
            <div class="flex mb-2">
                <button
                    style="background-color: #212121; color: #ffd700; "
                    class="block text-white hover:bg-blue-800   rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 mr-2"
                    type="button" data-modal-toggle="authentication-modal">
                    Add product
                </button>
                <input type="text" id="searchbrand" onkeyup="searchBrand()" class="rounded" placeholder="Zoeken op merk..">
            </div>
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
                            <form class="space-y-6" action="{{ route('dashboard.products.store') }}" method="post"
                                enctype="multipart/form-data">

                                @csrf
                                <div>
                                    <label for="productname"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naam</label>
                                    <input type="text" name="productname" id="productname"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="DeLonghi Diamica 500" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="productdescription"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Beschrijving</label>
                                    <textarea id="productdescription" name="productdescription" rows="6"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Dit is een bonenapparaat bla bla bla...   "></textarea>
                                </div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="productimage">Voeg bestand toe</label>
                                <input name="productimage"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" type="file">
                                <div>
                                    <label for="productbrand"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naam</label>
                                    <input type="text" name="productbrand" id="productbrand"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                           placeholder="DeLonghi" required>
                                </div>
                                <div>
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prijs</label>
                                    <input type="number" id="price" name="price"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="10.00" required>
                                </div>
                                <div>
                                    <select id="categorieid" name="categorieid"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Kies een Categorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                        @endforeach
                                    </select>
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
                            Product naam
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Beschrijving
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Afbeelding
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Categorie
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Merk
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th colspan="2" scope="col" class="py-3 px-6 text-center ">
                            Options
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="border dark:border-gray-700" >
                            <td class="py-4 px-6">
                                {{ $product->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $product->description }}
                            </td>
                            <td class="py-4 px-6">
                                <img src="/img/{{$product->image_path}}" alt="">
                            </td>
                            <td class="py-4 px-6">
                                {{ $product->category->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $product->brand }}
                            </td>
                            <td class="py-4 px-6">
                                €{{ $product->price }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="{{ route('dashboard.products.edit', $product->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Wijzig</a>
                            </td>
                            <td class="py-4 px-6">
                                <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="post">
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
@endsection
<script>
    function searchBrand() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchbrand");
        filter = input.value.toUpperCase();
        table = document.getElementById("product-table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[4];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
