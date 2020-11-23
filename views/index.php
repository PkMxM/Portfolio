<?php
include_once "header.php";
?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/landscape2.jpg" class="d-block w-100" style="height:700px" alt="beach">
                </div>
                <div class="carousel-item">
                    <img src="../img/underthesea.jpg" class="d-block w-100" style="height:700px" alt="underthesea">                   
                </div>
                <div class="carousel-item">
                    <img src="../img/sunset.jpg" class="d-block w-100" style="height: 700px"alt="sunset">                   
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
                    <p class="h2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, in nobis? Similique ut odit cum accusamus? Rem illum, error dolore animi similique quidem delectus eos non amet inventore nesciunt in commodi iste cumque iusto asperiores voluptatem ullam ducimus. Quisquam ipsa esse labore. Eius explicabo commodi ea rerum, nobis iure sapiente fugit qui eum odio velit quod doloribus. Nemo quam vitae labore cupiditate unde consectetur atque natus, veniam voluptate deleniti sunt in odit aspernatur ea iste eum doloremque voluptatibus esse. Dolore ducimus esse fugit dolor odit voluptatibus incidunt veniam commodi quae, quibusdam deleniti vel tenetur voluptas blanditiis reiciendis excepturi quidem! Vel.</p>
            </div>
            <!-- About Room -->
            <div class="rooms">
                <a href="../views/roomIntroduction.php">
                <h1 class="text-center">Rooms</h1></a><hr>
                <div class="row my-3">
                    <div class="col-sm">                
                        <div class="card" style="width: 18rem;">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                            <div class="card-body">
                                <h5 class="card-title">Ocean front</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card mx-auto" style="width: 18rem;">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                            <div class="card-body">
                                <h5 class="card-title">Ocean view</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">    
                        <div class="card" style="width: 18rem;">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                            <div class="card-body">
                                <h5 class="card-title">Town view</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Show Detail</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
            
        </form>
        <form action="" method="">
            <div class="row">
                <div class="col">
                    <div class="card w-50 my-5 mx-auto">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="fName" id="firstName" class="form-control mb-2" required>

                                <label for="lastName">Last Name</label>
                                <input type="text" name="lName" id="lastName" class="form-control mb-2" required>

                                <label for="email">e-mail</label>
                                <input type="email" name="email" id="email" class="form-control mb-2" required>

                                <label for=""></label>
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