/*
There should be files "michelin_data.csv" in C:/team13 drive.
Implement SQL code: SOURCE C:/team13_gh.sql
*/

/*Table for restaurant location and telephone number*/
DROP TABLE IF EXISTS locatnteles;
CREATE TABLE locatnteles (
    resid INT NOT NULL,
    reslocat_en VARCHAR(100),
    restelenum VARCHAR(20),
    PRIMARY KEY(resid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO locatnteles
(resid, reslocat_en, restelenum)
VALUES
(1, "M Floor Horim Art Center 317 Dosan-daero Gangnam-gu", "02-545-9845"),
(2, "23F Shilla Hotel 249 Dongho-ro Jung-gu", "02-2230-3367"),
(3, "4F 37 Apgujeong-ro 80-gil Gangnam-gu", "02-542-6268"),
(4, "45 Itaewon-ro 55ga-gil Yongsan-gu", "02-793-5995"),
(5, "2F 19 Dosan-daero 67-gil Gangnam-gu", "02-515-7306"),
(6, "13 Hakdong-ro 17-gil Gangnam-gu", "02-511-2555"),
(7, "5F 24 Eonju-ro 164-gil Gangnam-gu", "02-6925-5522"),
(8, "11 Seolleung-ro 158-gil Gangnam-gu", "02-517-4654"),
(9, "6F Boon the Shop 21 Apgujeong-ro 60-gil Gangnam-gu", "02-2056-1291"),
(10, "26F L'Escape Hotel 67 Toegye-ro Jung-gu", "02-317-4003"),
(11, "16 Dosan-daero 72-gil Gangnam-gu", "02-511-1303"),
(12, "2F 17 Nonhyeon-ro 151-gil Gangnam-gu", "010-7286-9914"),
(13, "4F 41 Hakdong-ro 97-gil Gangnam-gu", "02-542-3010"),
(14, "69 Bukchon-ro Jongno-gu", "02-332-5525"),
(15, "2F 30 Dosan-daero 67-gil Gangnam-gu", "02-546-9621"),
(16, "5F Arario Space 83 Yulgok-ro Jongno-gu", "02-515-8088"),
(17, "2F 12-12 Hakdong-ro 55-gil Gangnam-gu", "010-2948-4171"),
(18, "2F 420 Dosan-daero Gangnam-gu", "02-549-3800"),
(19, "81F Lotte World Tower 300 Olympic-ro Songpa-gu", "02-1811-1870"),
(20, "B1F 46 Banpo-daero 39-gil Seocho-gu", "02-3477-9386"),
(21, "81F Lotteworld Tower 300 Olympic-ro Songpa-gu", "02-3213-1231"),
(22, "33 Dogok-ro 23-gil Gangnam-gu", "070-4231-1022"),
(23, "12 Banpo-daero 4-gil Seocho-gu", "010-9081-3837"),
(24, "4F 49 Hyoja-ro Jongno-gu", "02-6952-0024"),
(25, "11F Four Seasons Hotel 97 Saemunan-ro Jongno-gu", "02-6388-5500"),
(26, "6 Samseong-ro 140-gil Gangnam-gu", "02-542-6921"),
(27, "3F 30 Toegye-ro 6ga-gil Jung-gu", "02-532-0876"),
(28, "3F The Plaza Hotel 119 Sogong-ro Jung-gu", "02-518-9393"),
(29, "2F 11 Sapyung-daero 14-gil Seocho-gu", "02-3478-0717"),
(30, "35F Lotte Hotel 30 Eulji-ro Jung-gu", "02-317-7181"),
(31, "4F Arario Space 83 Yulgok-ro Jongno-gu", "02-747-8104"),
(32, "3-6 Insadong 16-gil Jongno-gu", "02-732-0276"),
(33, "9 Mapo-daero 16-gil Mapo-gu", "02-313-2952"),
(34, "20 Dohwa 2-gil Mapo-gu", "050-71306-6724"),
(35, "3 Hoenamu-ro Yongsan-gu", "010-9965-5112"),
(36, "165-1 Seongmisan-ro Mapo-gu", "070-8835-3433"),
(37, "75-2 Cheonggyecheon-ro Jongno-gu", "070-4213-5678"),
(38, "11-3 Insadong 10-gil Jongno-gu", "02-733-9240"),
(39, "17 Seolleung-ro 131-gil Gangnam-gu", "010-8479-1107"),
(40, "53 Sejong-daero 21-gil Jung-gu", "02-738-5688"),
(41, "39 Seongji-gil Mapo-gu", "02-2654-2645"),
(42, "238 Itaewon-ro Yongsan-gu", "010-7601-4041"),
(43, "7 Duteopbawi-ro Yongsan-gu", "02-797-8656"),
(44, "149 Dasan-ro Jung-gu", "010-4484-8750"),
(45, "24 Eulji-ro 3-gil Jung-gu", "02-777-3131"),
(46, "5 Sajik-ro Jongno-gu", "02-735-4259"),
(47, "312 Tojeong-ro Mapo-gu", "02-716-6661"),
(48, "338 Apgujeong-ro Gangnam-gu", "02-544-3710"),
(49, "134-7 Seosomun-ro Jung-gu", "02-753-4755"),
(50, "29 Myeongdong 10-gil Jung-gu", "02-776-5348"),
(51, "31-2 Seocho-daero 58-gil Seocho-gu", "02-522-0373"),
(52, "29 Gangnam-daero 160-gil Gangnam-gu", "070-4233-5466"),
(53, "#116-2 le Meilleur Jongno town 19 Jong-ro Jongno-gu", "02-732-1954"),
(54, "2407 Nambusunhwan-ro Seocho-gu", "02-523-2860"),
(55, "5-6 Banpo-daero 8-gil Seocho-gu", "02-525-2282"),
(56, "1-4 Yangjae-daero 71-gil Songpa-gu", "02-415-5527"),
(57, "200-12 Jong-ro Jongno-gu", "02-2267-1831"),
(58, "#110 214 Apgujeong-ro Gangnam-gu", "02-514-2608"),
(59, "101-1 Samcheong-ro Jongno-gu", "02-735-2965"),
(60, "34 Daesagwan-ro Yongsan-gu", "02-792-2155"),
(61, "30 Dosan-daero 53-gil Gangnam-gu", "02-545-5130"),
(62, "7 Bangbae-jungangno 21-gil Seocho-gu", "02-596-4882"),
(63, "10 Donggwang-ro 15-gil Seocho-gu", "02-3482-3738"),
(64, "3F 238 Itaewon-ro Yongsan-gu", "02-796-7377"),
(65, "47 Tojeong-ro 37-gil Mapo-gu", "02-703-0019"),
(66, "14 Dongmak-ro 6-gil Mapo-gu", "02-322-3539"),
(67, "108 Mareunnae-ro Jung-gu", "02-2267-9500"),
(68, "44-10 Yanghwa-ro 7-gil Mapo-gu", "010-5571-9915"),
(69, "41-2 Jahamun-ro Jongno-gu", "02-777-4749"),
(70, "62-29 Changgyeonggung-ro Jung-gu", "02-2265-0151"),
(71, "139-1 Seosomun-ro Jung-gu", "02-755-0659"),
(72, "6 Eulji-ro Jung-gu", "02-772-9994"),
(73, "38-13 Ujeongguk-ro Jongno-gu", "02-733-6526"),
(74, "35 Daesagwan-ro Yongsan-gu", "02-794-2648"),
(75, "63 Gangnam-daero 37-gil Seocho-gu", "02-3473-7972"),
(76, "12 Baekseokdong-gil Jongno-gu", "02-379-2648"),
(77, "22-8 Yeonsei-ro 5da-gil Seodaemun-gu", "070-4179-3819"),
(78, "10 Gukhoe-daero 76-gil Yeongdeungpo-gu", "02-2683-2615"),
(79, "305-3 Hakdong-ro Gangnam-gu", "02-515-3469"),
(80, "123 Jandari-ro Mapo-gu", "070-5035-8878"),
(81, "11 Toegye-ro 31-gil Jung-gu", "02-2279-0803"),
(82, "161-8 Seongmisan-ro Mapo-gu", "070-4407-5130"),
(83, "136 Wangsimni-ro Seongdong-gu", "02-6052-7595"),
(84, "30 Samseong-ro 81-gil Gangnam-gu", "02-508-0476"),
(85, "26 Seoae-ro Jung-gu", "02-2266-2611"),
(86, "12 Myeongdong 9-gil Jung-gu", "02-776-5656"),
(87, "1-5 Sajik-ro 12-gil Jongno-gu", "02-735-2608"),
(88, "2F 21 Yanghwa-ro 1-gil Mapo-gu", "02-322-4822"),
(89, "53 Nonhyeon-ro 149-gil Gangnam-gu", "02-515-3622"),
(90, "78 Bukchon-ro 5-gil Jongno-gu", "02-739-6334");

/*Table for restaurant food type*/
DROP TABLE IF EXISTS typetbl;
CREATE TABLE typetbl (
    res_id INT NOT NULL AUTO_INCREMENT,
    type_en VARCHAR(45) NOT NULL,
    type_kr VARCHAR(45) NOT NULL,
    PRIMARY KEY(res_id)
) CHARSET=utf8mb4;
LOAD DATA LOCAL INFILE 'C:\\team13\\michelin_data.csv'
REPLACE INTO TABLE typetbl
COLUMNS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(@csv_col1, @csv_col2, @csv_col3, @csv_col4, @csv_col5, @csv_col6)
SET type_en = @csv_col1,
    type_kr = @csv_col2;

/*Table for restaurant michelin distinction*/
DROP TABLE IF EXISTS distinctions;
CREATE TABLE distinctions (
    resid INT NOT NULL AUTO_INCREMENT,
    resdist_en VARCHAR(20),
    resdist_kr VARCHAR(20),
    PRIMARY KEY(resid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
LOAD DATA LOCAL INFILE 'C:\\team13\\michelin_data.csv'
REPLACE INTO TABLE distinctions
COLUMNS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(@csv_col1, @csv_col2, @csv_col3, @csv_col4, @csv_col5, @csv_col6)
SET resdist_en = @csv_col3,
    resdist_kr = @csv_col4;

/*Table for michelin guide's opinion*/
DROP TABLE IF EXISTS opinions;
CREATE TABLE opinions(
    resid INT NOT NULL AUTO_INCREMENT,
    resopi_en LONGTEXT,
    resopi_kr LONGTEXT,
    PRIMARY KEY(resid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
LOAD DATA LOCAL INFILE 'C:\\team13\\michelin_data.csv'
REPLACE INTO TABLE opinions
COLUMNS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(@csv_col1, @csv_col2, @csv_col3, @csv_col4, @csv_col5, @csv_col6)
SET resopi_en = @csv_col5,
    resopi_kr = @csv_col6;

/*Table for minumun and maximum prices of restaurant food*/
DROP TABLE IF EXISTS minmaxprices;
CREATE TABLE minmaxprices (
    resid INT NOT NULL,
    resmin INT(15),
    resmax INT(15),
    PRIMARY KEY(resid)
);
INSERT INTO minmaxprices
(resid, resmin, resmax)
VALUES
(1, 120000, 240000),
(2, 109000, 280000),
(3, 105000, 240000),
(4, 140000, 270000),
(5, 120000, 220000),
(6, 77000, 200000),
(7, 100000, 220000),
(8, 78000, 230000),
(9, 200000, 380000),
(10, 110000, 245000),
(11, 180000, 250000),
(12, 180000, 230000),
(13, 120000, 250000),
(14, 70000, 150000),
(15, 80000, 190000),
(16, 100000, 205000),
(17, 70000, 160000),
(18, 65000, 150000),
(19, 77000, 190000),
(20, 98000, 265000),
(21, 73000, 248000),
(22, 75000, 180000),
(23, 65000, 190000),
(24, 110000, 176000),
(25, 60000, 220000),
(26, 60000, 145000),
(27, 100000, 180000),
(28, 90000, 200000),
(29, 60000, 120000),
(30, 90000, 340000),
(31, 80000, 150000),
(32, 17000, 37000),
(33, 8000, 65000),
(34, 17000, 19000),
(35, 25000, 50000),
(36, 45000, 45000),
(37, 6000, 12000),
(38, 11000, 27000),
(39, 10000, 48000),
(40, 8500, 45000),
(41, 7000, 11000),
(42, 29000, 42000),
(43, 6000, 7000),
(44, 12000, 25000),
(45, 12000, 85000),
(46, 12000, 25000),
(47, 15000, 58000),
(48, 10000, 60000),
(49, 7500, 66000),
(50, 9000, 10000),
(51, 8500, 43000),
(52, 9000, 28000),
(53, 9000, 37000),
(54, 10000, 43000),
(55, 8000, 45000),
(56, 14000, 55000),
(57, 7000, 28000),
(58, 8000, 120000),
(59, 9000, 20000),
(60, 8000, 20000),
(61, 12500, 60000),
(62, 14000, 25000),
(63, 9000, 35000),
(64, 24000, 46000),
(65, 16000, 45000),
(66, 9000, 10000),
(67, 11000, 20000),
(68, 9000, 14000),
(69, 12000, 40000),
(70, 12000, 59000),
(71, 8500, 14000),
(72, 8000, 70000),
(73, 10000, 33000),
(74, 12000, 59000),
(75, 9000, 39000),
(76, 15000, 49000),
(77, 7000, 17000),
(78, 11000, 76000),
(79, 12000, 80000),
(80, 20000, 45000),
(81, 18000, 35000),
(82, 12000, 32000),
(83, 39000, 45000),
(84, 8000, 42000),
(85, 12000, 28000),
(86, 13000, 50000),
(87, 25000, 30000),
(88, 8000, 50000),
(89, 8000, 14000),
(90, 9000, 53000);