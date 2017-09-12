<?php require("header.php"); ?>

<?php 

require('conn.php');

$sql = "SELECT * FROM category";
$result = mysqli_query($con,$sql);


if(isset($_POST['submit'])){

$id = $_POST['type'];


$filetmp  = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filepath = "images/category/".$filename;

move_uploaded_file($filetmp, $filepath);

$sql1 = "INSERT INTO category_image(c_id,c_image) VALUES ('$id', '$filepath')";

$result1 = mysqli_query($con,$sql1);

}




?>



<script>
  
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


</script>






        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category Images</h3>
              </div>

             
            </div>

            <div class="clearfix">

            <form action="category_image.php" method="POST" enctype="multipart/form-data">

  <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          
           <img style="margin-left: -100px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
           <input style="margin-left: -100px" type="file" name="image" accept="image/*" onchange="readURL(this)">
           <br>
 <label class="control-label col-md-3 col-sm-3 col-xs-12" style="margin-left: -300px;">Item Type</label>
 <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: -150px">
 <select class="select2_single form-control" name="type" id="item_type" tabindex="-1">
                            <option></option>
                            <?php while($row = mysqli_fetch_array($result)):; ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php endwhile; ?>
                          </select>
                          </div>
<br> <br>
           <input style="margin-left: -100px; margin-top: 5px" type="submit" name="submit" id="save" value="Save Image" class="btn btn-success">

                        </div>
      


</form>






            </div>


<br><br><br><br><br><br><br><br><br><br>
<div>





            
          </div>
        </div>
        <!-- /page content -->

<?php require("footer.php"); ?>