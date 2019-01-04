
 
     <div id="mySidenav" class="sidenav">
        <div class="heading_sidebar">
            <h1 class="white text-uppercase">Resource</h1>
            <h2 class="white text-uppercase"> Centre</h2>
            <hr class="nav_separator">
        </div>


        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}" ><i class="fa fa-home"></i> Home</a>
        <a href="{{ url('walkthrough')}}" class="{{ Request::segment(1) === 'walkthrough' ? 'active' : null }}" ><i class="fa fa-download"></i> Walk Through</a>
        <a href="{{ url('download')}}" class="{{ Request::segment(1) === 'download' ? 'active' : null }}"><i class="fa fa-book"></i> Downloads</a>
        <a href="{{ url('faq')}}" class="{{ Request::segment(1) === 'faq' ? 'active' : null }}"> <i class="fa fa-bars"></i> FAQ</a>
        <a href="#"> <i class="fa fa-play-circle"></i> Media</a>
    </div>

    
        <nav id="main_nav" class="main_nav d-flex justify-content-between align-items-center px-3">
            <div class="hamburger_menu_container d-flex">
                <span onclick="openNav()" class="hamburger_menu_open" id="open_menu">&#9776;</span>
                <span onclick="closeNav()" class="hamburger_menu_closed" id="close_menu">&#9776;</span>
            </div>
            <h3 class="nav_heading flex-grow-1 text-center pt-2 pl-5"> Cyber security resource center</h3>
            <img src="https://res.cloudinary.com/aarav/image/upload/v1546607769/logo_gma1gq.png" class="img-responsive nav_logo">

        </nav>


  
        










    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
             document.getElementById("main_nav").style.marginLeft = "250px";
            document.getElementById("open_menu").style.visibility = "hidden";
            document.getElementById("close_menu").style.visibility = "visible";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
             document.getElementById("main_nav").style.marginLeft = "0";
            document.getElementById("open_menu").style.visibility = "visible";
            document.getElementById("close_menu").style.visibility = "hidden";

        }
    </script>

