<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/index')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/feature')}}"
                       >
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>

            </ul>
            <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                <button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>



        </div>
    </nav>

</div>
</header>