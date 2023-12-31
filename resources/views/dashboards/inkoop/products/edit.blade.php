@extends('dashboards/inkoop/index')
@section('app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"/>
            <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
            <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1"
                 class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
                 aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Product</h3>
                            <form class="space-y-6" action="{{ route('dashboard.products.update', $editproduct->id) }}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div>
                                    <label for="productname"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naam</label>
                                    <input type="text" name="productname" id="productname"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                           placeholder="DeLonghi Diamica 500"
                                           value="{{ old('productname', $editproduct->name) }}" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="productdescription"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Beschrijving</label>
                                    <textarea id="productdescription" name="productdescription" rows="6"
                                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                              placeholder="Dit is een bonenapparaat bla bla bla...   ">{{ old('productdescription', $editproduct->description) }}</textarea>
                                </div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                       for="productimage">Voeg bestand toe</label>
                                <input name="productimage"
                                       class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       id="file_input" type="file"
                                       value="{{ old('productimage', $editproduct->image_path) }}">
                                <div>
                                    <label for="productbrand"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naam</label>
                                    <input type="text" name="productbrand" id="productbrand"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                           placeholder="DeLonghi" value="{{ old('productbrand', $editproduct->brand) }}" required>
                                </div>
                                <div>
                                    <label for="price"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prijs</label>
                                    <input type="number" id="price" name="price"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="10.00" value="{{ old('price', $editproduct->price) }}" required>
                                </div>
                                <div>
                                    <select id="categorieid" name="categorieid"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($categories as $categorie)
                                            @if($editproduct->product_category_id == $categorie->id)
                                                <option selected
                                                        value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @else
                                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Wijzig
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
