<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Curry Map-Chiayi</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"> </script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" /> 
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>        

    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Find Your Destined Curry</span>
                <span class="site-heading-lower"><a class="nav-link text-uppercase" href='Curry.php'>Curry Map</span>
            </h1>
        </header>
        <!-- Navigation-->
        <!-- uk-sticky將bar固定在網頁最上方 -->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href='Curry.php'>Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto" >
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Northern.html">Northern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Central.html">Central</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Southern.html">Southern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Eastern.html">Eastern</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Section -->
        <section class="page-section cta">
            <div class=" container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                       <!-- data-accordion-trigger="" <div class="cta-inner bg-faded text-center rounded"><span class="text-start">店名</span><span>嘉義市</span></div> -->
                        <div class="cta-inner bg-faded text-center rounded" >
                        <ul uk-accordion>
                            <!-- class="uk-open" -->
                            <li ><a class="uk-accordion-title"href="#"></a>
                                <span>嘉義市 / 西區</span></br>
                                    <h4>向午粮品 手作料理</h4>
                                <div class="uk-accordion-content">
                                    <hr size="3" color="#411D00"> <!--中間分隔線-->
                                        <div  class="uk-card uk-card-default uk-card-body uk-margin-small">
                                            <a href="https://goo.gl/maps/T45zC7GNoaerhCgn9" target="_blank">600024嘉義市西區建成街20號</a>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                                        </div>
                                        <div class="uk-card uk-card-default uk-card-body uk-margin-small">
                                             <a href="https://www.facebook.com/%E5%90%91%E5%8D%88%E7%B2%AE%E5%93%81-110761128126965/" target="_blank" class="uk-margin-small-right"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                        <div class="uk-card uk-card-default uk-card-body uk-margin-small">
                                            <span class="uk-margin-small-right" uk-icon="reciver"></span>
                                            <a href="tel:0979 570 668">0979 570 668</a>
                                        </div>
                                </div> 
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                       <!-- data-accordion-trigger="" <div class="cta-inner bg-faded text-center rounded"><span class="text-start">店名</span><span>嘉義市</span></div> -->
                        <div class="cta-inner bg-faded text-center rounded" >
                        <ul uk-accordion>
                            <!-- class="uk-open" -->
                            <li ><a class="uk-accordion-title"href="#"></a>
                                <span>縣市 / 區域</span></br>
                                    <h4>店名</h4>
                                <div class="uk-accordion-content">
                                    <!-- <hr size="3" color="#411D00"> 中間分隔線 -->
                                        <div  class="uk-card uk-card-default uk-card-body uk-margin-small">
                                            <a href="地圖網址" target="_blank">地址</a>
                                        </div>
                                        <div class="uk-card uk-card-default uk-card-body uk-margin-small">
                                             <a href="臉書網址" target="_blank" class="uk-margin-small-right"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                        <div class="uk-card uk-card-default uk-card-body uk-margin-small">
                                            <span class="uk-margin-small-right" uk-icon="reciver"></span>
                                            <a href="tel:0979 570 668">電話</a>
                                        </div>
                                </div> 
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>   
        </section>

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; CurryMap</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>