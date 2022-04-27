<?php

session_start();

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header("location: MainMenu.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/MainMenu.css">
</head>
<body>

<div class = "topNavigation">
	<a href = "MainMenu.php"><img src="Images/HomeButton.png" width = "75" height = "75" style = "position:relative; left:40px"></a>
	<div class = "searchBar">
		<form class="example" style="margin-left: 150px; max-width:1150px">
			<input type="text" placeholder="Search for a product.." name="search2">
			<button type="submit"><img src="Images/magnifyingGlass.png" width = "25" height = "25"></button>
		</form>

        <?php if(isset($_SESSION['username'])) :?>
            <p class = "WelcomeBack"><b>Welcome Back,<br><?php echo $_SESSION['username']; ?></b></p>
        <?php endif ?>
        <?php if(!isset($_SESSION['username'])) : ?>
            <a href ="CustomerLogin.php" style="text-decoration:none"><button class = "btnSignIn"> Sign In</button></a>
        <?php endif ?>

	
	<a style = "display:inline; margin-top:15px"><button id = "myBtn" class = "Modal"><img src="Images/ProfileIcon.png" width = "25" height = "25"></button><p id="demo"></p></a>
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>

            <?php if(isset($_SESSION['username'])) :?>
                <p><div style="display:inline"><b>Welcome Back,<br><?php echo $_SESSION['username']; ?></b></div></p>
            <?php endif ?>
            <?php if(!isset($_SESSION['username'])) :?>
                <p><div style="display:inline"><b>Hello,</b></div><br>
			    <div style ="display:inline"><button class = "SignInSignUp" onclick = "document.location='CustomerSignin.php'">Sign In</button> or <button class = "SignInSignUp" onclick = "document.location='CustomerSignUp.php'">Sign Up</button></div><br><br></p>
			<?php endif ?>

            <div class = "row" style = "margin-top:20px">
				<div class = "modalColumnLeft">
					<table>
						<tr><th><b>Your Account</b></th></tr>
						<tr><td><button class = "Button">Account</button></td></tr>
						<tr><td><button class = "Button">Order History</button></td></tr>
						<tr><td><button class = "Button">Account & Data</button></td></tr>
						<tr><td><button class = "Button">Messages</button></td></tr>
						<tr><td><button class = "Button">Your Collection</button></td></tr>
						<tr><td><button class = "Button">Manage Payment Methods</button></td></tr>
						<tr><td><button class = "Button">Manage Addresses</button></td></tr>
						<tr><td><button class = "Button">Store Credit</button></td></tr>
						<tr><td><button class = "Button">Trade-In</button></td></tr>
					</table>
				</div>
				<div class = "modalColumnRight">
					<table>
						<tr><th><b>Sell</b></th></tr>
						<tr><td><button class = "Button">Account</button></td></tr>
						<tr><td><a href = "SellerPortal/SellerLogIn.php"><button class = "Button">Seller Portal</button></a></td></tr>
						<tr><td><button class = "Button">Marketplace Seller Resources</button></td></tr>
						<tr><td><button class = "Button">Pro Seller Resources</button></td></tr>
                        <tr><td><button class = "Button"> <a href="MainMenu.php?logout='1'"><?php if(isset($_SESSION['username'])) :?>
                            <p><div style="display:inline"><b>Sign Out</b></div></p>
                        </a></button><?php endif ?></td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<a href = "#"><button class = "btn btnSellWithUs"> Sell with us </button></a>
	<a href = "#"><button class = "btn btnCheckOut"><img src="Images/ShoppingCartIcon.png" width = "35" height = "35"></button></a>
    </div>
</div>

<div class="navbar" onmouseover="hide()" onmouseout ="show()">
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Discmania<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent">
				<p><div style="display:inline"><b>Discmania</b></div>
				<div style ="font-size:12px; display:inline"><button class="ShopAll" onclick = "document.location='Search.html'">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Royal Rage II</button></td></tr>
						<tr><td><button class = "Button">Active Shogun</button></td></tr>
						<tr><td><button class = "Button">Active Premium Rockstar</button></td></tr>
						<tr><td><button class = "Button">Active Premium Astronaut</button></td></tr>
						<tr><th><br><button class = "Button"><b>Discmania Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td></tr>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">S-Line PD</button></td></tr>
						<tr><td><button class = "Button">S-Line PD2</button></td></tr>
						<tr><td><button class = "Button">D-Line P2</button><br></td></tr>
						<tr><td><button class = "Button">C-Line FD2</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr>
							<td><img style = "margin-left: 10px; margin-top:-40px" src="Images/RoyalRage2.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Royal Rage 2</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td>
						</tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px">  </div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
 
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Discraft<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent">
				<p><div style="display:inline"><b>Discraft</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Crystal FLX Zone</button></td></tr>
						<tr><td><button class = "Button">Z-Line Scorch(First Run)</button></td></tr>
						<tr><td><button class = "Button">Metallic Z-Line Fierce</button></td></tr>
						<tr><td><button class = "Button">BroD Roach</button></td></tr>
						<tr><th><br><button class = "Button"><b>Discraft Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td></tr>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">ESP Zeus</button></td></tr>
						<tr><td><button class = "Button">Big Z Luna</button></td></tr>
						<tr><td><button class = "Button">Z Raptor</button></td></tr>
						<tr><td><button class = "Button">ESP Buzz</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/BrodieSmithFLXZone.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Brodie Smith Crystal FLX Zone</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px">  </div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Dynamic Discs<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent">
				<p><div style="display:inline"><b>Dynamic Discs</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Lucid-X Glimmer Sergeant</button></td></tr>
						<tr><td><button class = "Button">Hybrid Warden</button></td></tr>
						<tr><td><button class = "Button">Classic Moonshine Warden</button></td></tr>
						<tr><td><button class = "Button">Lucid-X Evader</button></td></tr>
						<tr><th><br><button class = "Button"><b>Dynamic Discs Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td></tr>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button></br><hr></th></tr>
						<tr><td><button class = "Button">Fuzion Raider</button></td></tr>
						<tr><td><button class = "Button">Lucid Justice</button></td></tr>
						<tr><td><button class = "Button">Classic Warden</button></td></tr>
						<tr><td><button class = "Button">Fuzion Truth</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/LucidXEvaderTyLove.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Lucid-X Evader Ty Love</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px">  </div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Innova<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent">
				<p><div style="display:inline"><b>Innova</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">DX Invader</button></td></tr>
						<tr><td><button class = "Button">DX Ryhnox</button></td></tr>
						<tr><td><button class = "Button">Star Avatar</button></td></tr>
						<tr><td><button class = "Button">Star Invictus</button></td></tr>
						<tr><th><br><button class = "Button"><b>Innova Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td></tr>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Star Destroyer</button></td></tr>
						<tr><td><tr><td><button class = "Button">Star Wraith</button></td></tr></td></tr>
						<tr><td><button class = "Button">KC Pro Aviar</button></td></tr>
						<tr><td><button class = "Button">Halo Shryke</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/DXInvader.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>DX Invader</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px">  </div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Latitude 64<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent" style = "margin-left:-430px">
				<p><div style="display:inline"><b>Latitude 64</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row" style = "margin-left:-430px">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Opto-X Glimmer Explorer</button></td></tr>
						<tr><td><button class = "Button">Opto-X Glimmer Fuse</button></td></tr>
						<tr><td><button class = "Button">Royal Grand Trust</button></td></tr>
						<tr><td><button class = "Button">Royal Sense Faith</button></td></tr>
						<tr><th><br><button class = "Button"><b>Latitude 64 Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td></tr>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Opto Pure</button></td></tr>
						<tr><td><button class = "Button">Opto Recoil</button></td></tr>
						<tr><td><button class = "Button">Opto Sapphire</button></td></tr>
						<tr><td><button class = "Button">Gold Line Diamond</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/ecoZeroPure.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Eco Zero Pure</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px"></div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Legacy<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent" style = "margin-left:-578px">
				<p><div style="display:inline"><b>Legacy</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row" style = "margin-left:-578px">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Icon Bandit</button></td></tr>
						<tr><td><button class = "Button">Icon Hunter</button></td></tr>
						<tr><td><button class = "Button">Icon Prowler</button></td></tr>
						<tr><td><button class = "Button">Pinnacle Cannon</button></td></tr>
						<tr><th><br><button class = "Button"><b>Legacy Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Pinnacle Clozer</button></td></tr>
						<tr><td><button class = "Button">Pinnacle Ghost</button></td></tr>
						<tr><td><button class = "Button">Icon Cannon</button></td></tr>
						<tr><td><button class = "Button">Icon Rampage</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/Bandit.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Icon Bandit</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px"></div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">MVP<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent" style = "margin-left:-595px;">
				<p><div style="display:inline"><b>MVP</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row" style = "margin-left:-595px;">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Cosmic Neutron Trace</button></td></tr>
						<tr><td><button class = "Button">Electron Envy(firm)</button></td></tr>
						<tr><td><button class = "Button">Electron Envy(soft)</button></td></tr>
						<tr><td><button class = "Button">Electron Nomad</button></td></tr>
						<tr><th><br><button class = "Button"><b>MVP Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th style = "padding-top: 20px"><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Electron Envy(firm)</button></td></tr>
						<tr><td><button class = "Button">Neutron Reactor</button></td></tr>
						<tr><td><button class = "Button">Electron Ion</button></td></tr>
						<tr><td><button class = "Button">Electron Nomad</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/CosmicNeutronTrace.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Cosmic Neutron Trace</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px">  </div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">Westside<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent" style = "margin-left:-564px;">
				<p><div style="display:inline"><b>Westside</b></div>
				<div style ="font-size:12px; margin-left: 30px; display:inline"><button class="ShopAll">Shop All</button></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row" style = "margin-left:-564px;">
				<div class="column">
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Latest Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Orgio Burst Queen</button></td></tr>
						<tr><td><button class = "Button">Vip-X Glimmer Giant</button></td></tr>
						<tr><td><button class = "Button">Vip-X Moonshine Anvil</button></td></tr>
						<tr><td><button class = "Button">Vip-X Stag</button></td></tr>
						<tr><th><br><button class = "Button"><b>Westside Product</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Putters</button></td></tr>
						<tr><td><button class = "Button">Midranges</button></td></tr>
						<tr><td><button class = "Button">Fairway Drivers</button></td>
						<tr><td><button class = "Button">Distance Drivers</button></td></tr>
						<tr><td><button class = "Button">Bags</button></td></tr>
						<tr><td><button class = "Button">Baskets</button></td></tr>
					</table>
					<table class = "dropdown-contentTable">
						<tr><th><button class = "Button"><b>Popular Release</b></button><br><hr></th></tr>
						<tr><td><button class = "Button">Orgio Harp</button></td></tr>
						<tr><td><button class = "Button">BT Soft Shield</button></td></tr>
						<tr><td><button class = "Button">TP Underworld</button></td></tr>
						<tr><td><button class = "Button">Vip Sword</button></td></tr>
						<tr><th><br>More<hr></th></tr>
						<tr><td><button class = "Button">Flight Chart</button></td></tr>
						<tr><td><button class = "Button">Mass Entry</button></td></tr>
						<tr><td><button class = "Button">Buylist</button></td></tr>
						<tr><td><button class = "Button">Gift Cards</button></td></tr>
						<tr><td><button class = "Button">Sell With Us</button></td></tr>
						<tr><td><button class = "Button">Help</button></td></tr>
						<tr><td style = "padding-bottom: 140px;"></td></tr>
					</table>
				</div>
				<div class = "column1">
					<table>
						<tr><td><img style = "margin-left: 10px; margin-top:-40px" src="Images/OrigioBurstQueen.png" width = "250" height = "250"><br><br><div style = "margin-left: 20px"><b>Origio Burst Queen</b></div><br><a href ="#"><button class = "btn btnOrderNow">Order Now</button></a><div style = "margin-bottom:100px"></div></td></tr>
					</table>
					<table style = "border-top:1px solid #d3d3d3; width:100%">
						<tr><th style = "padding-top: 11px;"><button class="button button2">Price Guide</button><div style = "margin-right:50px"></div></th></tr>
						<tr><th style = "padding-bottom: 10px"><button class="button button1">Advanced Search</button></th></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown" id = "dropdownId">
		<button class="dropbtn"><div style = "padding-left:10px;padding-right:10px">More<div class="triangle"></div></div></button>
		<div class="dropdown-content">
			<div class = "dropdownContent" style = "margin-left:-593px;">
				<p><div><b>More Products & Options</b></div></p>
			</div>
			<div class = "Background"></div>
			<div class="row"style = "margin-left:-593px;">
				<div class="column">
					<table style = "width:100%; padding-left:25px;">
						<tr>
							<th colspan = "3" style = "text-align:center; padding-top:20px; padding-right:50px">More Brands<hr></th>
						</tr>
						<tr>
							<td><button class = "Button">ABC</button></td>
							<td><button class = "Button">Full Turn</button></td>
							<td><button class = "Button">Quest AT</button></td>
						</tr>
						<tr>
							<td><button class = "Button">AGL</button></td>
							<td><button class = "Button">Galaxy</button></td>
							<td><button class = "Button">Reptillian</button></td>
						</tr>
						<tr>
							<td><button class = "Button">AquaFlight</button></td>
							<td><button class = "Button">Gateway</button></td>
							<td><button class = "Button">RPM</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Arsenal</button></td>
							<td><button class = "Button">Guru</button></td>
							<td><button class = "Button">Salient</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Cheengz</button></td>
							<td><button class = "Button">Kastaplast</button></td>
							<td><button class = "Button">Skyquest</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Crosslap</button></td>
							<td><button class = "Button">Kaufinator</button></td>
							<td><button class = "Button">Streamline</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Daredevil</button></td>
							<td><button class = "Button">Launch</button></td>
							<td><button class = "Button">Sune Sport</button></td>
						</tr>
						<tr>
							<td><button class = "Button">DGA</button></td>
							<td><button class = "Button">Lightning</button></td>
							<td><button class = "Button">TSA</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Dino</button></td>
							<td><button class = "Button">Lone Star</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Disc Golf UK</button></td>
							<td><button class = "Button">Millennium</button></td>
							<td><button class = "Button">TOBU</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Disctroyer</button></td>
							<td><button class = "Button">Mint</button></td>
							<td><button class = "Button">Viking</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Divergent</button></td>
							<td><button class = "Button">Nite Ize</button></td>
							<td><button class = "Button">Westside</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Elevation</button></td>
							<td><button class = "Button">Ozone</button></td>
							<td><button class = "Button">Wild</button></td>
						</tr>
						<tr>
							<td><button class = "Button">EV-7</button></td>
							<td><button class = "Button">Plastic Addicts</button></td>
							<td><button class = "Button">XCom</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Fourth Circle</button></td>
							<td><button class = "Button">Prodiscus</button></td>
							<td><button class = "Button">Yikun</button></td>
						</tr>
						<tr>
							<td style = "padding-bottom: 40px;"></td>
						</tr>
					</table>
				</div>
				<div class = "column1">
					<table style = "width:100%; padding-left:25px;">
						<tr>
							<th colspan = "3" style = "text-align:center; padding-top:20px; padding-right:50px">More Products<hr></th>
						</tr>
						<tr>
							<td><button class = "Button">Bags</button></td>
							<td><button class = "Button">Mystery Boxes</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Ultimate</button></td>
							<td><button class = "Button">Dry Bag</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Baskets</button></td>
							<td><button class = "Button">Racks</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Carts</button></td>
							<td><button class = "Button">Rangefinders</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Disc Lights</button></td>
							<td><button class = "Button">Retrievers</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Dog Discs</button></td>
							<td><button class = "Button">Shoes</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Mini Discs</button></td>
							<td><button class = "Button">Stools</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Water Bottles</button></td>
							<td><button class = "Button">Towels</button></td>
						</tr>
						<tr>
							<td><button class = "Button">Umbrellas</button></td>
							<td><button class = "Button">Starter Sets</button></td>
						</tr>
						<tr>
							<td style = "padding-bottom: 40px;"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dropdown">
		<button class="dropbtn">Gift Cards</button>
	</div>
</div>


<div class="Upcoming" id ="UpcomingId">
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Discmania Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/PrototypeP2.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:50px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Prototype P2</b></div>
					Putter <br><br> 
					Speed 2 | Glide 3 | Turn 0 | Fade 1 <br><br>
					Available in: D-Line<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Discmania-Logo.png" width = "200" height = "200" style = "margin-left:35px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Tour Series Royal Rage II</b></div>
					Fairway Driver <br><br> 
					Speed 7 | Glide 5 | Turn 0 | Fade 2 <br><br>
					Available in: Vapor<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/RoyalRage2.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
				
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Discraft Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/BrodieSmithFLXZone.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Tour Series Zone</b></div>
					Putter <br><br> 
					Speed 2 | Glide 3 | Turn 0 | Fade 1 <br><br>
					Available in: Crystal FLX<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Discraft-Logo.png" width = "225" height = "83" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>First Run Scorch</b></div>
					Fairway Driver <br><br> 
					Speed 7 | Glide 5 | Turn 0 | Fade 2 <br><br>
					Available in: Z-Line<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/ZLineScorch.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>

	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Dynamic Discs Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/HybridWarden.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Tour Series Warden</b></div>
					Putter <br><br> 
					Speed 2 | Glide 3 | Turn 0 | Fade 1 <br><br>
					Available in: Hybrid<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/DynamicDiscs-Logo.png" width = "225" height = "192" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Tour Series Sergeant</b></div>
					Fairway Driver <br><br> 
					Speed 7 | Glide 5 | Turn 0 | Fade 2 <br><br>
					Available in: LucidX<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/LucidXSergeant.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Innova Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/DXInvader.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Invader</b></div>
					Putter <br><br> 
					Speed 2 | Glide 3 | Turn 0 | Fade 1 <br><br>
					Available in: DX<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Innova-Logo.png" width = "225" height = "100" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Rhyno</b></div>
					Fairway Driver <br><br> 
					Speed 7| Glide 5| Turn 0 | Fade 2 <br><br>
					Available in: DX<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/DXRhynoX.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Latitude 64 Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/OptoXGlimmerExplorer.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Explorer</b></div>
					Putter <br><br> 
					Speed 2 | Glide 3 | Turn 0 | Fade 1 <br><br>
					Available in: Glimmer OptoX<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Latitude64-Logo.png" width = "225" height = "103" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Fuse</b></div>
					Fairway Driver <br><br> 
					Speed 7 | Glide 5 | Turn 0 | Fade 2 <br><br>
					Available in: Glimmer OptoX<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/OptoXGlimmerFuse.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Legacy Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/Bandit.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Bandit</b></div>
					Fairway Driver <br><br> 
					Speed 9 | Glide 5 | Turn -2 | Fade 1 <br><br>
					Available in: Icon<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Legacy-Logo.png" width = "225" height = "225" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Patriot</b></div>
					Fairway Driver <br><br> 
					Speed 7 | Glide 5 | Turn -2 | Fade 1 <br><br>
					Available in: Legend<br><br>
					Lowest Listing: $29.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/LegendPatriot.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>MVP Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/CosmicNeutronTrace.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Trace</b></div>
					Distance Driver <br><br> 
					Speed 11 | Glide 5 | Turn -1| Fade 2 <br><br>
					Available in: Neutron<br><br>
					Lowest Listing: $15.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/MVP-Logo.png" width = "225" height = "225" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Octane</b></div>
					Distance Driver <br><br> 
					Speed 13 | Glide 5 | Turn -1.5 | Fade 2 <br><br>
					Available in: Fission<br><br>
					Lowest Listing: $24.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/FissionOctane.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<div class="mySlides fade">
		<div class = "DiscSlidesHeader"><b>Westside Latest Release</b></div>
		<table>
			<tr Style = "postion:relative">
				<td><img src="Images/OrigioBurstQueen.png" width = "250" height = "250" style = "margin-left:50px; margin-top:-35px"></td>
				<td><div class = "DiscSlidesText" style = "width:300px; font-size:15px; margin-left:25px">
					<div style = "padding-bottom:25px; font-size:20px"><b>Queen</b></div>
					Distance Driver <br><br> 
					Speed 14 | Glide 5 | Turn -3 | Fade 2 <br><br>
					Available in: Origio<br><br>
					Lowest Listing: $10.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src = "Images/Westside-Logo.png" width = "225" height = "225" style = "margin-left:50px"></td>
				<td><div class = "DiscSlidesText">
					<div style = "padding-bottom:25px; font-size:20px"><b>Sword</b></div>
					Distance Driver <br><br> 
					Speed 12 | Glide 5 | Turn -0.5 | Fade 2 <br><br>
					Available in: Origio<br><br>
					Lowest Listing: $10.99<br><br>
					<button class = "DiscSlidesButton"> Order Now</button></div>
				</td>
				<td><img src="Images/OrigioBurstSword.png" width = "250" height = "250" style = "margin-left:25px; margin-top:-35px"><td>
			</tr>
		</table>
	</div>
	
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class = "dotStyle" id = "dotId"> 
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
	<span class="dot" onclick="currentSlide(5)"></span>
	<span class="dot" onclick="currentSlide(6)"></span>
	<span class="dot" onclick="currentSlide(7)"></span>
	<span class="dot" onclick="currentSlide(8)"></span>
</div>

<div class = "Featured" id = "FeaturedId">
		<div class="FeaturedTable">
			<table>
				<tr><th style = "float:left"><b>Featured</b></th></tr>
				<tr><td><a href = "#"><button class = "Button"><img src="Images/SkyRider.png" width = "100" height = "100" style = "margin-left: -10px"></button><button class = "Button" style = "margin-top:25px"><b>Sky Rider</b><br>S-Line PD2<div style = "font-size:12px;">Discmania</div></button></a></td></tr>
				<tr><td><button class = "Button"><img src="Images/LucidXTruth.png" width = "100" height = "100" style = "margin-left: -9px"></button><button class = "Button" style = "margin-top:25px"><b>Lucid-X Truth</b><br><div style = "font-size:12px">Dynamic Discs</div></button></td></tr>
				<tr><td><button class = "Button"><img src="Images/4xPMZone.png" width = "100" height = "100" style = "margin-left: -10px"></button><button class = "Button" style = "margin-top:25px"><b>Brodie Smith Zone</b><br><div style = "font-size:12px">Disccraft</div></button></td></tr>
				<tr><td><button class = "Button"><img src="Images/McBethDestroyer.png" width = "100" height = "100" style = "margin-left: -10px"></button><button class = "Button" style = "margin-top:25px"><b>Paul McBeth <br>Star Destroyer</b><br><div style = "font-size:12px">Innova</div></button></td></tr>
			</table>
		</div>
		<div class = "FlightChartsTable">
		<table>
				<tr><th style = "font-size:25px; padding-bottom:25px"><b>Flight Charts</b></th></tr>
				<tr><td><img src="Images/Discmania-FlightChart.png" width = "839" height = "828" style = "margin-left: -10px; cursor:pointer" onclick="window.open(this.src, '_blank')"></td></tr>
				<tr><td><img src="Images/Latitude64-FlightChart.png" width = "839" height = "597" style = "margin-left: -10px; cursor:pointer" onclick="window.open(this.src, '_blank')"></td></tr>
			</table>
		</div>
		<div class = "BannersTable">
			<table>
				
			</table>
		</div>
</div>

<div class = "BottomNavigation">
	<table class = "TableBottomNavigation">
		<tr><th>SHOP</th></tr>
		<tr><td><button class = "Button">Discmania</button></td></tr>
		<tr><td><button class = "Button">Discraft</button></td></tr>
		<tr><td><button class = "Button">Dynamic Discs</button></td></tr>
		<tr><td><button class = "Button">Infinite</button></td></tr>
		<tr><td><button class = "Button">Innova</button></td></tr>
		<tr><td><button class = "Button">Latitude 64</button></td></tr>
		<tr><td><button class = "Button">MVP</button></td></tr>
		<tr><td><button class = "Button">Westside</button></td></tr>
	</table>
	<table class = "TableBottomNavigation">
		<tr><th>PRODUCTS</th></tr>
		<tr><td><button class = "Button">Putters</button></a></td></tr>
		<tr><td><button class = "Button">Midranges</button></a></td></tr>
		<tr><td><button class = "Button">Fairway Drivers</button></a></td>
		<tr><td><button class = "Button">Distance Drivers</button></td></tr>
		<tr><td><button class = "Button">Bags</button></td></tr>
		<tr><td><button class = "Button">Baskets</button></td></tr>
	</table>
	<table class = "TableBottomNavigation">
		<tr><th>BUY WITH US</th></tr>
		<tr><td><button class = "Button">Buyer Safeguard</button></td></tr>
		<tr><td><button class = "Button">Gift Cards</button></td></tr>
		<tr><td><button class = "Button">Cart Optimizer</button></td></tr>
		<tr><td><button class = "Button">Mass Entry</button></td></tr>
		<tr><td><button class = "Button">Colection Tracker</button></td></tr>
		<tr><th>SELL WITH US</th></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</table>
	<table class = "TableBottomNavigation">
		<tr><th>BUYLIST</th></tr>
		<tr><td><button class = "Button">Buylist for Players</button></td></tr>
		<tr><td><button class = "Button">Buylist for Stores</button></td></tr>
		<tr><th>ABOUT</th></tr>
		<tr><td><button class = "Button">About Us</button></td></tr>
		<tr><td><button class = "Button">Our Core Values</button></td></tr>
		<tr><td></td></tr>
		<tr><td></td><tr>
		<tr><td></td></tr>
	</table>
	<table class = "TableBottomNavigation">
		<tr><th>HOW CAN WE HELP?</th></tr>
		<tr><td><button class = "Button">Contact Customer Service</button></td></tr>
		<tr><td><button class = "Button">Help Center</button></td></tr>
		<tr><td><button class = "Button">Leave Us Feedback</button></td></tr>
		<tr><td><button class = "Button">Refund and Return Policy</button></td></tr>
		<tr><th>CONNECT WITH US</th></tr>
		<tr><td><button class = "Button"><img src="Images/FBlogo.png" width = "30" height = "30"></button><button class = "Button"><img src="Images/IGlogo.png" width = "30" height = "30"></button><button class = "Button"><img src="Images/Twitterlogo.png" width = "30" height = "30"></button></td></tr>
		<tr><td><button class = "Button">Email Us</button></td></tr>
		<tr><td></td></tr>
	</table>
</div>

<script>
	// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function(){
	modal.style.display = "block"
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function hide(){
	document.getElementById("UpcomingId").style.zIndex = "-2";
	document.getElementById("dotId").style.zIndex = "-2";
	document.getElementById("FeaturedId").style.zIndex = "-2";
}

function show(){
	document.getElementById("UpcomingId").style.zIndex = "0";
	document.getElementById("dotId").style.zIndex = "0";
	document.getElementById("FeaturedId").style.zIndex = "0";
}

var slideIndex = 0;
showSlides();
var slides,dots;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10000);
}

function plusSlides(position) {
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function currentSlide(index) {
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";
    dots[index-1].className += " active";
}

</script>

</body>
</html> 
