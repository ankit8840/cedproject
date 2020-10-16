
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<?php 
				$filename=basename($_SERVER['REQUEST_URI']);
				$productmenu=array('products.php','categories.php','tags.php','color.php');
				$usermenu=array('adduser.php','manageuser.php');
				$order=array('manageorder.php');
			?>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="#" title="View the Site">View the webSite</a><a href="#" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="http://www.google.com/" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
<a href="#" class="nav-top-item <?php if(in_array($filename,$productmenu)):?>current<?php endif;?>"> <!-- Add the class "current" to current menu item -->
					Products
					</a>
					<ul>
						<li><a <?php if($filename=="products.php"):?>class="current"<?php endif;?> href="products.php">Add Products</a></li>
                        <li><a <?php if($filename=="categories.php"):?>class="current"<?php endif;?>href="categories.php">Manage Categories</a></li>
						<li><a <?php if($filename=="tags.php"):?>class="current"<?php endif;?>href="tags.php">Manage Tags</a></li>
						<li><a <?php if($filename=="color.php"):?>class="current"<?php endif;?>href="color.php">Manage color</a></li>	
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item <?php if(in_array($filename,$usermenu)):?>current<?php endif;?>">
						Users
					</a>
					<ul>
						<li><a <?php if($filename=="adduser.php"):?>class="current"<?php endif;?>href="adduser.php">Add Users</a></li>
						<li><a <?php if($filename=="manageuser.php"):?>class="current"<?php endif;?>href="manageuser.php">Manage Users</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="nav-top-item <?php if(in_array($filename,$order)):?>current<?php endif;?>">
						Orders
					</a>
					<ul>
						<li><a <?php if($filename=="manageorder.php"):?>class="current"<?php endif;?>href="manageorder.php">Manage Orders</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->