-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:39 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ages`
--

CREATE TABLE `tbl_ages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ages`
--

INSERT INTO `tbl_ages` (`id`, `type`, `age`) VALUES
(1, 'male', 'teenage'),
(2, 'male', 'young'),
(3, 'male', 'middle-aged'),
(4, 'male', 'old'),
(5, 'female', 'teenage'),
(6, 'female', 'young'),
(7, 'female', 'middle-aged'),
(8, 'female', 'old');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ambulance`
--

CREATE TABLE `tbl_ambulance` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ambulance`
--

INSERT INTO `tbl_ambulance` (`id`, `service`, `phone`, `place`) VALUES
(1, 'Labaid Hospital Ambulance service.', 'Hotline: 10606, Ph: 01713330088 and 01713091940', 'Dhaka'),
(2, 'Bangladesh Medical College Hospital', 'Phone: +880-2-9118202, +880-2-9120793, +880-2-8115843', 'Dhaka'),
(3, 'CMH (Dhaka)', 'Phone: +880-2-9871469, +880-2-9870011, +880-2-8114666-75, +880-2-8822779', 'Dhaka'),
(4, 'Dhaka Eye Hospital', 'Phone: +880-2-8014476', 'Dhaka'),
(5, 'Dhaka Medical College Hospital', 'Phone: 505025-29, 500121-5', 'Dhaka'),
(6, 'Dhaka Renal Centre & Genera Hospital', 'Phone: +880-2-8610928, +880-2-8621841', 'Dhaka'),
(7, 'Apollo Hospitals Dhaka', 'Ambulance: +8801714-090000, Emergency: 10678', 'Dhaka'),
(8, 'Apanjon Ambulance Service', 'Phone: 9125420', 'Dhaka'),
(9, 'Al-Markazul Islami Ambulance Service', 'Phone: 9127867, 8114980', 'Dhaka'),
(10, 'Life Line Healthcare Limited', 'Phone: +880-2-8155550-2, +8801199-899919', 'Dhaka'),
(11, 'Lab-Aid Cardiac Hospital (Banani – Baridhara – Uttara Rayer)', 'Phone: +8801713333337, +8801715-120229, +8801715-154590', 'Dhaka'),
(12, 'Lab-Aid Cardiac Hospital (Dhanmondi-Azimpur-Shahbagh)', 'Phone: +8801713333337, +8801713-025911', 'Dhaka'),
(13, 'Lab-Aid Cardiac Hospital (Bazaar- Lalmatia- Mohammadpur)', 'Phone: +8801713333337, +8801715-120228', 'Dhaka'),
(14, 'Rafa Ambulance Service', 'Phone: 9110663', 'Dhaka'),
(15, 'Green Ambulance Service', 'Phone: 9334121, 8612412', 'Dhaka'),
(16, 'Ad-Din Hospital', 'Phone: +880-2- 9362929', 'Dhaka'),
(17, 'BIRDEM', 'Phone: 9661551-60, 8616641-50, Ext-2301', 'Dhaka'),
(18, 'Dhaka City Corporation (Mirpur Control Room)', 'Phone: 9004734', 'Dhaka'),
(19, 'Dhaka City Corporation (Nagar Bhaban Control Room)', 'Phone: 9556014, 9556018, 9557186-87', 'Dhaka'),
(20, 'Alif Ambulance', 'Phone: 8117576 , 9131688', 'Dhaka'),
(21, 'Anju-Man-E-Mufidul Islam', 'Phone: +880-2-9336611, +880-2-7411680, +880-2-7410786', 'Dhaka'),
(22, 'Bangabondhu Sheikh Mujib Medical University (BSMMU) (PG Hospital)', 'Phone: +880-2-8614001-5, +880-2-8614545-9, +880-2-8612550-4', 'Dhaka'),
(23, 'Fire Brigade Ambulance Service List', 'Phone: +880-2-9555555, +880-2-9556666-7, +880-2-9553333-7', 'Dhaka'),
(24, 'Red Crescent Society', 'Phone: 9330188-9, 9358799', 'Dhaka'),
(25, 'Sir Salimullah Medical College & Mitford Hospital Ambulance Service', 'Phone: +880-2-7319002-6', 'Dhaka'),
(26, 'Shahid Suhrawardi Hospital, Ambulance Service', 'Phone: 9130800', 'Dhaka'),
(27, 'Shishu Hospital, Ambulance Service', 'Phone: 8116061-2, 8114571-2', 'Dhaka'),
(28, 'South Asian Hospital, Ambulance Service', 'Phone: 8616565, 9665852', 'Dhaka'),
(29, 'Heart Hospital', 'Phone: +880-2-9801874, +880-2-9803302', 'Dhaka'),
(30, 'Holy Family Red Crescent Hospital', 'Phone: +880-2-8311721-5, +880-2-9113512', 'Dhaka'),
(31, 'ICDDRB (Mohakhali)', 'Phone: 8811751-60, 600171-8', 'Dhaka'),
(32, 'Islamia Optical Hospital', 'Phone: +880-2-9119315', 'Dhaka'),
(33, 'Prime General Hospital', 'Phone: +880-2-9562267, +880-2-9559862', 'Dhaka'),
(34, 'Red Crescent Society Ambulance Service', 'Phone: +880-2-9330188-9, +880-2-9358799, +880-2-9113512, +880-2-8311721-5', 'Dhaka'),
(35, 'United Hospital', 'Phone: +880-2-8836000-10, +880-2-8836434-44, +880-2-8110864, +8801914001234', 'Dhaka'),
(36, 'Medinova Medical Service Ltd.', 'Phone: 8113721, 9120288', 'Dhaka'),
(37, 'Monowara Hospital (pvt.) Ltd. Ambulance Service', 'Phone: 8318135, 8319802, 8318529', 'Dhaka'),
(38, 'National Heart Institute, Ambulance Service', 'Phone: 9122560-72', 'Dhaka'),
(39, 'Square Hospital', 'Phone: +880-2-8144466, +880-2-8159457 (Ext-2005), +8801713377773, +8801713377775', 'Dhaka'),
(40, 'Day-Night Ambulance Service', 'Phone: 9123073, 8122041', 'Dhaka'),
(41, 'Medinova Medical Service Ltd', 'Phone: +880-2-8113721, +880-2-9120288, +880-2-8620353-7, +880-2-86918583', 'Dhaka'),
(42, 'Monowara Hospital (pvt.) Ltd', 'Phone: +880-2-8318135, +880-2-8319802, +880-2-8318529', 'Dhaka'),
(43, 'Orthopedic Hospital', 'Phone: +880-2-9112150, +880-2-9114075, +880-2-7114812, +880-2-9112152', 'Dhaka'),
(44, 'Shefa Ambulance Services', 'Phone: 9111758, 8110864', 'Dhaka'),
(45, 'Abir Ambulance', '01921-189289,01786-492217', 'Any Where Dhaka'),
(46, 'Mahin Ambulance', '01774-983692,01719-228739', 'Dhaka'),
(47, 'abdin and konsus Ambulance', '01787-665907, 01911-538251', 'Dhaka'),
(48, 'Abdul Ambulance', '01724-464422', 'Dhaka'),
(49, 'Adiba Ambulance', '01712-131834', 'Dhaka'),
(50, 'Al-Sakib Ambulance', '01711-060025', 'Dhaka'),
(51, 'Asha and Modern Ambulance', '01711-450839', 'Dhaka'),
(52, 'Best Care Ambulance', '01911-008118', 'Dhaka'),
(53, 'Dabir Ambulance', '01716-523576', 'Dhaka'),
(54, 'Kaium and Sotota Ambulance', '01728-215630', 'Dhaka'),
(55, 'MM Ambulance', '01819-270157', 'Dhaka'),
(56, 'Sajeda Hospital Ambulance', '01777-772572', 'Dhaka'),
(57, 'Shahbajpur Ambulance', '01724-464422', 'Dhaka'),
(58, 'Dhaka Ambulance', '01714-325325', 'Dhaka'),
(59, 'Al-Markajul Islami Ambulance Service', '01316-111688', 'Dhaka'),
(60, 'Desh Ambulance', '01790509607', 'Dhaka'),
(61, 'MICU Ambulance', '01716269038', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_center`
--

