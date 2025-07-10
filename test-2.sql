-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 04:24 AM
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
-- Database: `test-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `shnmm_tbl_students`
--

CREATE TABLE `shnmm_tbl_students` (
  `STUDENT_ID` int(11) NOT NULL,
  `ACADEMIC_YEAR` text DEFAULT NULL,
  `SHIFT` text DEFAULT NULL,
  `SECTION` text DEFAULT NULL,
  `CLASS` text DEFAULT NULL,
  `ROLL` text DEFAULT NULL,
  `NAME_EN` text DEFAULT NULL,
  `NAME_BN` text DEFAULT NULL,
  `BLOOD_GROUP` text DEFAULT NULL,
  `RELIGION` text DEFAULT NULL,
  `GENDER` text DEFAULT NULL,
  `DATE_OF_BIRTH` text DEFAULT NULL,
  `BIRTH_REG_NO` text DEFAULT NULL,
  `FATHER_NAME` text DEFAULT NULL,
  `FATHER_MOBILE_NUMBER` text DEFAULT NULL,
  `FATHER_NID` text DEFAULT NULL,
  `MOTHER_NAME` text DEFAULT NULL,
  `MOTHER_MOBILE_NUMBER` text DEFAULT NULL,
  `MOTHER_NID` text DEFAULT NULL,
  `PRESENT_ADDRESS` text DEFAULT NULL,
  `PERMANENT_ADDRESS` text DEFAULT NULL,
  `PIC` text DEFAULT NULL,
  `STATUS` text NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `shnmm_tbl_students`
--

INSERT INTO `shnmm_tbl_students` (`STUDENT_ID`, `ACADEMIC_YEAR`, `SHIFT`, `SECTION`, `CLASS`, `ROLL`, `NAME_EN`, `NAME_BN`, `BLOOD_GROUP`, `RELIGION`, `GENDER`, `DATE_OF_BIRTH`, `BIRTH_REG_NO`, `FATHER_NAME`, `FATHER_MOBILE_NUMBER`, `FATHER_NID`, `MOTHER_NAME`, `MOTHER_MOBILE_NUMBER`, `MOTHER_NID`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `PIC`, `STATUS`) VALUES
(2504001, '2025', 'N/A', 'N/A', 'PLAY', '001', 'MD MUNTASIR ARYAN', 'মো: মুনতাসির আরিয়ান', 'N/A', 'ISLAM', 'MALE', '16/08/2019', '20191591610141196', 'MD RASHED HOSSAIN', '01884051538', 'N/A', 'RINA AKTHER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504001.png', 'ACTIVE'),
(2504002, '2025', 'N/A', 'N/A', 'PLAY', '002', 'MOBASHSHIR HOSSAIN MAHIR', 'মোবাশশির হোসাইন মাহির', 'N/A', 'ISLAM', 'MALE', '22/03/2021', '20211591610135166', 'MD SAJJAD HOSSIAN', '01811615242', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504002.png', 'ACTIVE'),
(2504003, '2025', 'N/A', 'N/A', 'PLAY', '003', 'MINHAZ', 'মিনহাজ', 'N/A', 'ISLAM', 'MALE', '19/07/2020', '20201917383108785', 'MD MAHTAB ALAM', '01835805025', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504003.png', 'ACTIVE'),
(2504004, '2025', 'N/A', 'N/A', 'PLAY', '004', 'MD. IBRAHIM KHALIL', 'মো:  ইব্রাহিম খলিল', 'N/A', 'ISLAM', 'MALE', '22/09/2018', '20181591610113415', 'MD. AL AMIN', '01995353603', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504004.png', 'ACTIVE'),
(2504005, '2025', 'N/A', 'N/A', 'PLAY', '005', 'ARAFAT HOSSEN', 'আরাফাত হোসেন', 'N/A', 'ISLAM', 'MALE', '29/09/2020', 'N/A', 'MD SHAHIDUL ISLAM', '01831957564', '7777127023', 'SHAHIN AKTER', 'N/A', '1471605822', 'North Kattali, Mostafa Hakim , Akbarshah, Chottogram', 'North Kattali, Mostafa Hakim , Akbarshah, Chottogram', 'views/theme/img/2504005.png', 'ACTIVE'),
(2504006, '2025', 'N/A', 'N/A', 'PLAY', '006', 'MD. ABDULLAH IBNE NIHAD', 'মোঃ আব্দুল্লাহ ইবনে নিহাদ', 'N/A', 'ISLAM', 'MALE', '20/06/2020', 'N/A', 'Md. Humayun Kabir Sumon', '01752333530', 'N/A', 'N/A', 'N/A', 'N/A', 'North Kattali, Akbarshah, Chottogram', 'N/A', 'views/theme/img/2504006.png', 'ACTIVE'),
(2504007, '2025', 'N/A', 'N/A', 'PLAY', '007', 'SAIDUL ISLAM MUJAHID', 'সাইদুল ইসলাম মুজাহিদ', 'N/A', 'ISLAM', 'MALE', '20/07/2020', 'N/A', 'SAMSUL ALAM SUZAN', '01641702031', '1952469987', 'MST. SHIFA AKTHER SHEKA', '01617560460', '20031591613120018', 'North Kattali, Akbarshah, Chottogram', 'Sonapur, Maijdi, Noakhali', 'views/theme/img/2504007.png', 'ACTIVE'),
(2504008, '2025', 'N/A', 'N/A', 'PLAY', '008', 'MD. SAIFUL ISLAM', 'মোঃ সাইফুল ইসলাম', 'N/A', 'ISLAM', 'MALE', '18/07/2017', '20171591610117536', 'MD. ABU KALAM', '01851984464', '5114389971311', 'HAJERA', 'N/A', '2611068792885', 'CDA 1 No, Mogija Miya vara ghor, North Kattali, Akbarshah, Chottogram', 'Kalicor, Lakshmipur', 'views/theme/img/2504008.png', 'ACTIVE'),
(2504009, '2025', 'N/A', 'N/A', 'PLAY', '009', 'MD JIHAD HOSSAIN', 'মোঃ জিহাদ হোসেন', 'N/A', 'ISLAM', 'MALE', '26/04/2020', '20201591610143934', 'MD HELAL HOSSAIN', '01849951203', '9574519436', 'RINA AKTER', 'N/A', '6427619934', 'North Kattali, Akbarshah, Chottogram', 'Merkot Belghor Gosai Bazar, Adra North, Nangalkot, Cumilla', 'views/theme/img/2504009.png', 'ACTIVE'),
(2504010, '2025', 'N/A', 'N/A', 'PLAY', '010', 'MD. ARAFAT HOSSAIN', 'আরাফাত হোসেন', 'N/A', 'ISLAM', 'MALE', '30/05/2020', 'N/A', 'JAMAL UDDIN', '01634297141', '19967791110104206', 'ROHIMA BEGOM', 'N/A', '2001159161013446', 'Nur Uddim Cho, North Kattoli, Chottogram', 'Char Lengta, Elahi, Noakhali', 'views/theme/img/2504010.png', 'ACTIVE'),
(2504011, '2025', 'N/A', 'N/A', 'PLAY', '011', 'AHADUL ISLAM AZAHAN', 'আহাদুল ইসলাম আজাহান', 'N/A', 'ISLAM', 'MALE', '01/09/2019', 'N/A', 'MD. SHAHAB UDDIN', '01331351865', '9563804716', 'MUNNI AKTER', '01331351865', '1477616781', 'Khair Manzil vara ghor, Amanat Ullah Shah Para, North Kattoli, Akbarshah, Chittagong', 'Mercot, Vuiya Bari, Belghor Gosai Bazar, Cumilla', 'views/theme/img/2504011.png', 'ACTIVE'),
(2504012, '2025', 'N/A', 'N/A', 'PLAY', '012', 'FATEMA', 'ফাতেমা', 'N/A', 'ISLAM', 'FEMALE', '07/10/2020', 'N/A', 'RUSTOM ALI', '01897023927', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504012.png', 'ACTIVE'),
(2504013, '2025', 'N/A', 'N/A', 'PLAY', '013', 'MOHAMMAD SAKIR HOSSAIN', 'মোহাম্মদ সাকির হোসাইন', 'N/A', 'ISLAM', 'MALE', '09/07/2020', 'N/A', 'ANOWAR HOSSAIN', '01823755989', '1477108011', 'MOSHARFA BEGOM', 'N/A', '19921591610115770', 'N/A', 'N/A', 'views/theme/img/2504013.png', 'ACTIVE'),
(2504014, '2025', 'N/A', 'N/A', 'PLAY', '014', 'MUHAMMAD WUHAIB RAHMAN', 'মুহাম্মদ উহাইব রহমান', 'N/A', 'ISLAM', 'MALE', '20/12/2020', 'N/A', 'JILLUR RAHMANN', '01726967087', '4177330158', 'NAIMA QHADER', '01728699622', 'N/A', 'N/A', 'Hazi Darbesh Ali Chowdhury Bari, Mcnu MIazi Road, North Kattoli, Chattogram', 'views/theme/img/2504014.png', 'ACTIVE'),
(2504015, '2025', 'N/A', 'N/A', 'PLAY', '015', 'MD HEMAYET HOSSAIN CHOWDHURY', 'মো: হেমায়েত হোসেন চৌধুরী', 'N/A', 'ISLAM', 'MALE', '10/10/2019', 'N/A', 'Delowar Hossain Chowdhury', '01835427573', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504015.png', 'ACTIVE'),
(2504016, '2025', 'N/A', 'N/A', 'PLAY', '016', 'YASIN ARAFAT', 'ইয়াসিন আরাফাত', 'N/A', 'ISLAM', 'MALE', '24/04/2020', '20207512183104847', 'ABUL KALAM', '01827591641', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504016.png', 'ACTIVE'),
(2504017, '2025', 'N/A', 'N/A', 'PLAY', '017', 'ABDULLA AL MAHMUD', 'আবদুল্লা আল মাহমুদ ', 'N/A', 'ISLAM', 'MALE', '16/01/2019', '20191917383115135', 'MD. ALI AKKAS', '01789006919', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504017.png', 'ACTIVE'),
(2504018, '2025', 'N/A', 'N/A', 'PLAY', '018', 'AL JARIF', 'আল জারিফ', 'N/A', 'ISLAM', 'MALE', '23/07/2020', '20201918757114061', 'ZAHIR UDDIN', '01897004347', '5530698413', 'JULY AKTER', '01872814580', '1480776630', 'NORTH KATTOLI, NEAR ATOR ALI CHOWDHURY BARI, PAHARTOLI, CTG', '1-495 HESAKHAL, HESAKHAL BAZAR, NANGOLCOART, CUMILLA, CTG', 'views/theme/img/2504018.png', 'ACTIVE'),
(2504019, '2025', 'N/A', 'N/A', 'PLAY', '019', 'KASIDUL ISLAM MINHAZ', 'কাসিদুল ইসলাম মিনহাজ', 'N/A', 'ISLAM', 'MALE', '11/01/2019', 'N/A', 'MD. ABDUL KARIM AKONDO', '01824152564', 'N/A', 'MST. MAEA BEGUM', 'N/A', '868 563 4738', 'N/A', 'N/A', 'views/theme/img/2504019.png', 'ACTIVE'),
(2504020, '2025', 'N/A', 'N/A', 'PLAY', '020', 'FAHIM HOSSAIN JIHAD', 'ফাহিম হোসেন জিহাদ', 'N/A', 'ISLAM', 'MALE', '13/08/2016', 'N/A', 'MD FORIDUL ALAM', '01880259541', '5527742448', 'JASMIN AKTER', 'N/A', '4222528178', 'N/A', 'N/A', 'views/theme/img/2504020.png', 'ACTIVE'),
(2504021, '2025', 'N/A', 'N/A', 'NURSERY', '001', 'ESA AKTER', 'ঈশা আক্তার', 'N/A', 'ISLAM', 'FEMALE', '24/02/2018', '20187918094103855', 'MD. SHAMIM SIKDER', '01727801075', '19907918094016709', 'JESMIN AKTHER', '01756986990', '19901548638006072', 'N/A', 'মূলগ্রাম, ০৫ নং টোনা, পিরোজপুর।', 'views/theme/img/2504021.png', 'ACTIVE'),
(2504022, '2025', 'N/A', 'N/A', 'NURSERY', '002', 'SUBORNA AKHTER', 'সুবর্ণা আক্তার', 'N/A', 'ISLAM', 'FEMALE', '18/07/2018', 'N/A', 'MD. SUJAN', '01609478133', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504022.png', 'ACTIVE'),
(2504023, '2025', 'N/A', 'N/A', 'NURSERY', '003', 'MST. AFRIN SULTANA', 'মোসাঃ আফরিন সুলতানা', 'N/A', 'ISLAM', 'FEMALE', '10/06/2019', '20191911588117412', 'MD. KAMRUL HASAN', '01848360451', 'N/A', 'MST. ADDRITA DIBA', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504023.png', 'ACTIVE'),
(2504024, '2025', 'N/A', 'N/A', 'NURSERY', '004', 'MD SHAKIL AHAMMED JISAN', 'মোঃ শাকিল আহমেদ জিসান', 'N/A', 'ISLAM', 'MALE', '15/10/2018', '20181591610135585', 'MOHAMMED MILON', '01843664251', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504024.png', 'ACTIVE'),
(2504025, '2025', 'N/A', 'N/A', 'NURSERY', '005', 'MD MINHAJ', 'মোঃ মিনহাজ', 'N/A', 'ISLAM', 'MALE', '20/02/2018', '20181591610141760', 'MD MUSADAK ALI', '01852536828', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504025.png', 'ACTIVE'),
(2504026, '2025', 'N/A', 'N/A', 'NURSERY', '006', 'ANOWAR HOSSEN JONAYED', 'আনোয়ার হোসেন জোনায়েদ', 'N/A', 'ISLAM', 'MALE', '11/02/2018', '20180915428142431', 'MD LITON', '01705687918', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504026.png', 'ACTIVE'),
(2504027, '2025', 'N/A', 'N/A', 'NURSERY', '007', 'AYMAN HOSSAIN MEHEDI', 'আইমান হোসাইন মেহেদি', 'N/A', 'ISLAM', 'MALE', '22/09/2019', '20191591610131860', 'MD ANSAR ALI', '01836415644', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504027.png', 'ACTIVE'),
(2504028, '2025', 'N/A', 'N/A', 'NURSERY', '008', 'UMME ATIA MUNTAHA', 'উম্মে আতিয়া মুনতাহা', 'N/A', 'ISLAM', 'FEMALE', '23/03/2019', 'N/A', 'ANISUR RAHMAN', '01871123427', '4202555860', 'SHAHANAJ SULTANA', '01876054753', '3710583059', 'PONCHAYET BARI, UTTOR KOTTOLI, AKBORSHA, CHATTOGRAM', 'N/A', 'views/theme/img/2504028.png', 'ACTIVE'),
(2504029, '2025', 'N/A', 'N/A', 'NURSERY', '009', 'NUR MOHAMMAD', 'নুর মোহাম্মদ', 'N/A', 'ISLAM', 'MALE', '02/01/2019', '20197510712114159', 'NUR KORIM', '01897023153', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504029.png', 'ACTIVE'),
(2504030, '2025', 'N/A', 'N/A', 'NURSERY', '010', 'MONEM SHAHARIAR SAAD', 'মোনেম শাহারিয়ার সাদ', 'N/A', 'ISLAM', 'MALE', '13/04/2020', 'N/A', 'MD. MUSLIM UDDIN', '01841901909', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504030.png', 'ACTIVE'),
(2504031, '2025', 'N/A', 'N/A', 'NURSERY', '011', 'MD MAHIN', 'মোঃ মাহিন', 'N/A', 'ISLAM', 'MALE', '02/04/2019', '20191591610142287', 'MD FARUK HOSSEN', '01896448272', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504031.png', 'ACTIVE'),
(2504032, '2025', 'N/A', 'N/A', 'NURSERY', '012', 'MOHAMMAD HELAL UDDIN MINHAJ', 'মোহাম্মদ হেলাল উদ্দিন মিনহায', 'N/A', 'ISLAM', 'MALE', '06/09/2018', '20181591610113410', 'MD NAZIMUL HAQUE', '01843060408', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504032.png', 'ACTIVE'),
(2504033, '2025', 'N/A', 'N/A', 'NURSERY', '013', 'MOHAMMAD SAJIB', 'মোহাম্মদ সজীব', 'N/A', 'ISLAM', 'MALE', '23/03/2018', 'N/A', 'HAQUE SAHEB', '01317681404', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504033.png', 'ACTIVE'),
(2504034, '2025', 'N/A', 'N/A', 'NURSERY', '014', 'ALMAS KHATUN', 'আলমাস খাতুন', 'N/A', 'ISLAM', 'FEMALE', '25/10/2018', '20181591639162645', 'MOSTAFA KAMAL', '01843251725', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504034.png', 'ACTIVE'),
(2504035, '2025', 'N/A', 'N/A', 'NURSERY', '015', 'NUR AYEN TAKIA', 'নুর আঈন তাকিয়া', 'N/A', 'ISLAM', 'FEMALE', '29/03/2019', 'N/A', 'NURUL ISLAM', '01825114380', '7321280013', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504035.png', 'ACTIVE'),
(2504036, '2025', 'N/A', 'N/A', 'NURSERY', '016', 'ANAS HASAN', 'আনাস হাসান', 'N/A', 'ISLAM', 'MALE', '31/08/2020', '20201591610134728', 'KAMRUL HASAN', '01855306061', '3292309717', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504036.png', 'ACTIVE'),
(2504037, '2025', 'N/A', 'N/A', 'NURSERY', '017', 'MD. RABBI', 'মোঃ রাব্বি', 'N/A', 'ISLAM', 'MALE', '24/12/2017', 'N/A', 'MD. SOHAG', '01864658766', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504037.png', 'ACTIVE'),
(2504038, '2025', 'N/A', 'N/A', 'NURSERY', '018', 'SIDRATUL MUNTAHA', 'সিদরাতুল মুনতাহা', 'N/A', 'ISLAM', 'FEMALE', '01/04/2018', 'N/A', 'SAYED ALAM', '01608683233', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504038.png', 'ACTIVE'),
(2504039, '2025', 'N/A', 'N/A', 'NURSERY', '019', 'MAHIMA AKTER MIM', 'মহিমা আক্তার মীম', 'N/A', 'ISLAM', 'FEMALE', '27/07/2017', 'N/A', 'MD. MOHASIN KHAN', '01628153071', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504039.png', 'ACTIVE'),
(2504040, '2025', 'N/A', 'N/A', 'NURSERY', '020', 'MOHAMMED SHARAFAT HOSSAIN', 'মোহাম্মদ শারাফাত হোসেন', 'N/A', 'ISLAM', 'MALE', '28/12/2019', '20191591610118719', 'MD SHAKHAWAT HOSSAIN', '01817763469', '1013798788', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504040.png', 'ACTIVE'),
(2504041, '2025', 'N/A', 'N/A', 'NURSERY', '021', 'ASIA ISLAM IBA', 'আসিয়া ইসলাম ইবা', 'N/A', 'ISLAM', 'FEMALE', '05/01/2018', 'N/A', 'MD. SHIMON ISLAM', '01818964658', '1028344933', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504041.png', 'ACTIVE'),
(2504042, '2025', 'N/A', 'N/A', 'NURSERY', '022', 'NUSRAT JAHAN', 'নুসরাত জাহান', 'N/A', 'ISLAM', 'FEMALE', '03/05/2019', '20190419291102300', 'MD. RASEL MIA', '01927185094', '5999001794', 'MST. SALMA KHANOM', '01575146386', '5111717897', 'N/A', 'N/A', 'views/theme/img/2504042.png', 'ACTIVE'),
(2504043, '2025', 'N/A', 'N/A', 'NURSERY', '023', 'HOSSAIN RAHMAN ABRAR', 'হোসেন রহমান আবরার', 'N/A', 'ISLAM', 'MALE', '27/10/2018', '20181591610119143', 'MD. AKTER UDDIN', '01880445868', '1595510307565', 'SELINA AKTER SHIRIN', '01603106251', '2402277731', 'N/A', 'MURAD CHOWDHURY BARI, NORTH KATTALI, KATTALI-4217, WORD-10, CHATTOGRAM', 'views/theme/img/2504043.png', 'ACTIVE'),
(2504044, '2025', 'N/A', 'N/A', 'NURSERY', '024', 'RAYHAN HASAN ALVI', 'রায়হান হাসান আলভী', 'N/A', 'ISLAM', 'MALE', '05/02/2017', '20177518740184796', 'ABDUR RAHIM', '01831190825', '2857187203', 'RUMA', '01878737587', '1927493237', 'N/A', 'N/A', 'views/theme/img/2504044.png', 'ACTIVE'),
(2504045, '2025', 'N/A', 'N/A', 'NURSERY', '025', 'MD. SAIFAN RAHMAN', 'মোঃ সাইফান রহমান', 'N/A', 'ISLAM', 'MALE', 'N/A', 'N/A', 'SAIFUR RAHMAN MUNNA', '01750195188', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504045.png', 'ACTIVE'),
(2504046, '2025', 'N/A', 'N/A', 'NURSERY', '026', 'SAIFA JANNAT', 'সাইফা জান্নাত', 'N/A', 'ISLAM', 'FEMALE', '23/10/2019', '20191591610143979', 'SAHAB UDDIN', '01823511776', '8227593467', 'PARVIN AKTER', '01576505929', '5077572070', 'N/A', 'N/A', 'views/theme/img/2504046.png', 'ACTIVE'),
(2504047, '2025', 'N/A', 'N/A', 'ONE', '001', 'MST WAKIYA ALI RUTHBA', 'মোসা: ওয়াকীয়া আলী রোতবা', 'N/A', 'ISLAM', 'FEMALE', '16/02/2020', '20201591610123952', 'MD ALI CAN', '01928577913', '5977359024', 'RASHEDA AKTER', '01875802047', '6001049045', 'N/A', 'N/A', 'views/theme/img/2504047.png', 'ACTIVE'),
(2504048, '2025', 'N/A', 'N/A', 'ONE', '002', 'ABDUR RAHMAN', 'আবদুর রহমান', 'N/A', 'ISLAM', 'MALE', '12/11/2016', '20161918757117777', 'MD KAMRUZZAMAN', '01878239229', '2392842155', 'ROKEA AKTER', 'N/A', '5079037064', 'N/A', 'N/A', 'views/theme/img/2504048.png', 'ACTIVE'),
(2504049, '2025', 'N/A', 'N/A', 'ONE', '003', 'ABDUR RAHIM', 'আবদুর রহিম', 'N/A', 'ISLAM', 'MALE', '22/04/2015', '20151918757117785', 'MD KAMRUZZAMAN', '01878239229', '2392842155', 'ROKEA AKTER', 'N/A', '5079037064', 'N/A', 'N/A', 'views/theme/img/2504049.png', 'ACTIVE'),
(2504050, '2025', 'N/A', 'N/A', 'ONE', '004', 'RAHIMA AKTER LAMIA', '	রহিমা আক্তার লামিয়া', 'N/A', 'ISLAM', 'FEMALE', '22/07/2016', '20161591610138871', 'ABDUL HALIM', '01735672273', 'N/A', 'SHARMIN AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504050.png', 'ACTIVE'),
(2504051, '2025', 'N/A', 'N/A', 'ONE', '005', 'SIDRATUL MUNTAHA', 'সিদরাতুল মুনতাহা', 'N/A', 'ISLAM', 'FEMALE', '22/07/2019', '20191591610117603', 'MD. KAMAL HOSSAN', '01789954498', '6425348882', 'MST. MAHMUDA AKTER', 'N/A', 'N/A ', 'N/A', 'N/A', 'views/theme/img/2504051.png', 'ACTIVE'),
(2504052, '2025', 'N/A', 'N/A', 'ONE', '006', 'MD. NAHIDUL ISLAM', 'মোঃ নাহিদুল ইসলাম', 'N/A', 'ISLAM', 'MALE', '16/12/2016', '20161591610106246', 'MD NIZJAM', '01881736761', '2377431990', 'NUR NAHAR', '01331351521', '1927475549', 'N/A', 'N/A', 'views/theme/img/2504052.png', 'ACTIVE'),
(2504053, '2025', 'N/A', 'N/A', 'ONE', '007', 'MARIA AKHTER MEEM', 'মারিয়া আক্তার মীম', 'N/A', 'ISLAM', 'FEMALE', '27/12/2018', 'N/A', 'MD. OMAR ALI (MANIK)', '01870674039', '3911587863542', 'MST. JAKIRA EASMIN', '01891818573', '3911587863681', 'N/A', 'N/A', 'views/theme/img/2504053.png', 'ACTIVE'),
(2504054, '2025', 'N/A', 'N/A', 'ONE', '008', 'JANNATUL FERDOUS SOHA', 'জান্নাতুল ফেরদৌস সোহা', 'N/A', 'ISLAM', 'FEMALE', '24/09/2018', '20181591610114390', 'MD SHRAB HOSIN KHAN', '01611273155', '6860612628', 'MST REHANA AKTER', 'N/A', '1918711982909', 'N/A', 'N/A', 'views/theme/img/2504054.png', 'ACTIVE'),
(2504055, '2025', 'N/A', 'N/A', 'ONE', '009', 'MOHAMMAD OMAR FARUK', 'মোহাম্মদ ওমর ফারুক', 'N/A', 'ISLAM', 'MALE', 'N/A', 'N/A', 'MD. SADDAM', '01850305660', 'N/A', 'N/A', '01833939167', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504055.png', 'ACTIVE'),
(2504056, '2025', 'N/A', 'N/A', 'ONE', '010', 'MD SAIMON UDDIN CHOWDHURY', 'মোঃ সাইমন উদ্দিন চৌধুরী', 'N/A', 'ISLAM', 'MALE', '29/07/2017', '20171516112116776', 'NAZIM UDDIN CHOWDHURY', '01883135698', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504056.png', 'ACTIVE'),
(2504057, '2025', 'N/A', 'N/A', 'ONE', '011', 'MD. SHANTO MIA', 'মোঃ শান্ত মিয়া', 'N/A', 'ISLAM', 'MALE', '08/07/2016', 'N/A', 'MD. SOHEL', '01857811084', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504057.png', 'ACTIVE'),
(2504058, '2025', 'N/A', 'N/A', 'ONE', '012', 'MOHAMMAD EMON', 'মোহাম্মদ ইমন', 'N/A', 'ISLAM', 'MALE', '15/08/2017', '20171591610133150', 'MD KAWSER', '01879733744', '6877308442', 'RUBY AKTER', 'N/A', '2827639143', 'N/A', 'N/A', 'views/theme/img/2504058.png', 'ACTIVE'),
(2504059, '2025', 'N/A', 'N/A', 'ONE', '013', 'MD REDOWAN HOSSAIN', 'মোঃ রেদোয়ান হোসেন', 'N/A', 'ISLAM', 'MALE', '17/10/2018', '20187518740158234', 'MD RAZU', '01812104847', '1952486510', 'ROMENA', '01812104847', '5522108090', 'N/A', 'N/A', 'views/theme/img/2504059.png', 'ACTIVE'),
(2504060, '2025', 'N/A', 'N/A', 'ONE', '014', 'MD SHAHIL SHORIF', 'মো: সাহিল শরীফ', 'N/A', 'ISLAM', 'MALE', '07/03/2018', '20181591610138433', 'REZOANUR RASHID', '01836092834', '1595510309265', 'SALMA AKTER', 'N/A', '4198952113', 'N/A', 'N/A', 'views/theme/img/2504060.png', 'ACTIVE'),
(2504061, '2025', 'N/A', 'N/A', 'ONE', '015', 'SUMAIYA BINTE AZIZ', 'সুমাইয়া বিনতে আজিজ', 'N/A', 'ISLAM', 'FEMALE', '25/12/2017', 'N/A', 'AZIZUR RAHMAN', '01401832588', '19841510818474663', 'UMMA SALMA SUITY', '01401832588', '3708952399', 'N/A', 'N/A', 'views/theme/img/2504061.png', 'ACTIVE'),
(2504062, '2025', 'N/A', 'N/A', 'ONE', '016', 'KAZI ZAKIA SULTANA AKI', 'কাজী জাকিয়া সুলতানা আঁখি', 'N/A', 'ISLAM', 'FEMALE', '28/05/2019', '20191517892117879', 'KAZI JAFAR', '01818768867', 'N/A', 'AKLIMA BEGUM', '01818768867', '9577340202', 'N/A', 'N/A', 'views/theme/img/2504062.png', 'ACTIVE'),
(2504063, '2025', 'N/A', 'N/A', 'ONE', '017', 'WARISA JANNAT', 'ওয়ারিসা জান্নাত', 'N/A', 'ISLAM', 'FEMALE', '08/07/2019', '20191591610139953', 'MOHAMMAD WAHID MURAD CHOWDHURY', '01854207412', '1595510310311', 'SAIMA AKTER', '01882493461', '5519966674', 'N/A', 'N/A', 'views/theme/img/2504063.png', 'ACTIVE'),
(2504064, '2025', 'N/A', 'N/A', 'ONE', '018', 'ZANNATUL AKTER', 'জান্নাতুল আক্তার', 'N/A', 'ISLAM', 'FEMALE', '01/08/2018', '20181918711116213', 'MD LOKMAN HOSSEN', '01846293166', '5123634635', 'SARMIN AKTER', '01846293166', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504064.png', 'ACTIVE'),
(2504065, '2025', 'N/A', 'N/A', 'ONE', '019', 'MD. MUNTASIR AHMED', 'মুনতাসির আহম্মেদ', 'N/A', 'ISLAM', 'MALE', '14/12/2018', 'N/A', 'MD JAHIRUL ISLAM', '01814923474', '1595512753776', 'MOSAMMAD JESMIN AKTER KOLI', '01729905803', '2366546915', 'N/A', 'N/A', 'views/theme/img/2504065.png', 'ACTIVE'),
(2504066, '2025', 'N/A', 'N/A', 'ONE', '020', 'ARAFAT HOSSAIN', 'আরাফাত হোসেন', 'N/A', 'ISLAM', 'MALE', '23/08/2017', '20177518013123362', 'NUR NOBI', '01863890069', 'N/A', 'SHEEMA KHATUN', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504066.png', 'ACTIVE'),
(2504067, '2025', 'N/A', 'N/A', 'ONE', '021', 'MOHAMMAD IMRAN', 'মোহাম্মদ ইমরান', 'N/A', 'ISLAM', 'MALE', '30/01/2018', '20181591610139264', 'MIZANUR RAHMAN', '01827427342', 'N/A', 'AFSANA MIMI LUTFA', '01842318365', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504067.png', 'ACTIVE'),
(2504068, '2025', 'N/A', 'N/A', 'ONE', '022', 'MOHAMMED MARUF HASSAN', 'মোহাম্মদ মারুফ হাসান', 'N/A', 'ISLAM', 'MALE', '22/06/2017', '20171591610136999', 'MD WASHIM', '01625317884', '5077109436', 'MST NASRIN SULTANA', '01631093635', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504068.png', 'ACTIVE'),
(2504069, '2025', 'N/A', 'N/A', 'ONE', '023', 'JOBAYER HOSSAIN ARIYAN', 'জোবাইয়েদ হোসেন আরিয়ান', 'N/A', 'ISLAM', 'MALE', '12/09/2017', '20171591610123498', 'MD DIDARUL ALAM', '01840528749', 'N/A', 'RAKSANA AKTAR', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504069.png', 'ACTIVE'),
(2504070, '2025', 'N/A', 'N/A', 'TWO', '001', 'MD. ARFAN ISLAM AYAN', 'মোঃ আরফান ইসলাম আয়ান', 'N/A', 'ISLAM', 'MALE', '22/11/2017', '20171911588112363', 'MD. KAMRUL HASAN', '01848360451', 'N/A', 'ADDRITA DIBA', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504070.png', 'ACTIVE'),
(2504071, '2025', 'N/A', 'N/A', 'TWO', '002', 'ABDULLAH AL FARABI', 'আবদুল্লাহ আল ফারাবী', 'N/A', 'ISLAM', 'MALE', '10/06/2017', '20175122514125658', 'MD. OMAR FARUK', '01818786657', 'N/A', 'NASRIN AKHTER', '01610949736', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504071.png', 'ACTIVE'),
(2504072, '2025', 'N/A', 'N/A', 'TWO', '003', 'NAIMUL ISLAM', 'নাঈমুল ইসলাম', 'N/A', 'ISLAM', 'MALE', '17/06/2017', '20177518745114050', 'MD ANWAR HOSSAIN', '01871657017', 'N/A', 'NAZMA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504072.png', 'ACTIVE'),
(2504073, '2025', 'N/A', 'N/A', 'TWO', '004', 'MD. ZAHED', 'মোঃ জাহেদ', 'N/A', 'ISLAM', 'MALE', '04/07/2016', '20164626203111349', 'TAJUL ISLAM', '01868402680', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504073.png', 'ACTIVE'),
(2504074, '2025', 'N/A', 'N/A', 'TWO', '005', 'A H M AYYAZ', 'এ এইচ এম আইয়াজ', 'N/A', 'ISLAM', 'MALE', '24/10/2017', '20171591610121680', 'MD RASEL', '01832252077', 'N/A', 'KHARUL NEESHA', '01876887155', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504074.png', 'ACTIVE'),
(2504075, '2025', 'N/A', 'N/A', 'TWO', '006', 'MOHAMMAD NAZMUL HASAN', 'মোহাম্মদ নাজমুল হাসান', 'N/A', 'ISLAM', 'MALE', '20/01/2018', 'N/A', 'MD. MILAN', '01893374144', 'N/A', 'NAZMA BEGUM', '01852355203', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504075.png', 'ACTIVE'),
(2504076, '2025', 'N/A', 'N/A', 'TWO', '007', 'NUR JAHAN AKTER POLI', 'নুরজাহান আক্তার পলি', 'N/A', 'ISLAM', 'FEMALE', '14/09/2015', '20151591626112420', 'ALTAF ALI', '01958682817', 'N/A', 'HOSNE ARA BEGUM', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504076.png', 'ACTIVE'),
(2504077, '2025', 'N/A', 'N/A', 'TWO', '008', 'MD SWAN HOSSAIN SUMON', 'মোঃ শাওন হোসেন সুমন', 'N/A', 'ISLAM', 'MALE', '28/07/2014', '20141591610109653', 'MOHAMMAD YUSUF', '01838671081', '8227596858', 'MOSAMMAD SUMI BEGUM', '01812112083', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504077.png', 'ACTIVE'),
(2504078, '2025', 'N/A', 'N/A', 'TWO', '009', 'MD. FARHAD', 'মোঃ ফরহাদ', 'N/A', 'ISLAM', 'MALE', '01/10/2016', '20161591610114056', 'ABDUL RAHIM', '01882451699 (REMARK)', 'N/A', 'FATEMA BEGUM', '01860864654 (REMARK)', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504078.png', 'ACTIVE'),
(2504079, '2025', 'N/A', 'N/A', 'TWO', '010', 'ISRAT JAHAN SOHA', 'ইসরাত জাহান সোহা', 'N/A', 'ISLAM', 'FEMALE', '11/12/2015', '20151591610113398', 'MD SOHEL', '01834923104', 'N/A', 'RINA AKTER', '01834923104', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504079.png', 'ACTIVE'),
(2504080, '2025', 'N/A', 'N/A', 'TWO', '011', 'MST ANISHA AKTER', 'মোছাঃ আনিশা আক্তার', 'N/A', 'ISLAM', 'FEMALE', '29/10/2015', '20153814719107515', 'MD ARZAN MONDAL', '01321874768', 'N/A', 'MASUDA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504080.png', 'ACTIVE'),
(2504081, '2025', 'N/A', 'N/A', 'TWO', '012', 'KAMRUL HASAN', 'কামরুল হাসান', '', 'ISLAM', 'MALE', '03/01/2017', '20177518529106537', 'ABDUL MATIN', '01846291945', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504081.png', 'ACTIVE'),
(2504082, '2025', 'N/A', 'N/A', 'TWO', '013', 'YASIN ARAFAT', 'ইয়াছিন আরাফাত', 'N/A', 'ISLAM', 'MALE', '08/02/2017', '20171315813107581', 'SHAKAWAT', '01647450850', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504082.png', 'ACTIVE'),
(2504083, '2025', 'N/A', 'N/A', 'TWO', '014', 'AYESHA AKTER', 'আয়েশা আক্তার', 'N/A', 'ISLAM', 'FEMALE', '07/04/2015', 'N/A', 'MD. SOHEL', '01738090687', 'N/A', 'FATEMA BEGUM', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504083.png', 'ACTIVE'),
(2504084, '2025', 'N/A', 'N/A', 'TWO', '015', 'AHMED RAZA', 'আহমদ রেজা', 'N/A', 'ISLAM', 'MALE', '04/12/2015', 'N/A', 'ALAH UDDIN', '01827271294', 'N/A', 'JASMIN BEGUM', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504084.png', 'ACTIVE'),
(2504085, '2025', 'N/A', 'N/A', 'TWO', '016', 'SUMAIYA JANNAT', '	সুমাইয়া জান্নাত', 'N/A', 'ISLAM', 'FEMALE', '28/12/2018', 'N/A', 'MD. SABUJ', '01862033668', 'N/A', 'RUJINA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504085.png', 'ACTIVE'),
(2504086, '2025', 'N/A', 'N/A', 'THREE', '001', 'AHRIN AKTER SULTANA', 'আহরিন আক্তার সুলতানা', 'N/A', 'ISLAM', 'FEMALE', '01/05/2014', '20147518537122097', 'MD. NUR ALAM', '01935833923', 'N/A', 'JOHURA KHATUN', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504086.png', 'ACTIVE'),
(2504087, '2025', 'N/A', 'N/A', 'THREE', '002', 'ZINIA JANNAT', 'জিনিয়া জান্নাত', 'N/A', 'ISLAM', 'FEMALE', '28/05/2017', '20077211869121482', 'JOYNAL FAKIR', '01849611309', 'N/A', 'ROWSHANARA BEGUM', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504087.png', 'ACTIVE'),
(2504088, '2025', 'N/A', 'N/A', 'THREE', '003', 'MD. SHAWON', 'মোঃ শাওন', 'N/A', 'ISLAM', 'MALE', '18/05/2013', '20131517865117077', 'MD. AMIR HOSSAIN', '01836400332', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504088.png', 'ACTIVE'),
(2504089, '2025', 'N/A', 'N/A', 'THREE', '004', 'HALIMA AKTER', '	হালিমা আক্তার', 'N/A', 'ISLAM', 'FEMALE', '15/12/2014', '20141918711102730', 'MD. SHA AMRAN KHAN', '01945689349', 'N/A', 'MISS. BILUFA AKTER', '01639222943', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504089.png', 'ACTIVE'),
(2504090, '2025', 'N/A', 'N/A', 'THREE', '005', 'MUHAMMAD AMMAN BIN NAFIS', 'মুহাম্মদ আম্মান বিন নাফিস', 'N/A', 'ISLAM', 'MALE', '05/03/2015', '20151518666114295', 'MD. ALAMGIR', '01874452576', 'N/A', 'YEASMIN', '01874452576', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504090.png', 'ACTIVE'),
(2504091, '2025', 'N/A', 'N/A', 'THREE', '006', 'MST MIMI AKKTER', 'মোছা: মিমি আক্তার', 'N/A', 'ISLAM', 'FEMALE', '17/07/2015', '20153912913111436', 'MD. MOJAMMEL SHAHAB', '01738815380', 'N/A', 'MST. LAIZU AKTER ETI', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504091.png', 'ACTIVE'),
(2504092, '2025', 'N/A', 'N/A', 'THREE', '007', 'MD. AHNAF ALAM ERAN', 'মোঃ আহনাফ আলম ইরান', 'N/A', 'ISLAM', 'MALE', '18/11/2016', '20161591610105446', 'MD DIDARUL ALAM', '01772040282', 'N/A', 'DAIJY AKTHER', '01858551081', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504092.png', 'ACTIVE'),
(2504093, '2025', 'N/A', 'N/A', 'THREE', '008', 'MST ISRAT JAHAN RIYA', 'মোছা: ইসরাত জাহান রিয়া', 'N/A', 'ISLAM', 'FEMALE', '25/09/2013', '20131591610110271', 'MD. HELAL HOSSAIN', '01849951203', 'N/A', 'RINA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504093.png', 'ACTIVE'),
(2504094, '2025', 'N/A', 'N/A', 'THREE', '009', 'ABU SHAHED', 'আবু সাহেদ', 'N/A', 'ISLAM', 'MALE', '22/01/2015', '20151591610112896', 'MD SHAH ALAM', '01866568171', 'N/A', 'DOLI AKTER', '01866568171', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504094.png', 'ACTIVE'),
(2504095, '2025', 'N/A', 'N/A', 'THREE', '010', 'ABDULLAHA AL RAFI', 'আবদুল্লাহ আল রাফি', 'N/A', 'ISLAM', 'MALE', '27/09/2016', '20161591610111032', 'MD SUMON', '01882795309', 'N/A', 'JANNATUL FERDOUSH', '01889816173', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504095.png', 'ACTIVE'),
(2504096, '2025', 'N/A', 'N/A', 'FOUR', '001', 'MD. JUBAYED HOSSEN', 'মো: জুবায়েদ হোসেন', 'N/A', 'ISLAM', 'MALE', '13/12/2014', '20141591610117529', 'MD. JASIM UDDIN', '01836093114', 'N/A', 'MST. HOSNEARA BEGUM', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504096.png', 'ACTIVE'),
(2504097, '2025', 'N/A', 'N/A', 'FOUR', '002', 'JANNATUL FERDOUS SUMAIYA', 'জান্নাতুল ফেরদৌস সুমাইয়া', 'N/A', 'ISLAM', 'FEMALE', '10/01/2013', '20131591610112180', 'MD ABDUR ROB', '01938507092', 'N/A', 'SHAMIMA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504097.png', 'ACTIVE'),
(2504098, '2025', 'N/A', 'N/A', 'FOUR', '003', 'MD. RIHAN KHAN', 'মোঃ রায়হান খাঁন', 'N/A', 'ISLAM', 'MALE', '08/09/2011', '20111591610106439', 'MD. SOHRAB KHAN', '01611273155', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504098.png', 'ACTIVE'),
(2504099, '2025', 'N/A', 'N/A', 'FOUR', '004', 'MD ABDUL AWAL', 'মোঃ আব্দুল আউয়াল', 'N/A', 'ISLAM', 'MALE', '14/02/2014', '20141591610139044', 'MD SAIFUL ISLAM', '01617553845', 'N/A', 'AYESHA AKTER', '01708987320', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504099.png', 'ACTIVE'),
(2504100, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '001', 'MD. ABDULLAH RAHMAN ARAF', 'মোঃ আব্দুল্লাহ রহমান আরাফ', 'N/A', 'ISLAM', 'MALE', '20/07/2015', '20151591610117048', 'MD. MASUD RAHMAN', '01848112292', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504100.png', 'ACTIVE'),
(2504101, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '002', 'MD AL AMIN FORAIZI', 'মোঃ আল আমিন ফরাজি', 'N/A', 'ISLAM', 'MALE', '12/11/2014', '20141918760111732', 'MD TAJUL ISLAM', '01830220161', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504101.png', 'ACTIVE'),
(2504102, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '003', 'MD HASAN', 'মোঃ হাছান', 'N/A', 'ISLAM', 'MALE', '05/02/2014', '20141591610117748', 'MOHAMMAD HASHEM', '01850180592', 'N/A', 'N/A', '01849624462', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504102.png', 'ACTIVE'),
(2504103, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '004', 'SAHARAJ HOSSEN IRFAN', 'শাহারাজ হোসেন ইরফান', 'N/A', 'ISLAM', 'MALE', '18/04/2017', 'N/A', 'IMRAN HOSSIN', '01845812862', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504103.png', 'ACTIVE'),
(2504104, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '005', 'MD. RAFI MOLLAH', 'মোঃ রাফি মোল্লা', 'N/A', 'ISLAM', 'MALE', '27/12/2016', '20161911556115608', 'MD MOSTAFA MOLLAH', '01994001153', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504104.png', 'ACTIVE'),
(2504105, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '006', 'MOHAMMAD SAAD HASAN YEAD', 'মোহাম্মদ সাদ হাসান ইয়াদ', 'N/A', 'ISLAM', 'MALE', '29/01/2019', '20191518666113255', 'MD. ZIAUDDIN BABLU', '01812575333', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504105.png', 'ACTIVE'),
(2504106, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '007', 'MD MOKSIDUL HOQ RAIHAN', 'মোঃ মকছিদুল হক রায়হান', 'N/A', 'ISLAM', 'MALE', '16/11/2015', '20151591610111942', 'MD MOJIBUL HOQ RUBEL', '01311817653', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504106.png', 'ACTIVE'),
(2504107, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '008', 'MOHAMMAD TAIMON ISLAM OVI', 'মোহাম্মদ তাইমন ইসলাম অভি', 'N/A', 'ISLAM', 'MALE', '10/10/2014', '20141918773103877', 'MD. ALAMGIR', '01843231615', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504107.png', 'ACTIVE'),
(2504108, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '009', 'MD SAYEM', 'মোঃ সায়েম', 'N/A', 'ISLAM', 'MALE', '02/06/2018', '20181591610138278', 'MD ASLAM', '01840040759', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504108.png', 'ACTIVE'),
(2504109, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '010', 'MOHAMMED ADIL ISLAM', 'মোহাম্মদ আদিল ইসলাম', 'N/A', 'ISLAM', 'MALE', '30/06/2017', '20171591610129660', 'MD WAHIDUL ISLAM', '01892603020', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504109.png', 'ACTIVE'),
(2504110, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '011', 'MD ABDULLAH', 'মোঃ আবদুল্লাহ', 'N/A', 'ISLAM', 'MALE', '29/04/2016', '20160911851154512', 'SHAFIQUL ISLAM', '01739291950', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504110.png', 'ACTIVE'),
(2504111, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '012', 'MD MEHEDI HASAN', 'মো: মেহিদী হাসান', 'N/A', 'ISLAM', 'MALE', '10/07/2013', '20131591610115769', 'MD ANOWAR HOSSEN', '01823755989', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504111.png', 'ACTIVE'),
(2504112, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '013', 'MD. JUNAID ARPIN HAMIM', 'মোঃ জুনায়েদ আরপিন হামিম', 'N/A', 'ISLAM', 'MALE', '06/03/2013', '20131591610100220', 'MD. ALAMGIR', '01871226057', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504112.png', 'ACTIVE'),
(2504113, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '014', 'MD. ABU SAEED', 'মোঃ আবু সাঈদ', 'N/A', 'ISLAM', 'MALE', '18/10/2014', '20141591610113499', 'MD. SABUJ', '01319212955', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504113.png', 'ACTIVE'),
(2504114, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '015', 'MD PARDIN', 'মো: পারদীন', 'N/A', 'ISLAM', 'MALE', '19/09/2014', '20141517875111287', 'MOHAMMED IBRAHIM', '01815745696', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504114.png', 'ACTIVE'),
(2504115, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '016', 'JONAYED', 'মোঃ জোনায়েদুল ইসলাম', 'N/A', 'ISLAM', 'MALE', '05/12/2014', '20141918757103652', 'ROBIUL HOSSAIN', '01839553538', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504115.png', 'ACTIVE'),
(2504116, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '017', 'FIROZ UDDIN', 'ফিরোজ উদ্দিন', 'N/A', 'ISLAM', 'MALE', '03/09/2017', '20171591610139390', 'JAFAR AHMED', '01871392812', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504116.png', 'ACTIVE'),
(2504117, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '018', 'MOHAMMAD JARIF', 'মোহাম্মদ জারিফ', 'N/A', 'ISLAM', 'MALE', '11/01/2018', '20181517892126641', 'MD. ZIYAUR RAHMAN', '01308515023', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504117.png', 'ACTIVE'),
(2504118, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '019', 'NAZIM UDDIN', 'নাজিম উদ্দীন', 'N/A', 'ISLAM', 'MALE', '04/01/2018', '20181510894121748', 'JASIM UDDIN', '01885145354', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504118.png', 'ACTIVE'),
(2504119, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '020', 'SAAD BIN SHAHED', 'সাআদ বিন শাহেদ', 'N/A', 'ISLAM', 'MALE', '10/03/2018', 'N/A', 'MD. SHAMSUL ISLAM SHAHED', '01817121031', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504119.png', 'ACTIVE'),
(2504120, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '021', 'MD. ARIFUL ISLAM JIHAD', 'মোঃ আরিফুল ইসলাম জিহাদ', 'N/A', 'ISLAM', 'MALE', '	02/02/2016', 'N/A', 'MOHAMMED JOSHIM', '01890696334', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504120.png', 'ACTIVE'),
(2504121, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '022', 'MD. NUR MOHAMMAD NAHID', 'মোঃ নুর মোহাম্মদ নাহিদ', 'N/A', 'ISLAM', 'MALE', '24/11/2017', 'N/A', 'MD. HUMAYUN KABIR SUMON', '01752333530', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504121.png', 'ACTIVE'),
(2504122, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '023', 'ARAFAT HOSSEN RABBI', 'আরাফাত হোসেন রাব্বি', 'N/A', 'ISLAM', 'MALE', '22/12/2017', 'N/A', 'ALI AKBAR', '01882001684', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504122.png', 'ACTIVE'),
(2504123, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '024', 'NAIMUL ISLAM MAHIM', 'নাইমুল ইসলাম মাহিম', 'N/A', 'ISLAM', 'MALE', '14/10/2013', 'N/A', 'KEFAYET ULLAH', '01889333980', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504123.png', 'ACTIVE'),
(2504124, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '025', 'MD. SAFI ISLAM', 'মোঃ সাফি ইসলাম', 'N/A', 'ISLAM', 'MALE', '08/01/2016', 'N/A', 'MD. SIMON ISLAM', '01818964658', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504124.png', 'ACTIVE'),
(2504125, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '026', 'MD NAHID ISLAM', 'মোঃ নাহিদ ইসলাম', 'N/A', 'ISLAM', 'MALE', '10/11/2016', '20161591610139873', 'MD. JUEL', '01857772887', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504125.png', 'ACTIVE'),
(2504126, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '027', 'MD. RAIB ISLAM AIZAN', 'মোঃ রাইব ইসলাম আইজান', 'N/A', 'ISLAM', 'MALE', '03/05/2016', 'N/A', 'MD. MAHMUD ISLAM EMON', '01865893398', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504126.png', 'ACTIVE'),
(2504127, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '028', 'MD. ARIFUL ALAM SAKIB', 'মোঃ আরিফুল আলম সাকিব', 'N/A', 'ISLAM', 'MALE', '13/04/2015', 'N/A', 'MOHAMMAD SOFIUL ALAM', '01863614556', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504127.png', 'ACTIVE'),
(2504128, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '029', 'JOBAYED HOSSAIN', 'জোবায়েদ হোসেন', 'N/A', 'ISLAM', 'MALE', '17/05/2018', 'N/A', 'MD. MASUD', '01961934237', 'N/A', 'N/A', '01896328134', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504128.png', 'ACTIVE'),
(2504129, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '030', 'GOLAM HOSSAIN', 'গোলাম হোসাইন', 'N/A', 'ISLAM', 'MALE', '29/10/2019', 'N/A', 'AL AMIN', '01827271294', 'N/A', 'RUMA AKTER', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504129.png', 'ACTIVE'),
(2504130, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '001', 'NUR MOHAMMAD', 'নুর মোহাম্মদ', 'N/A', 'ISLAM', 'MALE', '18/07/2011', 'N/A', 'MD. AKHTER HOSSAIN', '01921332753', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504130.png', 'ACTIVE'),
(2504131, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '002', 'MD. MARUF HOSSEN', 'মোঃ মারুফ হোসেন', 'N/A', 'ISLAM', 'MALE', '18/07/2013', 'N/A', 'KABIR HOSSEN', '01884196479', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504131.png', 'ACTIVE'),
(2504132, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '003', 'MD. SAFAT', 'মোঃ সাফাত', 'N/A', 'ISLAM', 'MALE', '	05/12/2011', 'N/A', 'JAMAL HOSSAIN', '01861731807', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504132.png', 'ACTIVE'),
(2504133, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '004', 'MD. ARAFAT HOSSAIN NAEEM', 'মোঃ আরাফাত হোসেন নাঈম', 'N/A', 'ISLAM', 'MALE', '22/10/2012', '20121591610104144', 'MD. ALAUDDIN', '01619146027', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504133.png', 'ACTIVE'),
(2504134, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '005', 'MD. MONIR HOSSAIN RASEL', 'মোঃ মনির হোসেন রাসেল', 'N/A', 'ISLAM', 'MALE', '03/07/2008', 'N/A', 'Mohammad Mafiz', '01882163610', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504134.png', 'ACTIVE'),
(2504135, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '006', 'MD. ISMAIL', 'মোঃ ইসমাইল', 'N/A', 'ISLAM', 'MALE', '01/01/2012', 'N/A', 'MD. HELAL HOSSAIN', '01988312596', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504135.png', 'ACTIVE'),
(2504136, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '007', 'MD. KAMRUL HOSSAIN SHAWON', 'মোঃ কামরুল হোসেন শাওন', 'N/A', 'ISLAM', 'MALE', '21/12/2013', 'N/A', 'MD. KAMAL UDDIN', '01872501404', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504136.png', 'ACTIVE'),
(2504137, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '008', 'MD. ATIQUL ISLAM ISNAN', 'মোঃ আতিকুল ইসলাম ইসনান', 'N/A', 'ISLAM', 'MALE', '25/12/2014', 'N/A', 'MD. JAHEDUL ISLAM', '01833227757', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504137.png', 'ACTIVE'),
(2504138, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '009', 'MOHAMMED RAFSAN CHOWDHURY SAFOWAN', 'মোহাম্মদ রাফসান চৌধুরী ছাফোওয়ান', 'N/A', 'ISLAM', 'MALE', '26/05/2016', 'N/A', 'MD. RAHIM CHOWDHURY', '01867112900', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504138.png', 'ACTIVE'),
(2504139, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '010', 'MD. RIFAT', 'মোঃ রিফাত', 'N/A', 'ISLAM', 'MALE', '21/03/2013', 'N/A', 'JAMAL HOSSAIN', '01861731807', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504139.png', 'ACTIVE'),
(2504140, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '011', 'MD. EASIN', 'মোঃ ইয়াছিন', 'N/A', 'ISLAM', 'MALE', '25/05/2014', 'N/A', 'MD. EMRAN', '01998702325', 'N/A', 'N/A', '01998702326', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504140.png', 'ACTIVE'),
(2504141, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '012', 'MD. RAKIB HOSSAIN', 'মোঃ রাকিব হোসেন', 'N/A', 'ISLAM', 'MALE', '19/03/2013', 'N/A', 'MD. NAZRUL ISLAM', '01837599620', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504141.png', 'ACTIVE'),
(2504142, '2025', 'N/A', 'N/A', 'HIFZ-INTERNATIONAL', '013', 'NUR AHMAD TASNIM', 'নুর আহমাদ তাসনীম', 'N/A', 'ISLAM', 'MALE', '17/11/2014', '20141591610107512', 'NURUL ISLAM', '01825114380', 'N/A', 'NUR NAHAR', '01897026033', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504142.png', 'ACTIVE'),
(2504143, '2025', 'N/A', 'N/A', 'HIFZ-RIVISION', '001', 'MD. SAJJAD SHIKDER', 'মোঃ সাজ্জাদ শিকদার', 'N/A', 'ISLAM', 'MALE', '01/12/2012', 'N/A', 'MD. SAMIM SIKDER', '01727801075', 'N/A', 'N/A', '01756986990', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504143.png', 'ACTIVE'),
(2504144, '2025', 'N/A', 'N/A', 'ONE', '024', 'IMRAN HOSEN', 'ইমরান হোসেন', 'N/A', 'ISLAM', 'MALE', '03/12/2016', '20167512183108791', 'NUR HOSSAIN', '01311134734', '19947512183106783', 'HOSNEARA', '01311134734', 'N/A', 'N/A', 'N/A', 'views/theme/img/2504144.png', 'ACTIVE'),
(2504145, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '031', 'WAHIDUL ISLAM', 'ওয়াহিদুল ইসলাম', 'N/A', 'ISLAM', 'MALE', 'N/A', 'N/A', 'N/A', '01859897358', 'N/A', 'SAZIDA AKTER', '01859897358', '2393838319', 'N/A', 'N/A', 'views/theme/img/2504145.png', 'ACTIVE'),
(2504146, '2025', 'N/A', 'N/A', 'HIFZ-NAZERA', '032', 'MD SIYAM', 'সিয়াম', 'N/A', 'ISLAM', 'MALE', '25/06/2016', 'N/A', 'MD BAHAR ALAM', '01872078961', '4177659523', 'ALEYA KHATUN', '01889843399', '7777660494', 'N/A', 'N/A', 'views/theme/img/2504146.png', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shnmm_tbl_students`
--
ALTER TABLE `shnmm_tbl_students`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shnmm_tbl_students`
--
ALTER TABLE `shnmm_tbl_students`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2504147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
