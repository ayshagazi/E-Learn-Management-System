<?php
include('./mainInclude/header.php');
?>

<!-- Start Course Banner-->
<div class="container-fluid bg dark">
	<div class="row">
		<img src="./image/coursebanner.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover;box-shadow: 10px"/>
		
	</div>
</div>
<br><br><br>
<!-- End Course Banner-->
<!--Include student reg form-->
<div class="container jumbotron mb-5">
	<div class="row">
	<div class="col-sm">

    <?php include('studentRegistration.php'); ?>
    <!--Include of student reg form-->
    <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
      </div>
</div>
</div>
</div>

<?php
include('./mainInclude/footer.php');
?>