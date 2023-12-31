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
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Category</h3>
                            <form class="space-y-6" action="{{ route('dashboard.categorys.update', $editcategory->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div>
                                    <label for="name"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category
                                        Name</label>
                                    <input type="name" name="catname" id="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                           placeholder="Category Name" value="{{ old('catname', $editcategory->name) }}" required>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="employeeonly" name="employeeonly" type="checkbox" @if ($editcategory->is_employee_only == 1) checked @endif value="{{ old('employeeonly', $editcategory->is_employee_only ) }}"
                                                   class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                        </div>
                                        <label for="remember"
                                               class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alleen
                                            voor werknemers</label>
                                    </div>
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
