<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barroc intens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="/css/welcome.css">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }
        body{
            background: url(bg.jpg);
            background-size: cover;
            height: 100vh;
            background-position: center;
        }
        /*----------------------------------------- begin navbar-----------------------------------------*/ 
        header{
            width:100%;
            height: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            z-index: 99;
            background: rgba(0, 0, 0, 0.16);
            margin-top: -1155px;


        }
        #chk1{
            display: none;
            
            
        }
        i{
            color: #fff;
            cursor: pointer;
        }
            header .logo{
            flex: 1;
            color:#fff;
            
            margin-left: 50px;
            text-transform: uppercase;
            font-size: 15px;
        }
        header .search-box{
            flex: 1;
            position: relative;
        }
            .search-box input{
            width:100%;
            height: 40px;
            border: none;
            outline: none;
            background:#f2f2f2;
            border-radius: 30px;
            color:gray;
            font-size: 16px;
            padding-left: 5px;
            padding-right: 40px;
            text-align: center;
            
        }
        
            /*.search-box button{
            cursor: pointer;
            width:40px;
            height: 40px;
            border-radius: 30px;
            border:none;
            position: absolute;
            top:0;
            right: 0;
            transform: scale(0.9);
            background: green;
            color: #fff;
            }*/
        header ul {
            flex:2;
            display: flex;
            justify-content: space-evenly;
        }
        header ul li{
                list-style: none;
        }
        header ul li a{
                text-decoration: none;
                color:#fff;
                font-weight: 600;
                text-transform: uppercase;
                padding: 10px 15px;
        }
        header ul li a:hover{
                border-bottom: 2px solid #ffd700;
                border-top: 2px solid #ffd700;

        }
        header .menu{
                font-size: 2.5em;
                display: none;
                }
            /*@media(max-width:1000px){
            .search-box button{
                    position: absolute;
                }*/
        header ul{
            
            top: 100px;
            right: -100%;

            width: 50%;

            align-items: center;
            transition: right 0.5s linear;
            margin-top: 0px;

        }
            
        header .menu{
                display: block;
                width:100px;
                text-align: center;
        }

        .active {
                border-bottom: 2px solid #ffd700;
                border-top: 2px solid #ffd700;
                border-right: 2px solid #ffd700;
                border-left: 2px solid #ffd700;
                border-radius: 7px;
            } 

            /*------------------------------------------------einde nav -------------------------------------*/

             /*------------------------------------------------begin cards-------------------------------------*/

            :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 4rem;
  margin: 1rem 10vw;
  padding: 0;
  list-style-type: none;
  position: relative;
  top: 0px;
  left: 0px;
  grid-template-columns: 1fr auto;
}

.card {
  position: relative;
  display: block;
  height: 350px;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
    width: 100%;
    height: 310px;
    background-color: #cbcbcb;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #252525;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #252525;  
}

.card__status {
  font-size: .8em;
  color: #252525;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #515151;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/*---------------------------------einde cards---------------------------*/

        .grid-container {
                display: grid;
               
        }

        .grid-item {
               
                font-size: 30px;
             }

        .grid-item-imagebanner{
                    display: grid;
                    
            }

        .grid-item-image-left{
                display:grid;
                padding:10px;
                height:160px;
                width:35%;
                background-color:#fff;
                margin-left: 100px;
                margin-top: 60px;
                border-radius: 10px;
                background-image: url("/img/catprodfin.png");
                    
            }

            .grid-item-image-right{
                display:grid;
                padding:10px;
                height:160px;
                width:35%;
                background-color:#fff;
                margin-left: 900px;
                margin-top: -160px;
                border-radius: 10px;
                    
            }

           


        </style>






    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


<!--product pagina code-->

<header>

        <div class="logo"><img src="/img/barroc1.png" alt="5 Terre" width="auto" height="auto" ></div>
            <div class="search-box">
                <!--<form>
                    <input type ="text" name ="search" id ="srch" placeholder="Search">
                    <button type ="submit"><i class="fa fa-search"></i></button>
                </form>-->
            </div>
            <ul>
                <li><a class="active" href="http://barrocintens.test/webshop/product">home</a></li>
                <li><a href="http://barrocintens.test/webshop/product">apparaten</a></li>
                <li><a href="http://barrocintens.test/webshop/koffiebonen">koffiebonen</a></li>
                <li><a href="#">Contact</a></li>

                @if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="">Log in</a></li>
                    @endauth
                
                @endif

            </ul>

    </header>

<main><div class="grid-container">
        <div class="grid-item-imagebanner"><img src="/img/barrocbanner2.png" alt="5 Terre" width="1550" height="auto"></div> 


    <ul class="cards">
    <li>
        <a href="http://barrocintens.test/webshop/product" class="card">
        <img src="/img/bannercoffee1.png" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__header-text">
                <h3 class="card__title">Onze apparaten</h3>            
                <span class="card__status"></span>
            </div>
            </div>
            <p class="card__description">Wij van Barroc Intens hebben een ruim assortiment aan top kwaliteit Koffie machines.</p>
        </div>
        </a>      
    </li>  
    
    <li>
        <a href="http://barrocintens.test/webshop/koffiebonen" class="card">
        <img src="/img/bannercoffe2.png" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__header-text">
                <h3 class="card__title">Onze koffiebonen</h3>            
                <span class="card__status"></span>
            </div>
            </div>
            <p class="card__description">Wij van Barroc Intens hebben een zeer ruim assortiment aan kwaliteit koffiebonen.</p>
        </div>
        </a>      
    </li> 


    </ul>

    

    
    </div></main>


            
<!--onder deafbeelding-->

    <div class="">
    </div>

 

</body>
</html>

