<?php require("header.php"); ?>



<?php

require ('conn.php');
// session_start();

$id = '';

if(!isset($_POST['submit'])){
$id = $_GET['id'];
}

if(isset($_POST['submit'])){

  $filetmp  = $_FILES["image"]["tmp_name"];
  $filename = $_FILES["image"]["name"];
  $filepath = "images/slider/".$filename;

  $sql = "UPDATE slider SET s_image='$filepath' WHERE id='$id'";
  $result = mysqli_query($con, $sql);

  if($result){
    move_uploaded_file($filetmp, $filepath);
      header("Location: slider.php");
  }

}

?>

<script>
  
$(document).ready(function(){

$(document).on('click','#save',function(){
  
var id = <?php echo $id ?>;
// var image = $("#image").attr('src');
// var image = $("#image").val();
var image = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');


// alert ("Image: images/slider/"+image);

$.ajax({
    url:"sliderHandler.php",
    method:"POST",
    data:{id:id, type:"editImage", image:"images/slider/"+image},
    success:function(data){
      window.location = "slider.php";
    }
  });



});

});

</script>



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
                <h3>Edit Slider</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

             <form action="editSlider.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="image" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="button" name="submit" id="save" value="Save Image" class="btn btn-success">

            </form>


          </div>
        </div>
        <!-- /page content -->

<?php require("footer.php"); ?>