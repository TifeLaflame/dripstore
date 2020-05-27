<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Trial Again</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <div class="container-fluid">
        <div class="wrapper">
    
            <header id="header" class="mainHeader">
                <nav class="navbar navbar-expand-lg" id="mainNav">
                    <h1 id="logo">
                        <a href="" class="navbar-brand">Drip Store</a>
                    </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="imgs/user.png" alt="User Profile"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="imgs/shopping-bag.png" alt="Shopping Bag"/></a>
                                <span id="bagCount">0</span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main id="home">
                <section class="">
                    <div class="container">
                        <div class="row">
                <?php 
                    foreach($arrAllProducts as $oP)
                    {
                ?>
                            <div class="col-sm-12 col-md-3">
                                <a href="index.php?controller=pages&action=productdet.php&id=<?=$oP->id?>"><img src ="imgs/<?=$oP->image?>" alt ="Adidas Collection" class= "img-fluid"/> </a>
                                <p class="pName font-weight-bold"><?=$oP->name?></p>
                                <p> $<span><?=$oP->price?></span>
                            </div> 
                <?php
                    }
                ?>
                        </div>
                    </div>

            </main>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>