<?php
include('db.php');
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
			<table class="table">
				<thead>
					<tr>
						<th>
							No
						</th>
						<th>
							Nama
						</th>
						<th>
							Semester 1
						</th>
						<th>
							Semester 2
						</th>
						<th>
							Semester 3
						</th>
						<th>
							Semester 4
						</th>
						<th>
							Date Submit
						</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
				$angka = -1;
				$sql = "SELECT * FROM `data` ORDER BY `nama` ASC, `waktu` ASC";
				$query = mysqli_query($link,$sql);
				while ($row =  mysqli_fetch_row($query)) {
					if ($angka == -1) {
						$angka++;
						$row2 = $row;
						continue;						
					}					
						$angka++;
						if ($row[1] == $row2[1]) {
													
				?>
					<tr>
						<td>
							<?=$angka?>
						</td>
						<td>
							<?=$row2[1]?>
						</td>
						<td>
							<?=$row2[3]?>
						</td>
						<td>
							<?=$row2[4]?>
						</td>
						<td>
							<?=$row2[5]?>
						</td>
						<td>
							<?=$row2[6]?>
						</td>
						<td>
							<?=$row2[7]?>
						</td>
					</tr>	

				<?php
				
						} else {
							
							?>							
							
							<tr class="success">
						<td>
							<?=$angka?>
						</td>
						<td>
							<?=$row2[1]?>
						</td>
						<td>
							<?=$row2[3]?>
						</td>
						<td>
							<?=$row2[4]?>
						</td>
						<td>
							<?=$row2[5]?>
						</td>
						<td>
							<?=$row2[6]?>
						</td>
						<td>
							<?=$row2[7]?>
						</td>
					</tr>	
					
					<?php 
						}
						$row2 = $row;
					} 
					$angka++;
					?>	
						<tr class="success">
						<td>
							<?=$angka?>
						</td>
						<td>
							<?=$row2[1]?>
						</td>
						<td>
							<?=$row2[3]?>
						</td>
						<td>
							<?=$row2[4]?>
						</td>
						<td>
							<?=$row2[5]?>
						</td>
						<td>
							<?=$row2[6]?>
						</td>
						<td>
							<?=$row2[7]?>
						</td>
					</tr>
				</tbody>
			</table>
			
			<p>Yang di ambil adalah yang date submitnya yang paling baru (Berwarna Hijau)</p>
			
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
