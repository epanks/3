<?php

use Illuminate\Database\Seeder;

class ProgresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `progres` (`id`, `keuangan`, `fisik`, `paket_id`, `created_at`, `updated_at`) VALUES
	(1, 0.00, 0.00, 2, NULL, NULL),
	(2, 0.00, 0.00, 3, NULL, NULL),
	(3, 0.00, 0.00, 4, NULL, NULL),
	(4, 0.00, 0.00, 5, NULL, NULL),
	(5, 0.00, 0.00, 7, NULL, NULL),
	(6, 0.00, 0.00, 8, NULL, NULL),
	(7, 0.00, 0.00, 9, NULL, NULL),
	(8, 0.00, 0.00, 10, NULL, NULL),
	(9, 0.00, 0.00, 11, NULL, NULL),
	(10, 0.00, 0.00, 12, NULL, NULL),
	(11, 0.00, 0.00, 13, NULL, NULL),
	(12, 0.00, 0.00, 14, NULL, NULL),
	(13, 0.00, 0.00, 15, NULL, NULL),
	(14, 0.00, 0.00, 16, NULL, NULL),
	(15, 0.00, 0.00, 17, NULL, NULL),
	(16, 0.00, 0.00, 18, NULL, NULL),
	(17, 0.00, 0.00, 19, NULL, NULL),
	(18, 0.00, 0.00, 20, NULL, NULL),
	(19, 0.00, 0.00, 21, NULL, NULL),
	(20, 0.00, 0.00, 22, NULL, NULL),
	(21, 0.00, 0.00, 23, NULL, NULL),
	(22, 0.00, 0.00, 24, NULL, NULL),
	(23, 0.00, 0.00, 25, NULL, NULL),
	(24, 0.00, 0.00, 26, NULL, NULL),
	(25, 0.00, 0.00, 27, NULL, NULL),
	(26, 0.00, 0.00, 28, NULL, NULL),
	(27, 0.00, 0.00, 29, NULL, NULL),
	(28, 0.00, 0.00, 30, NULL, NULL),
	(29, 0.00, 0.00, 31, NULL, NULL),
	(30, 0.00, 0.00, 32, NULL, NULL),
	(31, 0.00, 0.00, 33, NULL, NULL),
	(32, 0.00, 0.00, 34, NULL, NULL),
	(33, 0.00, 0.00, 35, NULL, NULL),
	(34, 0.00, 0.00, 36, NULL, NULL),
	(35, 0.00, 0.00, 37, NULL, NULL),
	(36, 0.00, 0.00, 38, NULL, NULL),
	(37, 0.00, 0.00, 39, NULL, NULL),
	(38, 0.00, 0.00, 40, NULL, NULL),
	(39, 0.00, 0.00, 41, NULL, NULL),
	(40, 0.00, 0.00, 42, NULL, NULL),
	(41, 0.00, 0.00, 43, NULL, NULL),
	(42, 0.00, 0.00, 44, NULL, NULL),
	(43, 0.00, 0.00, 45, NULL, NULL),
	(44, 0.00, 0.00, 46, NULL, NULL),
	(45, 0.00, 0.00, 47, NULL, NULL),
	(46, 0.00, 0.00, 48, NULL, NULL),
	(47, 0.00, 0.00, 49, NULL, NULL),
	(48, 0.00, 0.00, 50, NULL, NULL),
	(49, 0.00, 0.00, 51, NULL, NULL),
	(50, 0.00, 0.00, 52, NULL, NULL),
	(51, 0.00, 0.00, 53, NULL, NULL),
	(52, 0.00, 0.00, 54, NULL, NULL),
	(53, 0.00, 0.00, 55, NULL, NULL),
	(54, 0.00, 0.00, 56, NULL, NULL),
	(55, 0.00, 0.00, 57, NULL, NULL),
	(56, 0.00, 0.00, 58, NULL, NULL),
	(57, 0.00, 0.00, 59, NULL, NULL),
	(58, 0.00, 0.00, 60, NULL, NULL),
	(59, 0.00, 0.00, 61, NULL, NULL),
	(60, 0.00, 0.00, 62, NULL, NULL),
	(61, 0.00, 0.00, 63, NULL, NULL),
	(62, 0.00, 0.00, 64, NULL, NULL),
	(63, 0.00, 0.00, 65, NULL, NULL),
	(64, 0.00, 0.00, 66, NULL, NULL),
	(65, 0.00, 0.00, 67, NULL, NULL),
	(66, 0.00, 0.00, 68, NULL, NULL),
	(67, 0.00, 0.00, 69, NULL, NULL),
	(68, 0.00, 0.00, 70, NULL, NULL),
	(69, 0.00, 0.00, 71, NULL, NULL),
	(70, 0.00, 0.00, 72, NULL, NULL),
	(71, 0.00, 0.00, 73, NULL, NULL),
	(72, 0.00, 0.00, 74, NULL, NULL),
	(73, 0.00, 0.00, 75, NULL, NULL),
	(74, 0.00, 0.00, 76, NULL, NULL),
	(75, 0.00, 0.00, 77, NULL, NULL),
	(76, 0.00, 0.00, 78, NULL, NULL),
	(77, 0.00, 0.00, 79, NULL, NULL),
	(78, 0.00, 0.00, 80, NULL, NULL),
	(79, 0.00, 0.00, 81, NULL, NULL),
	(80, 0.00, 0.00, 82, NULL, NULL),
	(81, 0.00, 0.00, 83, NULL, NULL),
	(82, 0.00, 0.00, 84, NULL, NULL),
	(83, 0.00, 0.00, 85, NULL, NULL),
	(84, 0.00, 0.00, 86, NULL, NULL),
	(85, 0.00, 0.00, 87, NULL, NULL),
	(86, 0.00, 0.00, 88, NULL, NULL),
	(87, 0.00, 0.00, 89, NULL, NULL),
	(88, 0.00, 0.00, 90, NULL, NULL),
	(89, 0.00, 0.00, 91, NULL, NULL),
	(90, 0.00, 0.00, 92, NULL, NULL),
	(91, 0.00, 0.00, 93, NULL, NULL),
	(92, 0.00, 0.00, 94, NULL, NULL),
	(93, 0.00, 0.00, 95, NULL, NULL),
	(94, 0.00, 0.00, 96, NULL, NULL),
	(95, 0.00, 0.00, 97, NULL, NULL),
	(96, 0.00, 0.00, 98, NULL, NULL),
	(97, 0.00, 0.00, 99, NULL, NULL),
	(98, 0.00, 0.00, 100, NULL, NULL),
	(99, 0.00, 0.00, 101, NULL, NULL),
	(100, 0.00, 0.00, 102, NULL, NULL),
	(101, 0.00, 0.00, 103, NULL, NULL),
	(102, 0.00, 0.00, 104, NULL, NULL),
	(103, 0.00, 0.00, 105, NULL, NULL),
	(104, 0.00, 0.00, 106, NULL, NULL),
	(105, 0.00, 0.00, 107, NULL, NULL),
	(106, 0.00, 0.00, 108, NULL, NULL),
	(107, 0.00, 0.00, 109, NULL, NULL),
	(108, 0.00, 0.00, 110, NULL, NULL),
	(109, 0.00, 0.00, 111, NULL, NULL),
	(110, 0.00, 0.00, 112, NULL, NULL),
	(111, 0.00, 0.00, 113, NULL, NULL),
	(112, 0.00, 0.00, 114, NULL, NULL),
	(113, 0.00, 0.00, 115, NULL, NULL),
	(114, 0.00, 0.00, 116, NULL, NULL),
	(115, 0.00, 0.00, 117, NULL, NULL),
	(116, 0.00, 0.00, 118, NULL, NULL),
	(117, 0.00, 0.00, 119, NULL, NULL),
	(118, 0.00, 0.00, 120, NULL, NULL),
	(119, 0.00, 0.00, 121, NULL, NULL),
	(120, 0.00, 0.00, 122, NULL, NULL),
	(121, 0.00, 0.00, 123, NULL, NULL),
	(122, 0.00, 0.00, 124, NULL, NULL),
	(123, 0.00, 0.00, 125, NULL, NULL),
	(124, 0.00, 0.00, 126, NULL, NULL),
	(125, 0.00, 0.00, 127, NULL, NULL),
	(126, 0.00, 0.00, 128, NULL, NULL),
	(127, 0.00, 0.00, 129, NULL, NULL),
	(128, 0.00, 0.00, 130, NULL, NULL),
	(129, 0.00, 0.00, 131, NULL, NULL),
	(130, 0.00, 0.00, 132, NULL, NULL),
	(131, 0.00, 0.00, 133, NULL, NULL),
	(132, 0.00, 0.00, 134, NULL, NULL),
	(133, 0.00, 0.00, 135, NULL, NULL),
	(134, 0.00, 0.00, 136, NULL, NULL),
	(135, 0.00, 0.00, 137, NULL, NULL),
	(136, 0.00, 0.00, 138, NULL, NULL),
	(137, 0.00, 0.00, 139, NULL, NULL),
	(138, 0.00, 0.00, 140, NULL, NULL),
	(139, 0.00, 0.00, 141, NULL, NULL),
	(140, 0.00, 0.00, 142, NULL, NULL),
	(141, 0.00, 0.00, 143, NULL, NULL),
	(142, 0.00, 0.00, 144, NULL, NULL),
	(143, 0.00, 0.00, 145, NULL, NULL),
	(144, 0.00, 0.00, 146, NULL, NULL),
	(145, 0.00, 0.00, 147, NULL, NULL),
	(146, 0.00, 0.00, 148, NULL, NULL),
	(147, 0.00, 0.00, 149, NULL, NULL),
	(148, 0.00, 0.00, 150, NULL, NULL),
	(149, 0.00, 0.00, 151, NULL, NULL),
	(150, 0.00, 0.00, 152, NULL, NULL),
	(151, 0.00, 0.00, 153, NULL, NULL),
	(152, 0.00, 0.00, 154, NULL, NULL),
	(153, 0.00, 0.00, 155, NULL, NULL),
	(154, 0.00, 0.00, 156, NULL, NULL),
	(155, 0.00, 0.00, 157, NULL, NULL),
	(156, 0.00, 0.00, 158, NULL, NULL),
	(157, 0.00, 0.00, 159, NULL, NULL),
	(158, 0.00, 0.00, 160, NULL, NULL),
	(159, 0.00, 0.00, 161, NULL, NULL),
	(160, 0.00, 0.00, 162, NULL, NULL),
	(161, 0.00, 0.00, 163, NULL, NULL),
	(162, 0.00, 0.00, 164, NULL, NULL),
	(163, 0.00, 0.00, 165, NULL, NULL),
	(164, 0.00, 0.00, 166, NULL, NULL),
	(165, 0.00, 0.00, 167, NULL, NULL),
	(166, 0.00, 0.00, 168, NULL, NULL),
	(167, 0.00, 0.00, 169, NULL, NULL),
	(168, 0.00, 0.00, 170, NULL, NULL),
	(169, 0.00, 0.00, 171, NULL, NULL),
	(170, 0.00, 0.00, 172, NULL, NULL),
	(171, 0.00, 0.00, 173, NULL, NULL),
	(172, 0.00, 0.00, 174, NULL, NULL),
	(173, 0.00, 0.00, 175, NULL, NULL),
	(174, 0.00, 0.00, 176, NULL, NULL),
	(175, 0.00, 0.00, 177, NULL, NULL),
	(176, 0.00, 0.00, 178, NULL, NULL),
	(177, 0.00, 0.00, 179, NULL, NULL),
	(178, 0.00, 0.00, 180, NULL, NULL),
	(179, 0.00, 0.00, 181, NULL, NULL),
	(180, 0.00, 0.00, 182, NULL, NULL),
	(181, 0.00, 0.00, 183, NULL, NULL),
	(182, 0.00, 0.00, 184, NULL, NULL),
	(183, 0.00, 0.00, 185, NULL, NULL),
	(184, 0.00, 0.00, 186, NULL, NULL),
	(185, 0.00, 0.00, 187, NULL, NULL),
	(186, 0.00, 0.00, 188, NULL, NULL),
	(187, 0.00, 0.00, 189, NULL, NULL),
	(188, 0.00, 0.00, 190, NULL, NULL),
	(189, 0.00, 0.00, 191, NULL, NULL),
	(190, 0.00, 0.00, 192, NULL, NULL),
	(191, 0.00, 0.00, 193, NULL, NULL),
	(192, 0.00, 0.00, 194, NULL, NULL),
	(193, 0.00, 0.00, 195, NULL, NULL),
	(194, 0.00, 0.00, 196, NULL, NULL),
	(195, 0.00, 0.00, 197, NULL, NULL),
	(196, 0.00, 0.00, 198, NULL, NULL),
	(197, 0.00, 0.00, 199, NULL, NULL),
	(198, 0.00, 0.00, 200, NULL, NULL),
	(199, 0.00, 0.00, 201, NULL, NULL),
	(200, 0.00, 0.00, 202, NULL, NULL),
	(201, 0.00, 0.00, 203, NULL, NULL),
	(202, 0.00, 0.00, 204, NULL, NULL),
	(203, 0.00, 0.00, 205, NULL, NULL),
	(204, 0.00, 0.00, 206, NULL, NULL),
	(205, 0.00, 0.00, 207, NULL, NULL),
	(206, 0.00, 0.00, 208, NULL, NULL),
	(207, 0.00, 0.00, 209, NULL, NULL),
	(208, 0.00, 0.00, 210, NULL, NULL),
	(209, 0.00, 0.00, 211, NULL, NULL),
	(210, 0.00, 0.00, 212, NULL, NULL),
	(211, 0.00, 0.00, 213, NULL, NULL),
	(212, 0.00, 0.00, 214, NULL, NULL),
	(213, 0.00, 0.00, 215, NULL, NULL),
	(214, 0.00, 0.00, 216, NULL, NULL),
	(215, 0.00, 0.00, 217, NULL, NULL),
	(216, 0.00, 0.00, 218, NULL, NULL),
	(217, 0.00, 0.00, 219, NULL, NULL),
	(218, 0.00, 0.00, 220, NULL, NULL),
	(219, 0.00, 0.00, 221, NULL, NULL),
	(220, 0.00, 0.00, 222, NULL, NULL),
	(221, 0.00, 0.00, 223, NULL, NULL),
	(222, 0.00, 0.00, 224, NULL, NULL),
	(223, 0.00, 0.00, 225, NULL, NULL),
	(224, 0.00, 0.00, 226, NULL, NULL),
	(225, 0.00, 0.00, 227, NULL, NULL),
	(226, 0.00, 0.00, 228, NULL, NULL),
	(227, 0.00, 0.00, 229, NULL, NULL),
	(228, 0.00, 0.00, 230, NULL, NULL),
	(229, 0.00, 0.00, 231, NULL, NULL),
	(230, 0.00, 0.00, 232, NULL, NULL),
	(231, 0.00, 0.00, 233, NULL, NULL),
	(232, 0.00, 0.00, 234, NULL, NULL),
	(233, 0.00, 0.00, 235, NULL, NULL),
	(234, 0.00, 0.00, 236, NULL, NULL),
	(235, 0.00, 0.00, 237, NULL, NULL),
	(236, 0.00, 0.00, 238, NULL, NULL),
	(237, 0.00, 0.00, 239, NULL, NULL),
	(238, 0.00, 0.00, 240, NULL, NULL),
	(239, 0.00, 0.00, 241, NULL, NULL),
	(240, 0.00, 0.00, 242, NULL, NULL),
	(241, 0.00, 0.00, 243, NULL, NULL),
	(242, 0.00, 0.00, 244, NULL, NULL),
	(243, 0.00, 0.00, 245, NULL, NULL),
	(244, 0.00, 0.00, 246, NULL, NULL),
	(245, 0.00, 0.00, 247, NULL, NULL),
	(246, 0.00, 0.00, 248, NULL, NULL),
	(247, 0.00, 0.00, 249, NULL, NULL),
	(248, 0.00, 0.00, 250, NULL, NULL),
	(249, 0.00, 0.00, 251, NULL, NULL),
	(250, 0.00, 0.00, 252, NULL, NULL),
	(251, 0.00, 0.00, 253, NULL, NULL),
	(252, 0.00, 0.00, 254, NULL, NULL),
	(253, 0.00, 0.00, 255, NULL, NULL),
	(254, 0.00, 0.00, 256, NULL, NULL),
	(255, 0.00, 0.00, 257, NULL, NULL),
	(256, 0.00, 0.00, 258, NULL, NULL),
	(257, 0.00, 0.00, 259, NULL, NULL),
	(258, 0.00, 0.00, 260, NULL, NULL),
	(259, 0.00, 0.00, 261, NULL, NULL),
	(260, 0.00, 0.00, 262, NULL, NULL),
	(261, 0.00, 0.00, 263, NULL, NULL),
	(262, 0.00, 0.00, 264, NULL, NULL),
	(263, 0.00, 0.00, 265, NULL, NULL),
	(264, 0.00, 0.00, 266, NULL, NULL),
	(265, 0.00, 0.00, 267, NULL, NULL),
	(266, 0.00, 0.00, 268, NULL, NULL),
	(267, 0.00, 0.00, 269, NULL, NULL),
	(268, 0.00, 0.00, 270, NULL, NULL),
	(269, 0.00, 0.00, 271, NULL, NULL),
	(270, 0.00, 0.00, 272, NULL, NULL),
	(271, 0.00, 0.00, 273, NULL, NULL),
	(272, 0.00, 0.00, 274, NULL, NULL),
	(273, 0.00, 0.00, 275, NULL, NULL),
	(274, 0.00, 0.00, 276, NULL, NULL),
	(275, 0.00, 0.00, 277, NULL, NULL),
	(276, 0.00, 0.00, 278, NULL, NULL),
	(277, 0.00, 0.00, 279, NULL, NULL),
	(278, 0.00, 0.00, 280, NULL, NULL),
	(279, 0.00, 0.00, 281, NULL, NULL),
	(280, 0.00, 0.00, 282, NULL, NULL),
	(281, 0.00, 0.00, 283, NULL, NULL),
	(282, 0.00, 0.00, 284, NULL, NULL),
	(283, 0.00, 0.00, 285, NULL, NULL),
	(284, 0.00, 0.00, 286, NULL, NULL),
	(285, 0.00, 0.00, 287, NULL, NULL),
	(286, 0.00, 0.00, 288, NULL, NULL),
	(287, 0.00, 0.00, 289, NULL, NULL),
	(288, 0.00, 0.00, 290, NULL, NULL),
	(289, 0.00, 0.00, 291, NULL, NULL),
	(290, 0.00, 0.00, 292, NULL, NULL),
	(291, 0.00, 0.00, 293, NULL, NULL),
	(292, 0.00, 0.00, 294, NULL, NULL),
	(293, 0.00, 0.00, 295, NULL, NULL),
	(294, 0.00, 0.00, 296, NULL, NULL),
	(295, 0.00, 0.00, 297, NULL, NULL),
	(296, 0.00, 0.00, 298, NULL, NULL),
	(297, 0.00, 0.00, 299, NULL, NULL),
	(298, 0.00, 0.00, 300, NULL, NULL),
	(299, 0.00, 0.00, 301, NULL, NULL),
	(300, 0.00, 0.00, 302, NULL, NULL),
	(301, 0.00, 0.00, 303, NULL, NULL),
	(302, 0.00, 0.00, 304, NULL, NULL),
	(303, 0.00, 0.00, 305, NULL, NULL),
	(304, 0.00, 0.00, 306, NULL, NULL),
	(305, 0.00, 0.00, 307, NULL, NULL),
	(306, 0.00, 0.00, 308, NULL, NULL),
	(307, 0.00, 0.00, 309, NULL, NULL),
	(308, 0.00, 0.00, 310, NULL, NULL),
	(309, 0.00, 0.00, 311, NULL, NULL),
	(310, 0.00, 0.00, 312, NULL, NULL),
	(311, 0.00, 0.00, 313, NULL, NULL),
	(312, 0.00, 0.00, 314, NULL, NULL),
	(313, 0.00, 0.00, 315, NULL, NULL),
	(314, 0.00, 0.00, 316, NULL, NULL),
	(315, 0.00, 0.00, 317, NULL, NULL),
	(316, 0.00, 0.00, 318, NULL, NULL),
	(317, 0.00, 0.00, 319, NULL, NULL),
	(318, 0.00, 0.00, 320, NULL, NULL),
	(319, 0.00, 0.00, 321, NULL, NULL),
	(320, 0.00, 0.00, 322, NULL, NULL),
	(321, 0.00, 0.00, 323, NULL, NULL),
	(322, 0.00, 0.00, 324, NULL, NULL),
	(323, 0.00, 0.00, 325, NULL, NULL),
	(324, 0.00, 0.00, 326, NULL, NULL),
	(325, 0.00, 0.00, 327, NULL, NULL),
	(326, 0.00, 0.00, 328, NULL, NULL),
	(327, 0.00, 0.00, 329, NULL, NULL),
	(328, 0.00, 0.00, 330, NULL, NULL),
	(329, 0.00, 0.00, 331, NULL, NULL),
	(330, 0.00, 0.00, 332, NULL, NULL),
	(331, 0.00, 0.00, 333, NULL, NULL),
	(332, 0.00, 0.00, 334, NULL, NULL),
	(333, 0.00, 0.00, 335, NULL, NULL),
	(334, 0.00, 0.00, 336, NULL, NULL),
	(335, 0.00, 0.00, 337, NULL, NULL),
	(336, 0.00, 0.00, 338, NULL, NULL),
	(337, 0.00, 0.00, 339, NULL, NULL),
	(338, 0.00, 0.00, 340, NULL, NULL),
	(339, 0.00, 0.00, 341, NULL, NULL),
	(340, 0.00, 0.00, 342, NULL, NULL),
	(341, 0.00, 0.00, 343, NULL, NULL),
	(342, 0.00, 0.00, 344, NULL, NULL),
	(343, 0.00, 0.00, 345, NULL, NULL),
	(344, 0.00, 0.00, 346, NULL, NULL),
	(345, 0.00, 0.00, 347, NULL, NULL),
	(346, 0.00, 0.00, 348, NULL, NULL),
	(347, 0.00, 0.00, 349, NULL, NULL),
	(348, 0.00, 0.00, 350, NULL, NULL),
	(349, 0.00, 0.00, 351, NULL, NULL),
	(350, 0.00, 0.00, 352, NULL, NULL),
	(351, 0.00, 0.00, 353, NULL, NULL),
	(352, 0.00, 0.00, 354, NULL, NULL),
	(353, 0.00, 0.00, 355, NULL, NULL),
	(354, 0.00, 0.00, 356, NULL, NULL),
	(355, 0.00, 0.00, 357, NULL, NULL),
	(356, 0.00, 0.00, 358, NULL, NULL),
	(357, 0.00, 0.00, 359, NULL, NULL),
	(358, 0.00, 0.00, 360, NULL, NULL),
	(359, 0.00, 0.00, 361, NULL, NULL),
	(360, 0.00, 0.00, 362, NULL, NULL),
	(361, 0.00, 0.00, 363, NULL, NULL),
	(362, 0.00, 0.00, 364, NULL, NULL),
	(363, 0.00, 0.00, 365, NULL, NULL),
	(364, 0.00, 0.00, 366, NULL, NULL),
	(365, 0.00, 0.00, 367, NULL, NULL),
	(366, 0.00, 0.00, 368, NULL, NULL),
	(367, 0.00, 0.00, 369, NULL, NULL),
	(368, 0.00, 0.00, 370, NULL, NULL),
	(369, 0.00, 0.00, 371, NULL, NULL),
	(370, 0.00, 0.00, 372, NULL, NULL),
	(371, 0.00, 0.00, 373, NULL, NULL),
	(372, 0.00, 0.00, 374, NULL, NULL),
	(373, 0.00, 0.00, 375, NULL, NULL),
	(374, 0.00, 0.00, 376, NULL, NULL),
	(375, 0.00, 0.00, 377, NULL, NULL),
	(376, 0.00, 0.00, 378, NULL, NULL),
	(377, 0.00, 0.00, 379, NULL, NULL),
	(378, 0.00, 0.00, 380, NULL, NULL),
	(379, 0.00, 0.00, 381, NULL, NULL),
	(380, 0.00, 0.00, 382, NULL, NULL),
	(381, 0.00, 0.00, 383, NULL, NULL),
	(382, 0.00, 0.00, 384, NULL, NULL),
	(383, 0.00, 0.00, 385, NULL, NULL),
	(384, 0.00, 0.00, 386, NULL, NULL),
	(385, 0.00, 0.00, 387, NULL, NULL),
	(386, 0.00, 0.00, 388, NULL, NULL),
	(387, 0.00, 0.00, 389, NULL, NULL),
	(388, 0.00, 0.00, 390, NULL, NULL),
	(389, 0.00, 0.00, 391, NULL, NULL),
	(390, 0.00, 0.00, 392, NULL, NULL),
	(391, 0.00, 0.00, 393, NULL, NULL),
	(392, 0.00, 0.00, 394, NULL, NULL),
	(393, 0.00, 0.00, 1, NULL, NULL);");
    }
}