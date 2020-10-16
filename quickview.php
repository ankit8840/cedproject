<?php
    require 'config2.php';
    if (isset($_POST["id"]))
    {
        $load='';
        $sq = "SELECT * FROM products WHERE product_id=".$_POST["id"].""; 
        $result = $conn->query($sq);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $load.='<div class="modal-content">                      
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <!-- Modal view slider -->
                    <div class="col-md-6 col-sm-6 col-xs-12">                              
                      <div class="aa-product-view-slider">                                
                        <div class="simpleLens-gallery-container" id="demo-1">
                          <div class="simpleLens-container">
                              <div class="simpleLens-big-image-container">
                                  <a class="simpleLens-lens-image" data-lens-image="Admin/'.$row["image"].'">
                                      <img src="Admin/'.$row["image"].'">
                                  </a>
                              </div>
                          </div>
            
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="aa-product-view-content">
                        <h3 id="head">'.$row["name"].'</h3>
                        <div class="aa-price-block">
                          <span class="aa-product-view-price">'.$row["price"].'</span>
                          <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                        </div>
                        <p>'.$row["desc"].'</p>
                        
                        
                        <div class="aa-prod-quantity">
                          <p class="aa-prod-category">
                            Category: <a href="#">'.$row["category"].'</a>
                          </p>
                        </div>
                        <div class="aa-prod-view-bottom">
                          <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>                        
              </div>';
        }

    }
    echo $load;
}

?>