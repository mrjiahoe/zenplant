<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant - Service</title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ==============-->
    <link rel="stylesheet" href="./user/assets/css/styles.css" />
</head>

<body>
    <?php 
    require dirname(__DIR__).'/components/header.php';
    ?>

    <!--==================== MAIN ====================-->
	
	<div class="shop">
		<h1>All Product</h1>
	
		<div class="filter">
			<div class="filter-box">
				<h3>Category</h3>
				
				<div class="category-button">
					<div>
						<button class="active" data-name="all">All</button>
						<button data-name="Araceae">Araceae</button> <!--for monstera deliciosa, pink anthurium, zzplant, aglaonema wishes, cascading pothos, philodendron birkin-->
						<button data-name="Urticaceae">Urticaceae</button> <!--for pilea peperomioides-->
						<button data-name="Maranta">Maranta</button> <!--for calathea ornata, calathea rattlesnake, calathea orbifolia, maranta red-->
						<button data-name="Orchidaceae">Orchidaceae</button> <!--for petite orange orchid and white phalaenopsis-->
						<button data-name="Asparagaceae">Asparagaceae</button> <!--for snake plant laurentii-->
						<button data-name="Malvaceae">Malvaceae</button> <!--for braided money tree-->
						<button data-name="Moraceae">Moraceae</button> <!--for ficus chloe, fiddle leaf fig-->
						<button data-name="Aspleniaceae">Aspleniaceae</button> <!--for bird's nest fern-->
						<button data-name="Peperaceae">Peperaceae</button> <!--for peperomia obtusifolia-->
					</div>
				</div>
				
				<!--=============== CATEGORY FILTER JS ===============-->
				<script src="assets/js/category.js"></script>
				
				<br>
				<h3>Price</h3>
			
				<div class="slider-container">
					<input type="range" id="range" min="0" max="30" value="0">
					<div class="value">30</div>
				</div>
				
				<!--=============== PRICE JS ===============-->
				<script src="assets/js/slider.js"></script>
				
				<br>
				<h3>Sort</h3>
			
				<div>
					<input type="radio" name="sort"> Price Ascending<br>
					<input type="radio" name="sort"> Price Descending<br>
					<input type="radio" name="sort"> Rating<br>
					<input type="radio" name="sort"> Latest
				</div>
				
			</div>
			<div class="filter-search">Search</div>
		</div>
		
		<div class="shop-grid">
			<a href="user/views/MonsteraDeliciosa.php" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/MonsteraDeliciosa.jpg" alt="MonsteraDeliciosa">
					<p>Monstera Deliciosa</p>
					<p>BND27</p>
				</div>
			</div></a>

			<a href="#" class="nav__link"><div class="product" data-name="Urticaceae">
				<div>
					<img src="./user/assets/img/plant/PileaPeperomioides.jpg" alt="PileaPeperomioides">
					<p>Pilea Peperomioides</p>
					<p>BND15</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Maranta">
				<div>
					<img src="./user/assets/img/plant/CalatheaOrnata.jpg" alt="CalatheaOrnata">
					<p>Calathea Ornata</p>
					<p>BND19</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Maranta">
				<div>
					<img src="./user/assets/img/plant/CalatheaRattlesnake.jpg" alt="CalatheaRattlesnake">
					<p>Calathea Rattlesnake</p>
					<p>BND23</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Orchidaceae">
				<div>
					<img src="./user/assets/img/plant/OrangeOrchid.jpg" alt="PetiteOrangeOrchid">
					<p>Petite Orange Orchid</p>
					<p>BND30</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/PinkAnthurium.jpg" alt="PinkAnthurium">
					<p>Pink Anthurium</p>
					<p>BND30</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Orchidaceae">
				<div>
					<img src="./user/assets/img/plant/WhitePhalaenopsisOrchid.jpg" alt="WhitePhalaenopsisOrchid">
					<p>White Phalaenopsis Orchid</p>
					<p>BND30</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/ZzPlant.jpg" alt="ZzPlant">
					<p>Zz Plant</p>
					<p>BND30</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/AglaonemaWishes.jpg" alt="AglaonemaWishes">
					<p>Aglaonema Wishes</p>
					<p>BND30</p>
				</div>
			</div></a>
		
			<a href="#" class="nav__link"><div class="product" data-name="Maranta">
				<div>
					<img src="./user/assets/img/plant/CalatheaOrbifolia.jpg" alt="CalatheaOrbifolia">
					<p>Calathea Orbifolia</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Asparagaceae">
				<div>
					<img src="./user/assets/img/plant/SnakePlantLaurentii.jpg" alt="SnakePlantLaurentii">
					<p>Snake Plant Laurentii</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Malvaceae">
				<div>
					<img src="./user/assets/img/plant/BraidedMoneyTree.jpg" alt="BraidedMoneyTree">
					<p>Braided Money Tree</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/CascadingPothos.jpg" alt="CascadingPothos">
					<p>Cascading Pothos</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Moraceae">
				<div>
					<img src="./user/assets/img/plant/FicusChloe.jpg" alt="FicusChloe">
					<p>Ficus Chloe</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Aspleniaceae">
				<div>
					<img src="./user/assets/img/plant/BirdNestFern.jpg" alt="BirdNestFern">
					<p>Bird's Nest Fern</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Maranta">
				<div>
					<img src="./user/assets/img/plant/MarantaRed.jpg" alt="MarantaRed">
					<p>Maranta Red</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Peperaceae">
				<div>
					<img src="./user/assets/img/plant/PeperomiaObtusifolia.jpg" alt="PeperomiaObtusifolia">
					<p>Peperomia Obtusifolia</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Araceae">
				<div>
					<img src="./user/assets/img/plant/PhilodendronBirkin.jpg" alt="PhilodendronBirkin">
					<p>Philodendron Birkin</p>
					<p>BND30</p>
				</div>
			</div></a>
			
			<a href="#" class="nav__link"><div class="product" data-name="Moraceae">
				<div>
					<img src="./user/assets/img/plant/FiddleLeafFig.jpg" alt="FiddleLeafFig">
					<p>Fiddle Leaf Fig</p>
					<p>BND30</p>
				</div>
			</div></a>
		</div>
	</div>

    <!--=============== MAIN JS ===============-->
        <script src="./user/assets/js/main.js"></script>
        <script src="../assets/js/slider.js"></script>
        <script src="./user/assets/js/category.js"></script>

</body>

</html>