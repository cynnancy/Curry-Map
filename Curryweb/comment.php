<?php

	if( isset($_COOKIE['message']) )
	{
		$message = $_COOKIE['message'];
		setcookie('message','');
	}
	else
	{
		$message = '';
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.css"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Curry Map-食記</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"> </script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" /> 
        <link href="css/uikit.css" rel="stylesheet" />
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="comment.php">Dining Brief</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/dining_brief.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">record your feelings</span>
                                    <a class="section-heading-lower" href = "board.php">Dining Brief</a>
                                </h2>
                                <form action="insert_comment.php" method="post">
                                <div class="uk-margin">
                                    <input type="text" class="form-control input-lg" name="author" placeholder="Author">
                                </div>
                                <div class="uk-margin">
                                    <input type="text" class="form-control input-lg" name="store_names" rows="5" placeholder="Store Name" required="required">
                                </div>
                                <div class="uk-margin">
                                    <textarea class="form-control" name="comment" rows="5" placeholder="Comment" required="required"></textarea>
                                </div>
                                <!-- <div class="uk-margin">
                                    <form action="Week5/check_code" method="post">
                                        <input type="text" class="form-control input-lg" name="user_code" placeholder="驗證碼" required="required">
                                    </form>
                                </div>
                                <div class="uk-margin">
									<img src=<?= $image ?> name="img">
									<a href="comment.php" class="uk-button uk-button-link">Refresh</a>
                                </div> -->
                                <!-- 上傳照片
                                <div class="uk-margin" uk-margin>
                                    <div uk-form-custom="target: true">
                                        <input type="file">
                                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                    </div>
                                    <button class="uk-button uk-button-default">Upload</button>
                                </div> -->
                                    <div class="uk-flex uk-flex-center">
                                        <div class="uk-margin">
                                        <?php if( $message ): ?>
									        <div class="alert alert-warning" role="alert"><?php echo $message; ?></div>
								        <?php endif; ?>
                                            <button type="submit" name="Insert" class="uk-button uk-button-default uk-margin-left" href="board.php" name="submit">Submit</button>
                                            <button type="clear" class="uk-button uk-button-default uk-margin-left">Clear</button>
                                            <a href="#" uk-totop uk-scroll></a> 
                                            <!-- <button class="uk-button uk-button-default uk-margin-left">To Top</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
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