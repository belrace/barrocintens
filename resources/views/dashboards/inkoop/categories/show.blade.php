@extends('dashboards.inkoop.index')
@section('app')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <!-- Modal toggle -->
            <button
                style="background-color: #212121; color: #ffd700; "
                class="block text-white hover:bg-blue-800   rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 mr-2 mb-2"
                type="button" data-modal-toggle="authentication-modal">
                Add category
            </button>
            <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"/>
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
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Voeg een categorie
                                toe</h3>
                            <form class="space-y-6" action="{{ route('dashboard.categorys.store') }}" method="post">
                                @csrf
                                <div>
                                    <label for="name"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category
                                        Name</label>
                                    <input type="name" name="catname" id="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                           placeholder="Category Name" required>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="employeeonly" name="employeeonly" type="checkbox" value="1"
                                                   class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                        </div>
                                        <label for="remember"
                                               class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alleen
                                            voor werknemers</label>
                                    </div>
                                </div>
                                <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Voeg categorie toe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto relative">
                <table class="text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase dark:text-gray-400" style="background: #212121; color: #ffd700;">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product categorie
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Alleen voor medewerker
                        </th>
                        <th scope="col" colspan="2" class="py-3 px-6 text-center">
                            Options
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr class="border dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->name }}
                            </th>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if($category->is_employee_only == 1)
                                    Ja
                                @else
                                    Nee
                                @endif
                            </th>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('dashboard.categorys.edit', $category->id) }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Wijzig
                                </a>
                            </th>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <form action="{{ route('dashboard.categorys.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Verwijder
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    .categorie {
        width: 400px;
    }

    .btncategorie {
        font-size: large;
    }

</style>
