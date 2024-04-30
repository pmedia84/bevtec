<nav class="navbar navbar-expand-md fixed-top bg-body navbar-shrink py-3 navbar-light" id="mainNav" data-bs-theme="light">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="assets/img/bevtec-logo.png" style="max-width: 75px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav d-lg-flex d-xxl-flex ms-auto">
                    <li class="nav-item"><a class="nav-link <?php if(str_contains($_SERVER['REQUEST_URI'], 'index') || str_contains($_SERVER['REQUEST_URI'], ""))echo"active";?>" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(str_contains($_SERVER['REQUEST_URI'], 'contact'))echo"active";?>" href="contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(str_contains($_SERVER['REQUEST_URI'], 'about'))echo"active";?>" href="about">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>