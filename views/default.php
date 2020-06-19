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
                                <a class="nav-link nav-text" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><img src="imgs/user.png" alt="User Profile"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><img src="imgs/shopping-bag.png" alt="Shopping Bag"/>
                                    <span id="bagCount">0</span>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        <main id="home">
            <div class="heroSec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-center" id="onethird">
                            <div class="mainHeading">
                                <h1>Discover the new 2020 Club Jerseys</h1>
                                <div class="cta">
                                <?php   foreach($arrCategories as $oCat){?>
                                    
                                    <a href="index.php?controller=pages&action=products&gId=<?=$oCat->gender?>" class="btn homeBtn">Shop For Him</a>
                                <?php
                                }
                                ?>   
                                </div>
                                <div class="cta">
                                    <a href="index.php?controller=pages&action=products&" class="btn homeBtn">Shop For Her</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="twothird"></div>
                        <div class="col-md-4" id="threethird"></div>
                    </div>
                </div>
            </div>

            <section class="popular">
                <div class="container">
                    <div class="row">
                    <div class="col-12 text-center">
                    <h2>Most Popular</h2>
                    </div>
                    <?php 
                    foreach($arrFeatured as $oP)
                    { ?>
                        <div class="col-sm-12 col-md-4">
                            <a href="index.php?controller=pages&action=productdet&id=<?=$oP->id?>"><img src ="imgs/<?=$oP->image?>" alt ="Adidas Collection" class= "img-fluid"/> </a>
                            <p class="pName font-weight-bold"><?=$oP->name?></p>
                            <p> $<span><?=$oP->price?></span>
                        </div>
                        
                    <?php
                    }
                    ?>
                </div>
                <div class="cta">
                    <a href="#" class="btn homeBtn">View All</a>
                </div>
            </section>
            <section class="category">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 pr-5">
                            <?php ?>
                            <a href="#" data-id="<?=$arrFeatured[0]->id?>">
                                <img src="imgs/clubfilter.png"/>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 pl-5">
                            <a href="#" data-id="<?=$arrFeatured[1]->id?>">
                                <img src="imgs/natfilter2.png"/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <footer>
        <div class="footerWrap container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p>Customer Care/FAQ</p>
                    <p>Terms &amp; Conditions</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p><img src="imgs/"/></p>
                    <p>&copy; Drip Store 2020</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>Follow Us</p>
                    <p><span></span></p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
   <script src="js/main.js"></script>
</body>
</html>