-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 04:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fitquest`
--

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_intro`
--

CREATE TABLE `nutrition_intro` (
  `intro_id` int(11) NOT NULL,
  `demo_image` varchar(500) NOT NULL,
  `other_image` varchar(500) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `nutrition_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutrition_intro`
--

INSERT INTO `nutrition_intro` (`intro_id`, `demo_image`, `other_image`, `introduction`, `nutrition_id`) VALUES
(7, 'Food.jpg', 'Food1.jpg', 'Nourishing Your Wellness\r\n\r\nHello Iam Josey your dedicated nutritionist on a mission to fuel your well being. With a fervor for crafting personalized nutrition plans Iam here to guide you toward a healthier lifestyle. My approach goes beyond diets focusing on sustainable habits and overall wellness. Lets embark on a journey to nourish your body and elevate your vitality. Welcome to a healthier more vibrant you', 1),
(8, 'Bananenbrot Granola Rezept _ gesund & einfach - Healthy Dreams.jpeg', 'Half length portrait of cheerful caucasian male eating healthy meal satisfied with brunch laughing in good mood, positive funny hipster guy keeping healthy lifestyle enjoying vegan food in cafe.jpeg', 'Hi there I am Abhiram  a passionate nutritionist devoted to helping you achieve your health goals through personalized and balanced dietary guidance. Lets explore the power of nutrition together for a healthier more vibrant you', 2),
(9, 'Healthy Diet Plan.jpeg', 'Chicken Burrito Protein Bowl.jpeg', 'Hello I am Christo Scaria a passionate nutritionist committed to helping you achieve your health goals through personalized dietary strategies. Lets explore the world of nutrition together and pave the way for a healthier happier lifestyle', 3),
(10, 'InstaDiet Plan.jpeg', 'diet plan for vegetarian, black women weight loss transformation, low glucose fo_..,  #Black____.,  #Black____.,  #Black____', 'Hi there I am Sophia Alex a dedicated nutritionist eager to support you in your journey towards a healthier lifestyle I am here to guide you in making sustainable dietary choices that align with your unique needs and goals', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_upload`
--

CREATE TABLE `nutrition_upload` (
  `upload_id` int(11) NOT NULL,
  `nutrition_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `up_image` varchar(10000) NOT NULL,
  `up_video` varchar(500) NOT NULL,
  `up_pdf` varchar(500) NOT NULL,
  `up_caption` varchar(100) NOT NULL,
  `up_instruction` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutrition_upload`
--

INSERT INTO `nutrition_upload` (`upload_id`, `nutrition_id`, `booking_id`, `up_image`, `up_video`, `up_pdf`, `up_caption`, `up_instruction`) VALUES
(8, 1, 32, 'Food.jpg', 'Food1.jpg', '30 day yoga (ot).pdf', 'vitamin', '● Newer lifters should follow the routine in an every-other-day split:\r\nPush/Rest/Pull/Rest/Legs/Rest (Repeat).\r\n● Intermediate lifters should perform the routine in a 3-on/1-off split:\r\nPush/Pull/Legs/Rest (Repeat)\r\n● Advanced lifters should perform the routine in a 6-on/1-off manner:\r\nPush/Pull/Legs/Push/Pull/Legs/Rest (Repeat).\r\n'),
(9, 2, 38, 'Herbalife nutrition.jpeg', 'Chicken Burrito Protein Bowl.jpeg', 'nutrition 1.pdf', 'Nutrition Food to Take', 'Tailors diets and educates on balanced nutrition for improved health and well being'),
(10, 3, 40, '6a3e6eb6-746c-456e-9340-96a87f2f9b63.jpeg', '10 Rezepte mit wenig Kalorien, die satt machen.jpeg', 'nutrition 2.pdf', 'Nutrition Food', 'Crafting individualized eating plans for healthier lifestyles and specific health goals'),
(11, 4, 42, 'Whole Food Swaps.jpeg', 'db0bd483-23e0-4adb-aa14-cfb22f9784ad.jpeg', 'nutrition 1.pdf', 'Nutrition intake', 'Expert in optimizing diets for better health vitality and achieving fitness ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL DEFAULT 0,
  `nutrition_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `date`, `status`, `user_id`, `trainer_id`, `nutrition_id`) VALUES
(29, '2023-12-16', 1, 1, 2, 0),
(31, '2024-01-06', 1, 2, 3, 0),
(32, '2024-01-06', 1, 2, 0, 1),
(36, '2024-01-08', 1, 1, 0, 1),
(37, '2024-01-08', 1, 3, 4, 0),
(38, '2024-01-08', 1, 3, 0, 2),
(39, '2024-01-08', 1, 5, 5, 0),
(40, '2024-01-08', 1, 5, 0, 3),
(41, '2024-01-08', 1, 6, 6, 0),
(42, '2024-01-08', 1, 6, 0, 4),
(43, '2024-01-10', 1, 3, 3, 0),
(44, '2024-02-22', 0, 3, 0, 1),
(45, '2024-04-17', 1, 3, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `image`) VALUES
(22, 'Calisthenics', 'IMG-20231216-WA0007.jpg'),
(24, 'Other', 'IMG-20231216-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(10, 'Kasargod'),
(11, 'kannur'),
(12, 'Kozhikod'),
(13, 'Vayanad'),
(14, 'Malappuram'),
(15, 'Palakkad'),
(16, 'Thrissur'),
(17, 'Eranankulam'),
(18, 'Idukki'),
(19, 'Kottayam'),
(20, 'Alappuzha'),
(21, 'Pathanamthitta'),
(22, 'Kollam'),
(23, 'Thiruvanandapuram');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intro`
--

CREATE TABLE `tbl_intro` (
  `intro_id` int(11) NOT NULL,
  `introduction` varchar(14000) NOT NULL,
  `demo_image` varchar(500) NOT NULL,
  `other_image` varchar(500) NOT NULL,
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_intro`
--

INSERT INTO `tbl_intro` (`intro_id`, `introduction`, `demo_image`, `other_image`, `trainer_id`) VALUES
(1, 'Hello Im Abin your dedicated Functional Fitness Trainer With seven years of experience I craft dynamic sessions tailored to enhance your functional capacity From strength training to mobility exercises well achieve your goals together My approach integrates the latest fitness trends and emphasizes holistic well-being incorporating mindfulness for mental health Beyond the gym Im not just your coach but also your ally Lets celebrate each success on our journey to a healthier stronger and more vibrant you Welcome to a transformative fitness adventure', 'body builder.jpg', 'cali1.jpg', 2),
(2, ' Igniting Your Fitness Journey\n\nGreetings Iam Sajas your dedicated bodybuilding trainer here to inspire and guide you on your fitness odyssey. With a passion for sculpting bodies and transforming lives I bring a wealth of experience to help you achieve your goals. From personalized workout plans to a focus on holistic well-being Iam committed to your success. Lets embark on this transformative journey together  welcome to a stronger fitter you.', 'WhatsApp Image 2023-12-16 at 15.05.57_e4514125.jpg', 'WhatsApp Image 2023-12-16 at 15.05.57_e4514125.jpg', 3),
(3, 'Welcome aboard to an exhilarating weightlifting journey As your dedicated trainer with seven years of experience. I am Kevin Babu here to curate dynamic sessions geared towards boosting your functional capacity. Beyond the gym I am not just your coach but your ally Get set for a transformative fitness adventure', 'download.jpeg', 'Cbum.jpeg', 4),
(4, 'Hi there I am Sourav Sundhar a passionate fitness enthusiast specializing in calisthenics. With a focus on bodyweight training I aim to help you achieve your fitness goals while emphasizing strength  flexibility and endurance. Lets embark on a transformative journey together towards a healthier and stronger you', 'Planch.jpeg', 'download (1).jpeg', 5),
(5, 'Namaste. I m Ashleey a dedicated yoga master passionate about guiding individuals toward holistic well being through the transformative practice of yoga. Join me on a journey to explore mindfulness movement and inner strength for a more balanced and peaceful life.', 'A Brief History Of Yoga.jpeg', 'Sunset.jpeg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutrition`
--

CREATE TABLE `tbl_nutrition` (
  `nutrition_id` int(11) NOT NULL,
  `nutrition_name` varchar(50) NOT NULL,
  `nutrition_contact` varchar(15) NOT NULL,
  `nutrition_address` varchar(100) NOT NULL,
  `nutrition_email` varchar(50) NOT NULL,
  `nutrition_photo` varchar(500) NOT NULL,
  `nutrition_proof` varchar(500) NOT NULL,
  `nutrition_status` varchar(100) NOT NULL DEFAULT '0',
  `nutrition_password` varchar(20) NOT NULL,
  `nutrition_gender` varchar(20) NOT NULL,
  `district_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `nutrition_rating` varchar(20) NOT NULL DEFAULT '3☆',
  `monthly_subscription` varchar(20) NOT NULL DEFAULT '₹500/MO',
  `nutrition_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nutrition`
--

INSERT INTO `tbl_nutrition` (`nutrition_id`, `nutrition_name`, `nutrition_contact`, `nutrition_address`, `nutrition_email`, `nutrition_photo`, `nutrition_proof`, `nutrition_status`, `nutrition_password`, `nutrition_gender`, `district_id`, `place_id`, `nutrition_rating`, `monthly_subscription`, `nutrition_date`) VALUES
(1, 'Josey John Joseph', '8281231231', 'Josey Nivas Kuutanad Alappuzha', 'josey@gmail.com', 'profile.jpg', 'Proof.jpg', '1', 'Josey@123', 'Male', 20, 66, '3☆', '₹500/MO', '2024-01-06'),
(2, 'Abhiram A', '9605123435', 'Abhiram nivas kollam', 'abhiram@gmail.com', 'profile.jpg', 'Proof.jpg', '1', 'Abhiram@123', 'Male', 22, 75, '3☆', '₹500/MO', '2024-01-08'),
(3, 'Christo Scaria', '7558981893', 'Christo bhavan Kodumon Pathanamthitta', 'christo@gmail.com', 'profile.jpg', 'Proof.jpg', '1', 'Christo@123', 'Male', 21, 71, '3☆', '₹500/MO', '2024-01-08'),
(4, 'Sophia Alex', '7736670129', 'Sophiabhavan Munnar Idukki', 'sophia@gmail.com', 'profile.jpg', 'Proof.jpg', '1', 'Sophia@123', 'Female', 18, 59, '3☆', '₹500/MO', '2024-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutritionchat`
--

CREATE TABLE `tbl_nutritionchat` (
  `chat_id` int(11) NOT NULL,
  `chat_content` varchar(500) NOT NULL,
  `chat_datetime` varchar(50) NOT NULL,
  `to_user_id` int(11) NOT NULL DEFAULT 0,
  `from_user_id` int(11) NOT NULL DEFAULT 0,
  `to_nutrition_id` int(11) NOT NULL DEFAULT 0,
  `from_nutrition_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(25) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(18, 'Kanhangad', 10),
(19, 'Cheruvathur', 10),
(20, 'Kumbla', 10),
(21, 'Thrikaripur', 10),
(22, 'Nileshwaram', 10),
(23, 'Thalassery', 11),
(24, 'Payyanur', 11),
(25, 'Taliparamba', 11),
(26, 'Kuthuparamba', 11),
(27, 'Mattannur', 11),
(28, 'Iritty', 11),
(29, 'Kozhikod', 12),
(30, 'Vadakara', 12),
(31, 'Koyilandi', 12),
(32, 'Thamarassery', 12),
(33, 'Kalpetta', 13),
(34, 'Sulthan Bathery', 13),
(35, 'Mananthavadi', 14),
(36, 'Ambalavayal', 13),
(37, 'Malappuram', 14),
(38, 'Manjeri', 14),
(39, 'Tirur', 14),
(40, 'Nilambur', 14),
(41, 'Kottakal', 14),
(42, 'Kondotty', 14),
(43, 'Palakkad', 15),
(44, 'Ottapalam', 15),
(45, 'Mannarkad', 15),
(46, 'Pattambi', 15),
(47, 'Thrissur', 16),
(48, 'Kunnamkulam', 16),
(49, 'Guruvayoor', 16),
(50, 'Chavakkad', 16),
(51, '', 0),
(52, 'Wadakkanchery', 16),
(53, 'Eranakulam', 17),
(54, 'Kochi', 17),
(55, 'Angamaly', 17),
(56, 'Muvattupuzha', 17),
(57, 'Aluva', 17),
(58, 'Thodupuzha', 18),
(59, 'Munnar', 18),
(60, 'Kattapana', 18),
(61, 'Idukki', 18),
(62, 'Changanassery', 19),
(63, 'Kanjirappally', 19),
(64, 'Erumely', 19),
(65, 'Vaikom', 19),
(66, 'Alappuzha', 20),
(67, 'Mavelikkara', 20),
(68, 'Haripad', 20),
(69, 'Cherthala', 20),
(70, 'Kayamkulam', 20),
(71, 'Pathanamthitta', 21),
(72, 'Thiruvalla', 21),
(73, 'Adoor', 21),
(74, 'Ranni', 21),
(75, 'Kollam', 22),
(76, 'Punalur', 22),
(77, 'Karunagappally', 22),
(78, 'Paravoor', 22),
(79, 'Thiruvanandapuram', 23),
(80, 'Varkala', 23),
(81, 'Neyyattinkara', 23),
(82, 'Attingal', 23),
(83, 'Parassala', 23),
(84, 'Poojapura', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_rating` varchar(50) NOT NULL,
  `user_review` varchar(50) NOT NULL,
  `review_datetime` varchar(50) NOT NULL,
  `trainer_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `nutrition_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `user_name`, `user_rating`, `user_review`, `review_datetime`, `trainer_id`, `user_id`, `nutrition_id`) VALUES
(1, 'Aman', '4', 'Very Friendly and Professional behavior towards Cl', '2023-12-16 16:16:31', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainer`
--

CREATE TABLE `tbl_trainer` (
  `trainer_id` int(11) NOT NULL,
  `trainer_name` varchar(20) NOT NULL,
  `trainer_contact` varchar(15) NOT NULL,
  `trainer_gender` varchar(20) NOT NULL,
  `trainer_address` varchar(100) NOT NULL,
  `trainer_email` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `trainer_photo` varchar(500) NOT NULL,
  `trainer_proof` varchar(500) NOT NULL,
  `trainer_status` varchar(500) NOT NULL DEFAULT '0',
  `trainer_password` varchar(15) NOT NULL,
  `monthly_subscription` varchar(20) NOT NULL DEFAULT '₹500/MO',
  `trainer_category` varchar(20) NOT NULL,
  `trainer_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`trainer_id`, `trainer_name`, `trainer_contact`, `trainer_gender`, `trainer_address`, `trainer_email`, `place_id`, `trainer_photo`, `trainer_proof`, `trainer_status`, `trainer_password`, `monthly_subscription`, `trainer_category`, `trainer_date`) VALUES
(2, 'Abin', '8581231231', 'Male', 'Nikunjathil Punalur Kollam', 'abin@gmail.com', 71, 'profile.jpg', 'Proof.jpg', '1', 'Abin@123', '500₹', '20', '2023-12-16'),
(3, 'Mohammed Sajas', '7878787878', 'Male', 'Sajas Manzil Ponnani Malappuram', 'sajas@gmail.com', 39, 'profile.jpg', 'Proof.jpg', '1', 'Sajas@123', '700₹', '17', '2024-01-06'),
(4, 'Kevin Babu', '9207632214', 'Male', 'Kevinbhavan Koodal Pathanamthitta ', 'kevin@gmail.com', 74, 'profile.jpg', 'Proof.jpg', '1', 'Kevin@123', '700₹', '21', '2024-01-08'),
(5, 'Sourav Sundhar', '9645553284', 'Male', 'Souravbhavan Parakode Pathanamthitta', 'sourav@gmail.com', 73, 'profile.jpg', 'Proof.jpg', '1', 'Sourav@123', '1000₹', '22', '2024-01-08'),
(6, 'Ashleey Abin', '8089602626', 'Female', 'Ashleey kottarakara Kollam', 'ashleey@gmail.com', 75, 'profile.jpg', 'Proof.jpg', '1', 'Ashleey@123', '1000₹', '24', '2024-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainerchat`
--

CREATE TABLE `tbl_trainerchat` (
  `chat_id` int(11) NOT NULL,
  `chat_content` varchar(500) NOT NULL,
  `chat_datetime` varchar(50) NOT NULL,
  `to_trainer_id` int(11) NOT NULL DEFAULT 0,
  `from_trainer_id` int(11) NOT NULL DEFAULT 0,
  `to_user_id` int(11) NOT NULL DEFAULT 0,
  `from_user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_trainerchat`
--

INSERT INTO `tbl_trainerchat` (`chat_id`, `chat_content`, `chat_datetime`, `to_trainer_id`, `from_trainer_id`, `to_user_id`, `from_user_id`) VALUES
(1, 'hi sir', '2023-12-16 16:14:09', 2, 0, 0, 1),
(2, 'hello', '2023-12-16 16:17:39', 0, 2, 1, 0),
(3, 'how can i help you', '2023-12-16 16:17:49', 0, 2, 1, 0),
(4, 'hi', '2024-01-06 14:07:38', 3, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE `tbl_upload` (
  `upload_id` int(11) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `up_image` varchar(500) NOT NULL,
  `up_video` varchar(500) NOT NULL,
  `up_pdf` varchar(500) NOT NULL,
  `up_caption` varchar(100) NOT NULL,
  `up_instruction` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_upload`
--

INSERT INTO `tbl_upload` (`upload_id`, `trainer_id`, `booking_id`, `up_image`, `up_video`, `up_pdf`, `up_caption`, `up_instruction`) VALUES
(8, 6, 41, '10 Reasons I Love Practicing Yoga - Society19.jpeg', 'THE BEST YOGA MAT AVAILIBLE.jpeg', '30 day yoga (ot).pdf', 'Yoga', 'Mindful practice Yoga does. Patience focus learn you will'),
(9, 5, 39, '4 Tips to Building Bigger Biceps.jpeg', 'C2B Pull Ups_ Conquering Chest To Bar Pull Ups.jpeg', 'super(cali).pdf', 'Calisthenics', 'Calisthenics exercises promoting strength agility and flexibility through movements like pushups pullups and squats.'),
(10, 3, 31, 'Transform the individual into a muscular bodybuilder with veins popping out, striking a powerful pos.jpeg', 'The 2022 IFBB Lenda Murray Atlanta Pro-am Show Review and Results.jpeg', 'Training proposal.pdf', 'Power Hypertrophy Upper Lower (PHUL) Workout', 'A bodybuilding program incorporating power and hypertrophy training across four split days for strength and muscle growth'),
(11, 4, 37, 'Powerhouse.jpeg', 'Get Bigger and Stronger Faster With Cluster Sets.jpeg', 'upperlower(bd).pdf', 'Weight Lifting', 'Resistance training using external weights to build strength power and muscle mass'),
(12, 2, 0, 'How to Build Functional Mass with Kettlebells.jpeg', 'The Best Moves for Functional, Strong Hips.jpeg', 'Training phat.pdf', 'PHAT', 'Dynamic program blends the best of powerlifting and hypertrophy workouts focusing on heavy compound movements for strength and high volume exercises for muscle growth');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_photo` varchar(500) NOT NULL,
  `district_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_gender`, `user_address`, `user_photo`, `district_id`, `place_id`, `user_contact`, `user_date`) VALUES
(1, 'Aman', 'aman@gmail.com', 'Aman@123', 'male', 'Ponnani main', 'profile.jpg', 14, 42, '9899945665', '2023-12-16'),
(2, 'Mohammed Fahad', 'fahad@gmail.com', 'Fahad@123', 'male', 'Fahad Manzil Valanchery Malappuram', 'profile.jpg', 14, 38, '8281231231', '2024-01-06'),
(3, 'Albin Jiji', 'albin@gmail.com', 'Albin@123', 'male', 'Albin bhavan Adoor Pathanamthitta\r\n', 'profile.jpg', 21, 73, '8078189793', '2024-01-08'),
(5, 'Anurag KV', 'anurag@gmail.com', 'Anurag@123', 'male', 'Anurag nivas kannur', 'profile.jpg', 11, 24, '9048067670', '2024-01-08'),
(6, 'Joel V', 'joel@gmail.com', 'Joel@123', 'male', 'Joel bhavan chengannur Alappuzha\r\n', 'profile.jpg', 20, 67, '9443242526', '2024-01-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nutrition_intro`
--
ALTER TABLE `nutrition_intro`
  ADD PRIMARY KEY (`intro_id`);

--
-- Indexes for table `nutrition_upload`
--
ALTER TABLE `nutrition_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD PRIMARY KEY (`intro_id`);

--
-- Indexes for table `tbl_nutrition`
--
ALTER TABLE `tbl_nutrition`
  ADD PRIMARY KEY (`nutrition_id`);

--
-- Indexes for table `tbl_nutritionchat`
--
ALTER TABLE `tbl_nutritionchat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `tbl_trainerchat`
--
ALTER TABLE `tbl_trainerchat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nutrition_intro`
--
ALTER TABLE `nutrition_intro`
  MODIFY `intro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nutrition_upload`
--
ALTER TABLE `nutrition_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_intro`
--
ALTER TABLE `tbl_intro`
  MODIFY `intro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nutrition`
--
ALTER TABLE `tbl_nutrition`
  MODIFY `nutrition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_nutritionchat`
--
ALTER TABLE `tbl_nutritionchat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_trainerchat`
--
ALTER TABLE `tbl_trainerchat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
