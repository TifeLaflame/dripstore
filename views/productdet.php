<?php
    $_SESSION["arrCart"]= $arrProduct;
?>
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
                                <a class="nav-link nav-text" href="#">Lookbook</a>
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
            <main id="productDet">
                <div class="container">
                    <div class="row">
                        <div class="col-12 breadcrumbs">
                            <a href="index.php?controller=pages&action=home">Home &gt; </a>
                            <a href="index.php?controller=pages&action=products">Jerseys &gt;</a>
                            <a href=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="imageDiv halfSec">
                                <img src ="imgs/<?=$arrProduct->image?>" alt ="Chelse 3rd Away Jersey" class= "imgHeight"/>
                            </div>
                            <div class="thumbImgsWrap">
                            <?php foreach($arrProduct->productPhotos as $product)  {?>       
                                <div class="adjustImgs">
                                    <a href="#"><img src="imgs/<?=$product['strImage']?>" class="doImageSwitch"/></a>
                                </div>   
                            <?php    
                            }
                            ?>
                            </div>
                        
                            </div> <!--  end of first half div -->
                        <div class="col-sm-12 col-md-6">
                            <div  class="halfSec">
                                <h2 class="pName"><?=$arrProduct->name?></h2>
                                <p class="priceTag"> $<span><?=$arrProduct->price?></span>
                                <!-- I think I need a form tag because of the size selection, the form will do the addToCart processing of the 
                                    products for me -->
                                <form action="index.php?controller=CartController&action=addToCart&id=<?=$arrProduct->id?>&qty=1" method="post" id="pForm">
                                    <span>Select Size</span>
                                    <div class="sizeWrap">
                                    <?php 
                                    foreach($arrProduct->productVariants as $pV) { ?>

                                        <label for="<?=$pV['strSName']?>" class="lSize"><?=$pV['strSName']?></label>
                                        <input type="radio" id ="<?=$pV['strSName']?>" name="" data-sizeId="<?=$pV['id']?>" data-qty="<?=$pV['nQty']?>" value="1" class="iRadio">
                                        
                                    <?php
                                    }
                                    ?>  
                                        <input type ="hidden" value="<?=$arrProduct->id?>" name="pId">
                                        
                                        <input type ="hidden" name="qty" value="1" max="10">
                                    </div>
                                    <div>
                                        <input type="submit" value="Add To Cart" class="btn cartBtn">        
                                    </div>
                                </form>
                                <!-- <a href="index.php?controller=CartController&action=addToCart.php?id=<=$arrProduct->id?>&qty=1">Add Item To Cart</a> -->
                                <div>
                                    <p class="pDesc">Description</p>
                                    <div class="descWrap">
                                        <p><?=$arrProduct->desc?></p>
                                    </div>
                                    
                                </div>   
                            </div> <!--  end of halfSec div -->    
                        </div> <!--  end of second half div -->
                    </div>
                    
                    <!-- 
                    foreach$arrProduct->productPhotos as $product  ?>
                        <img src="imgs/<=$product['strImage']>"/>          
                    -->

                
                    
                
                    <!-- I still need to figure out how the cart will be updated with whatever what added to it -->
                <!-- /*
                    foreach($arrProduct->productVariants[0] as  $product){ 
                        print_r($product); ?>
                    
                        <div class="avSizes">
                            <input type="radio" name="" id="sizeId-1" class="selSize">
                            <label for="sizeId-1"><$product['strSName']?></label>
                        </div>
                    }
                    */ -->
                </div>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="js/script.js"></script>
</body>
</html>