-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 05:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s4c`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_country`
--

CREATE TABLE `ac_country` (
  `id` int(11) NOT NULL,
  `code` char(2) NOT NULL,
  `name_en` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  `pay` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_country`
--

INSERT INTO `ac_country` (`id`, `code`, `name_en`, `iso3`, `numcode`, `phonecode`, `pay`) VALUES
(1, 'AF', 'Afghanistan', 'AFG', 4, 93, 1),
(2, 'AL', 'Albania', 'ALB', 8, 355, 1),
(3, 'DZ', 'Algeria', 'DZA', 12, 213, 1),
(4, 'AS', 'American Samoa', 'ASM', 16, 1684, 1),
(5, 'AD', 'Andorra', 'AND', 20, 376, 1),
(6, 'AO', 'Angola', 'AGO', 24, 244, 1),
(7, 'AI', 'Anguilla', 'AIA', 660, 1264, 1),
(8, 'AQ', 'Antarctica', NULL, NULL, 0, 1),
(9, 'AG', 'Antigua and Barbuda', 'ATG', 28, 1268, 1),
(10, 'AR', 'Argentina', 'ARG', 32, 54, 1),
(11, 'AM', 'Armenia', 'ARM', 51, 374, 1),
(12, 'AW', 'Aruba', 'ABW', 533, 297, 1),
(13, 'AU', 'Australia', 'AUS', 36, 61, 1),
(14, 'AT', 'Austria', 'AUT', 40, 43, 1),
(15, 'AZ', 'Azerbaijan', 'AZE', 31, 994, 1),
(16, 'BS', 'Bahamas', 'BHS', 44, 1242, 1),
(17, 'BH', 'Bahrain', 'BHR', 48, 973, 1),
(18, 'BD', 'Bangladesh', 'BGD', 50, 880, 1),
(19, 'BB', 'Barbados', 'BRB', 52, 1246, 1),
(20, 'BY', 'Belarus', 'BLR', 112, 375, 1),
(21, 'BE', 'Belgium', 'BEL', 56, 32, 1),
(22, 'BZ', 'Belize', 'BLZ', 84, 501, 1),
(23, 'BJ', 'Benin', 'BEN', 204, 229, 1),
(24, 'BM', 'Bermuda', 'BMU', 60, 1441, 1),
(25, 'BT', 'Bhutan', 'BTN', 64, 975, 1),
(26, 'BO', 'Bolivia', 'BOL', 68, 591, 1),
(27, 'BA', 'Bosnia and Herzegovina', 'BIH', 70, 387, 1),
(28, 'BW', 'Botswana', 'BWA', 72, 267, 1),
(29, 'BV', 'Bouvet Island', NULL, NULL, 0, 1),
(30, 'BR', 'Brazil', 'BRA', 76, 55, 1),
(31, 'IO', 'British Indian Ocean Territory', NULL, NULL, 246, 1),
(32, 'BN', 'Brunei Darussalam', 'BRN', 96, 673, 1),
(33, 'BG', 'Bulgaria', 'BGR', 100, 359, 1),
(34, 'BF', 'Burkina Faso', 'BFA', 854, 226, 1),
(35, 'BI', 'Burundi', 'BDI', 108, 257, 1),
(36, 'KH', 'Cambodia', 'KHM', 116, 855, 1),
(37, 'CM', 'Cameroon', 'CMR', 120, 237, 1),
(38, 'CA', 'Canada', 'CAN', 124, 1, 1),
(39, 'CV', 'Cape Verde', 'CPV', 132, 238, 1),
(40, 'KY', 'Cayman Islands', 'CYM', 136, 1345, 1),
(41, 'CF', 'Central African Republic', 'CAF', 140, 236, 1),
(42, 'TD', 'Chad', 'TCD', 148, 235, 1),
(43, 'CL', 'Chile', 'CHL', 152, 56, 1),
(44, 'CN', 'China', 'CHN', 156, 86, 1),
(45, 'CX', 'Christmas Island', NULL, NULL, 61, 1),
(46, 'CC', 'Cocos (Keeling) Islands', NULL, NULL, 672, 1),
(47, 'CO', 'Colombia', 'COL', 170, 57, 1),
(48, 'KM', 'Comoros', 'COM', 174, 269, 1),
(49, 'CG', 'Congo', 'COG', 178, 242, 1),
(50, 'CD', 'Congo, the Democratic Republic of the', 'COD', 180, 242, 1),
(51, 'CK', 'Cook Islands', 'COK', 184, 682, 1),
(52, 'CR', 'Costa Rica', 'CRI', 188, 506, 1),
(53, 'CI', 'Cote D\'Ivoire', 'CIV', 384, 225, 1),
(54, 'HR', 'Croatia', 'HRV', 191, 385, 1),
(55, 'CU', 'Cuba', 'CUB', 192, 53, 1),
(56, 'CY', 'Cyprus', 'CYP', 196, 357, 1),
(57, 'CZ', 'Czech Republic', 'CZE', 203, 420, 1),
(58, 'DK', 'Denmark', 'DNK', 208, 45, 1),
(59, 'DJ', 'Djibouti', 'DJI', 262, 253, 1),
(60, 'DM', 'Dominica', 'DMA', 212, 1767, 1),
(61, 'DO', 'Dominican Republic', 'DOM', 214, 1809, 1),
(62, 'EC', 'Ecuador', 'ECU', 218, 593, 1),
(63, 'EG', 'Egypt', 'EGY', 818, 20, 1),
(64, 'SV', 'El Salvador', 'SLV', 222, 503, 1),
(65, 'GQ', 'Equatorial Guinea', 'GNQ', 226, 240, 1),
(66, 'ER', 'Eritrea', 'ERI', 232, 291, 1),
(67, 'EE', 'Estonia', 'EST', 233, 372, 1),
(68, 'ET', 'Ethiopia', 'ETH', 231, 251, 1),
(69, 'FK', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, 1),
(70, 'FO', 'Faroe Islands', 'FRO', 234, 298, 1),
(71, 'FJ', 'Fiji', 'FJI', 242, 679, 1),
(72, 'FI', 'Finland', 'FIN', 246, 358, 1),
(73, 'FR', 'France', 'FRA', 250, 33, 1),
(74, 'GF', 'French Guiana', 'GUF', 254, 594, 1),
(75, 'PF', 'French Polynesia', 'PYF', 258, 689, 1),
(76, 'TF', 'French Southern Territories', NULL, NULL, 0, 1),
(77, 'GA', 'Gabon', 'GAB', 266, 241, 1),
(78, 'GM', 'Gambia', 'GMB', 270, 220, 1),
(79, 'GE', 'Georgia', 'GEO', 268, 995, 1),
(80, 'DE', 'Germany', 'DEU', 276, 49, 1),
(81, 'GH', 'Ghana', 'GHA', 288, 233, 1),
(82, 'GI', 'Gibraltar', 'GIB', 292, 350, 1),
(83, 'GR', 'Greece', 'GRC', 300, 30, 1),
(84, 'GL', 'Greenland', 'GRL', 304, 299, 1),
(85, 'GD', 'Grenada', 'GRD', 308, 1473, 1),
(86, 'GP', 'Guadeloupe', 'GLP', 312, 590, 1),
(87, 'GU', 'Guam', 'GUM', 316, 1671, 1),
(88, 'GT', 'Guatemala', 'GTM', 320, 502, 1),
(89, 'GN', 'Guinea', 'GIN', 324, 224, 1),
(90, 'GW', 'Guinea-Bissau', 'GNB', 624, 245, 1),
(91, 'GY', 'Guyana', 'GUY', 328, 592, 1),
(92, 'HT', 'Haiti', 'HTI', 332, 509, 1),
(93, 'HM', 'Heard Island and Mcdonald Islands', NULL, NULL, 0, 1),
(94, 'VA', 'Holy See (Vatican City State)', 'VAT', 336, 39, 1),
(95, 'HN', 'Honduras', 'HND', 340, 504, 1),
(96, 'HK', 'Hong Kong', 'HKG', 344, 852, 1),
(97, 'HU', 'Hungary', 'HUN', 348, 36, 1),
(98, 'IS', 'Iceland', 'ISL', 352, 354, 1),
(99, 'IN', 'India', 'IND', 356, 91, 1),
(100, 'ID', 'Indonesia', 'IDN', 360, 62, 1),
(101, 'IR', 'Iran, Islamic Republic of', 'IRN', 364, 98, 1),
(102, 'IQ', 'Iraq', 'IRQ', 368, 964, 1),
(103, 'IE', 'Ireland', 'IRL', 372, 353, 1),
(104, 'IL', 'Israel', 'ISR', 376, 972, 1),
(105, 'IT', 'Italy', 'ITA', 380, 39, 1),
(106, 'JM', 'Jamaica', 'JAM', 388, 1876, 1),
(107, 'JP', 'Japan', 'JPN', 392, 81, 1),
(108, 'JO', 'Jordan', 'JOR', 400, 962, 1),
(109, 'KZ', 'Kazakhstan', 'KAZ', 398, 7, 1),
(110, 'KE', 'Kenya', 'KEN', 404, 254, 1),
(111, 'KI', 'Kiribati', 'KIR', 296, 686, 1),
(112, 'KP', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850, 1),
(113, 'KR', 'Korea, Republic of', 'KOR', 410, 82, 1),
(114, 'KW', 'Kuwait', 'KWT', 414, 965, 1),
(115, 'KG', 'Kyrgyzstan', 'KGZ', 417, 996, 1),
(116, 'LA', 'Lao People\'s Democratic Republic', 'LAO', 418, 856, 1),
(117, 'LV', 'Latvia', 'LVA', 428, 371, 1),
(118, 'LB', 'Lebanon', 'LBN', 422, 961, 1),
(119, 'LS', 'Lesotho', 'LSO', 426, 266, 1),
(120, 'LR', 'Liberia', 'LBR', 430, 231, 1),
(121, 'LY', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, 1),
(122, 'LI', 'Liechtenstein', 'LIE', 438, 423, 1),
(123, 'LT', 'Lithuania', 'LTU', 440, 370, 1),
(124, 'LU', 'Luxembourg', 'LUX', 442, 352, 1),
(125, 'MO', 'Macao', 'MAC', 446, 853, 1),
(126, 'MK', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, 1),
(127, 'MG', 'Madagascar', 'MDG', 450, 261, 1),
(128, 'MW', 'Malawi', 'MWI', 454, 265, 1),
(129, 'MY', 'Malaysia', 'MYS', 458, 60, 1),
(130, 'MV', 'Maldives', 'MDV', 462, 960, 1),
(131, 'ML', 'Mali', 'MLI', 466, 223, 1),
(132, 'MT', 'Malta', 'MLT', 470, 356, 1),
(133, 'MH', 'Marshall Islands', 'MHL', 584, 692, 1),
(134, 'MQ', 'Martinique', 'MTQ', 474, 596, 1),
(135, 'MR', 'Mauritania', 'MRT', 478, 222, 1),
(136, 'MU', 'Mauritius', 'MUS', 480, 230, 1),
(137, 'YT', 'Mayotte', NULL, NULL, 269, 1),
(138, 'MX', 'Mexico', 'MEX', 484, 52, 1),
(139, 'FM', 'Micronesia, Federated States of', 'FSM', 583, 691, 1),
(140, 'MD', 'Moldova, Republic of', 'MDA', 498, 373, 1),
(141, 'MC', 'Monaco', 'MCO', 492, 377, 1),
(142, 'MN', 'Mongolia', 'MNG', 496, 976, 1),
(143, 'MS', 'Montserrat', 'MSR', 500, 1664, 1),
(144, 'MA', 'Morocco', 'MAR', 504, 212, 1),
(145, 'MZ', 'Mozambique', 'MOZ', 508, 258, 1),
(146, 'MM', 'Myanmar', 'MMR', 104, 95, 1),
(147, 'NA', 'Namibia', 'NAM', 516, 264, 1),
(148, 'NR', 'Nauru', 'NRU', 520, 674, 1),
(149, 'NP', 'Nepal', 'NPL', 524, 977, 1),
(150, 'NL', 'Netherlands', 'NLD', 528, 31, 1),
(151, 'AN', 'Netherlands Antilles', 'ANT', 530, 599, 1),
(152, 'NC', 'New Caledonia', 'NCL', 540, 687, 1),
(153, 'NZ', 'New Zealand', 'NZL', 554, 64, 1),
(154, 'NI', 'Nicaragua', 'NIC', 558, 505, 1),
(155, 'NE', 'Niger', 'NER', 562, 227, 1),
(156, 'NG', 'Nigeria', 'NGA', 566, 234, 1),
(157, 'NU', 'Niue', 'NIU', 570, 683, 1),
(158, 'NF', 'Norfolk Island', 'NFK', 574, 672, 1),
(159, 'MP', 'Northern Mariana Islands', 'MNP', 580, 1670, 1),
(160, 'NO', 'Norway', 'NOR', 578, 47, 1),
(161, 'OM', 'Oman', 'OMN', 512, 968, 1),
(162, 'PK', 'Pakistan', 'PAK', 586, 92, 1),
(163, 'PW', 'Palau', 'PLW', 585, 680, 1),
(164, 'PS', 'Palestinian Territory, Occupied', NULL, NULL, 970, 1),
(165, 'PA', 'Panama', 'PAN', 591, 507, 1),
(166, 'PG', 'Papua New Guinea', 'PNG', 598, 675, 1),
(167, 'PY', 'Paraguay', 'PRY', 600, 595, 1),
(168, 'PE', 'Peru', 'PER', 604, 51, 1),
(169, 'PH', 'Philippines', 'PHL', 608, 63, 1),
(170, 'PN', 'Pitcairn', 'PCN', 612, 0, 1),
(171, 'PL', 'Poland', 'POL', 616, 48, 1),
(172, 'PT', 'Portugal', 'PRT', 620, 351, 1),
(173, 'PR', 'Puerto Rico', 'PRI', 630, 1787, 1),
(174, 'QA', 'Qatar', 'QAT', 634, 974, 1),
(175, 'RE', 'Reunion', 'REU', 638, 262, 1),
(176, 'RO', 'Romania', 'ROM', 642, 40, 1),
(177, 'RU', 'Russian Federation', 'RUS', 643, 70, 1),
(178, 'RW', 'Rwanda', 'RWA', 646, 250, 1),
(179, 'SH', 'Saint Helena', 'SHN', 654, 290, 1),
(180, 'KN', 'Saint Kitts and Nevis', 'KNA', 659, 1869, 1),
(181, 'LC', 'Saint Lucia', 'LCA', 662, 1758, 1),
(182, 'PM', 'Saint Pierre and Miquelon', 'SPM', 666, 508, 1),
(183, 'VC', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, 1),
(184, 'WS', 'Samoa', 'WSM', 882, 684, 1),
(185, 'SM', 'San Marino', 'SMR', 674, 378, 1),
(186, 'ST', 'Sao Tome and Principe', 'STP', 678, 239, 1),
(187, 'SA', 'Saudi Arabia', 'SAU', 682, 966, 1),
(188, 'SN', 'Senegal', 'SEN', 686, 221, 1),
(189, 'CS', 'Serbia and Montenegro', NULL, NULL, 381, 1),
(190, 'SC', 'Seychelles', 'SYC', 690, 248, 1),
(191, 'SL', 'Sierra Leone', 'SLE', 694, 232, 1),
(192, 'SG', 'Singapore', 'SGP', 702, 65, 1),
(193, 'SK', 'Slovakia', 'SVK', 703, 421, 1),
(194, 'SI', 'Slovenia', 'SVN', 705, 386, 1),
(195, 'SB', 'Solomon Islands', 'SLB', 90, 677, 1),
(196, 'SO', 'Somalia', 'SOM', 706, 252, 1),
(197, 'ZA', 'South Africa', 'ZAF', 710, 27, 1),
(198, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0, 1),
(199, 'ES', 'Spain', 'ESP', 724, 34, 1),
(200, 'LK', 'Sri Lanka', 'LKA', 144, 94, 1),
(201, 'SD', 'Sudan', 'SDN', 736, 249, 1),
(202, 'SR', 'Suriname', 'SUR', 740, 597, 1),
(203, 'SJ', 'Svalbard and Jan Mayen', 'SJM', 744, 47, 1),
(204, 'SZ', 'Swaziland', 'SWZ', 748, 268, 1),
(205, 'SE', 'Sweden', 'SWE', 752, 46, 1),
(206, 'CH', 'Switzerland', 'CHE', 756, 41, 1),
(207, 'SY', 'Syrian Arab Republic', 'SYR', 760, 963, 1),
(208, 'TW', 'Taiwan, Province of China', 'TWN', 158, 886, 1),
(209, 'TJ', 'Tajikistan', 'TJK', 762, 992, 1),
(210, 'TZ', 'Tanzania, United Republic of', 'TZA', 834, 255, 1),
(211, 'TH', 'Thailand', 'THA', 764, 66, 1),
(212, 'TL', 'Timor-Leste', NULL, NULL, 670, 1),
(213, 'TG', 'Togo', 'TGO', 768, 228, 1),
(214, 'TK', 'Tokelau', 'TKL', 772, 690, 1),
(215, 'TO', 'Tonga', 'TON', 776, 676, 1),
(216, 'TT', 'Trinidad and Tobago', 'TTO', 780, 1868, 1),
(217, 'TN', 'Tunisia', 'TUN', 788, 216, 1),
(218, 'TR', 'Turkey', 'TUR', 792, 90, 1),
(219, 'TM', 'Turkmenistan', 'TKM', 795, 7370, 1),
(220, 'TC', 'Turks and Caicos Islands', 'TCA', 796, 1649, 1),
(221, 'TV', 'Tuvalu', 'TUV', 798, 688, 1),
(222, 'UG', 'Uganda', 'UGA', 800, 256, 1),
(223, 'UA', 'Ukraine', 'UKR', 804, 380, 1),
(224, 'AE', 'United Arab Emirates', 'ARE', 784, 971, 1),
(225, 'GB', 'United Kingdom', 'GBR', 826, 44, 1),
(226, 'US', 'United States', 'USA', 840, 1, 1),
(227, 'UM', 'United States Minor Outlying Islands', NULL, NULL, 1, 1),
(228, 'UY', 'Uruguay', 'URY', 858, 598, 1),
(229, 'UZ', 'Uzbekistan', 'UZB', 860, 998, 1),
(230, 'VU', 'Vanuatu', 'VUT', 548, 678, 1),
(231, 'VE', 'Venezuela', 'VEN', 862, 58, 1),
(232, 'VN', 'Viet Nam', 'VNM', 704, 84, 1),
(233, 'VG', 'Virgin Islands, British', 'VGB', 92, 1284, 1),
(234, 'VI', 'Virgin Islands, U.s.', 'VIR', 850, 1340, 1),
(235, 'WF', 'Wallis and Futuna', 'WLF', 876, 681, 1),
(236, 'EH', 'Western Sahara', 'ESH', 732, 212, 1),
(237, 'YE', 'Yemen', 'YEM', 887, 967, 1),
(238, 'ZM', 'Zambia', 'ZMB', 894, 260, 1),
(239, 'ZW', 'Zimbabwe', 'ZWE', 716, 263, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ac_langs`
--

CREATE TABLE `ac_langs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `var_ru` text NOT NULL,
  `view` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ac_slinks`
--

CREATE TABLE `ac_slinks` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `url` varchar(255) NOT NULL,
  `kid` varchar(32) NOT NULL,
  `dtm` datetime NOT NULL,
  `country` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ac_slinks`
--

INSERT INTO `ac_slinks` (`id`, `user_id`, `url`, `kid`, `dtm`, `country`) VALUES
(1, 0, 'google.com', '44966346', '2017-10-24 16:39:06', ''),
(2, 0, 'icann.com', '86739022', '2017-10-24 16:39:18', ''),
(3, 0, 'ya.ru', '98933968', '2017-10-24 16:39:33', ''),
(4, 0, 'ajaxis.net', '97530908', '2017-10-24 16:39:53', ''),
(5, 0, 'reghost.biz', '86749825', '2017-10-24 16:41:15', ''),
(22, 1, 'http://www.dmwd.de/', '9y388aJI', '2016-11-07 22:26:47', ''),
(23, 1, 'https://www.ct-ads.com/', 'nco97z17', '2016-11-07 22:46:20', ''),
(24, 1, 'http://www.happyvents.de/veranstalter/home.html', 'JPIZ9hyI', '2016-11-07 22:49:57', ''),
(25, 1, 'http://www.1a-anwaltsseminare.de/', 'ce2Q41h7', '2016-11-07 22:50:15', ''),
(26, 1, 'http://www.babyparadies24.com/', 'Y1pQt83Z', '2016-11-07 22:50:26', ''),
(27, 1, 'http://www.eurokurier-bayern.com/', 'Y3vmEHm9', '2016-11-07 22:50:37', ''),
(28, 1, 'http://www.paralove.de/', '57477T99', '2016-11-07 22:50:56', ''),
(29, 1, 'http://silentwolves.de/', 'Tw6p9545', '2016-11-07 22:51:04', ''),
(30, 1, 'http://www.womantime.de/', '5vnS2K77', '2016-11-07 22:51:17', ''),
(31, 1, 'http://www.womantime.de/', '8j31xea9', '2016-11-07 22:51:43', ''),
(32, 1, 'http://www.babyparadies24.com/', 'p9545G7B', '2016-11-08 11:16:55', ''),
(33, 1, 'http://silentwolves.de/', '92UBdqz9', '2016-11-08 11:17:49', ''),
(34, 1, 'http://silentwolves.de/', '32Z913F4', '2016-11-08 11:20:18', ''),
(35, 1, 'http://www.eurokurier-bayern.com/', '9yv68Cu4', '2016-11-08 11:34:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `ac_slinks_payments`
--

CREATE TABLE `ac_slinks_payments` (
  `id` int(1) NOT NULL,
  `user_id` int(12) NOT NULL,
  `sum` int(11) NOT NULL,
  `paid` int(1) NOT NULL,
  `dtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ac_slinks_payments`
--

INSERT INTO `ac_slinks_payments` (`id`, `user_id`, `sum`, `paid`, `dtm`) VALUES
(1, 1, 11, 1, '2017-10-03 08:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `ac_slinks_stat`
--

CREATE TABLE `ac_slinks_stat` (
  `id` int(1) NOT NULL,
  `link_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `url` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `ip` varchar(40) NOT NULL,
  `dt` date NOT NULL,
  `tm` time NOT NULL,
  `ref` varchar(255) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `country` varchar(2) NOT NULL,
  `dtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ac_slinks_stat`
--

INSERT INTO `ac_slinks_stat` (`id`, `link_id`, `user_id`, `url`, `link`, `price`, `ip`, `dt`, `tm`, `ref`, `useragent`, `country`, `dtm`, `sid`) VALUES
(1, 4, 1, 'ajaxis.net', '97530908', 1, '1', '2017-10-24', '16:55:31', 'facebook.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0', 'US', '2017-10-24 16:04:26', ''),
(2, 2, 1, 'icann.com', '86739022', 1, '1', '2017-10-24', '16:58:42', 'reg.ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0', 'DE', '2017-10-24 16:04:26', ''),
(3, 3, 1, 'ya.ru', '98933968', 1, '1', '2017-10-24', '16:59:27', 'vk.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0', 'RU', '2017-10-24 16:04:26', ''),
(31, 22, 1, 'http://www.dmwd.de/', '9y388aJI', 0, '127.0.0.1', '2008-11-20', '02:44:35', 'yahoo.com?q=search', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:07:55', ''),
(32, 22, 1, 'http://www.dmwd.de/', '9y388aJI', 0, '127.0.0.1', '2008-11-20', '02:44:52', 'google.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:07:37', ''),
(33, 27, 1, 'http://www.eurokurier-bayern.com/', 'Y3vmEHm9', 0, '127.0.0.1', '2008-11-20', '03:18:39', 'google.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:07:22', ''),
(34, 28, 1, 'http://www.paralove.de/', '57477T99', 0, '127.0.0.1', '2008-11-20', '03:18:46', 'google.de?q=sfegfsef', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:08:09', ''),
(35, 28, 1, 'http://www.paralove.de/', '57477T99', 0, '127.0.0.1', '2008-11-20', '03:18:55', 'yahoo.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:08:56', ''),
(36, 22, 1, 'http://www.dmwd.de/', '9y388aJI', 0, '127.0.0.1', '2008-11-20', '03:27:23', 'google.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:07:33', ''),
(37, 22, 1, 'http://www.dmwd.de/', '9y388aJI', 0, '127.0.0.1', '2008-11-20', '03:27:36', 'google.de?q=dmwd', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:08:24', ''),
(38, 26, 1, 'http://www.babyparadies24.com/', 'Y1pQt83Z', 0, '127.0.0.1', '2008-11-20', '03:33:35', 'google.de?q=ct-ads', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:08:38', ''),
(39, 25, 1, 'http://www.1a-anwaltsseminare.de/', 'ce2Q41h7', 0, '127.0.0.1', '2008-11-20', '04:46:15', 'yahoo.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:12:10', ''),
(40, 31, 1, 'http://www.womantime.de/', '8j31xea9', 0, '127.0.0.1', '2008-11-20', '04:46:24', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:31', ''),
(41, 30, 1, 'http://www.womantime.de/', '5vnS2K77', 0, '127.0.0.1', '2008-11-20', '04:46:25', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:24', ''),
(42, 29, 1, 'http://silentwolves.de/', 'Tw6p9545', 0, '127.0.0.1', '2008-11-20', '04:46:26', 'google.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:12:02', ''),
(43, 28, 1, 'http://www.paralove.de/', '57477T99', 0, '127.0.0.1', '2008-11-20', '04:46:26', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:40', ''),
(44, 27, 1, 'http://www.eurokurier-bayern.com/', 'Y3vmEHm9', 0, '127.0.0.1', '2008-11-20', '04:46:27', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:35', ''),
(45, 26, 1, 'http://www.babyparadies24.com/', 'Y1pQt83Z', 0, '127.0.0.1', '2008-11-20', '04:46:28', 'google.com', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:55', ''),
(46, 25, 1, 'http://www.1a-anwaltsseminare.de/', 'ce2Q41h7', 0, '127.0.0.1', '2008-11-20', '04:46:29', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:50', ''),
(47, 24, 1, 'http://www.happyvents.de/veranstalter/home.html', 'JPIZ9hyI', 0, '127.0.0.1', '2008-11-20', '04:46:30', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:12:19', ''),
(48, 23, 1, 'https://www.ct-ads.com/', 'nco97z17', 0, '127.0.0.1', '2008-11-20', '04:46:30', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:11:45', ''),
(49, 22, 1, 'http://www.dmwd.de/', '9y388aJI', 0, '127.0.0.1', '2008-11-20', '04:46:31', 'google.de', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '', '2016-11-08 11:12:15', '');

-- --------------------------------------------------------

--
-- Table structure for table `ac_users`
--

CREATE TABLE `ac_users` (
  `id` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kid` int(12) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `dtm` datetime NOT NULL,
  `money` float NOT NULL,
  `paypal` varchar(255) NOT NULL,
  `iban` varchar(30) NOT NULL,
  `bic` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ac_users`
--

INSERT INTO `ac_users` (`id`, `email`, `pass`, `name`, `kid`, `ip`, `dtm`, `money`, `paypal`, `iban`, `bic`) VALUES
(1, 'user@mail.com', 'a5c1f56f8b914e6da0f86af7b0612186', '', 66365755, '1', '2017-10-24 16:07:26', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_country`
--
ALTER TABLE `ac_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_langs`
--
ALTER TABLE `ac_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_slinks`
--
ALTER TABLE `ac_slinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_slinks_payments`
--
ALTER TABLE `ac_slinks_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_slinks_stat`
--
ALTER TABLE `ac_slinks_stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_users`
--
ALTER TABLE `ac_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_country`
--
ALTER TABLE `ac_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `ac_langs`
--
ALTER TABLE `ac_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_slinks`
--
ALTER TABLE `ac_slinks`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ac_slinks_payments`
--
ALTER TABLE `ac_slinks_payments`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_slinks_stat`
--
ALTER TABLE `ac_slinks_stat`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ac_users`
--
ALTER TABLE `ac_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
