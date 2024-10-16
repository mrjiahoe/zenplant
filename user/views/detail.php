<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db.php';
	
	if (isset($_GET['id'])) {
		$plantId = $_GET['id']; // Ensure it's an integer
		$sql = "SELECT * FROM plant WHERE id = $plantId"; // Fetch product by ID
		$result = mysqli_query($conn, $sql);
	}

	$title = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant - <?php echo $title["name"];?></title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ==============-->
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
	<?php require dirname(__DIR__).'/components/header.php'; 
	require 'db.php';

	if (isset($_GET['id'])) {
		$plantId = $_GET['id']; // Ensure it's an integer
		$sql = "SELECT * FROM plant WHERE id = $plantId"; // Fetch product by ID
		$result = mysqli_query($conn, $sql);
	}
	?>

    <!--==================== MAIN ====================-->
	
	<div class="product-detail">
		<div class="product-detail-box">
			<div class="left">
				<div class="main-image">
				<?php
					if ($result && mysqli_num_rows($result) > 0) {
						$row = mysqli_fetch_assoc($result);
				
					echo "<img src='".$row["image"]."' alt='".$row["name"]."'>";
					}
				echo "</div>";
				
				/*<div class="option">
					<img onclick="img('picture name')">
				</div>*/
			echo "</div>";
			
			echo "<div class='product-content'>";
					echo "<h3>".$row["name"]."</h3>";
					echo "<h4><strong>".$row["category"]."</strong></h4>";
					echo "<h2><small>BND</small>".$row["price"]."</h2><br>";
					
					echo "<h3>Rating</h3>";
					$star = $row["rating"];
					$count = 0;

					// Output filled stars
					while ($count < $star) {
						echo "<i class='fa-solid fa-star'></i>";
						$count++;
					}

					// Calculate and output blank stars
					$blank = 5 - $star;
					$count = 0;
					while ($count < $blank) {
						echo "<i class='fa-regular fa-star'></i>";
						$count++;
					}
					echo "<br><br>";
					
					echo "<h3>Description</h3>";
					echo "<p>".$row["description"]."</p>";
					
					echo "<div class='read-more'>";
					echo "<h3 class='extra'><br>Benefit</h3>";
					echo "<p class='extra'><br>".$row["pros"]."</p>";
					echo "<input type='checkbox' id='button'/>";
					echo "<label for='button'></label></div>";
					
					echo "<h3><br>Quantity</h3>";
				?>
		
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

	<?php
		$currentId = $plantId;
		$currentSql = "select category from plant where id =".$currentId;
		$currentResult=mysqli_query($conn, $currentSql);
		
		if (!$currentResult || mysqli_num_rows($currentResult) === 0) {
			die("Product not found: " . mysqli_error($conn));
		}
		
		$currentProduct = mysqli_fetch_assoc($currentResult);
		$currentCategory = $currentProduct['category'];
	
		$sql = "SELECT * FROM plant WHERE category = '" . mysqli_real_escape_string($conn, $currentCategory) . "' AND id != " . $currentId . " LIMIT 3";
		$result = mysqli_query($conn, $sql);

		
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
	
		if(mysqli_num_rows($result) > 0){
			echo "<div class='similar-product-heading'>";
			echo "<strong><span>Similar Product</span></strong></div>";
			
			echo "<div class='similar-product'>";
		while($similar = mysqli_fetch_assoc($result)){
			echo "<div class='similar-product-content'><a href='detail.php?name=" . $similar["name"] . "&id=" . $similar["id"] . "' class='nav__link'>";
			echo "<img src='".$similar["image"]."' alt='".$similar["name"]."'>";
			echo "<h3>".$similar["name"]."</h3>";
			echo "<h5><strong>".$similar["category"]."</strong></h5>";
			echo "<h6>".$similar["price"]."</h6>";
			
			$star = $similar["rating"];
			$count = 0;

			// Output filled stars
			while ($count < $star) {
				echo "<i class='fa-solid fa-star'></i>";
				$count++;
			}

			// Calculate and output blank stars
			$blank = 5 - $star;
			$count = 0;
			while ($count < $blank) {
				echo "<i class='fa-regular fa-star'></i>";
				$count++;
			}
			
			echo "</a></div>";
		}
		} else {
			echo "<div class='similar-product-heading'>";
			echo "<strong><span>Suggested Product</span></strong></div>";
			
			$suggest = "SELECT DISTINCT category FROM plant WHERE category <> '" . mysqli_real_escape_string($conn, $currentCategory) . "' limit 3";
			$suggestResult = mysqli_query($conn,$suggest);
			
			if (!$suggestResult) {
				die("Query failed: " . mysqli_error($conn));
			}
			
			if (mysqli_num_rows($suggestResult) > 0){
				echo "<div class='similar-product'>";
				while($suggestedCategory = mysqli_fetch_assoc($suggestResult)){
					$suggestCategory = mysqli_real_escape_string($conn, $suggestedCategory['category']);
					
					$productSql= "SELECT * FROM plant WHERE category = '$suggestCategory' LIMIT 1"; // Limit products
					$productsResult = mysqli_query($conn, $productSql);
					
					if ($productsResult && mysqli_num_rows($productsResult) > 0){
						while($suggested = mysqli_fetch_assoc($productsResult)){
							echo "<div class='similar-product-content'><a href='detail.php?name=" . $suggested["name"] . "&id=" . $suggested["id"] . "' class='nav__link'>";
							echo "<img src='".$suggested ["image"]."' alt='".$suggested ["name"]."'>";
							echo "<h3>".$suggested ["name"]."</h3>";
							echo "<h5><strong>".$suggested["category"]."</strong></h5>";
							echo "<h6>".$suggested["price"]."</h6>";
							
							$star = $suggested["rating"];
							$count = 0;

							// Output filled stars
							while ($count < $star) {
								echo "<i class='fa-solid fa-star'></i>";
								$count++;
							}

							// Calculate and output blank stars
							$blank = 5 - $star;
							$count = 0;
							while ($count < $blank) {
								echo "<i class='fa-regular fa-star'></i>";
								$count++;
							}
							
							echo "</a></div>";
						}
					}
					
				}
			}
		}
		
		echo "</div>";
	?>

<div class="review-heading">
		<strong><span>Latest Reviews</span></strong>
	</div>
	
	<div class="review-container">
		<?php
			echo "<div class='review-box'>";
			echo "<div class='review-top'>";
			echo "<div class='profile'>";
			echo "<div class='profile-img'>";
			echo "<img>";
			echo "</div>";
			
			echo "<div class='user-name'>";
			echo "<strong>Name</strong>";
			echo "<span>@username</span>";
			echo "<span>date</span>";
			echo "</div></div>";
			
			echo "<div class='review'>";
			echo "rating";
			echo "</div></div>";
			
			echo "<div class='review-comment'>";
			echo "<h4>title</h4>";
			echo "<p>explanation</p>";
			echo "</div></div>";
		?>

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

    <!--=============== MAIN JS ===============-->
	<script src="../assets/js/main.js"></script>

</body>

</html>