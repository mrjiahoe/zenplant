-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantEcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `COL 1` int(2) DEFAULT NULL,
  `COL 2` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`COL 1`, `COL 2`) VALUES
(1, 'Araceae'),
(2, 'Urticaceae'),
(3, 'Maranta'),
(4, 'Orchidaceae'),
(5, 'Asparagaceae'),
(6, 'Malvaceae'),
(7, 'Moraceae'),
(8, 'Aspleniaceae'),
(9, 'Peperaceae'),
(10, 'Lamiaceae'),
(11, 'Oleaceae'),
(12, 'Asteraceae'),
(13, 'Asphodelaceae'),
(14, 'Rosaceae');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text NOT NULL,
  `pros` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `name`, `category`, `price`, `rating`, `description`, `pros`, `image`) VALUES
(1, 'Monstera Deliciosa', 'Araceae', 25, 5, 'Climbing, Evergreen Perennial Vine, Noted For Its Large Perforated Leaves On Thick Plant Stems And Long Cord-Like Aerial Roots', 'Improve Air Quality, Easy To Care', './user/assets/img/plant/MonsteraDeliciosa.jpg'),
(2, 'Pilea Peperomioides', 'Urticaceae', 17, 5, 'Erect, Evergreen Perennial Plant, With Shiny, Dark Green, Circular Leaves On Long Petioles', 'Pet Friendly, Easy To Care', './user/assets/img/plant/PileaPeperomioides.jpg'),
(3, 'Calathea Ornata', 'Maranta', 20, 3, 'Oval, Dark Olive Green Leaves And Numerous Pinstripes In Vivid Pink', 'Remove Toxins From Air', './user/assets/img/plant/CalatheaOrnata.jpg'),
(4, 'Calathea Rattlesnake', 'Maranta', 20, 4, 'Long, Wavy Green Leaves With A Brushstroke Pattern Resembling Reptile Skin', 'Filter Indoor Air, Boost Mood And Concentration', './user/assets/img/plant/CalatheaRattlesnake.jpg'),
(5, 'Orange Orchid', 'Orchidaceae', 30, 3, 'Tiny Flower, In Shades Of Yellow And Orange', 'Have Calming Properties, Improve Sleep Quality', './user/assets/img/plant/OrangeOrchid.jpg'),
(6, 'Pink Anthurium', 'Araceae', 27, 4, 'Herbaceous Evergreen Plant, Heart-Shaped And Glossy Dark Green Leaves, Cream Yellow Tail-Like Spadix And Waxy Red Spathe Inflorescence', 'Improve Indoor Air Quality, Basic And Simple Care', './user/assets/img/plant/PinkAnthurium.jpg'),
(7, 'White Phalaenopsis Orchid', 'Orchidaceae', 30, 3, 'Round, Pure White Flower That Can Have Hints Of Blush On The Back Side Of The Bloom', 'Good For Beginner, Long Bloom Period', './user/assets/img/plant/WhitePhalaenopsisOrchid.jpg'),
(8, 'Zz Plant', 'Araceae', 15, 2, 'Stemless Evergreen Plant  With Attractive, Pinnately Compound Leaves Rising Up From Its Rhizomes', 'Pet Friendly, Easy To Care', './user/assets/img/plant/ZzPlant.jpg'),
(9, 'Aglaonema Wishes', 'Araceae', 17, 4, 'Pink, Green And Cream Leaves Each Leaf Has Its Own Unique Markings And Variegation', 'Good For Beginner, Help Purify Indoor Air', './user/assets/img/plant/AglaonemaWishes.jpg'),
(10, 'Calathea Orbifolia', 'Maranta', 15, 5, 'Large, Round Leaves  Striped With Pale Silver-Green Markings, With The Undersides Also Being A Pale Silver-Green', 'Pet Friendly, Remove Toxins And Improve Air Quality', './user/assets/img/plant/CalatheaOrbifolia.jpg'),
(11, 'Snake Plant Laurentii', 'Asparagaceae', 21, 3, 'Succulent Plant Characterized By Its Upright Sword-Like Leaves With Vibrant Yellow Edges', 'Requires Little Attention, Filter Indoor Air', './user/assets/img/plant/SnakePlantLaurentii.jpg'),
(12, 'Braided Money Tree', 'Malvaceae', 27, 1, 'Tree-Like Plant With A Braided Trunk', 'Improve Air Quality, Thrive With Minimal Care, Pet Friendly', './user/assets/img/plant/BraidedMoneyTree.jpg'),
(13, 'Cascading Pothos', 'Araceae', 15, 2, 'Smooth And Leathery Heart-Shaped Leaves', 'Can Thrive In Low Light, Easy To Care', './user/assets/img/plant/CascadingPothos.jpg'),
(14, 'Ficus Chloe', 'Moraceae', 15, 2, 'Cultivar With Broad, Deep Green, Glossy Leaves', 'Have Natural Anti-Inflammatory Properties, Easy To Care', './user/assets/img/plant/FicusChloe.jpg'),
(15, "Bird\'s Nest Fern", 'Aspleniaceae', 15, 3, 'Solid, Undivided Fronds With Dark Central Rib Down Its Length', 'Easy To Care, Purify Air', './user/assets/img/plant/BirdNestFern.jpg'),
(16, 'Maranta Red', 'Maranta', 17, 2, 'Oval Green Leaves Feature Vivid Red Veins With Lighter Green Patches, And The Undersides Are Purple', 'Improve Air Quality', './user/assets/img/plant/MarantaRed.jpg'),
(17, 'Peperomia Obtusifolia', 'Peperaceae', 15, 3, 'Waxy, Elliptic, Thick Dark Green Leaves And Small Greenish-White Flowers On Spikes', 'Pet Friendly, Help Purify Air', './user/assets/img/plant/PeperomiaObtusifolia.jpg'),
(18, 'Philodendron Birkin', 'Araceae', 21, 5, 'Lush Green Leaves With White Or Yellow Pinstripes', 'Help Purify Air, Easy To Care', './user/assets/img/plant/PhilodendronBirkin.jpg'),
(19, 'Fiddle Leaf Fig', 'Moraceae', 25, 4, 'Large, Broad, Lyre-Shaped, Green Leaves', 'Purify Air, May Boost Concentration', './user/assets/img/plant/FiddleLeafFig.jpg'),
(20, 'Hyacinth', 'Asparagaceae', 26, 1, 'Highly Fragrant Star Shaped Florets Clustered On A Single Rounded Spike', 'Can Help Combat Eczema, Can Soothe A Sore Throat, Can Treat Cholera And Diarrhea', './user/assets/img/plant/Hyacinth.jpg'),
(21, 'Spider Plant', 'Asparagaceae', 13, 4, 'Narrow, Strap-Shaped Leaves Arising From A Central Point', 'Easy To Grow, Help Remove Harmful Pollutants', './user/assets/img/plant/SpiderPlant.jpg'),
(22, 'Hibiscus', 'Malvaceae', 27, 3, 'Trumpet Shaped And Range In Colours Of Red, Orange, Yellow, Pink Or Purple', 'May Help Lower Blood Pressure, May Help Improve Blood Fat Levels', './user/assets/img/plant/Hibiscus.jpg'),
(23, 'Lavender', 'Lamiaceae', 22, 3, 'Heavily Branched Short Shrub And Broad Rootstock Bears Woody Branches With Upright, Rod Like, Leafy, Green Shoots', 'Improve Short-Term Memory, Relieve Stress, Decrease Anxiety', './user/assets/img/plant/Lavender.jpg'),
(24, 'Jasmin Gardenia', 'Oleaceae', 20, 4, 'Shrub With Cylindrical To Flat Branches That Are Covered With Caducous Hairs', 'May Help Reduce Depression And Anxiety, Can Fights Infections And Protects Wounds', './user/assets/img/plant/JasminGardenia.jpg'),
(25, 'Lemon balm', 'Lamiaceae', 19, 3, 'Roughly Heart-Shaped Or Oval Wrinkled Toothed Leaves And Are Borne In Pairs Along The Square Stems', 'Have Relaxing Properties In Its Leaves', './user/assets/img/plant/LemonBalm.jpg'),
(26, 'Tuscan Blue Rosemary', 'Lamiaceae', 20, 4, 'Upright Evergreen Shrub With Strongly Aromatic, Olive Green, Needle-Like Leaves And Clusters Of Deep Blue, Tubular Flowers', 'Calms Body, Energize Mind, Help Improve Memory Function', './user/assets/img/plant/TuscanBlueRosemary.jpg'),
(27, 'Orange Chrysanthemum', 'Asteraceae', 30, 3, 'Orange/Yellow Two Toned Composite Flowers That Grow In Varying Petal Arrangements, Daisy-Like Structure, Others Having A Rounder, Pompom-Like Appearance', 'Can Purify Air', './user/assets/img/plant/OrangeChrysanthemum.jpg'),
(28, 'Draceana Marginata', 'Asparagaceae', 30, 2, 'Has Elegant Long, Thin Leaves With Red Edges', "Doesn't Require Much Water, Long Lifespan, Reduce Stress", './user/assets/img/plant/DraceanaMarginata.jpg'),
(29, 'Aloe Vera', 'Asphodelaceae', 13, 4, 'Succulent Leaves That Are Arranged In A Rosette, Have Sharp, Pinkish Spines Along Their Edges', 'Helps Heal Burns, Reduce Constipation', './user/assets/img/plant/AloeVera.jpg'),
(30, 'Peace Lily', 'Araceae', 25, 3, 'Glossy, Dark Green Oval Leaves That Narrow To A Point', 'Removes Harmful Toxins From The Air, Natural Air Freshener', './user/assets/img/plant/PeaceLily.jpg'),
(31, 'Marigold', 'Asteraceae', 30, 2, 'Cheery, Pom-Pom, Anemone, Or Daisy-Shaped Inflorescences In Colors Ranging From Yellow And Gold To Orange, Red, And Mahogany', 'Reduce Inflammation Caused By Eczema, Speeds Healing Of Wounds', './user/assets/img/plant/Marigold.jpg'),
(32, 'Orange Rose', 'Rosaceae', 30, 2, 'Prickly Stem And Toothed Edges Glossy, Green Leaves, With Colours Ranging From Pastel Pink, Peach, And Cream, To Vibrant Yellow, Orange, And Red', 'Help Ease Inflammation, Ease Anxiety', './user/assets/img/plant/OrangeRose.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `userType`) VALUES
(1, 'user', 'test@email.com', '1234', 'user'),
(2, 'admin', 'admin@email.com', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
