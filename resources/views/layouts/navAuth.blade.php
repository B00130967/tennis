<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<ul class="nav navbar-nav pull-right"> 
    @if (Auth::guest())
        <li><a href="{{route('register')}}">Register <i class="fa fa-user"></i></a></li> 
        <li><a href="login">Login <i class="fa fa-key"></i></a></li> 
    @else{
        <li><a href="logout">Logout <i class="fa fa-sign-out"></i> </a></li> 
    @endif
</ul>