
<?php $page="index.php"; include("./includes/header.php")?>





<!-- landing-section starts -->
<section id="landing" class="py-5">
    <div class="container py-5">
        

<?php include("./class/api.php");?>
<?php

$obj= new Users();
$users=$obj->getUsers();
echo"<pre>";
var_dump($users);
echo "</pre>";
?>



<!-- searching area starts -->
<div class="container">
    <div class="row  justify-content-center align-item-center">
        
            <div class="col-md-4 my-3">
                <input class="form-control me-2" type="search" placeholder="Search user" aria-label="Search">
            </div>
        </div>
    </div>

<!-- searching area ends -->
        <div class="row  justify-content-center align-items-center">
           <!-- card-user -->
                <div class="col-md-6 my-3 ">
                    <div class="user-card shadow">

                        <div class="image-side">
                        
                            <div class="image-box">
                                <img src="./images/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.jpg" alt="">
                            </div>
                        </div>

                        <div class="user-details site-primary-color ">
                                <span class="fw-bold "><i class="fas fa-user-circle  text-muted mx-1"></i>MUGERWA 96</span> <br>
                                <small ><i class="fas fa-star  text-muted mx-1"></i><span class="text-muted">23  Followers</span></small>
                                <small ><i class="fas fa-star text-muted mx-1"></i><span class="text-muted">13  Following</span></small> <br>
                                <small ><i class="fas fa-database text-muted mx-1"></i><span class="text-muted">Bio Data:
                                    <span>I dont regret being being in a family...... </span></span></small> <br>
                                <small ><i class="fas fa-location-pin mx-1 text-muted"></i><span class="text-muted">location:<span> kireka-Namugongo</span></span></small> <br>
                                <small ><i class="fas fa-calendar-week mx-1 text-muted"></i><span class="text-muted">Created At:<span> 2020-9-8</span></span></small>
 
                                 <p><a href="./single_user" class="btn btn-outline-dark btn-sm my-2 fw-bold">Read more <i class="fas fa-arrow-right"></i></a></p>
                            </div>
                    </div>
                </div>
       
        </div>
    </div>
</section>
<!-- landing-section ends -->




<?php include("./includes/footer.php")?>