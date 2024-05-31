<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/ball.png') }}" alt="" style="width : 70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/mypost">Mypost</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile">MyProfile</a></li>
                <button class="btn btn-warning" id="sidebarToggle"><img src="{{ asset('assets/images/filter.png') }}" alt="" style="width : 20px;">filter</button>
            </ul>
        </div>
    </div>
</nav>