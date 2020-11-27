<?php
include_once "header.php";
?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/landscape2.jpg" class="d-block w-100" alt="landscape" style="background-size:cover; height:850px;">
                </div>
                <div class="carousel-item">
                    <img src="../img/beach.jpg" class="d-block w-100" alt="beach" style="background-size:cover; height:850px;">                   
                </div>
                <div class="carousel-item">
                    <img src="../img/underthesea.jpg" class="d-block w-100" alt="underthesea" style="background-size:cover; height:850px;">                    
                </div>
                <div class="carousel-item">
                    <img src="../img/sunset.jpg" class="d-block w-100" alt="sunset" style="background-size:cover; height:850px;">                   
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <form action="" method="">
            <div class="text-center my-3">
                <h1>About Us</h1><hr>
                <div class="container">
                    <p class="h2" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, in nobis? Similique ut odit cum accusamus? Rem illum, error dolore animi similique quidem delectus eos non amet inventore nesciunt in commodi iste cumque iusto asperiores voluptatem ullam ducimus. Quisquam ipsa esse labore. Eius explicabo commodi ea rerum, nobis iure sapiente fugit qui eum odio velit quod doloribus. Nemo quam vitae labore cupiditate unde consectetur atque natus, veniam voluptate deleniti sunt in odit aspernatur ea iste eum doloremque voluptatibus esse. Dolore ducimus esse fugit dolor odit voluptatibus incidunt veniam commodi quae, quibusdam deleniti vel tenetur voluptas blanditiis reiciendis excepturi quidem! Vel.</p>
                </div>
            </div>
            <!-- About Room -->
            <div class="rooms">
                <a href="../views/roomIntroduction.php">
                <h1 class="text-center">Rooms</h1></a><hr>
                <div class="row" style="width:90%; margin-left:auto; margin-right:auto; margin-top:3%;">
                    <div class="col">                
                        <div class="card" style="width: 18rem;">
                            <img src="../img/overWaterPool.jpg" alt="poolwaterover" width="100%" height="180">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Sansita Swashed'">Pool Over Ocean Villa</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="../views/roomIntroduction.php" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/landscape.jpg" alt="overwater" width="100%" height="180">
                            <div class="card-body">
                                <h5 class="card-title">Over Ocean Villa</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="../views/roomIntroduction.php" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">    
                        <div class="card" style="width: 18rem;">
                            <img src="../img/GardenPool.jpg" alt="gardenpool" width="100%" height="180">
                            <div class="card-body">
                                <h5 class="card-title">Pool Garden Villa</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="../views/roomIntroduction.php" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">    
                        <div class="card" style="width: 18rem;">
                            <img src="../img/garden.jpg" alt="garden" width="100%" height="180">
                            <div class="card-body">
                                <h5 class="card-title">Garden Villa</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="../views/roomIntroduction.php" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">    
                        <div class="card" style="width: 18rem;">
                            <img src="../img/standard.jpg" alt="standard" width="100%" height="180">
                            <div class="card-body">
                                <h5 class="card-title">Standard Room</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="../views/roomIntroduction.php" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
            
        </form>
        <form action="checkBooking.php" method="get">
            <div class="row">
                <div class="col">
                    <div class="card w-50 my-5 mx-auto">
                        <div class="card-body">
                            <div class="form-group">
                                <h4>Check your booking</h4>
                                <label for="bookingID">Booking#</label>
                                <input type="text" name="bookingID" id="bookingID" class="form-control mb-2" placeholder="Put your Booking #"required>

                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Put your Name" required>
                                
                                <button type="submit" class="btn btn-success btn-sm my-2" style="text-align:right;">CHECK NOW</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </form>           


<?php
include_once "footer.php";
?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>