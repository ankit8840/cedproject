<?php
    require 'config2.php';
    if (isset($_POST["id"])) :
    
        $load='';
        $sq = "SELECT * FROM products WHERE category_id=".$_POST["id"].""; 
        $result = $conn->query($sq);

        if ($result->num_rows > 0) : 
            while ($row = $result->fetch_assoc()) :
             $oldp=$row["price"]*2; 
            ?>
            <li>
                  <figure>
                  <a class="aa-product-img" href="#"><img src=Admin/<?php echo $row["image"] ?> style="width:250px;height:300px;" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">This is <?php echo $row["name"] ?></a></h4>
                      <span class="aa-product-price">$<?php echo $row["price"] ?></span><span class="aa-product-price"><del><?php echo $oldp ?></del></span>
                      <p class="aa-product-descrip"><?php echo $row["desc"] ?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle2="tooltip" data-id=<?php echo $row["product_id"] ?> class="quickview" data-placement="top" title="" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>';

       <?php endwhile; ?>
     <?php endif; ?>
     <?php endif; ?>
