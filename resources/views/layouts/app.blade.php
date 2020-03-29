 

<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>TennisClub</title> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 




        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css"> 
    </head> 
    <body > 
        <nav class="navbar navbar-default navbar-static-top"> 
            <ul class="nav navbar-nav"> 
                <li><a href={{ route("members.index")}}>Member List</a></li> 
                <li><a href={{ route("members.create")}}>New Member</a></li> 
		        <li><a href={{ route("bookings.index")}}>Booking List</a></li> 
                <li><a href={{ route('calendar.display')}}>Booking Calendar <i class="fa fa-calendar"></i> </a></li> 
            </ul> 
            @include('layouts.navAuth')
        </nav> 
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> @yield('content') </div> 
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
         </div> 
    </body> 
