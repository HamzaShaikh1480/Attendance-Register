<?php require('head.php'); ?>





<script>
$(window).load(function(){
   $('#btn1').on('click',function(){
                    // var sr=$(this).attr('images/slider/slider-02.jpg'); 
                    // $('#new1').attr('src',sr);
                            <?php 
require 'conn.php';
$sql = "SELECT * FROM category_image WHERE c_id='1' ";
$result = mysqli_query($con, $sql);
                    ?>
                   // $("#new1").attr('src','images/cat_cover/3.jpg'); 
                   // $("#mag1").modal('show');
<?php while ($row = mysqli_fetch_array($result)):; ?>
                   var image = ' <div> <img style="height: 450px;width: 390px" alt="Hamza" id="new1" src="<?php echo $row[2]; ?>"  /></div>';

<?php endwhile; ?>


                   $("#img").html(image);
                   $("#mag1").modal('show');

                });






   $('#btn2').on('click',function(){
                    // var sr=$(this).attr('images/slider/slider-02.jpg'); 
                                 <?php 
require 'conn.php';
$sql = "SELECT * FROM category_image WHERE c_id='2' ";
$result = mysqli_query($con, $sql);
                    ?>
                   // $("#new1").attr('src','images/cat_cover/3.jpg'); 
                   // $("#mag1").modal('show');
<?php while ($row = mysqli_fetch_array($result)):; ?>
                   var image = ' <div> <img style="height: 450px;width: 390px" alt="Hamza" id="new1" src="<?php echo $row[2]; ?>"  /></div>';

<?php endwhile; ?>


                   $("#img").html(image);
                   $("#mag1").modal('show');
                });


});
</script>


<div class="modal fade" id="mag1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Categories Catalog</h4>
      		</div>
      		<div class="modal-body" id="result1">
            	<div class="book_wrapper">
                    <a id="next_page_button"></a>
                    <a id="prev_page_button"></a>
                    <div id="loading" class="loading">Loading pages...</div>
                    <div id="mybook" style="display:none;">
                        <div class="b-load" id="img">

                        </div>
                    </div>
                </div>
      		</div>
    	</div>
  	</div>
</div>

<input style="margin-top: 300px;margin-left: 600px;" type="button" name="button" id="btn1" class="btn btn-info" value="Show Modal">


<input style="margin-top: 300px;margin-left: 600px;" type="button" name="button" id="btn2" class="btn btn-info" value="Show Modal">



<!-- 
        <div class="col-sm-4">
          <a href="#" class="category" data-toggle="modal" data-target="#mag1">
              <span class="category-img"><img alt="" id="cat2" src="images/1.jpg"></span>
                
            </a>
        </div> -->

<?php require('foot.php') ?>

