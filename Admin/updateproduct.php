<?php
/**
 * MyClass File Doc Comment
 * php version 7.2.10
 *
 * @category MyClass
 * @package  MyPackage
 * @author   My Name <my.name@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
require 'header.php';
require 'aside.php';
require 'config.php';
$tags=array();
$sucess='';$tagname='';
$table='';
$desc='';$error=array();
$pid=$_GET['rn'];
$sql = "SELECT * FROM products where product_id=$pid";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
		$id=$row['product_id'];
        $name=$row['name']; 
        $price=$row['price']; 
        $image=$row['image']; 
        $desc.=$row['desc'];
	}
}
if (isset($_POST['submit'])) {
$productname= isset($_POST['pname'])?$_POST['pname']:'';
	$productprice= isset($_POST['pprice'])?$_POST['pprice']:'';
	$desc= isset($_POST['description'])?$_POST['description']:'';
	if (!empty($_POST['tag'])) {
		foreach ($_POST['tag'] as $key1=>$selected) {
			array_push($tags, $selected);
		}

	}
	$tag=json_encode($tags);
	$category= isset($_POST['dropdown'])?$_POST['dropdown']:'';
	//echo '<script>alert("'.$desc.'")</script>';
    $filename = $_FILES['uploadfile']['name']; 
    $filetype=$_FILES['uploadfile']['type'];
    $filesize=$_FILES['uploadfile']['size'];
    //echo '<script>alert("'.$filesize.'")</script>';
    $filetemp=$_FILES['uploadfile']['tmp_name'];
    $filestore= "upload/".$filename;
    move_uploaded_file($filetemp, $filestore);
$sql = "UPDATE products SET `name`='$productname',`price`='$productprice',`tags`='$tag',`category`='$category',`image`='$filestore'
     WHERE product_id= '$pid' ";
    if ($conn->query($sql) === true) {
        echo "Updated successfully";
        echo '<script>window.location="products.php"</script>';
    } else {
        $errors[] = array('input'=>'form','msg'=>$conn->error);
    }
}
//echo '<script>alert("'.$desc.'")</script>';
?>;
<div id="main-content"> <!-- Main Content Section with everything -->
    <noscript> <!-- Show a notification if the user has disabled javascript -->
        <div class="notification error png_bg">
            <div>
                Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
        </div>
    </noscript>
			
			<!-- Page Head -->
			<h2>Welcome Admin</h2>
			<p id="page-intro">What would you like to do?</p>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab2" class="default-tab">Update</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="post" enctype="multipart/form-data" >
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Name</label>
									<input class="text-input medium-input" type="text" id="large-input" name="pname" required value=<?php echo "'$name'" ?>/>
								</p>
								
								<p>
									<label>Price</label>
									<input type="number" class="text-input medium-input" name="pprice" required value=<?php echo "'$price'" ?>/>
								</p>
								<p>
									<label>Image</label>
									<input type="file" name="uploadfile"/> 
								</p>
								<p>
								<label>Category</label>              
									<select name="dropdown" class="small-input">
										<option value="Men">Men</option>
										<option value="Women">Women</option>
										<option value="Kids">Kids</option>
										<option value="Electronics">Electronics</option>
										<option value="Sports">Sports</option>
									</select> 
								</p>
								<p>
									<label>Tags</label>
									<input type="checkbox" name="tag[]" value="Fashion"/> Fashion 
									<input type="checkbox" name="tag[]" value="Ecommerce"/> Ecommerce
									<input type="checkbox" name="tag[]" value="Shop"/> Shop
									<input type="checkbox" name="tag[]" value="Hand Bag"/> Hand Bag
									<input type="checkbox" name="tag[]" value="Laptop"/> Laptop
									<input type="checkbox" name="tag[]" value="Headphone"/> Headphone
								</p>
								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79" rows="15"><?php echo "'$desc'" ?></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" name="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<!-- Start Notifications -->
			
			<!--<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<!-- End Notifications -->
			<div>
				<?php  echo $sucess ?>;
			</div>
<?php require 'footer.php' ?>