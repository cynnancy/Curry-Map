<?php
	session_start();
	include('db.php');
	
	try
	{
		$sql = "SELECT * FROM dining_brief";
		$query = $db -> query($sql);
		
		//分頁
		//計算資料總共筆數
		$query_nums = $query->rowCount();
		
		//每頁顯示筆數
		$max_count = 5;
		
		//總共有多少頁 ceil 有小數直接進位
		$pages = ceil($query_nums/$max_count);
		
		if( !isset( $_GET['page'] ) or (int)$_GET['page'] < 1 or (int)$_GET['page'] > $pages )
		{
			$page = 1;
		}
		else
		{
			$page = (int)$_GET['page'];
		}
		
		//每一頁開始的資料序號
		$start = ( $page - 1 ) * $max_count;
		
		//ORDER BY id DESC 由最後一筆排到第一筆
		//LIMIT 由第 $start 開始, 最多取 $max_count 筆數
		$sql = "SELECT * FROM dining_brief ORDER BY store_names DESC LIMIT {$start}, {$max_count}";
		$query = $db -> query($sql);	
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
		exit;
	}	


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
        <script src="js/uikit-icons.min.js"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Curry Map-Dining Brief</title>
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
                <span class="site-heading-lower"><a class="nav-link text-uppercase" href="Curry.php">Curry Map</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="Curry.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Northern.html">Northern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Central.html">Central</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Southern.html">Southern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Eastern.html">Eastern</a></li>
						<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="board.php">Dining Brief</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	<!-- 頁面內容 -->
	<section class="page-section about-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
	
				<!-- 留言 -->
				<?php foreach( $query as $key => $val ) : ?>
					<article class="uk-comment uk-comment-primary">
    					<header class="uk-comment-header">
        					<div class="uk-grid-medium uk-flex-middle" uk-grid>
								<div class="uk-width-expand">
									<h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo $val['store_names']?></a></h4>
									<ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
										<li><a><?php echo $val['writing_time']?></a></li>
										<li><a href="comment.php"><?php echo $val['author']?></a></li>
									</ul>
								</div>
							</div>
						</header>
						<div class="uk-comment-body">
							<p><?php echo $val['comment']?></p>
						</div>	
					</article>	
				<?php endforeach; ?>
				
					<!-- 分頁區塊 -->
					<div class="text-center">
						<ul class="uk-pagination uk-flex-center" uk-margin>

						<?php
							//分頁
							//不是首頁 在顯示回到首頁的標籤
							if( $page != 1 )
							{
								echo '<li><a href="?page=1">&laquo;</a></li>';
							}					

							//頁碼
							for( $i=1 ; $i<=$pages ; $i++ ) 
							{
								if( $page-3 < $i && $i < $page+3 )
								{
									if( $i == $page )
									{
										echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
									}
									else
									{
										echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
									}
								}
							} 					
							
							//不是最後一頁 在顯示到最後一頁的標籤
							if( $page != $pages )
							{
								echo '<li class="uk-disabled"><span>...</span></li>';
								echo '<li><a href="?page=' .$pages .'">'.$pages .'</a></li>';
								echo '<li><a href=?page=' . $pages . '>&raquo;<span uk-pagination-next></span></a></li>';
							}
							
						?>
					
						</ul>
					</div>
		
                </div>
            </div>
        </div>
    </section>   
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; CurryMap Naning</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>