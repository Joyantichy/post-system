<?php 
// print_r($errors);

session_start();
// print_r($_SESSION['form-error']);
// print_r($_SESSION['old']);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
        <!-- Nav bar start -->


        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add Post</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All Post</a>
        </li>
      
     
       
      </ul>
      
    </div>
  </div>
</nav>


        <!-- Nav bar end -->


        <!-- form start -->
       <div class="card col-lg-4 mx-auto mt-5">
            <div class="card-header bg-secondary text-light">Add Post</div>
                <div class="card-body">
                    <form action="./controller/addPost.php" method="GET">
                    <input name="title" value ="<?= isset($_SESSION['old']['title']) ? $_SESSION['old']['title'] : '' ?>" class="form-control mt-3"  type="text" placeholder="Your Post Title">
                   
                    <?php 
                    if(isset( $_SESSION['form-error']['title_error'])){
                     ?>   
                        <span><?= $_SESSION['form-error']['title_error'] ?></span>
                        <?php
                    }
                    ?>
                   
                   
                    

                    <textarea name="detail" class="form-control mt-3" placeholder="Your Post Detail"><?= isset($_SESSION['old']['detail']) ? $_SESSION['old']['detail'] :''?></textarea>
                    
                    <?php 
                    if(isset( $_SESSION['form-error']['detail_error'])){
                     ?>   
                         <span><?= $_SESSION['form-error']['detail_error']?></span>
                        <?php
                    }
                    ?>

                  
           


                    <input value ="<?= isset($_SESSION['old']['title']) ? $_SESSION['old']['title'] : '' ?>" class="form-control mt-3" type="text" placeholder="Author Name">
                        
                    

                    <button name="author" class="btn btn-secondary mt-3 w-100 ">Submit</button>
                    </form>
                </div>
       </div>

        <!-- form end -->


</body>
</html>


<?php
session_unset();

?>