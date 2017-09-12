<?php require('head.php'); ?>


<?php

require('conn.php');



$categorySql1 = "SELECT * FROM category WHERE id='1'";
$categoryResult1 = mysqli_query($con, $categorySql1);

$categorySql2 = "SELECT * FROM category WHERE id='2'";
$categoryResult2 = mysqli_query($con, $categorySql2);

$categorySql3  = "SELECT * FROM category WHERE id='3'";
$categoryResult3 = mysqli_query($con, $categorySql3);

$categorySql4 = "SELECT * FROM category WHERE id='4'";
$categoryResult4 = mysqli_query($con, $categorySql4);

$categorySql5 = "SELECT * FROM category WHERE id='5'";
$categoryResult5 = mysqli_query($con, $categorySql5);

$categorySql6 = "SELECT * FROM category WHERE id='6'";
$categoryResult6 = mysqli_query($con, $categorySql6);



$sql11 = "SELECT * FROM category_image WHERE c_id='1' ";
$result11 = mysqli_query($con, $sql11);

$sql12 = "SELECT * FROM category_image WHERE c_id='2' ";
$result12 = mysqli_query($con, $sql12);

$sql13 = "SELECT * FROM category_image WHERE c_id='3' ";
$result13 = mysqli_query($con, $sql13);

$sql14 = "SELECT * FROM category_image WHERE c_id='4' ";
$result14 = mysqli_query($con, $sql14);

$sql15 = "SELECT * FROM category_image WHERE c_id='5' ";
$result15 = mysqli_query($con, $sql15);

$sql16 = "SELECT * FROM category_image WHERE c_id='6' ";
$result16 = mysqli_query($con, $sql16);



$aboutSql = "SELECT * FROM aboutus";
$aboutResult = mysqli_query($con, $aboutSql);




$sliderSql = "SELECT * FROM slider";
$sliderResult = mysqli_query($con, $sliderSql);


if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $number = $_POST['number'];

    $sql = "INSERT INTO userdata (u_name, u_number) VALUES ('$name','$number')";

    $result = mysqli_query($con,$sql);
}




?>

<!--
<script>

$(document).ready(function(){





});

</script> -->



<body>
<header class="page-header">
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-offset-4 col-xs-6 col-sm-4 text-center">
            	<a href="#"><img src="images/logo.png" class="img-center"></a>
            </div>
            <div class="col-xs-6 col-sm-4 text-right">
            	<a href="#"><img src="images/logo2030.png" class="img-center"></a>
            </div>
        </div>
    </div>
</header>
<div class="clear"></div>
<div id="banner" class="carousel slide banner" data-ride="carousel">
	<div class="carousel-inner" role="listbox">


        <div class="item active">
            <img style="height: 540px; width: 1500px;" src="images/slider/slider-01.jpg" alt="...">
        </div>


<?php while($row = mysqli_fetch_array($sliderResult)):; ?>
        <div class="item">
        	<img style="height: 540px; width: 1500px;" src="<?php echo $row['s_image']; ?>" alt="...">
        </div>

<?php endwhile; ?>

       <!--  <div class="item">
        	<img src="images/slider/slider-02.jpg" alt="...">
        </div>
        <div class="item">
        	<img  src="images/slider/slider-03.jpg" alt="...">
        </div> -->
  	</div>

    <a class="left carousel-control" href="#banner" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
  	</a>
  	<a class="right carousel-control" href="#banner" role="button" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
<div class="clear"></div>
<div class="container">
  	<h1>Categories</h1>
    <div class="row" id="cat_result">




  <?php while($row = mysqli_fetch_array($categoryResult1)):; ?>

        <div class="col-sm-4">
            <a href="#" class="category" data-toggle="modal" data-target="#mag1">
                <span class="category-img"><img alt="" id="cat1" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>

<?php endwhile; ?>



  <?php while($row = mysqli_fetch_array($categoryResult2)):; ?>

        <div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#mag2">
            	<span class="category-img"><img alt="" id="cat2" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>
<?php endwhile; ?>



  <?php while($row = mysqli_fetch_array($categoryResult3)):; ?>
        <div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#mag3">
            	<span class="category-img"><img alt="" id="cat3" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>
<?php endwhile; ?>



  <?php while($row = mysqli_fetch_array($categoryResult4)):; ?>
        <div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#mag4">
            	<span class="category-img"><img alt="" id="cat4" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>
<?php endwhile; ?>



  <?php while($row = mysqli_fetch_array($categoryResult5)):; ?>
        <div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#mag5">
            	<span class="category-img"><img alt="" id="cat5" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>
