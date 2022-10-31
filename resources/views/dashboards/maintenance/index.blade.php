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
                        <div class="dropdown">
                        <button class="dropbtn">werknemer</button>
                        <div class="dropdown-content">
                        <select name="user">
                             @foreach($notification as $notification)
                                <option value="{{ $notification->notification}}">{{ $user->users}}</option>
                            @endforeach
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
