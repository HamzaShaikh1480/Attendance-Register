<?php require("header.php"); ?>


<?php

require 'conn.php';


$sql1 = "SELECT * FROM slider";
$result1 = mysqli_query($con, $sql1);


if(isset($_POST['submit'])){


$filetmp  = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filepath = "images/slider/".$filename;

move_uploaded_file($filetmp, $filepath);

$sql = "INSERT INTO slider (s_image) VALUES ('$filepath')";

$result = mysqli_query($con,$sql);

}



?>


<script>
  
$(document).ready(function(){

function fetch_data(){

$.ajax({
  url:"sliderHandler.php",
  method:"POST",
  data:{type:"getTable"},
  success:function(data){
    $("#result").html(data);
  }
});


}



$(document).on('click','#deleteBtn',function(){
  
var id = $(this).closest("tr").find("#sid").text();

$.ajax({
    url:"sliderHandler.php",
    method:"POST",
    data:{id:id, type:"deleteSlider"},
    success:function(data){
      fetch_data();
      // alert(data);
    }
  });



});



$(document).on('click','#editBtn',function(){
  
var id = $(this).closest("tr").find("#sid").text();
var image = $(this).closest("tr").find("#imageTag").attr('src');
var parts = image.split('/');
var image = parts[parts.length-1];

// $.ajax({
//     url:"sliderHandler.php",
//     method:"POST",
//     data:{id:id, type:"deleteSlider"},
//     success:function(data){
//       fetch_data();
//       // alert(data);
//     }
//   });

var listvalues = { "sliderID": id , "forEdit":"yes"};
    localStorage.setItem('itemEditList', JSON.stringify(listvalues)); 

window.location = "editSlider.php?id="+id+"&file="+image;

// $('#editSliderModal').modal('show');


});


// $(document).on('click','#saveEditImage',function(){
  
//   var listvalues = localStorage.getItem('itemEditList');
//   var finalvalue = JSON.parse(listvalues);

//    var isEdit = finalvalue.forEdit;
//    var id     = finalvalue.sliderID;



// });




fetch_data();

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
                <h3>Silder Image Page</h3>
              </div>
            </div>

            <div class="clearfix">


            <form action="slider.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: -150px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="image" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit" id="save" value="Save Image" class="btn btn-success">

            </form>
          <br/>
          <br/>
          <br/>
  

<div id="result">
  
</div>




</div>

          </div>
        </div>
        <!-- /page content -->




<div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Slider Image</h4>
            </div>
            <div class="modal-body">
               

 <form action="slider.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="image" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="button" name="submit" id="saveEditImage" value="Save Image" class="btn btn-success">

            </form>




            </div>
        </div>
    </div>

</div>




<?php require("footer.php"); ?>