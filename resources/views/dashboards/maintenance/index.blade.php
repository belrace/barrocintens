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
        <title>factuur</title>
        <style>
            * {
                color: white;
                text-decoration: none;
            }

            body {
                background-color: #212121;
                font-family: Arial, sans-serif;
            }

            .box-fac {
                box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
                max-width: 1080px;
                /*height: 100px;*/
                margin: auto;
                text-align: center;
                font-family: arial;
                background-color: #fff;
                margin-bottom: 1px;
                color: black;
                padding-top: 15px;
                padding-bottom: 40px;
            }


            .noti-txt{
                color: #000;
                text-align: left;
                padding-left: 10px;
            }

            .white{
                margin-top:25px;
            }

            .title-noti{
                padding-left:15%;
                font-size: 25px;
            }
            
            .dropbtn {
                background-color: #ffd700;
                color: #000;
                padding: 16px;
                font-size: 16px;
                border: none;
                border-radius:10px;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                border-radius:10px;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            

            .dropdown-content a:hover {background-color: #ddd; border-radius:10px;}

            .dropdown:hover .dropdown-content {display: block; }

            .dropdown:hover .dropbtn {background-color: #af9400;}

        </style>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    </head>

    <body>

    <div class="title-noti">
            maintenance meldingen:
    </div>

    <div class="white">
        @foreach($notifications as $notification)
        <div class="box-fac">

                <div class="noti-txt">
                    {{$notification->title}}<br/>
                    {{$notification->description}}
                    
                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="uren-modal">
                            open menu
                        </button>
                        <div id="uren-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="uren-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close menu</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Voeg een werknemer toe</h3>
                                        <form class="space-y-6" action="" method="post">
                                            @csrf
                                            <div>
                                                <label for="DatumL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Werknemers:</label>
                                                    <select name="werknemer" id="werknemer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        {{ $user->name }}
                                                    </option>
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
                            
    </select>

                        </div>
    </div>
                </div>

                
        </div>
        @endforeach
        </div>


    </body>

    </html> 
@endsection
