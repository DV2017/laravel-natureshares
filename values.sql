-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2019 at 09:19 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waardering`
--

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE IF NOT EXISTS `values` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--


INSERT INTO `values` (`id`, `title`, `image`, `description`, `created_at`, `updated_at` ) VALUES
(1, 'Food Provisioning', 'https://lorempixel.com/800/400/?51336', 'Ecosystems provide the conditions for growing food. Food comes principally from managed agro-ecosystems but marine and freshwater systems or forests also provide food for human consumption. Wild foods from forests are often underestimated.', '2019-01-25 10:24:28', '2019-01-25 10:24:28' ),
(2, 'Non-Food Provisioning', 'https://lorempixel.com/800/400/?51336', 'Ecosystems provide a great diversity of materials for construction and fuel including wood, biofuels and plant oils that are directly derived from wild and cultivated plant species.', '2019-01-25 10:25:46', '2019-01-25 10:25:46' ),
(3, 'Freshwater Provisioning', 'https://lorempixel.com/800/400/?51336', 'Ecosystems play a vital role in the global hydrological cycle, as they regulate the flow and purification of water. Vegetation and forests influence the quantity of water available locally.', '2019-01-25 10:26:29', '2019-01-25 10:26:29' ),
(4, 'Medicinal Resources Provisioning', 'https://lorempixel.com/800/400/?51336', 'Ecosystems and biodiversity provide many plants used as traditional medicines as well as providing the raw materials for the pharmaceutical industry. All ecosystems are a potential source of medicinal resources.', '2019-01-25 10:27:18', '2019-01-25 10:27:18' ),
(5, 'Local climate and air quality Regulation', 'https://lorempixel.com/800/400/?51336', 'Trees provide shade whilst forests influence rainfall and water availability both locally and regionally. Trees or other plants also play an important role in regulating air quality by removing pollutants from the atmosphere.', '2019-01-25 10:28:23', '2019-01-25 10:28:23'),
(6, 'Carbon sequestration and storage Regulation', 'https://lorempixel.com/800/400/?51336', 'Ecosystems regulate the global climate by storing and sequestering greenhouse gases. As trees and plants grow, they remove carbon dioxide from the atmosphere and effectively lock it away in their tissues. In this way forest ecosystems are carbon stores. Biodiversity also plays an important role by improving the capacity of ecosystems to adapt to the effects of climate change.', '2019-01-25 10:29:07', '2019-01-25 10:29:07'),
(7, 'Moderation of extreme events Regulation', 'https://lorempixel.com/800/400/?51336', 'Extreme weather events or natural hazards include floods, storms, tsunamis, avalanches and landslides. Ecosystems and living organisms create buffers against natural disasters, thereby preventing possible damage. For example, wetlands can soak up flood water whilst trees can stabilize\r\nslopes. Coral reefs and mangroves help protect coastlines from storm damage.', '2019-01-25 10:24:28', '2019-01-25 10:24:28'),
(8, 'Waste-water treatment Regulation', 'https://lorempixel.com/800/400/?51336', 'Ecosystems such as wetlands filter both human and animal waste and act as a natural buffer to the surrounding environment. Through the biological activity of microorganisms in the soil, most waste is broken down. Thereby pathogens (disease causing microbes) are eliminated, and the level of nutrients and pollution is reduced.', '2019-01-25 10:25:46', '2019-01-25 10:25:46'),
(9, 'Erosion prevention and maintenance of soil fertility Regulation', 'https://lorempixel.com/800/400/?51336', 'Soil erosion is a key factor in the process of land degradation and desertification. Vegetation cover provides a vital regulating service by preventing soil erosion. Soil fertility is essential for plant growth and agriculture and well functioning ecosystems supply the soil with nutrients required to support plant growth.', '2019-01-25 10:26:29', '2019-01-25 10:26:29'),
(10, 'Pollination Regulation', 'https://lorempixel.com/800/400/?51336', 'Insects and wind pollinate plants and trees which is essential for the development of fruits, vegetables and seeds. Animal pollination is an ecosystem service mainly provided by insects but also by some birds and bats.', '2019-01-25 10:27:18', '2019-01-25 10:27:18'),
(11, 'Biological control Regulation', 'https://lorempixel.com/800/400/?51336', 'Ecosystems are important for regulating pests and vector borne diseases that attack plants, animals and people. Ecosystems regulate pests and diseases through the activities of predators and parasites. Birds, bats, flies, wasps, frogs and fungi all act as natural controls.', '2019-01-25 10:28:23', '2019-01-25 10:28:23'),
(12, 'Supporting Service: Habitats for Species', 'https://lorempixel.com/800/400/?51336', 'Habitats provide everything that an individual plant or animal needs to survive: food; water; and shelter. Each ecosystem provides different habitats that can be essential for a species’ lifecycle. Migratory species including birds, fish, mammals and insects all depend upon different ecosystems during their movements.', '2019-01-25 10:29:07', '2019-01-25 10:29:07'),
(13, 'Supporting Service: Maintenance of genetic diversity ', 'https://lorempixel.com/800/400/?51336', 'Genetic diversity is the variety of genes between and within species populations. Genetic diversity distinguishes different breeds or races from each other thus providing the basis for locally well-adapted cultivars and a gene pool for further developing commercial crops and livestock. Some habitats have an exceptionally high number of species which makes them more genetically diverse than others and are known as ‘biodiversity hotspots’.', '2019-01-25 10:25:46', '2019-01-25 10:25:46'),
(14, 'Cultural Service: Recreation and mental and physical health ', 'https://lorempixel.com/800/400/?51336', 'Walking and playing sports in green space is not only a good form of physical exercise but also lets people relax. The role that green space plays in maintaining mental and physical health is increasingly being recognized, despite difficulties of measurement.', '2019-01-25 10:26:29', '2019-01-25 10:26:29'),
(15, 'Cultural Service: Tourism', 'https://lorempixel.com/800/400/?51336', 'Ecosystems and biodiversity play an important role for many kinds of tourism which in turn provides considerable economic benefits and is a vital source of income for many countries.', '2019-01-25 10:27:18', '2019-01-25 10:27:18'),
(16, 'Cultural Service: Aesthetic appreciation and inspiration for culture, art and design', 'https://lorempixel.com/800/400/?51336', 'Language, knowledge and the natural environment have been intimately related throughout human history. Biodiversity, ecosystems and natural landscapes have been the source of inspiration for much of our art, culture and increasingly for science.', '2019-01-25 10:28:23', '2019-01-25 10:28:23'),
(17, 'Cultural Service: Spiritual experience and sense of place:', 'https://lorempixel.com/800/400/?51336', 'In many parts of the world natural features such as specific forests, caves or mountains are considered sacred or have a religious meaning. Nature is a common element of all major religions and traditional knowledge, and associated customs are important for creating a sense of belonging.', '2019-01-25 10:29:07', '2019-01-25 10:29:07'),
(18, 'Cultural Service: Natural Heritage', 'https://lorempixel.com/800/400/?51336', 'They include natural landscapes such as the Wadden Sea. The Wadden Sea is the largest unbroken system of intertidal sand and mud flats in the world.', '2019-01-25 10:27:18', '2019-01-25 10:27:18'),
(19, 'Cultural Service: Symbolic Value', 'https://lorempixel.com/800/400/?51336', 'They include all species and/or landscapes with special conservation significance other than those listed in other values. For example, the black-tailed godwit. The Black-tailed Godwit is the national bird of the Netherlands, the country in which the vast majority of the West European limosa race breed. These Dutch birds are an important part of the country’s cultural heritage and are of major international significance. ', '2019-01-25 10:28:23', '2019-01-25 10:28:23'),
(20, 'Cultural Service: Science and Education', 'https://lorempixel.com/800/400/?51336', 'Mainstreaming biodiversity into education and learning is one of UNESCO’s priorities. Education brings sustainability to development efforts; it is the way to shape new ways of seeing the world, new practices and behaviors and makes biodiversity conservation possible. ', '2019-01-25 10:29:07', '2019-01-25 10:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `values`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `values`
--

--
-- Constraints for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
