<?php require("header.php"); ?>



<?php 

require ('conn.php');

$getdata = "SELECT * FROM aboutus";

$getresult = mysqli_query($con, $getdata);

if(isset($_POST['submit'])){

  $about = $_POST['message'];
  $sql = "UPDATE aboutus SET data='$about' WHERE id ='1'" ;

  $result = mysqli_query($con, $sql);

}




?>



<script>
  
  $(document).ready(function(){







    
  });






</script>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>About Us</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

<form action="aboutus.php" method="POST">

 <label for="message">Add About Us Detail:</label>


 <?php while($row = mysqli_fetch_array($getresult) ):;?>

                          <textarea style="height: 250px" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"> <?php echo $row['data'];?>  </textarea>

                            <?php endwhile;?>


                            <br/>

<button type="submit" name="submit" class="btn btn-success">Save</button>
       
</form>
            
          </div>
        </div>
        <!-- /page content -->

<?php require("footer.php"); ?>