CREATE TABLE `tbl_center` (
  `id` int(11) NOT NULL,
  `center` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_center`
--

INSERT INTO `tbl_center` (`id`, `center`, `location`, `contact`) VALUES
(1, 'Evercare Hospital', 'Bashundhara, Dhaka', '09666-710678'),
(2, 'The DNA Lab Limited', 'Panthapath, Dhaka', '01706-319181'),
(3, 'Ibn Sina Medical College Hospital', 'Kallyanpur, Dhaka', '02-9010396'),
(4, 'DMFR Molecular Lab & Diagnostics', 'Dhanmondi, Dhaka', '09606-213233'),
(5, 'Enam Medical College & Hospital', 'Savar Union, Dhaka', '01716-358146'),
(6, 'United Hospital Limited', 'Gulshan, Dhaka', '09666-710666'),
(7, 'Lab Aid Hospital', 'Kalabagan, Dhaka', '09666-710606'),
(8, 'Aichi Hospital Limited', 'Abdullahpur, Dhaka', '02-44891001'),
(9, 'Zainul Haque Sikder Women\'s Medical College & Hospital (Pvt.) Ltd.', 'Monica Estate, Dhaka', '02-8115951'),
(10, 'AMZ Hospital Limited', 'Shadhinota Sarani, Dhaka', '01847-331010'),
(11, 'Universal Medical College & Hospital', 'New Airport Road, Dhaka', '01841-480000'),
(12, 'Ahsania Mission Cancer & General Hospital', 'Uttara, Dhaka', '02-9008919'),
(13, 'Bangladesh Institute of Health Sciences GeneralHospital', 'Tongi, Dhaka', '01712-238035'),
(14, 'Imperial Hospital Limited', 'Zakir Hossain Rd, Chattogram', '09612-247247'),
(15, 'I S Brahmanbaria Medical College Hospital', 'Ghatura, Brahmanbaria', '01733-382345'),
(16, 'TMSS Medical College & Rafatullah Community', 'Rangpur Rd, Bogura', '051-73975'),
(17, 'Dr. Farida Huq Memorial Ibrahim General Hospital COVID-19 Diagnostic Lab', 'Gazipur', ' '),
(18, 'International Medical College Hospital', 'Tongi, Gazipur', '01313-498583'),
(19, 'Sheikh Fazilatunnesa Mujib Memorial KPJ Specialized Hospital & Nursing College', 'Kasimpur, Gazipur', '01810-008080'),
(20, 'Praava Health Bangladesh Ltd.', 'Banani Model Town, Dhaka', '09666-710648'),
(21, 'Biomed Diagnostics', 'Dhamondi, Dhaka', '01624-812178'),
(22, 'DNA Solution Limited', 'West Panthapath, Dhaka', '01313 093 01901313 093 02301311 772 800'),
(23, 'CSBF Health Centre', 'Bijoy Shoroni, Dhaka', '01730-717009'),
(24, 'Dr Lat Path Labs Bangladesh Pvt. Ltd.', 'West Pathapath, Dhaka', '01885-998000'),
(25, 'Gulshan Clinic Limited', 'Bir Uttam Rafiqul Islam Ave,Dhaka', '01708-800888'),
(26, 'Authentic Diagnostics & Consultation Ltd.', 'Hussaini Dalan Rd, Dhaka', '01536-106758'),
(27, 'CRL Diagnostics', 'Green rd, Dhaka', '01319-632590'),
(28, 'icddr,b Molecular Diagnostic Laboratory', 'Mohakhali, Dhaka', '09666-771100'),
(29, 'Aalok Healthcare Ltd.', 'Kachukhet Rd, Dhaka', '02-8715512'),
(30, 'Chevron Clinical Laboratory (PTE) Ltd.', 'Nizam Rd, Chattogram', '01755-666969');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `admin_reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `user_id`, `email`, `subject`, `msg`, `admin_reply`) VALUES
(3, 16, 'arham@gmail.com', 'Email Problem', 'please solve this problem', 'okay'),
(6, 18, 'sadia@gmail.com', 'review', 'your course was best for me', 'Thank you so much'),
(7, 15, 'mursheda@gmail.com', 'forgot password', 'please help me recover this password', 'okay i will help you'),
(8, 15, 'mursheda@gmail.com', 'presentation', 'my presentation was so bad. please consider me', 'no worries'),
(9, 22, 'fahim@gmail.com', 'problem', 'please solve my problem', 'okay i will solve  this'),
(10, 22, 'fahim@gmail.com', 'corona problem', 'solve this problem', 'okay'),
(13, 20, 'sadia@gmail.com', 'check', 'please check my email', 'okay'),
(20, 24, 'abc@gmail.com', 'check', 'please check my message', 'okay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `cases` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`id`, `division`, `district`, `cases`) VALUES
(1, 'Barisal', 'Barguna', '918'),
(2, 'Barisal', 'Barishal', '3633'),
(3, 'Barisal', 'Bhola', '745'),
(4, 'Barisal', 'Jhalokati', '716'),
(5, 'Barisal', 'Patuakhali', '1455'),
(6, 'Barisal', 'Pirojpur', '1094'),
(7, 'Chittagong', 'Bandarban', '770'),
(8, 'Chittagong', 'Brahmanbaria', '2470'),
(9, 'Chittagong', 'Chandpur', '2330'),
(10, 'Chittagong', 'Chattogram', '19708'),
(11, 'Chittagong', 'Cox\'s Bazar', '4855'),
(12, 'Chittagong', 'Cumilla', '7670'),
(13, 'Chittagong', 'Feni', '1899'),
(14, 'Chittagong', 'Khagrachhari', '696'),
(15, 'Chittagong', 'Lakshmipur', '2158'),
(16, 'Chittagong', 'Noakhali', '5027'),
(17, 'Chittagong', 'Rangamati', '915'),
(18, 'Dhaka', 'Dhaka', '109183'),
(19, 'Dhaka', 'Faridpur', '7268'),
(20, 'Dhaka', 'Gazipur', '5539'),
(21, 'Dhaka', 'Gopalganj', '2622'),
(22, 'Dhaka', 'Kishorgonj', '2895'),
(23, 'Dhaka', 'Madaripur', '1479'),
(24, 'Dhaka', 'Manikganj', '1527'),
(25, 'Dhaka', 'Munshiganj', '3555'),
(26, 'Dhaka', 'Narayanganj', '6923'),
(27, 'Dhaka', 'Narsingdi', '2381'),
(28, 'Dhaka', 'Rajbari', '3113'),
(29, 'Dhaka', 'Shariatpur', '1728'),
(30, 'Dhaka', 'Tangail', '3210'),
(31, 'Khulna', 'Bagerhat', '1006'),
(32, 'Khulna', 'Chuadanga', '1458'),
(33, 'Khulna', 'Jashore', '3998'),
(34, 'Khulna', 'Jhenaidah', '1976'),
(35, 'Khulna', 'Khulna', '6500'),
(36, 'Khulna', 'Kushtia', '3355'),
(37, 'Khulna', 'Magura', '828'),
(38, 'Khulna', 'Meherpur', '601'),
(39, 'Khulna', 'Narail', '1325'),
(40, 'Khulna', 'Satkhira', '1093'),
(41, 'Mymensingh', 'Jamalpur', '1609'),
(42, 'Mymensingh', 'Mymensingh', '3744'),
(43, 'Mymensingh', 'Netrakona', '722'),
(44, 'Mymensingh', 'Sherpur', '484'),
(45, 'Rajshahi', 'Bogura', '7798'),
(46, 'Rajshahi', 'Chapai Nawabganj', '782'),
(47, 'Rajshahi', 'Joypurhat', '1116'),
(48, 'Rajshahi', 'Naogaon', '1331'),
(49, 'Rajshahi', 'Natore', '1015'),
(50, 'Rajshahi', 'Pabna', '1176'),
(51, 'Rajshahi', 'Rajshahi', '5033'),
(52, 'Rajshahi', 'Sirajganj', '2200'),
(53, 'Rangpur', 'Dinajpur', '3492'),
(54, 'Rangpur', 'Gaibandha', '1200'),
(55, 'Rangpur', 'Kurigram', '914'),
(56, 'Rangpur', 'Lalmonirhat', '885'),
(57, 'Rangpur', 'Nilphamari', '1100'),
(58, 'Rangpur', 'Panchagarh', '641'),
(59, 'Rangpur', 'Rangpur', '2909'),
(60, 'Rangpur', 'Thakurgaon', '1167'),
(61, 'Sylhet', 'Habiganj', '1769'),
(62, 'Sylhet', 'Maulvibazar', '1732'),
(63, 'Sylhet', 'Sunamganj', '2368'),
(64, 'Sylhet', 'Sylhet', '7126');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_image` text NOT NULL,
  `number` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `doctor_name`, `doctor_image`, `number`, `hospital`, `division`) VALUES
(3, 'Dr. Afsana Begum', 'dr_afsanadhaka.jpg', '+880-2-8836000, 8836444', 'United Hospital Limited', 'Dhaka'),
(4, 'Dr. Mohammad Hyder Ali', 'hyder_alidhaka.jpg', ' +880-2-8143312, 8143437, 8143166, 8143167, 9124436, Mobile - 01715024100', 'City Hospital Ltd.', 'Dhaka'),
(5, 'Dr. Md. Khalilur Rahman Pappu', '22khalilursylhet.png', '+8801707079717', 'Mount Adora Hospital.  Akhalia', 'Sylhet'),
(6, 'Dr. Md. Enayet Hossain', 'Dr_-Md_-Enayet-HussainSYLHET.jpg', '+8801772599011', 'Trust Medical Services Sylhet', 'Sylhet'),
(7, 'Dr-Shahed-ahmad', 'shahed_ahmed_sylhet.jpg', '+88 019 3122 5555 , +88 0821 729981 , Hotline: 10607', 'AL HARAMAIN HOSPITAL PVT LTD.  Sylhet', 'Sylhet'),
(8, 'DR. ABUL KALAM AZAD', 'Dr_-Md_-Abul-Kalam-Azad-barisal.jpg', '+8804312174019, +8801711457444', 'APOLLO DIAGNOSTIC COMPLEX 135 SADAR ROAD, BARISAL', 'Barisal'),
(9, 'DR. GOLAM MAHMUD SELIM', 't52.jpg', '+8804312174019, +8801711457444', 'APOLLO DIAGNOSTIC COMPLEX 135 SADAR ROAD, BARISAL', 'Barisal'),
(10, 'DR. BHASKAR SAHA', 't53.jpg', '+8801762068685, +8801720525261', 'SHUVO DIAGNOSTIC LAB 40, SADAR ROAD, BARISAL', 'Barisal'),
(11, 'Dr. Mohammad Azizul Haque (Azad)', 'Dr_-Md_-Abul-Kalam-Azad-barisal1.jpg', '0721771724, 01724550544 (Pervez)', 'Rajshahi Medical College and Hospital', 'Rajshahi'),
(12, 'Dr. Abdullah Al Kafi', 'Dr_-Muhammad-Abdullahel-Kafir_rajshahi.jpg', ' 01915997646', 'islami Bank Medical College Hospital.', 'Rajshahi'),
(13, 'Dr. Zahirul', 't54.jpg', '0721772123', 'The pathology, Laxmipur, Rajshahi.', 'Rajshahi'),
(14, 'Dr. S.M.Sadik Hossain', 't55.jpg', '2850630, 2850631', 'Metro Diagnostic Centre Ltd.', 'Chittagong'),
(15, 'Dr. Alok Kumar Raha', 't56.jpg', '2850630,2850631', 'Metro Diagnostic Centre Ltd.', 'Chittagong'),
(16, 'Dr. Mahbub Kamal Chowdhury', 't57.jpg', ' 031-650611, 031-656883,031-654753', 'CSCR (Pvt.) Ltd. 1409, O.R. Nizam Road, Chittagong', 'Chittagong'),
(17, 'Dr. Nazmul Kabir', 't58.jpg', '01795 383803', '250Bed Genaral Hospital Khulna', 'Khulna'),
(18, 'Dr. Md. Shafiquzzaman Siddiqui', 't59.jpg', '01873184045', 'Khulna Medical Collage & Hospital', 'Khulna'),
(19, 'Dr. Sultan Ahmed', 't510.jpg', '01845973549', 'LABAID Hospital', 'Mymensingh'),
(20, 'Dr. Subrata Kumar Pal', 't511.jpg', '+8801766663000', 'Metro Diagnostic Centre Ltd.', 'Mymensingh'),
(21, 'Dr. Md. Ariful Islam (Sohel)', 't512.jpg', '+880521 53891 +880 9613787813', ' RANGPUR (U-1)', 'Rangpur'),
(22, 'DR. MD. HELAL MIA', 't513.jpg', '+880521 53891 +880 9613787813', 'RANGPUR (U-1)', 'Rangpur'),
(23, 'mumen', 'doctors1.PNG', '01798765432', 'idris ali', 'Mymensingh'),
(24, 'mumen', 'hyder_alidhaka1.jpg', '01798765432', 'ragib ali', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `facilityName` varchar(255) NOT NULL,
  `covidDedicatedGeneralBed` int(11) NOT NULL,
  `occupiedCovidDedicatedGeneralBed` int(11) NOT NULL,
  `admittedCovidPatientInExtraBed` int(11) NOT NULL,
  `covidDedicatedICUBed` int(11) NOT NULL,
  `occupiedCovidDedicatedICUBed` int(11) NOT NULL,
  `iCUEquivalentBedWithHighFlowNasalCanula` int(11) NOT NULL,
  `occupiedICUEquivalentBedWithHighFlowNasalCanula` int(11) NOT NULL,
  `totalBeds` int(11) NOT NULL,
  `occupiedBeds` int(11) NOT NULL,
  `vacantBeds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`id`, `district`, `facilityName`, `covidDedicatedGeneralBed`, `occupiedCovidDedicatedGeneralBed`, `admittedCovidPatientInExtraBed`, `covidDedicatedICUBed`, `occupiedCovidDedicatedICUBed`, `iCUEquivalentBedWithHighFlowNasalCanula`, `occupiedICUEquivalentBedWithHighFlowNasalCanula`, `totalBeds`, `occupiedBeds`, `vacantBeds`) VALUES
