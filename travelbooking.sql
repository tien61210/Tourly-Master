-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 01:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travelbooking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `destinations`
--

INSERT INTO `destinations` (`id`, `destination`, `country`, `title`, `description`, `link`) VALUES
(1, 'San Miguel', 'Italy', 'San miguel', 'Enjoy the picturesque beauty of San Miguel in Italy.', 'https://images.unsplash.com/photo-1598535989263-cb097f8ac3f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80'),
(2, 'Burj Khalifa', 'Dubai', 'Burj Khalifa', 'Experience the majestic Burj Khalifa in Dubai.', 'https://images.unsplash.com/photo-1635857161777-2383f2e4a82d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=677&q=80'),
(3, 'Kyoto Temple', 'Japan', 'Kyoto Temple', 'Immerse yourself in the tranquility of Kyoto Temple in Japan.', 'https://images.unsplash.com/photo-1536957604029-6779ab858551?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'),
(4, 'Great Barrier Reef', 'Australia', 'Great Barrier Reef', 'Explore the stunning Great Barrier Reef in Australia.', 'https://images.unsplash.com/photo-1520919177397-8c965d4b4fa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=327&q=80'),
(5, 'Grand Canyon', 'USA', 'Grand Canyon', 'Witness the awe-inspiring Grand Canyon in the USA.', 'https://images.unsplash.com/photo-1491258524513-1e5b31b77452?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'),
(6, 'Santorini', 'Greece', 'Santorini', 'Discover the enchanting beauty of Santorini in Greece.', 'https://plus.unsplash.com/premium_photo-1688410049290-d7394cc7d5df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'),
(7, 'Petra', 'Jordan', 'Petra', 'Uncover the ancient wonder of Petra in Jordan.', 'https://images.unsplash.com/photo-1579606032821-4e6161c81bd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'),
(8, 'Machu Picchu', 'Peru', 'Machu Picchu', 'Trek to the historic site of Machu Picchu in Peru.', 'https://images.unsplash.com/photo-1509216242873-7786f446f465?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `destination_details`
--

CREATE TABLE `destination_details` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `image_link` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `image_link2` varchar(255) DEFAULT NULL,
  `image_link3` varchar(255) DEFAULT NULL,
  `image_link4` varchar(255) DEFAULT NULL,
  `image_link5` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `destination_details`
--

INSERT INTO `destination_details` (`id`, `destination`, `image_link`, `country`, `image_link2`, `image_link3`, `image_link4`, `image_link5`, `short_description`, `long_description`) VALUES
(1, 'San Miguel', 'https://images.unsplash.com/photo-1642031825775-5f481b2db4ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'Italy', 'https://images.unsplash.com/photo-1633982954440-e9d2f268a904?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80.', 'https://images.unsplash.com/photo-1585675551618-bd7d3a889750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'https://images.unsplash.com/photo-1585675551618-bd7d3a889750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'https://images.unsplash.com/photo-1598535806497-5e20ce8f71f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', '	A beautiful destination in Italy.', 'San Miguel is a charming town located in the heart of Italy. With its historic architecture, picturesque streets, and delicious Italian cuisine, San Miguel offers a memorable experience for travelers. Visitors can explore ancient landmarks, relax in quaint cafes, and immerse themselves in the local culture. Whether you are interested in history, art, or simply savoring the beauty of Italy, San Miguel is the perfect destination.'),
(2, 'Burj Khalifa', 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Dubai', 'https://images.unsplash.com/flagged/photo-1559717201-fbb671ff56b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80', 'https://images.unsplash.com/photo-1526651197376-ada29b846227?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'https://images.unsplash.com/photo-1570095072487-1b697e72bfe5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'https://images.unsplash.com/photo-1544092683-c0c9ebb368e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1151&q=80', 'An iconic skyscraper in Dubai.', '	Burj Khalifa is an architectural marvel that stands tall in the city of Dubai. The skyscraper offers breathtaking views of the city and the surrounding desert. Its design and engineering have made it an iconic symbol of modern Dubai. Visitors can enjoy fine dining, shopping, and entertainment within the building. Burj Khalifa is a must-visit destination for those seeking a unique and luxurious experience.'),
(3, 'Kyoto Temple', 'https://images.unsplash.com/photo-1614360380098-63e2fbfda70b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'Japan', 'https://images.unsplash.com/photo-1624253321171-1be53e12f5f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1606577459293-2792bcc30107?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1594050527328-252ee295b71e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'https://images.unsplash.com/photo-1563288629-92c1b1ab05fe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80', 'Offers a peaceful and spiritual experience in Japan.', 'Kyoto Temple offers a peaceful and spiritual experience in Japan. The temple\'s serene atmosphere and beautiful surroundings make it a popular destination for those seeking tranquility and a deeper connection with Japanese culture and history. Visitors can take part in traditional rituals, admire exquisite architecture, and explore the stunning gardens. Kyoto Temple is a must-visit destination for travelers interested in Japan\'s rich heritage.'),
(4, 'Great Barrier Reef', 'https://images.unsplash.com/photo-1627563244850-95e5ea392e5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'Australia', 'https://images.unsplash.com/photo-1580699391788-8a3d0cc2ea7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'https://images.unsplash.com/photo-1546026423-cc4642628d2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'https://images.unsplash.com/photo-1533713692156-f70938dc0d54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'https://images.unsplash.com/photo-1576707948881-b485713fbad7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'A UNESCO World Heritage Site in Australia.', 'Great Barrier Reef is a UNESCO World Heritage Site in Australia. It is one of the world\'s most diverse and vibrant ecosystems, home to a wide range of marine life and coral reefs. Visitors can enjoy snorkeling, scuba diving, and boat tours to witness the breathtaking beauty of the reef. Great Barrier Reef is a paradise for nature lovers and adventure seekers.'),
(5, 'Grand Canyon', 'https://plus.unsplash.com/premium_photo-1670897797720-ba9ac2ce5c8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'USA', 'https://images.unsplash.com/photo-1599851381255-df48a5ea264c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'https://images.unsplash.com/photo-1576038376648-9446e7abf38b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1594751278479-f06f93076ea2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1547036346-addd3025caa4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=685&q=80', 'A breathtaking natural wonder in the USA.', 'Grand Canyon is a breathtaking natural wonder in the USA. Its vast and colorful landscapes attract millions of visitors each year. Travelers can explore the canyon\'s rugged terrain, hike along scenic trails, and marvel at the stunning vistas. Whether you visit for a day or embark on a longer adventure, the Grand Canyon promises an unforgettable experience.'),
(6, 'Santorini', 'https://plus.unsplash.com/premium_photo-1688410049290-d7394cc7d5df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'Greece', 'https://images.unsplash.com/photo-1506877339221-ede41280a7a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80', 'https://images.unsplash.com/photo-1504825348514-3c85d135e4b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1138&q=80', 'https://images.unsplash.com/photo-1518557984649-7b161c230cfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'https://images.unsplash.com/photo-1497262693247-aa258f96c4f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=676&q=80', 'Known for its stunning sunsets and blue-domed churches in Greece.', 'Santorini is known for its stunning sunsets and blue-domed churches in Greece. The island\'s unique architecture, beautiful beaches, and rich history make it a popular destination for tourists. Visitors can explore ancient ruins, sample delicious Greek cuisine, and relax in luxury accommodations with breathtaking views. Santorini is a dream destination for couples, photographers, and travelers seeking a romantic getaway.'),
(7, 'Petra', 'https://images.unsplash.com/photo-1579606032821-4e6161c81bd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'Jordan', 'https://images.unsplash.com/photo-1554357475-accb8a88a330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80', 'https://images.unsplash.com/photo-1570136608982-166b1fddd3a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1570136608982-29cc61aad1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1591014979304-6d2599e8b904?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'An ancient city with a rich history in Jordan.', 'Santorini is an ancient city with a rich history in Jordan. This historical site offers a glimpse into the region\'s past, with well-preserved ruins and artifacts. Travelers can explore ancient temples, amphitheaters, and archaeological sites that date back to ancient civilizations. Santorini is a must-visit destination for history enthusiasts and anyone interested in the cultural heritage of Jordan.'),
(8, 'Machu Picchu', 'https://images.unsplash.com/photo-1509216242873-7786f446f465?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', 'Peru', 'https://images.unsplash.com/photo-1548820650-643ad1d637b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80', 'https://images.unsplash.com/photo-1539706925993-615886ddcadf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'https://images.unsplash.com/photo-1581875403743-a3bf92862c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'https://images.unsplash.com/photo-1567597243073-2d274aabecec?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'A mysterious Incan citadel in Peru.', 'Machu Picchu is a mysterious Incan citadel in Peru. This ancient site, perched high in the Andes Mountains, was built by the Inca civilization in the 15th century. Travelers can hike the famous Inca Trail to reach Machu Picchu and immerse themselves in its fascinating history and breathtaking views. The site\'s architecture, agricultural terraces, and religious structures make it an awe-inspiring destination for adventurers and history lovers.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `flightNumber` varchar(10) DEFAULT NULL,
  `departure` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `departureDate` date DEFAULT NULL,
  `departureTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `flights`
--

INSERT INTO `flights` (`id`, `flightNumber`, `departure`, `destination`, `departureDate`, `departureTime`) VALUES
(1, 'FL123', 'New York (JFK)', 'Los Angeles (LAX)', '2023-07-25', '09:00:00'),
(2, 'FL456', 'London (LHR)', 'Paris (CDG)', '2023-07-26', '10:30:00'),
(3, 'FL789', 'Tokyo (HND)', 'Beijing (PEK)', '2023-07-27', '11:15:00'),
(4, 'FL101', 'Dubai (DXB)', 'Sydney (SYD)', '2023-07-28', '12:45:00'),
(5, 'FL202', 'Hong Kong (HKG)', 'Singapore (SIN)', '2023-07-29', '13:30:00'),
(6, 'FL303', 'Amsterdam (AMS)', 'Rome (FCO)', '2023-07-30', '14:00:00'),
(7, 'FL404', 'Moscow (SVO)', 'Istanbul (IST)', '2023-07-31', '15:20:00'),
(8, 'FL505', 'Singapore (SIN)', 'Bangkok (BKK)', '2023-08-01', '16:10:00'),
(9, 'FL606', 'San Francisco (SFO)', 'Chicago (ORD)', '2023-08-02', '17:45:00'),
(10, 'FL707', 'Mumbai (BOM)', 'Delhi (DEL)', '2023-08-03', '18:30:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_cards`
--

CREATE TABLE `package_cards` (
  `id` int(11) NOT NULL,
  `image_alt_attribute` varchar(255) DEFAULT NULL,
  `image_link` varchar(255) NOT NULL,
  `card_title` varchar(255) DEFAULT NULL,
  `card_description` text DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `number_of_guests` varchar(20) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `number_of_reviews` varchar(20) DEFAULT NULL,
  `card_rating` decimal(3,1) DEFAULT NULL,
  `price_per_person` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `package_cards`
--

INSERT INTO `package_cards` (`id`, `image_alt_attribute`, `image_link`, `card_title`, `card_description`, `duration`, `number_of_guests`, `destination`, `number_of_reviews`, `card_rating`, `price_per_person`) VALUES
(1, 'Experience The Great Holiday On Beach', 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80', 'Experience The Great Holiday On Beach', 'Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est aliquet porttitor! Eaque, cras, aspernatur.', '7D/6N', 'pax: 10', 'Malaysia', '(25 reviews)', 5.0, 750.00),
(2, 'Explore The Enchanting Forest', 'https://images.unsplash.com/photo-1473448912268-2022ce9509d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1141&q=80', 'Explore The Enchanting Forest', 'Discover the magical world of lush forests and hidden wonders. Lose yourself in nature\'s embrace and experience tranquility.', '5D/4N', 'pax: 8', 'Canada', '(15 reviews)', 4.8, 650.00),
(3, 'Tropical Paradise Getaway', 'https://images.unsplash.com/photo-1557858832-b23c89645f0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'Tropical Paradise Getaway', 'Indulge in sun-kissed beaches and turquoise waters. Escape to a tropical paradise and enjoy a relaxing and luxurious vacation.', '6D/5N', 'pax: 12', 'Maldives', '(20 reviews)', 4.9, 1200.00),
(4, 'Historic European Cities Expedition', 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Historic European Cities Expedition', 'Embark on a journey through Europe\'s rich history and culture. Explore iconic cities and marvel at architectural masterpieces.', '10D/9N', 'pax: 6', 'France', '(30 reviews)', 4.7, 1800.00),
(5, 'Adventure in the Wild Savannah', 'https://images.unsplash.com/photo-1611418612389-3e442c6c8a26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80', 'Adventure in the Wild Savannah', 'Experience the thrill of the untamed wilderness. Witness majestic wildlife and immerse yourself in the heart of the savannah.', '8D/7N', 'pax: 10', 'Kenya', '(25 reviews)', 4.6, 950.00),
(6, 'Island Hopping Paradise', 'https://images.unsplash.com/photo-1618479357329-14dd10e76f5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Island Hopping Paradise', 'Hop from one exotic island to another, exploring diverse cultures and pristine beaches. Embark on an unforgettable island tour.', '12D/11N', 'pax: 14', 'Greece', '(18 reviews)', 4.5, 1500.00);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `destination_details`
--
ALTER TABLE `destination_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `package_cards`
--
ALTER TABLE `package_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `package_cards`
--
ALTER TABLE `package_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `destination_details`
--
ALTER TABLE `destination_details`
  ADD CONSTRAINT `destination_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
