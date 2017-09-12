<?php require("header.php"); ?>

<?php 


require("conn.php");


if (isset($_POST['submit'])) {
  
  $cat = $_POST['contact_person'];

$filetmp  = $_FILES["cat_cover"]["tmp_name"];
$filename = $_FILES["cat_cover"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category (name, cat_cover) VALUES ('$cat', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);



}


if (isset($_POST['submit1'])) {
  

$filetmp  = $_FILES["magImg1"]["tmp_name"];
$filename = $_FILES["magImg1"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('1', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if (isset($_POST['submit2'])) {
  

$filetmp  = $_FILES["magImg2"]["tmp_name"];
$filename = $_FILES["magImg2"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('2', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if (isset($_POST['submit3'])) {
  

$filetmp  = $_FILES["magImg3"]["tmp_name"];
$filename = $_FILES["magImg3"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('3', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if (isset($_POST['submit4'])) {
  

$filetmp  = $_FILES["magImg4"]["tmp_name"];
$filename = $_FILES["magImg4"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('4', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if (isset($_POST['submit5'])) {
  

$filetmp  = $_FILES["magImg5"]["tmp_name"];
$filename = $_FILES["magImg5"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('5', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if (isset($_POST['submit6'])) {
  

$filetmp  = $_FILES["magImg6"]["tmp_name"];
$filename = $_FILES["magImg6"]["name"];
$filepath = "images/cat_cover/".$filename;

$sql = "INSERT INTO category_image (c_id, c_image) VALUES ('6', '$filepath')";

move_uploaded_file($filetmp, $filepath);

$result = mysqli_query($con,$sql);


}

if(isset($_POST['delete1'])){

$sql = "DELETE FROM category WHERE id='1'";
$result = mysqli_query($con,$sql);

}

if(isset($_POST['delete2'])){

$sql = "DELETE FROM category WHERE id='2'";
$result = mysqli_query($con,$sql);

}

if(isset($_POST['delete3'])){

$sql = "DELETE FROM category WHERE id='3'";
$result = mysqli_query($con,$sql);

}

if(isset($_POST['delete4'])){

$sql = "DELETE FROM category WHERE id='4'";
$result = mysqli_query($con,$sql);

}

if(isset($_POST['delete5'])){

$sql = "DELETE FROM category WHERE id='5'";
$result = mysqli_query($con,$sql);

}

if(isset($_POST['delete6'])){

$sql = "DELETE FROM category WHERE id='6'";
$result = mysqli_query($con,$sql);

}


// function searchID($check){

//   $checkID = $check;

// $sqlCheck = "SELECT * FROM category WHERE id='$checkID'"; 
// $resultCheck = mysqli_query($con, $sqlCheck);

// $row = mysqli_fetch_rows($resultCheck);

// if($row > 0){
//   return true;
// }
// elseif($row <= 0){
//   return false;
// }

// }



if(isset($_POST['save1'])){


   $cat = $_POST['contact_person1'];

$filetmp  = $_FILES["cat_cover1"]["tmp_name"];
$filename = $_FILES["cat_cover1"]["name"];
$filepath = "images/cat_cover/".$filename;


 $sqlCheck = "SELECT * FROM category WHERE id='1'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){

$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='1'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);

}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('1','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}

}




if(isset($_POST['save2'])){

  $cat = $_POST['contact_person2'];

$filetmp  = $_FILES["cat_cover2"]["tmp_name"];
$filename = $_FILES["cat_cover2"]["name"];
$filepath = "images/cat_cover/".$filename;


 $sqlCheck = "SELECT * FROM category WHERE id='2'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){

$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='2'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);


}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('2','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}

}

if(isset($_POST['save3'])){

  $cat = $_POST['contact_person3'];

$filetmp  = $_FILES["cat_cover3"]["tmp_name"];
$filename = $_FILES["cat_cover3"]["name"];
$filepath = "images/cat_cover/".$filename;

 $sqlCheck = "SELECT * FROM category WHERE id='3'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){

$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='3'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);

}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('3','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}


}

if(isset($_POST['save4'])){

  $cat = $_POST['contact_person4'];

$filetmp  = $_FILES["cat_cover4"]["tmp_name"];
$filename = $_FILES["cat_cover4"]["name"];
$filepath = "images/cat_cover/".$filename;

 $sqlCheck = "SELECT * FROM category WHERE id='4'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){

$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='4'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);


}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('4','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}


}

if(isset($_POST['save5'])){

  $cat = $_POST['contact_person5'];

$filetmp  = $_FILES["cat_cover5"]["tmp_name"];
$filename = $_FILES["cat_cover5"]["name"];
$filepath = "images/cat_cover/".$filename;

 $sqlCheck = "SELECT * FROM category WHERE id='5'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){

$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='5'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);


}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('5','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}

}

if(isset($_POST['save6'])){

  $cat = $_POST['contact_person6'];

$filetmp  = $_FILES["cat_cover6"]["tmp_name"];
$filename = $_FILES["cat_cover6"]["name"];
$filepath = "images/cat_cover/".$filename;


 $sqlCheck = "SELECT * FROM category WHERE id='6'"; 
$resultCheck =mysqli_query($con, $sqlCheck);

$row = mysqli_num_rows($resultCheck);

if($row > 0){
$sql = "UPDATE category SET name='$cat', cat_cover='$filepath' WHERE id='6'";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);

}

elseif ($row <= 0) {

$sql = "INSERT INTO category (id,name, cat_cover) VALUES ('6','$cat', '$filepath')";
$result = mysqli_query($con, $sql);
move_uploaded_file($filetmp, $filepath);
 
}

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
                <h3>Category Page</h3>
              </div>
            </div>

            <div class="clearfix"></div>

      <form action='category.php' method="POST" enctype="multipart/form-data"> 
          <div class="form-group">
                     

            <!-- <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br> -->
           <!--  <input style="padding-left: 350px" type="file" name="cat_cover" accept="image/*" onchange="readURL(this)"> -->
            <br> 

                        <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 1  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person1">
                         <input  type="file" name="cat_cover1" accept="image/*"">
                         <br>
                         <input  type="submit" name="save1" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete1" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore1" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat1Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 
            
                      </div>


                        <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 2  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person2">
                         <input  type="file" name="cat_cover2" accept="image/*"">
                         <br>
                         <input  type="submit" name="save2" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete2" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore2" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat2Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 


                        <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 3  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person3">
                         <input  type="file" name="cat_cover3" accept="image/*"">
                         <br>
                         <input  type="submit" name="save3" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete3" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore3" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat3Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 




                         <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 4  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person4">
                         <input  type="file" name="cat_cover4" accept="image/*"">
                         <br>
                         <input  type="submit" name="save4" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete4" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore4" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat4Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 


                        <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 5  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person5">
                         <input  type="file" name="cat_cover5" accept="image/*"">
                         <br>
                         <input  type="submit" name="save5" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete5" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore5" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat5Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 


                         <label style="margin-left: 200px" class="control-label col-md-3 col-sm-3 col-xs-12" for="Agent-name">Category 6  <span class="required">*</span>
                        </label>
                        <div style="margin-left: -100px" class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" id="ContactPerson" name="contact_person6">
                         <input  type="file" name="cat_cover6" accept="image/*"">
                         <br>
                         <input  type="submit" name="save6" class="btn btn-success" value="Save">
                         <input  type="submit" name="delete6" class="btn btn-danger" value="Delete">
                         <input  type="button" name="addMore6" class="btn btn-info" value="Add More" data-toggle="modal" data-target=".cat6Modal">
                        </div>
                        <br> <br> <br> <br> <br> <br> 

            
                      </div>











                       <!-- <button style="margin-left: 380px" type="submit" id="save" name="submit" class="btn btn-success">Submit</button> -->

</form>


<br> <br> <br> 





            
          </div>
        </div>
        <!-- /page content -->







<div class="modal fade cat1Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 1 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg1" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit1" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>





                  <div class="modal fade cat2Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 2 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg2" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit2" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>





                  <div class="modal fade cat3Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 3 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg3" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit3" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>





                  <div class="modal fade cat4Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 4 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg4" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit4" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>







                  <div class="modal fade cat5Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 5 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg5" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit5" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>


                  <div class="modal fade cat6Modal" id="item_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Category # 6 Image</h4>
                        </div>


                        <div class="modal-body">
                          <h4>Add New Image</h4>

                           <form action="category.php" method="POST" enctype="multipart/form-data">


            <img style="margin-left: 350px;height:200px; width: 200px" src="images/default.gif" alt="" id="image"> <br> <br>
            <input style="padding-left: 350px" type="file" name="magImg6" accept="image/*" onchange="readURL(this)">
            <input style="margin-left: 350px; margin-top: 5px" type="submit" name="submit6" id="save" value="Save Image" class="btn btn-success">

            </form>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>





<?php require("footer.php"); ?>