(1, 'Bagerhat', 'Sarankhola Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(2, 'Bandarban', 'Thanchi Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(3, 'Barguna', 'Patharghata Upazila Health Complex', 16, 0, 0, 0, 0, 0, 0, 16, 0, 16),
(4, 'Barishal', 'Wazirpur Upazila Health Complex', 8, 0, 0, 0, 0, 0, 0, 8, 0, 8),
(5, 'Bhola', 'Tajumuddin Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(6, 'Bogura', 'TMSS Medical College & Rafatullah Community Hospital', 182, 14, 0, 10, 3, 0, 0, 200, 17, 183),
(7, 'Brahmanbaria', 'Sarail Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(8, 'Chandpur', 'Saharasthi Upazila Health Complex', 24, 0, 0, 0, 0, 0, 0, 24, 0, 24),
(9, 'Chapai Nawabganj', 'Shibganj NG Upazila Health Complex', 8, 0, 0, 0, 0, 0, 0, 8, 0, 8),
(10, 'Chattogram', 'Surgiscope Hospital Limited', 0, 0, 0, 4, 1, 4, 0, 13, 1, 12),
(11, 'Chuadanga', 'Jibannagar Upazila Health Complex', 26, 0, 0, 0, 0, 0, 0, 26, 0, 26),
(12, 'Comilla', 'Titas Upazila Health Complex', 13, 1, 0, 0, 0, 0, 0, 13, 1, 12),
(13, 'Cox\'s Bazar', 'Ukhyia Upazila Health Complex', 30, 0, 0, 0, 0, 0, 0, 30, 0, 30),
(14, 'Dhaka', 'Z.H. Sikder Women\'s Medical College & Hospital Ltd', 72, 10, 0, 8, 3, 0, 0, 80, 13, 67),
(15, 'Dinajpur', 'Parbatipur Upazila Health Complex', 5, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(16, 'Faridpur', 'Sadarpur Upazila Health Complex', 6, 6, 0, 0, 0, 0, 0, 6, 6, 0),
(17, 'Feni', 'Sonagazi Upazila Health Complex', 5, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(18, 'Gaibandha', 'Sundarganj Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(19, 'Gazipur', 'Sreepur Upazila Health Complex', 25, 0, 0, 0, 0, 0, 0, 25, 0, 25),
(20, 'Gopalganj', 'Tungipara Upazila Health Complex', 34, 8, 0, 0, 0, 0, 0, 34, 8, 26),
(21, 'Habiganj', 'Nabiganj Upazila Health Complex,Habiganj', 19, 0, 0, 0, 0, 0, 0, 19, 0, 19),
(22, 'Jamalpur', 'Sarishabari Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(23, 'Jashor', 'Sarsa Upazila Health Complex', 12, 3, 0, 0, 0, 0, 0, 12, 3, 9),
(24, 'Jhalokathi', 'Rajapur Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(25, 'Jhenaidah', 'Shailkupa Upazila Health Complex', 15, 0, 0, 0, 0, 0, 0, 15, 0, 15),
(26, 'Joypurhat', 'Panchbibi Upazila Health Complex', 5, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(27, 'Khagrachhari', 'Ramgarh Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(28, 'Khulna', 'Terakhada Upazila Health Complex', 20, 1, 0, 0, 0, 0, 0, 20, 1, 19),
(29, 'Kishoreganj', 'Tarail Upazila Health Complex', 13, 0, 0, 0, 0, 0, 0, 13, 0, 13),
(30, 'Kishoregonj', 'Jahurul Islam Medical College and Hospital, Bajitpur, Kishoreganj', 29, 0, 0, 3, 0, 3, 0, 39, 0, 39),
(31, 'Kurigram', 'Ulipur Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(32, 'Kushtia', 'Mirpur Upazila Health Complex, Kushtia', 31, 2, 0, 0, 0, 0, 0, 31, 2, 29),
(33, 'Laksmipur', 'Ramgati Upazila Health Complex', 5, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(34, 'Lalmonirhat', 'Patgram Upazila Health Complex', 6, 0, 0, 0, 0, 0, 0, 6, 0, 6),
(35, 'Madaripur', 'Shibchar Upazila Health Complex', 20, 2, 0, 0, 0, 0, 0, 20, 2, 18),
(36, 'Magura', 'Sreepur MG Upazila Health Complex', 5, 0, 0, 0, 0, 0, 0, 5, 0, 5),
(37, 'Manikganj', 'Singair Upazila Health Complex', 5, 2, 0, 0, 0, 0, 0, 5, 2, 3),
(38, 'Maulavi Bazar', 'Sreemangal Upazila Health Complex,Moulvibazar', 20, 3, 0, 0, 0, 0, 0, 20, 3, 17),
(39, 'Meherpur', 'Mujibnagar Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(40, 'Munshiganj', 'Tungibari Upazila Health Complex', 20, 5, 0, 0, 0, 0, 0, 20, 5, 15),
(41, 'Mymensingh', 'Trisal Upazila Health Complex', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'Naogaon', 'Sapahar Upazila Health Complex', 10, 1, 0, 0, 0, 0, 0, 10, 1, 9),
(43, 'Narail', 'Narail District Hospital, Narail', 100, 22, 0, 0, 0, 0, 0, 100, 22, 78),
(44, 'Narayanganj', 'Sonargaon Upazila Health Complex', 10, 2, 0, 0, 0, 0, 0, 10, 2, 8),
(45, 'Narsingdi', 'Shibpur Upazila Health Complex', 25, 25, 3, 0, 0, 0, 0, 25, 28, -3),
(46, 'Natore', 'Singra Upazila Health Complex', 8, 0, 0, 0, 0, 0, 0, 8, 0, 8),
(47, 'Netrokona', 'Purbadhala Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(48, 'Nilphamari', 'Saidpur Upazila Health Complex', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 'Noakhali', 'Subarnachar Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(50, 'Pabna', 'Sujanagar Upazila Health Complex', 20, 5, 0, 0, 0, 0, 0, 20, 5, 15),
(51, 'Panchaghar', 'Tetulia Upazila Health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(52, 'Patuakhali', 'Patuakhali 250 bed Sadar Hospital, Patuakhali', 80, 0, 0, 5, 1, 0, 0, 85, 1, 84),
(53, 'Pirojpur', 'Pirojpur District Hospital, Pirojpur', 15, 2, 0, 0, 0, 0, 0, 15, 2, 13),
(54, 'Rajbari', 'Rajbari District Hospital, Rajbari', 50, 10, 0, 0, 0, 0, 0, 50, 10, 40),
(55, 'Rajshahi', 'Tanore Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(56, 'Rangamati', 'Rangamati General Hospital', 50, 8, 0, 0, 0, 0, 0, 50, 8, 42),
(57, 'Rangpur', 'Taraganj Upazila Health Complex', 10, 1, 0, 0, 0, 0, 0, 10, 1, 9),
(58, 'Satkhira', 'Tala Upazila Health Complex, Satkhira', 10, 3, 0, 0, 0, 0, 0, 10, 3, 7),
(59, 'Shariatpur', 'Zanjira Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(60, 'Sherpur', 'Sribordi Upazila health Complex', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(61, 'Sirajganj', 'Ullapara Upazila Health Complex', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(62, 'Sunamganj', 'Tahirpur Upazila Health Complex,Sunamganj', 20, 0, 0, 0, 0, 0, 0, 20, 0, 20),
(63, 'Sylhet', 'Zakiganj Upazila Health Complex,Sylhet', 10, 0, 0, 0, 0, 0, 0, 10, 0, 10),
(64, 'Tangail', 'Tangail District Hospital, Tangail', 50, 11, 0, 10, 4, 10, 0, 70, 15, 55),
(65, 'Thakurgaon', 'Thakurgaon District Hospital, Thakurgaon', 200, 16, 0, 0, 0, 0, 0, 200, 16, 184),
(66, ' ', 'Total', 22073, 4225, 39, 1553, 592, 491, 183, 25171, 5384, 19787);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `user_id`, `product_id`, `order_name`, `order_mobile`, `address`, `date`) VALUES
(20, 24, 12, 'fahim', '01723456789', 'dhaka', '2021-09-09'),
(21, 24, 6, 'rafi', '01342345678', 'khulna', '2021-09-09'),
(22, 25, 20, 'shiuly', '01708042643', 'sylhet', '2021-09-09'),
(23, 25, 7, 'shiuly', '17234567891', 'sylhet', '2021-09-09'),
(24, 18, 12, 'sadia', '01723456789', 'dhaka', '2021-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oxygen`
--

CREATE TABLE `tbl_oxygen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_oxygen`
--

INSERT INTO `tbl_oxygen` (`id`, `name`, `district`, `address`, `phone`, `website`) VALUES
(1, 'Oxygen Service BD', 'Dhaka', ' ', '01857419682', '\n oxygenservicebd.com\n'),
(2, 'Shining Traders', 'Mymensingh', '2200, Mymensingh, Dhaka.', '01711148994', ' '),
(3, 'Hello Oxygen', ' ', ' ', '01784520098', '\n\nhealthcaresolutioun.com\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_image`, `product_type`, `price`, `info`) VALUES
(6, 'handsenitizer61.jpeg', 'sanitizer', '570', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(7, 'mask21.jpg', 'mask', '500', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(8, 'wipes2.jpg', 'wipes', '9000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(10, 'senitizer11.jpg', 'sanitizer', '550', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(11, 'gloves41.jpg', 'gloves', '400', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(12, 'mask31.jpg', 'mask', '3000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(13, 'mask41.jpg', 'mask', '550', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(14, 'senitizer21.jpg', 'sanitizer', '550', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(15, 'wipes3.jpg', 'wipes', '3000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(16, 'gloves52.jpg', 'gloves', '9000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(17, 'mask51.jpg', 'mask', '500', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(18, 'senitizer31.jpg', 'sanitizer', '2000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(19, 'wipes4.jpg', 'wipes', '550', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(20, 'gloves61.jpeg', 'gloves', '400', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(21, 'mask61.jpg', 'mask', '500', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(22, 'senitizer41.jpg', 'sanitizer', '30000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(23, 'gloves7.jpg', 'gloves', '400', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(24, 'mask7.jpg', 'mask', '2000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(25, 'senitizer7.jpg', 'sanitizer', '8500000', 'This is a very good product.And it can help you always to protect from coronavirus.'),
(26, 'gloves22.jpg', 'gloves', '9000', 'This is a very good product.And it can help you always to protect from coronavirus.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ages` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `mobile`, `user_address`, `blood_group`, `gender`, `ages`, `password`, `type`) VALUES
(1, 'Mursheda Akter Shiuly', 'admin@gmail.com', '01718142642', 'dhaka', 'A+', 'female', 'young', '1234', 'admin'),
(16, 'arham sarwar khan rafi', 'arham@gmail.com', '17204567891', 'rangpur', 'AB-', 'male', 'teenage', '1234', 'user'),
(17, 'rahima', 'rahima@gmail.com', '17634567891', 'sylhet', 'O+', 'female', 'young', '1234', 'user'),
(18, 'sadia chowdhury', 'sadia@gmail.com', '01727456789', 'barishal', 'O+', 'female', 'young', '1234', 'user'),
(20, 'sadia', 'sadiacse@gmail.com', '01725456789', 'dhaka', 'O+', 'female', 'middle-aged', '1234', 'user'),
(22, 'fahim', 'fahim@gmail.com', '01728456789', 'dhaka', 'A+', 'male', 'teenage', '1234', 'user'),
(24, 'abc', 'abc@gmail.com', '01793456789', 'dhaka', 'O+', 'male', 'teenage', '1234', 'user'),
(25, 'Mursheda ', 'mursheda@gmail.com', '01778041642', 'sylhet', 'A+', 'female', 'young', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `per` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `used` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`id`, `country`, `dose`, `per`, `vaccinated`, `used`) VALUES
(1, 'World', '5,603,263,222', '737.8', '30.4%', ''),
(2, 'China', '2,124,582,000', '1,525.5', '55.8%', 'CanSino, Pfizer/BioNTech, Sinopharm/Beijing, Sinopharm/Wuhan, Sinovac, ZF2001'),
(3, 'India', '710,550,810', '525.3', '12.4%', 'Covaxin, Oxford/AstraZeneca, Sputnik V'),
(4, 'United States', '376,955,132', '1,152.2', '54.1%', 'Johnson&Johnson, Moderna, Pfizer/BioNTech'),
(5, 'Brazil', '202,266,292', '965.6', '32.2%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(6, 'Japan', '140,295,783', '1,108.8', '49.4%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(7, 'Indonesia', '108,916,110', '406.9', '14.8%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac'),
(8, 'Germany', '103,559,222', '1,248.8', '61.9%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(9, 'Turkey', '99,582,607', '1,209.7', '47.7%', 'Pfizer/BioNTech, Sinovac'),
(10, 'United Kingdom', '91,827,909', '1,381.1', '65.5%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(11, 'France', '89,707,268', '1,339.2', '62.2%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(12, 'Mexico', '87,750,381', '695.4', '28.7%', 'CanSino, Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac, Sputnik V'),
(13, 'Russia', '83,818,838', '574.4', '26.7%', 'EpiVacCorona, Sputnik V'),
(14, 'Italy', '80,013,442', '1,324.0', '62.9%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(15, 'Spain', '67,385,522', '1,442.2', '73.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(16, 'Pakistan', '65,505,999', '308.7', '9.9%', 'CanSino, Covaxin, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(17, 'Canada', '54,058,503', '1,458.7', '69.7%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(18, 'South Korea', '49,522,835', '959.1', '37%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(19, 'Argentina', '45,523,595', '1,023.1', '38.3%', 'Moderna, Oxford/AstraZeneca, Sinopharm/Beijing, Sputnik V'),
(20, 'Saudi Arabia', '38,738,841', '1,149.5', '47.9%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(21, 'Poland', '36,604,902', '963.8', '50.1%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(22, 'Colombia', '36,090,729', '726.9', '30%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(23, 'Malaysia', '37,392,241', '1,160.3', '51.2%', 'CanSino, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(24, 'Morocco', '35,722,890', '991.5', '44.7%', 'Oxford/AstraZeneca, Sinopharm, Sinopharm/Beijing'),
(25, 'Philippines', '37,176,513', '348.6', '14.9%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac, Sputnik V'),
(26, 'Thailand', '37,461,284', '539.6', '15.7%', 'Oxford/AstraZeneca, Sinovac'),
(27, 'Chile', '29,589,680', '1,579.9', '73.7%', 'CanSino, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(28, 'Bangladesh', '31,596,628', '195.8', '7.3%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(29, 'Iran', '29,152,527', '347.1', '11.5%', 'Covaxin, COVIran Barekat, Oxford/AstraZeneca, Sinopharm/Beijing, Sputnik V'),
(30, 'Netherlands', '22,007,305', '1,277.2', '62.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(31, 'Sri Lanka', '22,667,612', '1,046.0', '44.8%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(32, 'Australia', '21,539,586', '861.8', '32.5%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(33, 'Vietnam', '23,577,917', '246.8', '3.9%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(34, 'Cambodia', '20,059,399', '1,234.4', '55.4%', 'Johnson&Johnson, Oxford/AstraZeneca, Sinopharm/Beijing, Sinovac'),
(35, 'Peru', '19,362,452', '605.3', '26.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(36, 'United Arab Emirates', '18,542,213', '1,882.4', '78.2%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm, Sinopharm/Beijing, Sinopharm/Wuhan, Sputnik V'),
(37, 'Belgium', '16,339,369', '1,430.5', '72%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(38, 'Portugal', '15,193,257', '1,477.7', '77.9%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(39, 'Ecuador', '20,022,702', '1,172.0', '54.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(40, 'Cuba', '15,242,254', '1,344.3', '40.6%', 'Abdala, Soberana02'),
(41, 'Uzbekistan', '15,978,140', '484.8', '3.8%', 'Oxford/AstraZeneca, Sputnik V, ZF2001'),
(42, 'Israel', '14,233,732', '1,602.2', '62.1%', 'Moderna, Pfizer/BioNTech'),
(43, 'South Africa', '13,892,301', '240.4', '11.7%', 'Johnson&Johnson, Pfizer/BioNTech'),
(44, 'Sweden', '12,817,302', '1,258.7', '57.8%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(45, 'Kazakhstan', '12,684,463', '694.0', '31.5%', 'QazVac, Sinopharm/HayatVax, Sputnik V'),
(46, 'Hungary', '11,826,680', '1,210.7', '56.4%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(47, 'Czechia', '11,593,494', '1,091.1', '54.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(48, 'Greece', '11,608,678', '1,082.1', '54.2%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(49, 'Dominican Republic', '11,308,808', '1,064.1', '44.3%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac'),
(50, 'Taiwan', '11,660,683', '493.9', '4.3%', 'Medigen, Moderna, Oxford/AstraZeneca'),
(51, 'Austria', '10,556,624', '1,193.2', '59.5%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(52, 'Nepal', '10,616,578', '378.0', '17.9%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(53, 'Romania', '9,841,281', '505.4', '26.6%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(54, 'Ukraine', '10,234,210', '229.4', '10.1%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(55, 'Switzerland', '9,744,954', '1,144.2', '52.8%', 'Moderna, Pfizer/BioNTech'),
(56, 'Egypt', '10,418,988', '101.8', '3.4%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm, Sinopharm/Beijing, Sinovac, Sputnik V'),
(57, 'Venezuela', '9,342,817', '323.6', '11.6%', 'Sinopharm/Beijing, Sinopharm/Wuhan, Sputnik V'),
(58, 'Singapore', '8,976,698', '1,592.0', '80%', 'Moderna, Pfizer/BioNTech, Sinovac'),
(59, 'Denmark', '8,648,547', '1,491.8', '73.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(60, 'Hong Kong', '7,967,549', '1,053.9', '48.7%', 'Pfizer/BioNTech, Sinovac'),
(61, 'Norway', '7,334,032', '1,380.0', '63.8%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(62, 'Azerbaijan', '7,307,149', '735.0', '29.3%', 'Oxford/AstraZeneca, Sinovac, Sputnik V'),
(63, 'Finland', '7,104,015', '1,287.4', '55.1%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(64, 'Ireland', '6,969,334', '1,435.9', '71.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(65, 'El Salvador', '6,692,185', '1,042.3', '46.1%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(66, 'Jordan', '6,594,040', '662.3', '30.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(67, 'Serbia', '6,069,521', '869.3', '40.5%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm, Sinopharm/Beijing, Sputnik V'),
(68, 'Bolivia', '6,124,440', '539.4', '25.1%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(69, 'Tunisia', '6,292,293', '544.1', '22.1%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(70, 'Uruguay', '5,849,658', '1,695.9', '73.5%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(71, 'Guatemala', '5,086,774', '294.9', '8.8%', 'Moderna, Oxford/AstraZeneca'),
(72, 'Slovakia', '4,586,331', '842.0', '40.2%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(73, 'Panama', '4,729,327', '1,132.3', '45.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(74, 'Qatar', '4,550,682', '1,635.9', '79.2%', 'Moderna, Pfizer/BioNTech'),
(75, 'Zimbabwe', '4,553,076', '315.3', '12.3%', 'Oxford/AstraZeneca, Sinopharm/Beijing, Sinovac, Sputnik V'),
(76, 'Mongolia', '4,355,047', '1,373.7', '66.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(77, 'Paraguay', '4,095,681', '588.8', '26%', 'Covaxin, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(78, 'Nigeria', '5,001,836', '25.5', '0.8%', 'Oxford/AstraZeneca'),
(79, 'Oman', '4,036,350', '835.8', '29.9%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac, Sputnik V'),
(80, 'Costa Rica', '4,580,610', '916.2', '30.2%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(81, 'New Zealand', '4,100,657', '839.4', '28.4%', 'Pfizer/BioNTech'),
(82, 'Iraq', '3,754,174', '97.7', '1%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(83, 'Algeria', '8,000,000', '189.4', '7.1%', 'Oxford/AstraZeneca, Sinopharm/Beijing, Sputnik V'),
(84, 'Croatia', '3,314,168', '810.4', '40.1%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(85, 'Lithuania', '3,241,747', '1,162.1', '55.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(86, 'Honduras', '4,526,090', '472.1', '17%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sputnik V'),
(87, 'Laos', '4,402,770', '605.1', '25.3%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(88, 'Kuwait', '3,100,000', '749.3', '0.9%', 'Pfizer/BioNTech'),
(89, 'Kenya', '2,934,285', '57.1', '1.6%', 'Oxford/AstraZeneca, Sputnik V'),
(90, 'Tajikistan', '2,808,056', '308.5', '8.8%', 'Moderna, Oxford/AstraZeneca, Sinovac'),
(91, 'Belarus', '2,541,745', '268.0', '11.6%', 'Sinopharm/Beijing, Sputnik V'),
(92, 'Bahrain', '2,514,027', '1,601.9', '69.8%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm, Sinopharm/Beijing, Sputnik V'),
(93, 'Lebanon', '2,571,182', '375.4', '16.7%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(94, 'Bulgaria', '2,380,022', '338.8', '17.3%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(95, 'Angola', '2,086,325', '67.7', '3%', 'Oxford/AstraZeneca'),
(96, 'Afghanistan', '1,979,652', '53.3', '0.5%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(97, 'Mozambique', '1,960,320', '66.5', '2.2%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(98, 'Slovenia', '1,939,019', '937.9', '44.8%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(99, 'Senegal', '1,732,362', '109.3', '3.6%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(100, 'Rwanda', '2,569,906', '208.9', '7.4%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(101, 'Mauritius', '1,564,974', '1,236.8', '59.2%', 'Covaxin, Oxford/AstraZeneca, Sinopharm/Beijing'),
(102, 'Latvia', '1,543,254', '801.0', '40.5%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(103, 'Albania', '1,567,313', '546.8', '24%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac, Sputnik V'),
(104, 'Palestine', '1,651,049', '323.7', '9.5%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sputnik V'),
(105, 'Moldova', '1,317,848', '371.7', '20.3%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(106, 'Estonia', '1,298,749', '983.2', '42.5%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(107, 'Ghana', '1,271,393', '42.7', '1.4%', 'Oxford/AstraZeneca, Sputnik V'),
(108, 'North Macedonia', '1,326,584', '636.9', '28.3%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(109, 'Georgia', '1,366,678', '366.3', '13.7%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac'),
(110, 'Kyrgyzstan', '1,211,784', '191.9', '7.8%', 'Sinopharm/Beijing, Sputnik V'),
(111, 'Libya', '1,130,485', '169.3', '0.9%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(112, 'Cyprus', '1,115,513', '880.7', '42%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(113, 'Bhutan', '1,010,129', '1,339.0', '63.1%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(114, 'Guinea', '1,251,226', '100.8', '3.2%', 'Sputnik V'),
(115, 'Trinidad and Tobago', '953,170', '685.8', '30.3%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(116, 'Malawi', '911,292', '50.2', '2.4%', 'Johnson&Johnson, Oxford/AstraZeneca'),
(117, 'Kosovo', '938,504', '508.6', '17.2%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(118, 'Bosnia and Herzegovina', '1,060,145', '318.9', '12.8%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac, Sputnik V'),
(119, 'Sudan', '823,881', '19.7', '0.3%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac'),
(120, 'Malta', '800,572', '1,655.7', '85.7%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(121, 'Fiji', '866,153', '980.4', '34%', 'Oxford/AstraZeneca'),
(122, 'Luxembourg', '769,652', '1,266.4', '59.1%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(123, 'Nicaragua', '669,904', '103.6', '3.2%', 'Oxford/AstraZeneca, Sputnik V'),
(124, 'Maldives', '690,218', '1,338.4', '58.9%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(125, 'Macao', '607,741', '962.2', '44.4%', 'Pfizer/BioNTech, Sinopharm/Beijing'),
(126, 'Zambia', '649,919', '37.5', '1.7%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(127, 'Jamaica', '600,021', '204.4', '5.2%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(128, 'Togo', '651,941', '82.6', '3%', 'Oxford/AstraZeneca'),
(129, 'Iceland', '530,746', '1,501.1', '74.8%', 'Johnson&Johnson, Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(130, 'Botswana', '528,003', '234.2', '9.2%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(131, 'Niger', '490,549', '21.9', '0.4%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(132, 'Guyana', '495,220', '635.7', '21.8%', 'Oxford/AstraZeneca, Sputnik V'),
(133, 'Cameroon', '435,676', '17.3', '0.3%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(134, 'Montenegro', '408,060', '655.7', '30.8%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sputnik V'),
(135, 'Equatorial Guinea', '360,446', '275.4', '11.9%', 'Sinopharm/Beijing'),
(136, 'Suriname', '359,651', '624.4', '26.1%', 'Oxford/AstraZeneca'),
(137, 'Namibia', '329,062', '134.4', '4.7%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(138, 'Mali', '344,151', '18.0', '0.5%', 'Oxford/AstraZeneca'),
(139, 'Northern Cyprus', '302,854', '813.1', '38.3%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinovac'),
(140, 'Yemen', '297,405', '10.4', '0%', 'Oxford/AstraZeneca'),
(141, 'Somalia', '310,005', '20.7', '0.7%', 'Johnson&Johnson, Oxford/AstraZeneca, Sinopharm/Beijing, Sinovac'),
(142, 'Congo', '290,287', '3.5', '0.1%', 'Moderna, Oxford/AstraZeneca, Sinopharm/Beijing, Sputnik V'),
(143, 'Gambia', '277,416', '121.7', '5.3%', 'Johnson&Johnson, Oxford/AstraZeneca, Sinopharm/Beijing'),
(144, 'Armenia', '303,325', '102.8', '3.7%', 'Oxford/AstraZeneca, Sinovac, Sputnik V'),
(145, 'Mauritania', '265,877', '60.4', '0.5%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(146, 'Cape Verde', '262,164', '471.5', '8.9%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(147, 'Eswatini', '239,519', '210.8', '11.3%', 'Oxford/AstraZeneca'),
(148, 'Comoros', '239,158', '287.3', '7.7%', 'Covaxin, Oxford/AstraZeneca, Sinopharm/Beijing'),
(149, 'Tanzania', '218,621', '3.9', '0.4%', 'Johnson&Johnson'),
(150, 'Brunei', '345,595', '744.1', '24%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(151, 'French Polynesia', '257,265', '926.5', '41.5%', 'Johnson&Johnson, Pfizer/BioNTech'),
(152, 'Belize', '208,490', '544.3', '15.8%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(153, 'Barbados', '210,411', '734.1', '33.3%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(154, 'Curacao', '184,056', '1,151.4', '54.6%', 'Moderna, Pfizer/BioNTech'),
(155, 'Aruba', '149,974', '1,416.9', '66.7%', 'Pfizer/BioNTech'),
(156, 'New Caledonia', '158,270', '543.2', '24.8%', 'Pfizer/BioNTech'),
(157, 'Jersey', '144,896', '1,344.1', '64.9%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(158, 'Benin', '141,738', '12.3', '0.4%', 'Oxford/AstraZeneca, Sinovac'),
(159, 'Seychelles', '141,435', '1,461.7', '70.9%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(160, 'Gabon', '130,798', '61.7', '2.5%', 'Sinopharm/Beijing'),
(161, 'Isle of Man', '128,384', '1,527.0', '75%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(162, 'Samoa', '137,958', '703.4', '22.2%', 'Oxford/AstraZeneca'),
(163, 'Bahamas', '161,613', '419.1', '15.3%', 'Oxford/AstraZeneca'),
(164, 'Liberia', '113,680', '23.6', '0.6%', 'Oxford/AstraZeneca'),
(165, 'Papua New Guinea', '113,052', '13.1', '0.3%', 'Johnson&Johnson, Oxford/AstraZeneca, Sinopharm/Beijing'),
(166, 'Lesotho', '103,778', '49.2', '1.5%', 'Oxford/AstraZeneca'),
(167, 'Cayman Islands', '102,399', '1,595.6', '77.9%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(168, 'Guernsey', '100,756', '1,606.8', '21.7%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(169, 'Sierra Leone', '97,315', '12.7', '0.2%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(170, 'Central African Republic', '95,862', '20.5', '0.3%', 'Covaxin, Oxford/AstraZeneca'),
(171, 'Democratic Republic of Congo', '111,142', '1.3', '0%', 'Oxford/AstraZeneca'),
(172, 'Bermuda', '85,415', '1,335.3', '66.1%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(173, 'Gibraltar', '79,027', '2,343.8', '116.5%', 'Pfizer/BioNTech'),
(174, 'Greenland', '73,687', '1,315.3', '59.8%', 'Moderna, Pfizer/BioNTech'),
(175, 'Burkina Faso', '71,510', '3.4', '0.1%', 'Oxford/AstraZeneca'),
(176, 'Antigua and Barbuda', '71,065', '738.1', '33.3%', 'Oxford/AstraZeneca'),
(177, 'Saint Lucia', '64,523', '354.7', '15.3%', 'Oxford/AstraZeneca'),
(178, 'Solomon Islands', '63,320', '97.0', '2.2%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(179, 'Djibouti', '60,141', '62.7', '2.5%', 'Johnson&Johnson, Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing, Sinovac, Sputnik V'),
(180, 'South Sudan', '59,865', '5.5', '0.1%', 'Oxford/AstraZeneca'),
(181, 'Tonga', '54,619', '516.8', '24.4%', 'Oxford/AstraZeneca'),
(182, 'Turks and Caicos Islands', '49,107', '1,303.8', '62.4%', 'Pfizer/BioNTech'),
(183, 'Monaco', '48,691', '1,258.8', '58.3%', 'Pfizer/BioNTech'),
(184, 'Sint Maarten (Dutch part)', '47,084', '1,158.2', '54.8%', 'Moderna, Oxford/AstraZeneca, Pfizer/BioNTech'),
(185, 'San Marino', '46,562', '1,378.2', '71%', 'Pfizer/BioNTech, Sputnik V'),
(186, 'Sao Tome and Principe', '50,886', '241.1', '5.6%', 'Oxford/AstraZeneca'),
(187, 'Saint Kitts and Nevis', '46,241', '868.8', '41.2%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(188, 'Chad', '45,390', '2.9', '0.1%', 'Sinopharm/Beijing'),
(189, 'Liechtenstein', '43,139', '1,137.9', '54%', 'Moderna, Pfizer/BioNTech'),
(190, 'Dominica', '42,837', '598.1', '28.3%', 'Oxford/AstraZeneca, Pfizer/BioNTech, Sinopharm/Beijing'),
(191, 'Turkmenistan', '41,993', '7.0', '0.2%', 'EpiVacCorona, Oxford/AstraZeneca, Sinopharm/Beijing, Sputnik V'),
(192, 'Grenada', '39,121', '351.0', '15.4%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(193, 'Guinea-Bissau', '31,090', '16.6', '0.2%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(194, 'Vanuatu', '31,042', '106.1', '0.6%', 'Oxford/AstraZeneca, Sinopharm/Beijing'),
(195, 'Saint Vincent and the Grenadines', '30,958', '280.9', '10.8%', 'Oxford/AstraZeneca'),
(196, 'Andorra', '19,064', '247.6', '1.6%', 'Oxford/AstraZeneca, Pfizer/BioNTech'),
(197, 'Nauru', '14,784', '1,163.7', '57.1%', 'Oxford/AstraZeneca'),
(198, 'Anguilla', '13,235', '732.6', '24.5%', 'Oxford/AstraZeneca'),
(199, 'Wallis and Futuna', '9,676', '612.1', '30.2%', 'Oxford/AstraZeneca'),
(200, 'Bonaire Sint Eustatius and Saba', '7,391', '275.7', '6.2%', 'Moderna, Pfizer/BioNTech'),
(201, 'Falkland Islands', '4,322', '1,070.1', '42.5%', 'Oxford/AstraZeneca'),
(202, 'Montserrat', '1,306', '243.7', '3.6%', 'Oxford/AstraZeneca'),
(203, 'Madagascar', '283,091', '10.8', '0.3%', 'Oxford/AstraZeneca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ages`
--
ALTER TABLE `tbl_ages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_center`
--
ALTER TABLE `tbl_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_oxygen`
--
ALTER TABLE `tbl_oxygen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ages`
--
ALTER TABLE `tbl_ages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_center`
--
ALTER TABLE `tbl_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_oxygen`
--
ALTER TABLE `tbl_oxygen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
