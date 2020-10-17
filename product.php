<?php require('header.php'); ?>
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <?php require('menu.php') ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Fashion</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Women</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              
              <ul class="aa-product-catg">
                <!-- start single product item -->
                <?php
                $sql = "SELECT * FROM products ";
								        $result = $conn->query($sql);
                ?>
						<?php	if ($result->num_rows > 0) : ?>
							<?php	while ($row = $result->fetch_assoc()): ?>
               <?php $oldp=$row["price"]*2; ?>
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src=Admin/<?php echo $row["image"] ?> style="width:250px;height:300px;" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#" data-id=<?php echo $row["product_id"] ?>><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">This is <?php echo $row["name"] ?></a></h4>
                      <span class="aa-product-price">$<?php echo $row["price"] ?></span><span class="aa-product-price"><del>$<?php echo $oldp ?></del></span>
                      <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle2="tooltip" data-id=<?php echo $row["product_id"] ?> class="quickview" data-placement="top" title="" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
              <?php endwhile; ?>
              <?php endif; ?>
            </ul>
              <!-- quick view modal -->  
                              
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">                      
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <!-- Modal view slider -->
                    <div class="col-md-6 col-sm-6 col-xs-12">                              
                      <div class="aa-product-view-slider">                                
                        <div class="simpleLens-gallery-container" id="demo-1">
                          <div class="simpleLens-container">
                              <div class="simpleLens-big-image-container">
                                  <a class="simpleLens-lens-image" data-lens-image=>
                                      <img src=>
                                  </a>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="aa-product-view-content">
                        <h3 id="head"></h3>
                        <div class="aa-price-block">
                          <span class="aa-product-view-price"></span>
                          <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                        </div>
                        <p></p>
                        
                        
                        <div class="aa-prod-quantity">
                          <p class="aa-prod-category">
                            Category: <a href="#"></a>
                          </p>
                        </div>
                        <div class="aa-prod-view-bottom">
                          <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>                        
              </div>
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for($i = 1; $i<=$pages; $i++): ?>
                  <li><a href="product.php?page=<?=$i?>"><?=$i;?></a></li>
                  <?php endfor;?>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
              <?php
                $sql = "SELECT * FROM category ";
								 $result = $conn->query($sql);
                ?>
						<?php	if ($result->num_rows > 0) : ?>
							<?php	while ($row = $result->fetch_assoc()): ?>
                <li><a href="#" class="cat" data-id=<?php echo $row["category_id"]?>><?php echo $row["category_name"]?></a></li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
              <div class="tag-cloud">
              <?php
                $sql = "SELECT * FROM tags ";
								 $result = $conn->query($sql);
                ?>
						<?php	if ($result->num_rows > 0) : ?>
							<?php	while ($row = $result->fetch_assoc()): ?>
                <a href="#" class="tag" data-name=<?php echo $row["tag_name"]?>><?php echo $row["tag_name"]?></a>
                <?php endwhile; ?>
              <?php endif; ?>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Shop By Price</h3>              
              <!-- price range -->
              <div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">100</span>
                 <span id="skip-value-upper" class="example-val">1000.00</span>
                 <button class="aa-filter-btn" type="submit">Filter</button>
               </form>
              </div>              

            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Shop By Color</h3>
              <div class="aa-color-tag">
              <?php
                $sql = "SELECT * FROM colors ";
								 $result = $conn->query($sql);
                ?>
              <?php	if ($result->num_rows > 0) : ?>
							<?php	while ($row = $result->fetch_assoc()): ?>
                <a class="aa-color-<?php echo $row["color"]?>" href="#"></a>
                <?php endwhile; ?>
              <?php endif; ?> 
              </div>                            
            </div>
            
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
 <?php require('footer.php') ?>
  
  <script>
      $(document).ready(function(){
                        $('.quickview').click(function(){
                          var id=$(this).data('id');
                            $.ajax({
                            method: "POST",
                            url: "quickview.php",
                            data: { id: id}
                          })
                            .done(function( msg ) {
                              $(".modal-dialog").html( msg );
                            });
                        });
                        $('.cat').click(function(){
                          var id=$(this).data('id');
                          $.ajax({
                            method: "POST",
                            url: "catfilter.php",
                            data: { id: id}
                          })
                            .done(function( msg ) {
                              $(".aa-product-catg").html( msg );
                            });
                        });
                        $('.tag').click(function(){
                          var name=$(this).data('name');
                          

                          $.ajax({
                            method: "POST",
                            url: "tagfilter.php",
                            data: { name: name}
                          })
                            .done(function( msg ) {
                              $(".aa-product-catg").html( msg );
                            });
                        });
                        $('.aa-add-card-btn').click(function(){
                          var id=$(this).data('id');
                          $.ajax({
                            method: "POST",
                            url: "Addcart.php",
                            data: { id: id}
                          })
                          .done(function( msg ) {
                              
                            });
                            return false;
                        })
                        });
  </script>
    
  </body>
</html>