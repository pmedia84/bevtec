<?php
//page Meta
$page_url="https://www.bevtecltd.com/about";
$meta_title = "About Us - Bevtec Ltd";
$meta_desc = "Find out Bevtec ltd and our specialist engineering support for the beverage industry ";
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <?php include("assets/inc/_head.php"); ?>
</head>

<body>
    <?php include("assets/inc/_nav.php"); ?>
    <header class="hero">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="hero-banner">
                        <h1 class="display-3">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-4 mb-5">Welcome to Bevtec Ltd</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <p class="lead">At BEVTEC ltd we specialize in engineering support for the beverage industry.</p>
                    <p>All our engineers are time served with a vast amount of knowledge of all sectors of production and maintenance in the food and beverage sector. We pride ourselves on our professional work standards and our willingness to learn new things as we believe that every day is a learning day.</p>
                </div>
                <div class="col-md-6"><img class="rounded img-fluid object-fit-cover" loading="lazy" src="assets/img/production-line-2.webp"></div>
            </div>
        </div>
    </section>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 w-100">
            <div class="col order-md-first">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/cans-img.webp">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
            <div class="col d-md-flex order-first justify-content-md-start align-items-md-end order-md-1">
                <div style="width: 80%;">
                    <h2 class="display-6">What we offer</h2>
                    <ul class="list-unstyled">
                        <li>Shift cover</li>
                        <li>Specialist training</li>
                        <li>Overhauls</li>
                        <li>Installation services</li>
                        <li>Project management</li>
                        <li>CDM management</li>
                        <li>Fabrication services</li>
                        <li>Electrical services</li>
                        <li>Modular maintenance packages</li>
                    </ul>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/production-line-3.webp">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/production-line.webp">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white border rounded border-0 border-primary d-flex justify-content-between p-4 p-md-5 bg-secondary">
                <div class="pb-2 pb-lg-1" style="max-width: 75%;">
                    <h2 class="fw-bold mb-2">Find out how we can help your business!</h2>
                    <p class="mb-0 lead">Get in touch with us to find out more about our business and how over 25 years of experience will benefit your business.</p>
                </div>
                <div class="my-2" style="max-width: 100%;"><a class="btn fs-5 py-2 px-4 btn-primary" role="button" href="contact">Contact Us</a></div>
            </div>
        </div>
    </section>
    <?php include("assets/inc/_footer.php"); ?>
</body>

</html>