-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 06:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category`, `subcategory`, `price`, `old_price`, `image_url`, `discount`, `brand`, `description`) VALUES
(1, 'Garden of Life Mykind Organics Women’s Once Daily Multivitamin', 'General Wellness', 'Multivitamins', 1500.00, 1800.00, 'assets/image/product/products/general wellness/B.png', 15, 'Garden of Life', 'A high-quality multivitamin supplement for women, providing essential nutrients for overall health.'),
(2, 'Centrum Men’s Multivitamin', 'General Wellness', 'Multivitamins', 1200.00, 1400.00, '/assets/image/product/products/S nature made/Centrum_Men_Multivitamin.png', 10, 'Centrum', 'A reliable men’s multivitamin to support daily health and well-being.'),
(3, 'Nature’s Way Sambucus Elderberry Gummies', 'General Wellness', 'Immune Boosters', 750.00, 1000.00, '/assets/image/product/products/S immune/Natures_Way_Sambucus.png', 25, 'Nature Made', 'Elderberry gummies that support immune function and overall wellness.'),
(4, 'Emergen-C Immune+ with Vitamin D', 'General Wellness', 'Immune Boosters', 500.00, 600.00, '/assets/image/product/products/S immune/EmergenC_VitaminD.png', 16, 'Emergen-C', 'Effervescent vitamin C drink mix with added Vitamin D to boost immunity.'),
(5, 'Renew Life Ultimate Flora Probiotics', 'General Wellness', 'Detox & Digestive Health', 2000.00, 2200.00, '/assets/image/product/products/S detox/Renew_Life_Probiotics.png', 9, 'Renew Life', 'A powerful probiotic formula to support digestive health and gut balance.'),
(6, 'Yogi Detox Tea', 'General Wellness', 'Detox & Digestive Health', 300.00, 350.00, '/assets/image/product/products/S detox/Yogi_Detox_Tea.png', 15, 'Yogi', 'A soothing herbal tea designed to support detoxification and wellness.'),
(7, 'MegaFood Balanced B Complex', 'General Wellness', 'Energy & Stamina', 1200.00, 1300.00, '/assets/image/product/products/S energy/MegaFood_B_Complex.png', 8, 'MegaFood', 'A complex of B vitamins designed to support energy production and overall vitality.'),
(8, 'Four Sigmatic Adaptogen Blend', 'General Wellness', 'Energy & Stamina', 1800.00, 1900.00, '/assets/image/product/products/S energy/Four_Sigmatic_Adaptogen.png', 5, 'Four Sigmatic', 'A blend of adaptogenic herbs to help the body cope with stress and support balance.'),
(9, 'GNC Total Lean Shake', 'General Wellness', 'Weight Management', 2200.00, 2500.00, '/assets/image/product/products/S weight/GNC_Lean_Shake.png', 12, 'GNC', 'A nutritious meal replacement shake to support weight management and lean body composition.'),
(10, 'Nature’s Bounty Green Tea Extract', 'General Wellness', 'Weight Management', 650.00, 750.00, '/assets/image/product/products/S weight/Natures_Bounty_Green_Tea.png', 13, 'Nature’s Bounty', 'A green tea extract supplement designed to support metabolism and weight management.'),
(11, 'Garden of Life Raw Organic Perfect Food Green Superfood Powder', 'Supplements', 'Organic and Whole-Food Supplements', 3000.00, 3200.00, '/assets/image/product/products/S supplements/Garden_of_Life_Green_Superfood.png', 6, 'Garden of Life', 'A raw organic green superfood powder to support overall nutrition and health.'),
(12, 'Sunwarrior Ormus Super Greens', 'Supplements', 'Organic and Whole-Food Supplements', 2500.00, 2700.00, '/assets/image/product/products/S supplements/Sunwarrior_Ormus.png', 7, 'Sunwarrior', 'A powerful green supplement that helps boost energy and overall health.'),
(13, 'Ora Organic Vegan Omega-3 Supplement', 'Supplements', 'Vegan Supplements', 1500.00, 1600.00, '/assets/image/product/products/S vegan/Ora_Organic_Vegan_Omega3.png', 5, 'Ora Organic', 'A vegan omega-3 supplement for heart, brain, and eye health.'),
(14, 'PlantFusion Complete Plant-Based Protein Powder', 'Supplements', 'Vegan Supplements', 2000.00, 2100.00, '/assets/image/product/products/S vegan/PlantFusion_Protein.png', 4, 'PlantFusion', 'A complete plant-based protein powder for fitness and overall nutrition.'),
(15, 'Schiff Move Free Advanced Joint Health', 'Supplements', 'Joint Support', 1400.00, 1500.00, '/assets/image/product/products/S joint/Schiff_Move_Free.png', 10, 'Schiff', 'A joint health supplement that supports flexibility and mobility.'),
(16, 'Nature’s Way Turmeric Curcumin', 'Supplements', 'Joint Support', 1000.00, 1100.00, '/assets/image/product/products/S joint/Natures_Way_Turmeric.png', 8, 'Nature’s Way', 'A supplement containing turmeric curcumin for joint and muscle support.'),
(17, 'Nordic Naturals Ultimate Omega Fish Oil', 'Supplements', 'Heart Health', 2200.00, 2500.00, '/assets/image/product/products/S heart/Nordic_Naturals_Fish_Oil.png', 12, 'Nordic Naturals', 'High-quality fish oil with omega-3s to support heart and brain health.'),
(18, 'Qunol Ultra CoQ10', 'Supplements', 'Heart Health', 1500.00, 1600.00, '/assets/image/product/products/S heart/Qunol_CoQ10.png', 6, 'Qunol', 'A high absorption CoQ10 supplement for heart health and energy production.'),
(19, 'NOW Evening Primrose Oil', 'Supplements', 'Hormone Balance', 800.00, 900.00, '/assets/image/product/products/S hormone/NOW_Evening_Primrose.png', 11, 'NOW', 'Evening primrose oil supplement to support hormone balance and skin health.'),
(20, 'Gaia Herbs Vitex Berry', 'Supplements', 'Hormone Balance', 1300.00, 1400.00, '/assets/image/product/products/S hormone/Gaia_Herbs_Vitex.png', 7, 'Gaia Herbs', 'A natural herbal supplement to support hormonal balance and reproductive health.'),
(21, 'SmartyPants Adult Complete Daily Gummy Vitamins', 'Vitamins', 'Gummy Vitamins', 1100.00, 1200.00, '/assets/image/product/products/S gummy/SmartyPants_Gummy_Vitamins.png', 8, 'SmartyPants', 'A daily multivitamin gummy that provides essential nutrients for adult health.'),
(22, 'Olly Women’s Multi Gummy Vitamins', 'Vitamins', 'Gummy Vitamins', 950.00, 1000.00, '/assets/image/product/products/S gummy/Olly_Womens_Multi.png', 5, 'Olly', 'A tasty and nutritious gummy multivitamin for women to support health.'),
(23, 'Nature Made Multi for Her Softgels', 'Vitamins', 'Capsules & Pills', 800.00, 900.00, '/assets/image/product/products/S capsule/Nature_Made_Multi_for_Her.png', 10, 'Nature Made', 'A softgel supplement providing essential vitamins and minerals for women’s health.'),
(24, 'Thorne Research Basic Nutrients 2/Day', 'Vitamins', 'Capsules & Pills', 1500.00, 1600.00, '/assets/image/product/products/S capsule/Thorne_Research_Basic_Nutrients.png', 6, 'Thorne Research', 'A comprehensive nutrient supplement with essential vitamins and minerals.'),
(25, 'Vital Proteins Collagen Peptides', 'Vitamins', 'Powdered Vitamins', 2000.00, 2200.00, '/assets/image/product/products/S powder/Vital_Proteins_Collagen.png', 9, 'Vital Proteins', 'A powdered collagen supplement to support skin, hair, and joint health.'),
(26, 'Amazing Grass Green Superfood Powder', 'Vitamins', 'Powdered Vitamins', 1300.00, 1400.00, '/assets/image/product/products/S powder/Amazing_Grass_Superfood.png', 7, 'Amazing Grass', 'A nutrient-rich green superfood powder for overall health and energy.'),
(27, 'Nature Made Magnesium Citrate', 'Vitamins', 'Mineral Supplements', 600.00, 700.00, '/assets/image/product/products/S mineral/Nature_Made_Magnesium.png', 12, 'Nature Made', 'A magnesium supplement to support relaxation and muscle function.'),
(28, 'Trace Minerals Research Electrolyte Stamina Tablets', 'Vitamins', 'Mineral Supplements', 750.00, 850.00, '/assets/image/product/products/S mineral/Trace_Minerals_Electrolyte.png', 5, 'Trace Minerals Research', 'Electrolyte tablets designed to support hydration and stamina during physical activity.'),
(29, 'Lululemon Align High-Rise Leggings', 'Fitness', 'Activewear', 4000.00, 4500.00, '/assets/image/product/products/activewear/Lululemon_Leggings.png', 10, 'Lululemon', 'Comfortable, high-quality leggings for active movement and yoga.'),
(30, 'Nike Dri-FIT Legend T-Shirt', 'Fitness', 'Activewear', 1500.00, 1700.00, '/assets/image/product/products/activewear/Nike_T_Shirt.png', 12, 'Nike', 'A moisture-wicking, breathable t-shirt ideal for workouts.'),
(31, 'Nike Air Zoom Pegasus Running Shoes', 'Fitness', 'Footwear', 5000.00, 5500.00, '/assets/image/product/products/footwear/Nike_Running_Shoes.png', 9, 'Nike', 'High-performance running shoes for support and comfort during workouts.'),
(32, 'Reebok Nano X1 Cross-Training Shoes', 'Fitness', 'Footwear', 4500.00, 4800.00, '/assets/image/product/products/footwear/Reebok_Cross_Training.png', 5, 'Reebok', 'Cross-training shoes designed for versatile fitness activities.'),
(33, 'TRX All-in-One Suspension Training System', 'Fitness', 'Home Gym Equipment', 8000.00, 8500.00, '/assets/image/product/products/homegym/TRX_Suspension_Training.png', 6, 'TRX', 'An all-in-one training system for strength and functional fitness.'),
(34, 'Bowflex SelectTech Adjustable Dumbbells', 'Fitness', 'Home Gym Equipment', 12000.00, 13000.00, '/assets/image/product/products/homegym/Bowflex_Dumbbells.png', 4, 'Bowflex', 'Adjustable dumbbells for strength training at home.'),
(35, 'Fitbit Charge 5', 'Wellness Tech', 'Fitness Trackers', 12000.00, 13000.00, '/assets/image/product/products/tech/Fitbit_Charge5.png', 8, 'Fitbit', 'A fitness tracker with advanced monitoring features for daily activity.'),
(36, 'Garmin Venu 2 Smartwatch', 'Wellness Tech', 'Smartwatches', 25000.00, 26000.00, '/assets/image/product/products/tech/Garmin_Venu2.png', 6, 'Garmin', NULL),
(37, 'Apple Watch Ultra', 'Wellness Tech', 'Smartwatches', 45000.00, 46000.00, '/assets/image/product/products/tech/Apple_Watch_Ultra.png', 5, 'Apple', NULL),
(38, 'Xiaomi Mi Band 6', 'Wellness Tech', 'Fitness Trackers', 3000.00, 3500.00, '/assets/image/product/products/tech/Xiaomi_MiBand.png', 10, 'Xiaomi', NULL),
(39, 'Theragun Elite Percussive Therapy Device', 'Wellness Tech', 'Massage Therapy', 25000.00, 27000.00, '/assets/image/product/products/tech/Theragun_Elite.png', 7, 'Theragun', NULL),
(40, 'CeraVe Hydrating Facial Cleanser', 'Personal Care', 'Skincare', 500.00, 600.00, '/assets/image/product/products/skincare/CeraVe_Cleanser.png', 16, 'CeraVe', 'A gentle, hydrating facial cleanser that soothes and refreshes skin.'),
(41, 'Neutrogena Hydro Boost Water Gel', 'Personal Care', 'Skincare', 600.00, 700.00, '/assets/image/product/products/skincare/Neutrogena_Hydro_Boost.png', 14, 'Neutrogena', NULL),
(42, 'Aveeno Daily Moisturizing Body Lotion', 'Personal Care', 'Body Care', 800.00, 900.00, '/assets/image/product/products/bodycare/Aveeno_Lotion.png', 11, 'Aveeno', NULL),
(43, 'Kiehl’s Creme de Corps Body Lotion', 'Personal Care', 'Body Care', 1500.00, 1600.00, '/assets/image/product/products/bodycare/Kiehls_Lotion.png', 8, 'Kiehl’s', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `responses` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`responses`)),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `email`, `responses`, `timestamp`) VALUES
(3, 'john@mail.com', '{\"1\":\"General Well-being\",\"2\":[\"Stress Management\"],\"3\":\"No\",\"4\":[\"Cognitive Support\"],\"5\":\"Sustainable\",\"6\":\"Capsules\",\"7\":[\"Gluten-free\"],\"8\":\"Not Important\",\"9\":\"Never\",\"10\":[\"Cardio\"],\"11\":\"Not Interested\",\"12\":[\"Sleep\"],\"13\":\"No\",\"14\":\"Activity\",\"15\":\"Very Important\",\"16\":[\"Aging\"],\"17\":[\"Dry\"],\"18\":[\"Dermatologically tested\"]}', '2024-11-30 02:49:09'),
(4, 'andrew@gmail.com', '{\"1\":\"Weight Management\",\"2\":[\"Stress Management\"],\"3\":\"No\",\"4\":[\"Cognitive Support\"],\"5\":\"No Preference\",\"6\":\"Others\",\"7\":[\"None\"],\"8\":\"Not Important\",\"9\":\"Never\",\"10\":[\"No Preference\"],\"11\":\"Not Interested\",\"13\":\"No\",\"14\":\"Stress\",\"15\":\"Not Important\",\"17\":[\"None\"],\"18\":[\"No preference\"]}', '2024-11-30 04:42:46'),
(5, 'law@mail.com', '{\"1\":\"Energy\",\"2\":[\"Stress Management\"],\"3\":\"No\",\"4\":[\"Cognitive Support\"],\"5\":\"Whole-food\",\"6\":\"Pills\",\"7\":[\"Gluten-free\"],\"8\":\"Not Important\",\"9\":\"Daily\",\"10\":[\"Cardio\"],\"11\":\"Daily\",\"12\":[\"Anxiety relief\"],\"13\":\"No\",\"14\":\"Heart rate\",\"15\":\"Not Important\",\"16\":[\"Sensitivity\"],\"17\":[\"Eczema\"],\"18\":[\"Dermatologically tested\"]}', '2024-11-30 04:43:36'),
(13, 'mama@mail.com', '{\"1\":\"Energy\",\"2\":[\"Stress Management\"],\"3\":\"No\",\"4\":[\"Energy\"],\"5\":\"Organic\",\"6\":\"Pills\",\"7\":[\"Dairy-free\"],\"8\":\"Not Important\",\"9\":\"Daily\",\"10\":[\"No Preference\"],\"11\":\"Daily\",\"12\":[\"Focus\"],\"13\":\"No\",\"14\":\"Heart rate\",\"15\":\"Not Important\",\"16\":[\"None\"],\"17\":[\"Eczema\"],\"18\":[\"Fragrance-free\"]}', '2024-11-30 05:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Men','Women') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `survey_completed` tinyint(1) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `dob`, `gender`, `created_at`, `survey_completed`, `phone`) VALUES
(17, 'john@mail.com', 'drew', '$2y$10$3szx8yXXqQwa3VTf1/4fFOUKqnsOD46SjI8COXxkg25y9z3c0EFi.', '2003-12-16', 'Men', '2024-11-30 02:48:25', 1, NULL),
(18, 'andrew@gmail.com', 'drew', '$2y$10$lR/PtB5JTAuTtga/jXWhJuycvimRd9m68tlFC7uimJ4Bu/yfqc/sG', '2003-12-16', 'Men', '2024-11-30 04:42:05', 1, NULL),
(19, 'law@mail.com', '123', '$2y$10$HkmbYNMQlaR81IUf7JQo5e1jWeyfknN7uGodLIh1uw5OKzi7Wk15m', '2003-12-16', 'Men', '2024-11-30 04:43:11', 1, NULL),
(20, 'mama@mail.com', '123', '$2y$10$eaiJnUz0tRIbgJie/hvAQexuCsdybuXGznOB426/VrUQ4PxgM4fIS', '2003-12-16', 'Women', '2024-11-30 04:46:55', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD CONSTRAINT `survey_responses_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
