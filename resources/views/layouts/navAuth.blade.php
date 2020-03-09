

<ul class="nav navbar-nav pull-right"> 
    @if (!Auth::guest()){
        <li><a href="register">Reister<i class="fas fa-user-plus"></i></a></li> }
        <li><a href="login">Login<i class="fas fa-sign-in-alt"></i></a></li> }
    @else{
        <li><a href="logout">Logout <i class="fas fa-sign-out-alt"></i></a></li> }
    @endif
</ul>