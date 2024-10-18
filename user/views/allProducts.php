<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant - Product</title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ==============-->
    <link rel="stylesheet" href="./user/assets/css/styles.css" />
</head>

<body>
    <?php 
    require dirname(__DIR__).'/components/header.php';
	require 'db.php';
    ?>

    <!--==================== MAIN ====================-->
	
	<div class="shop">
		<h1>All Product</h1>
	
		<div class="filter">
			<div class="filter-box">
				<h3>Category</h3>
				
				<div class="category-button">

					<?php
						 if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
						
						$item = "SELECT DISTINCT category FROM plants";
						$resultItem = mysqli_query($conn, $item);
						
						if (!$resultItem) {
							die("Query failed: " . mysqli_error($conn));
						}
						
						echo "<div>";
						echo "<button data-name='all' class='active'>All</button> ";
						while($button = mysqli_fetch_assoc($resultItem)){
							echo "<button data-name='". $button["category"]."'>". $button["category"]."</button> ";
						}
						echo "</div>";
					?>
					
				</div>
				
				<br>
				<h3>Sort</h3>
				
				<form action="" method="GET">
				<div>
					<input type="radio" name="sort" value="ascPrice" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'ascPrice') echo 'checked'?>> Price Ascending<br>
					<input type="radio" name="sort" value="descPrice" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'descPrice') echo 'checked'?>> Price Descending<br>
					<input type="radio" name="sort" value="rating" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'rating') echo 'checked'?>> Rating<br>
					<input type="radio" name="sort" value="latest" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'latest') echo 'checked'?>> Latest
				</div>
				
				<div>
				<br>
					<div><input type="submit" name="submit" class="filter-search" value="Search"></div>
				</div>
				</form>
				
			</div>
		</div>
		
		<div class="shop-grid">
		<?php
		$orderBy = '';
		
		if(isset($_GET['sort'])){
			switch ($_GET['sort']) {
				case 'ascPrice':
					$orderBy = 'ORDER BY price ASC';
					break;
				case 'descPrice':
					$orderBy = 'ORDER BY price DESC';
					break;
				case 'rating':
					$orderBy = 'ORDER BY rating DESC';
					break;
				case 'latest':
					$orderBy = 'ORDER BY id DESC';
					break;
			}
		}
		
		$sql = "SELECT * FROM plants $orderBy";
		$products = mysqli_query($conn, $sql);
		
		if ($products && mysqli_num_rows($products) > 0) {
            foreach ($products as $product) {
                echo "<div class='product' data-name='" . $product["category"] . "'>";
                // echo "<a href='detail.php?id=" . $product["plantId"] . "' class='nav__link'>";
                echo "<a href='detail/" . $product["plantId"] . "' class='nav__link'>";
                echo "<div><img src='" . $product["imageUrl"] . "' alt='" . $product["name"] . "'>";
                echo "<p>" . $product["name"] . "</p>";
                echo "<p>BND " . $product["price"] . "</p>";
                echo "</div></a></div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
		?>
		</div>
	</div>

    <!--=============== MAIN JS ===============-->
        <script src="./user/assets/js/main.js"></script>
        <script src="./user/assets/js/category.js"></script>

</body>

</html>