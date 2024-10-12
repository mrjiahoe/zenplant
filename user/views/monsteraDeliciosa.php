<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant - Monstera Deliciosa</title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ==============-->
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
	<?php require dirname(__DIR__).'/components/header.php'; ?>

    <!--==================== MAIN ====================-->
	
	<div class="product-detail">
		<div class="product-detail-box">
			<div class="left">
				<div class="main-image">
					<!-- <img src="user/assets/img/plant/MonsteraDeliciosa.jpg" alt="MonsteraDeliciosa"> -->
					<img src="../assets/img/plant/MonsteraDeliciosa.jpg" alt="MonsteraDeliciosa">
				</div>
				
				<div class="option">
					<img onclick="img('picture name')">
				</div>
			</div>
			
			<div class="product-content">
				<h3>Monstera Deliciosa</h3>
				<h2><small>BND</small>27</h2><br>
				
				<h3>Rating</h3>
				<img src="../assets/img/rating/3star.png" alt="3star" width="125" height="125"><br>
				
				<h3>Description</h3>
				<p>description</p><br>
		
				<h3>Quantity</h3>
		
				<div class="product-quantity">
					<span class="minus">-</span>
					<span class="num">1</span>
					<span class="plus">+</span>
				</div><br>
				
				<script>
					const plus = document.querySelector(".plus"),
					minus = document.querySelector(".minus"),
					num = document.querySelector(".num");
					
					let a=1;
					
					plus.addEventListener("click", ()=>{
						a++;
						num.innerText = a;
					});
					
					minus.addEventListener("click", ()=>{
						if(a>1){
							a--;
							num.innerText = a;
						}
					});
				</script>
				
				<button>Add to Cart</button>
			</div>
		</div>
	</div>
	
	<div class="similar-product-heading">
		<strong><span>Similar Product</span></strong>
	</div>
	
	<div class="similar-product">
		<div class="similar-product-content">
			<img src="../assets/img/plant/PileaPeperomioides.jpg" alt="PileaPeperomioides" width="200" height="200">
			<h3>name</h3>
			<p>detail</p>
			<h6>price</h6>
			<img src="../assets/img/rating/5star.png" alt="5star" width="100" height="100">
		</div>
		
		<div class="similar-product-content">
			<img src="../assets/img/plant/PileaPeperomioides.jpg" alt="PileaPeperomioides" width="200" height="200">
			<h3>name</h3>
			<p>detail</p>
			<h6>price</h6>
			<img src="../assets/img/rating/5star.png" alt="5star" width="100" height="100">
		</div>
		
		<div class="similar-product-content">
			<img src="../assets/img/plant/PileaPeperomioides.jpg" alt="PileaPeperomioides" width="200" height="200">
			<h3>name</h3>
			<p>detail</p>
			<h6>price</h6>
			<img src="../assets/img/rating/5star.png" alt="5star" width="100" height="100">
		</div>
	</div>
	
	<div class="review-heading">
		<strong><span>Latest Reviews</span></strong>
	</div>
	
	<div class="review-container">
		<div class="review-box">
			<div class="review-top">
				<div class="profile">
					<div class="profile-img">
						<img>
					</div>
					
					<div class="user-name">
						<strong>Name</strong>
						<span>@username</span>
					</div>
				</div>
				
				<div class="review">
					<img src="../assets/img/rating/4star.png" alt="4star" width="100" height="100">
				</div>
			</div>
			
			<div class="review-comment">
				<h4>title</h4>
				<p>explanation</p>
			</div>
		</div>
		
		<div class="review-box">
			<div class="review-top">
				<div class="profile">
					<div class="profile-img">
						<img>
					</div>
					
					<div class="user-name">
						<strong>Name</strong>
						<span>@username</span>
					</div>
				</div>
				
				<div class="review">
					<img src="../assets/img/rating/2star.png" alt="2star" width="100" height="100">
				</div>
			</div>
			
			<div class="review-comment">
				<h4>title</h4>
				<p>explanation</p>
			</div>
		</div>
		
		<div class="review-box">
			<div class="review-top">
				<div class="profile">
					<div class="profile-img">
						<img>
					</div>
					
					<div class="user-name">
						<strong>Name</strong>
						<span>@username</span>
					</div>
				</div>
				
				<div class="review">
					<img src="../assets/img/rating/3star.png" alt="3star" width="100" height="100">
				</div>
			</div>
			
			<div class="review-comment">
				<h4>title</h4>
				<p>explanation</p>
			</div>
		</div>
		
		<div class="review-box">
			<div class="review-top">
				<div class="profile">
					<div class="profile-img">
						<img>
					</div>
					
					<div class="user-name">
						<strong>Name</strong>
						<span>@username</span>
					</div>
				</div>
				
				<div class="review">
					<img src="../assets/img/rating/4star.png" alt="4star" width="100" height="100">
				</div>
			</div>
			
			<div class="review-comment">
				<h4>title</h4>
				<p>explanation</p>
			</div>
		</div>
	</div><br>
	
	<form class="comment" action="" method="POST">
		<strong><label>Comment Review:<br></strong></label>
		<div class="comment-container">
			<div class="comment-box">
				<div>
					<label>Overall review:</label><br>
					<input name="comment" placeholder="summary"><br>
					<label>Explanation:</label><br>
					<textarea name="comment" placeholder="description"></textarea><br>
					<label>Rating:</label><select class="select-rating">
								<option value="1">1 Star</option>
								<option value="2">2 Star</option>
								<option value="3">3 Star</option>
								<option value="4">4 Star</option>
								<option value="5">5 Star</option>
							</select><br>
					
					<div class="button-group">
						<button type="submit" class="submit">Submit</button>
						<button class="cancel">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	<script>
		function img(anything){
			document.querySelector('.slide').src=anything;
		}
		
		function change(change){
			const line=document.querySelector('.home');
			line.style.background=change;
		}
	</script>

    <!--=============== MAIN JS ===============-->
	<script src="../assets/js/main.js"></script>

</body>

</html>