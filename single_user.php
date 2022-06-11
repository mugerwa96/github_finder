
<?php include("./includes/header.php")?>

<!-- landing-section starts -->
<section id="user" class="py-5 ">
    <div class="container mt-5">
        <div class="row justify-content-center align-item-center">
           
            <div class="card-single-user shadow">
                
                <!-- single image starts -->
                <div class="single-image">
                    <img src="./images/user_1.png" alt="">
                </div>
                <!-- single image ends -->
                <!-- singlue user-details start -->
                <div class="single-user-details">
                    <span class="fw-bold "><i class="fas fa-user-circle  text-muted mx-1"></i>MUGERWA 96</span> <br>
                    <small ><i class="fas fa-star  text-muted mx-1"></i><span class="text-muted">23  Followers</span></small>
                    <small ><i class="fas fa-star text-muted mx-1"></i><span class="text-muted">13  Following</span></small> <br>
                
                    <small ><i class="fas fa-location-pin mx-1 text-muted"></i><span class="text-muted">location:<span> kireka-Namugongo</span></span></small> <br>
                    <small ><i class="fas fa-calendar-week mx-1 text-muted"></i><span class="text-muted">Created At:<span> 2020-9-8</span></span></small> <br>
                    <small ><i class="fas fa-database text-muted mx-1"></i><span class="text-muted">Bio Data:
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quo tempore, tenetur laboriosam, esse ipsum deserunt doloribus ex nihil, iste sapiente recusandae voluptas? </span></span></small> <br>
                
                        <div class="user-followers">
                            <small ><a href="#" class="links current-select p-2 text-center" data-page="./dynamic-pages/followers.php"><i class="fas fa-star  text-muted mx-1"></i><span class="text-muted">23  Followers</span></a></small>
                            <small ><a href="#" class="links p-2" data-page="./dynamic-pages/following.php"><i class="fas fa-star text-muted mx-1"></i><span class="text-muted">13  Following</span></a></small> <br>
                        
                        </div>
                        <div class="followers-dynamic-area shadow my-4">
                          
                        </div>
                </div>
                <!-- singlue user-details ends -->
            </div>
        </div>
    </div>
        
</section>
<!-- landing-section ends -->




<?php include("./includes/footer.php")?>
    <script>
        $(document).ready(function(){
            $(".followers-dynamic-area").load("./dynamic-pages/followers.php")
            $(".links").click(function(){
                $(".links.current-select").removeClass("current-select");
                $(this).addClass("current-select")
                var page=$(this).attr("data-page");
                // alert(page);
                $(".followers-dynamic-area").load(page)

            })

        })
    </script>
    <!-- scripts ends -->
</body>
</html>