<?php endwhile; ?>


  <?php while($row = mysqli_fetch_array($categoryResult6)):; ?>
        <div class="col-sm-4">
        	<a href="#" class="category" data-toggle="modal" data-target="#mag6">
            	<span class="category-img"><img alt="" id="cat6" src="<?php echo $row['cat_cover'] ?>"></span>
                <?php echo $row['name']; ?>
            </a>
        </div>
        <?php endwhile; ?>




    </div>
</div>
<div class="clear"></div>
<div class="about">
    <div class="container">
    	<div class="row">
            <div class="col-sm-6 col-sm-offset-6">
        		<h2>About us <span>LED KSA</span></h2>
                <?php while($row = mysqli_fetch_array($aboutResult)):; ?>
                <p> <?php echo $row[1] ?> </p>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<footer id="contact">
	<div class="relative">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Contact us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor.</p>




                    <form class="form-horizontal" method="POST" action="index.php">
                        <div class="form-group">
                            <div class="col-sm-9">
                            	<div class="input-group">
                                	<input class="form-control" name="name" placeholder="Your Name">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <label for="nam" class="col-sm-3 control-label">:Your Name</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                            	<div class="input-group">
                                	<input class="form-control" name="number" placeholder="Number">
                                    <div class="input-group-addon"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <label for="nam" class="col-sm-3 control-label">:Whatsapp No</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-4">
                                <button type="submit" name="submit" id="save" class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </form>




                </div>
                <div class="col-sm-6">
                    <h4>Our Location</h4>
                    <h6 class="text_wht">Address:</h6>
                    <div class="media">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor.</p>
                        </div>
                        <div class="media-right"><i class="fa fa-map-marker fa-lg media-object mt-5"></i></div>
                    </div>
                    <div class="media">
                        <div class="media-body">+966591881117</div>
                        <div class="media-right"><i class="fa fa-phone fa-lg media-object"></i></div>
                    </div>
                    <div class="media">
                        <div class="media-body"><a href="mailto:info@led-ksa.com">info@led-ksa.com</a></div>
                        <div class="media-right"><i class="fa fa-envelope fa-lg media-object"></i></div>
                    </div>
                    <div class="clear pad-15"></div>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-google-plus-square"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-2x fa-youtube-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="clear pad-15"></div>
        <div class="flowers_nvy"></div>
    </div>
    <div class="copy">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-6 text-left">Copyright &copy; 2017 <a href="#">LED KSA,</a> All rights reserved.</div>
                <div class="col-sm-6 text-right">Designed & Developed by: <a href="http://softedgesol.com" target="_blank">SoftEdge Solution</a></div>
            </div>
        </div>
    </div>
</footer>





<div class="modal fade" id="mag1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>

      		</div>
      		<div class="modal-body" id="result">
            	<div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load" >

                       <?php while($row11 = mysqli_fetch_array($result11)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px;" alt="" src="<?php echo $row11[2]; ?>">

                            </div>
                       <?php endwhile; ?>


                        </div>
                    </div>
                </div>
      		</div>
    	</div>
  	</div>

</div>





<div class="modal fade bs-example-modal-lg" id="mag2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Category Catalog</h4>
                        </div>


                        <div class="modal-body" id= "result2">

                         <div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading Images...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load">

                         <?php while($row12 = mysqli_fetch_array($result12)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px" alt="" src="<?php echo $row12[2]; ?>">
                            </div>
                        <?php endwhile; ?>


                        </div>
                    </div>
                </div>

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </div>

                      </div>
                    </div>
                  </div>

<div class="modal fade" id="mag3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>
            </div>
            <div class="modal-body">
                <div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style ="display:none">
                        <div class="b-load">
                          <?php while($row13 = mysqli_fetch_array($result13)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px" alt="" src="<?php echo $row13[2]; ?>">
                            </div>
                        <?php endwhile; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="modal fade" id="mag4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>
            </div>
            <div class="modal-body">
                <div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load">


                        <?php while($row14 = mysqli_fetch_array($result14)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px" alt="" src="<?php echo $row14[2]; ?>">
                            </div>
                        <?php endwhile; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="modal fade" id="mag5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>
            </div>
            <div class="modal-body">
                <div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load">


                        <?php while($row15 = mysqli_fetch_array($result15)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px" alt="" src="<?php echo $row15[2]; ?>">
                            </div>
                        <?php endwhile; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="modal fade" id="mag6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>
            </div>
            <div class="modal-body result6" id= "result6">

            <div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load">


                        <?php while($row16 = mysqli_fetch_array($result16)):; ?>
                            <div>
                                <img style="height: 500px;width: 390px" alt="" src="<?php echo $row16[2]; ?>">
                            </div>
                        <?php endwhile; ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>



<?php require('foot.php') ?>
