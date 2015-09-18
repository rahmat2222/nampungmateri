<?php
include('db.php');
$npm = $_GET['npm'];
$sql = "SELECT * FROM `mahasiswa` WHERE `npm` = '$npm'";
$query = mysqli_query($link,$sql);
$row = mysqli_fetch_row($query);
if(empty($row[0])) {
	header('Location:pilih.php?a=tidak');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1IA08</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="pilih.php">Pilih Kursus</a>
                    </li>
                    <li>
                        <a href="data.php">Lihat yang sudah milih</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <p class="lead">Pilih Kursus</p>
				<p>Nama : <?=$row[1]?></p>
                <p>NPM : <?=$row[2]?></p>
				<p>Kursus Semester 1 : <?=strtoupper($row[3])?></p>
				<p>Kursus Semester 2 : <?=strtoupper($row[4])?></p>
				
				<form role="form" action="pilihproses.php" method="POST">
				<div class="form-group">
					 
					<label for="tiga">
						Pilih kursus untuk semester 3
					</label>
					<input type="hidden" name="npm" value="<?=$npm?>">
					<select name="tiga" id="tiga"class="form-control">
					<?php 
					$query = "SELECT * FROM `$row[3]`";
					$sql = mysqli_query($link, $query);
					while ($row2 = mysqli_fetch_row($sql)) {
						echo '<option value="'.$row2[1].'">'.$row2[1].'</option>';								
					}
					$query = "SELECT * FROM `$row[4]`";
					$sql = mysqli_query($link, $query);
					while ($row2 = mysqli_fetch_row($sql)) {
						echo '<option value="'.$row2[1].'">'.$row2[1].'</option>';								
					}
					?>
						
						
					</select>
				</div>			
				
				<div class="form-group">
					 
					<label for="empat">
						Pilih kursus untuk semester 4
					</label>
					
					<select name="empat" id="empat"class="form-control">
						<?php 
					$query = "SELECT * FROM `$row[3]`";
					$sql = mysqli_query($link, $query);
					while ($row2 = mysqli_fetch_row($sql)) {
						echo '<option value="'.$row2[1].'">'.$row2[1].'</option>';								
					}
					$query = "SELECT * FROM `$row[4]`";
					$sql = mysqli_query($link, $query);
					while ($row2 = mysqli_fetch_row($sql)) {
						echo '<option value="'.$row2[1].'">'.$row2[1].'</option>';								
					}
					?>
					</select>
				</div>
				
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Rahmat 2015 dengan template <a rel="nofollow" href="http://startbootstrap.com/template-overviews/blog-post/">Blog Post</a></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>