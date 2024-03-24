-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `cp_admin`
--

CREATE TABLE `cp_admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_admin`
--

INSERT INTO `cp_admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cp_case`
--

CREATE TABLE `cp_case` (
  `ID` int(11) NOT NULL,
  `CaseName` varchar(500) NOT NULL,
  `CaseDate` varchar(500) NOT NULL,
  `CaseOn` varchar(500) NOT NULL,
  `CaseBy` varchar(500) NOT NULL,
  `CaseLocation` varchar(500) NOT NULL,
  `CaseType` varchar(800) NOT NULL,
  `CaseDescription` varchar(1500) NOT NULL,
  `Status` varchar(500) NOT NULL,
  `Cust_ID` varchar(100) NOT NULL,
  `Favor_Of` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_case`
--

INSERT INTO `cp_case` (`ID`, `CaseName`, `CaseDate`, `CaseOn`, `CaseBy`, `CaseLocation`, `CaseType`, `CaseDescription`, `Status`, `Cust_ID`, `Favor_Of`) VALUES
(66, 'Defaming', '2020-02-02', 'Mr Roshan', 'Mrs Raut', 'Mumbai', 'Civil', 'Mr Roshan an actor was accused by Ms Raut a well-known actress claiming that he owes her 50 lakh for defaming her and using her name in a show and falsely accusing her of various things. Mr Roshan denied all such claims and declared Ms Raut As mentally unstable and incapable of getting involved into any such court cases. ', 'Finished', '14', 'Mrs Raut'),
(61, 'MahaRera Act', '2020-01-17', 'Jiten Builders', 'Aadil Khan', 'Mumbai', 'Civil', 'Aadil Khan had booked a 2bhk flat in 2014 from Jiten builders in an upcoming project. He had paid 50 percent amount to the builder as down payment and has been paying monthly instalments since then. The project was supposed to complete in 2018 according to The MahaRera Act. But the builder has not completed the project and has been dillydallying to give rent money according to the agreement made between them. Aadil Khan has filed a case against the builder for non-completion of project and non-possession of his flat or rental payment.', 'Pending', '13', ''),
(62, 'Extra Marital Affair', '2020-03-06', 'Hitesh', 'Maya', 'Mumbai', 'Family Law', 'Maya and Hitesh had been married for 15 years. They have a 12 year old daughter. Maya has been suspecting her husband Hitesh of having an extra marital affair. Due to this they are often having fights. One day Maya catches Hitesh red handed with his mistress. She has now filed for divorce, alimony and child maintenance.', 'Pending', '13', ''),
(63, 'Jayantilal Gada Property Case', '2019-12-01', 'Hiten', 'Ramesh & Parab', 'Mumbai', 'Family Law', 'Jayantilal Gada has three sons. He lived with his youngest son Hiten. He had written more than half of his property to Hiten in his will. His other two sons Ramesh and Parab felt cheated. They wanted the property to be divided equally between them. So they challenged the will and Hiten in court.', 'Pending', '13', ''),
(64, 'Car Repair', '2020-01-26', 'Mr Khan', 'Mr Suresh', 'Mumbai', 'Civil', 'Mr Khan, a vintage car owner gives away his car for certain repairing work on 14th April 2003 to Mr Suresh who owns a garage. Upon receiving the car back Mr Khan was unsatisfied with the repairing work done by Mr Suresh on his car and disagrees to pay the invoice amount. After various arguments, Mr Suresh files a case against the defendant claiming that he is due to pay the amount.', 'Pending', '13', ''),
(65, 'Poisoning', '2020-03-01', 'Aarti', 'Hritesh', 'Mumbai', 'Criminal', 'Aarti and Preeti daughters of Satish Iyer unknowingly fell in love with the same man, Hritesh. Upon Asking Hritesh it was stated clearly by him that he was in love with Preeti. After Hritesh and Preeti got married, Preeti was sent to her maternal home to complete the rituals as per Hindu norms. Within 12 hours of her arrival she fell unconscious and was declared dead. With clear intentions of jealousy, Hritesh files a case against Aarti', 'Pending', '14', ''),
(60, 'Divorce Case', '2019-11-09', 'Aslam', 'Anisa', 'Mumbai', 'Family Law', 'Aslam and Anisa are married since 10 years but Aslam had made her life hell. He used to torture her physically and mentally. But one day Aslam gave triple divorce to Anisa because she had burnt one chapati which she made for dinner. Anisa went to court against Aslam because triple divorce has been abolished. Aslam has been taken into custody.', 'Pending', '13', ''),
(57, 'Ryan Smoke Ball Influenza Case', '2020-04-09', 'Ryan Smoke Balls Company', 'Laxmis Husband', 'Mumbai', 'Civil', 'A smoke ball company named Ryan Smoke Balls made a product called the Smoke Ball which claimed to be a cure for influenza and a number of other diseases. The company published advertisements that it would pay 100 pounds to anyone who got sick with influenza after using this product according to the instructions set out in the advertisement. Laxmi, believing in the accuracy of this product purchased a packet and used it thrice every day for 2 months. After that she had an attack of influenza. Thereupon, her husband wrote a letter for her to the defendants, stating what had happened and asking for 100 pounds as promised in the advertisement. They refused and this action was bought into court.', 'Pending', '12', ''),
(58, 'Ashok Todi Murder Case', '2020-02-08', 'Ashok Todi', 'Priyanka', 'Kolkata', 'Criminal', 'Rizwan Rehman, was found dead near railway tracks on September 21, 2007, weeks after he got married to Priyanka, daughter of Ashok Todi. The couple had not informed their respective families about their marriage, reason being fierce opposition from her family. Her father was a very influential man and he persuaded the cops and asked them to separate the couple. Rizwan was forced to send his wife Priyanka to her fathers home and not allowed to talk to him. After a few days his body was recovered from railway track in Kolkata.', 'Finished', '13', 'Priyanka'),
(59, 'Bank Robbery', '2019-12-06', 'Security Guards', 'Police', 'Mumbai', 'Criminal', 'A security agency van carrying 18 crores of Bank money which had to be deposited in the ATMs of different branches had been robbed in broad daylight. The suspects were the driver of the van and the security guard. A massive hunt began for the two employees and the van. But the van was nowhere to be seen, neither the CCTV cameras, nor the Toll plazas. Finally it was found in the wooded areas and both the security guards were arrested.  ', 'Finished', '13', 'Police'),
(55, 'Raju House Case', '2020-04-22', 'Ramesh', 'Raju', 'Mumbai', 'Civil', 'Ramesh was a tenant in Raju Bhais house since 10 years. He was a good man or Raju bhai thought so. Now Raju bhai wanted him to vacate his house because he was in need of money and wanted to sell the flat. But Ramesh would not let him do so. He was adamant and said that he would not vacate the flat. He said that since he was living in this flat since so many years he will be the rightful owner. So Raju bhai took him to court and filed a case against him.', 'Pending', '12', ''),
(54, 'Murder and Abduction Palande Case', '2020-04-02', 'Palande', 'Mumbai Crime Branch', 'Mumbai', 'Criminal', 'Palande along with his model wife Simran and two other friends murdered Delhi based businessman Arun Kumar, 67 with the motive of usurping his properties.  When nabbed by the Mumbai Crime Branch it was then revealed that they were also involved in the abduction of Delhi based aspiring producer Karan Kumar Kakkad, 28. ', 'Pending', '12', ''),
(53, 'Nanda &amp; Rishi', '2020-04-08', 'Rishi', 'Police', 'Mumbai', 'Criminal', 'Nanda had been married to Rishi in August 2010. This was her third marriage after two failed marriages. They were happy together but was this happiness only to show the world. This fairy tale wedding soon ended with Nanda being found dead in a hotel suite under highly mysterious circumstances on January 17, 2015. Police claim that Nanda was poisoned and registered a murder case. Her husband was a suspect in this case.', 'Pending', '12', ''),
(52, 'Raj &amp; Ram', '2020-04-10', 'Ram', 'Raj', 'Mumbai', 'Civil', 'On the order of the collector of a town, Raj built certain shops in the bazaar at his own expense. Ram took the shops on rent in the market. Ram promised Raj to pay commission on the articles sold in the market in consideration of having spent money in consideration. Later, Ram refused to pay. Raj sued Ram to recover the money as promised.', 'Finished', '12', 'Ram'),
(51, 'Anuj &amp; Roshni', '2020-04-01', 'Anuj', 'Roshni', 'Mumbai', 'Family Law', 'There were quarrels and disagreements between husband, Anuj and her wife, Roshni. To get rid of her, Anuj promised to pay 50,000 rupees as her monthly maintenance and their duplex flat at Dadar. The agreement was written and registered. Later, Anuj denied paying the amount of maintenance. His wife sued him for recovery of money. ', 'Finished', '12', 'Roshni'),
(50, 'Affair', '2020-04-01', 'Rajesh Parab', 'Wife', 'Mumbai', 'Criminal', 'Rajesh Parab works in the army.  He is always at the border guarding our nation. He is newly married but could not come home often to meet his newly wedded wife because of his duties. One day he gets leave from his duty and is very happy to meet his wife. But he does not tell her about it. He wants to surprise her. He buys gifts for her and comes home to surprise her but gets the shock of his life. His beloved wife was in the arms of some stranger. He was very angry. Here he was wanting to meet her and she was not bothered about him. She was having an affair. So mad was he that he found out details of her lover and went in one day and shot him with his service revolver. He then surrendered himself and his revolver to the local police station.', 'Finished', '12', 'Wife'),
(67, 'Property Case', '2020-04-06', 'Sagarika', 'Mohan', 'Mumbai', 'Family Law', 'Mohan And Sagarika mutually agreed to end their marriage after 4 years in 2013. Both of them were employed at high paying jobs and bought properties and assets in shares which were partially paid by both of them while they were together. Sagarika claims that most of the property should be named to her whilst Mohan opposes the same.', 'Finished', '14', 'Mohan'),
(68, 'Tik Tok star Murder', '2020-04-09', 'Mayur', 'Manjaris Mother', 'Kandivali', 'Criminal', 'Manjari, a popular Tik Tok star who lived in Kandivali with her mother, step-father and step brother suddenly goes missing one morning. Next day police finds her decomposed body wrapped in a gunny bag in a car. Investigations reveal that she had shot a suicide video of hers in the morning and had then gone to a neighbours house looking out for her. But she met her neighbours son whom she always thought of as a brother. But he liked her and she rejected him. The neighbours son took a revenge on her and murdered her.', 'Pending', '14', ''),
(69, 'Legal Heirs', '2020-02-09', 'Mrs Roshans Eldest Son', 'Mrs Roshans Three other Sons', 'Mumbai', 'Family Law', 'October 28, 2016, Mrs Roshan left no designated will in any particular individuals name. After a while, her eldest son claimed all the property in his name on the basis that he was the eldest. The rest of the three siblings opposed his claim and filed a case against him saying all of them were legal heirs. ', 'Pending', '14', '');

-- --------------------------------------------------------

--
-- Table structure for table `cp_crimetype`
--

CREATE TABLE `cp_crimetype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_crimetype`
--

INSERT INTO `cp_crimetype` (`ID`, `Name`, `Description`) VALUES
(1, 'Criminal', 'Criminal'),
(2, 'Civil', 'Some Fraud Sections goes here...'),
(6, 'Family Law', 'Family Law');

-- --------------------------------------------------------

--
-- Table structure for table `cp_customerdetails`
--

CREATE TABLE `cp_customerdetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Mobile` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `Status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_customerdetails`
--

INSERT INTO `cp_customerdetails` (`ID`, `Name`, `Email`, `Mobile`, `Password`, `Address`, `Gender`, `Status`) VALUES
(2, 'asd', 'asd@gmail.com', '1234567890', 'asd', 'asd', 'Male', 'On'),
(12, 'Shehzaad A Palitana', 'shehzyasif@gmail.com', '9820613086', 'shehzaad123', 'Jogeshwari West', 'Male', 'On'),
(13, 'Keshav Sharma ', 'keshavs9661@gmail.com', '8286234235', 'keshavs', 'Bhayander East', 'Male', 'On'),
(14, 'Hardik Vakharia', 'hardikvakharia14@gmail.com', '8879598666', 'hardikv', 'Kandivali West', 'Male', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `cp_word`
--

CREATE TABLE `cp_word` (
  `ID` int(11) NOT NULL,
  `Word` varchar(100) NOT NULL,
  `Sentiment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_word`
--

INSERT INTO `cp_word` (`ID`, `Word`, `Sentiment`) VALUES
(88, ' murder', 'Negative'),
(89, 'quarrels', 'Negative'),
(90, 'disagreement', 'Negative'),
(91, 'rid', 'Negative'),
(92, 'promise', 'Positive'),
(93, 'maintenance', 'Positive'),
(94, 'agreement', 'Positive'),
(95, 'deny', 'Negative'),
(96, 'sue', 'Negative'),
(97, 'cure', 'Positive'),
(98, 'sick', 'Negative'),
(99, 'accuracy', 'Positive'),
(100, 'attack', 'Negative'),
(101, 'refuse', 'Negative'),
(102, 'consider', 'Positive'),
(103, 'recover', 'Positive'),
(105, 'fail', 'Negative'),
(106, 'happy', 'Positive'),
(107, 'fairytale', 'Positive'),
(108, 'dead', 'Negative'),
(109, 'mysterious', 'Negative'),
(110, 'claim', 'Positive'),
(111, 'poison', 'Negative'),
(112, 'suspect', 'Negative'),
(113, 'motive', 'Negative'),
(114, 'usurp', 'Negative'),
(115, 'abduct', 'Negative'),
(116, 'oppose', 'Negative'),
(117, 'force', 'Negative'),
(118, 'suicide', 'Negative'),
(119, 'missing', 'Negative'),
(120, 'decompose', 'Negative'),
(121, 'reveal', 'Positive'),
(122, 'revenge', 'Negative'),
(123, 'rob', 'Negative'),
(124, 'arrest', 'Negative'),
(125, 'torture', 'Negative'),
(126, 'divorce', 'Negative'),
(127, 'abolish', 'Positive'),
(128, 'custody', 'Negative'),
(129, 'dillydally', 'Negative'),
(130, 'against', 'Negative'),
(131, 'affair', 'Negative'),
(132, 'fight', 'Negative'),
(133, 'red handed', 'Negative'),
(134, 'good', 'Positive'),
(135, 'bad', 'Negative'),
(136, 'rightful', 'Positive'),
(137, 'cheat', 'Negative'),
(138, 'opposition', 'Negative'),
(139, 'influential', 'Positive'),
(140, 'reveal', 'Positive'),
(141, 'done', 'Positive'),
(142, 'unsatisfied', 'Negative'),
(143, 'unknowingly', 'Negative'),
(144, 'clear', 'Positive'),
(145, 'unconscious', 'Negative'),
(146, 'unstable', 'Negative'),
(147, 'angry', 'Negative'),
(148, 'mad', 'Negative'),
(149, 'end', 'Negative'),
(150, 'seperate', 'Negative'),
(151, 'popular', 'Positive'),
(152, 'wrap', 'Negative'),
(153, 'reject', 'Negative'),
(154, 'hunt', 'Positive'),
(155, 'hell', 'Negative'),
(156, 'book', 'Positive'),
(157, 'complete', 'Positive'),
(158, 'file', 'Negative'),
(159, 'mistress', 'Negative'),
(160, 'alimony', 'Positive'),
(161, 'tenant', 'Positive'),
(162, 'vacate', 'Positive'),
(163, 'adamant', 'Negative'),
(164, 'divide', 'Negative'),
(165, 'equal', 'Positive'),
(166, 'challenge', 'Negative'),
(167, 'receive', 'Positive'),
(168, 'disagree', 'Negative'),
(169, 'agree', 'Positive'),
(170, 'argue', 'Negative'),
(171, 'legal', 'Positive'),
(172, 'illegal', 'Negative'),
(173, 'guilty', 'Negative'),
(174, 'jealous', 'Negative'),
(175, 'accuse', 'Negative'),
(176, 'defame', 'Negative'),
(177, 'mental', 'Negative'),
(178, 'incapable', 'Negative'),
(179, 'mutual', 'Positive'),
(180, 'property', 'Positive'),
(181, 'asset', 'Positive'),
(182, 'disease', 'Negative'),
(183, 'fierce', 'Negative'),
(184, 'body', 'Negative'),
(185, 'case', 'Negative'),
(186, 'false', 'Negative'),
(187, 'persuade', 'Negative'),
(188, 'satisfied', 'Positive'),
(189, 'satisfy', 'Positive'),
(190, 'knowingly', 'Negative');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cp_admin`
--
ALTER TABLE `cp_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cp_case`
--
ALTER TABLE `cp_case`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cp_crimetype`
--
ALTER TABLE `cp_crimetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cp_customerdetails`
--
ALTER TABLE `cp_customerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cp_word`
--
ALTER TABLE `cp_word`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cp_admin`
--
ALTER TABLE `cp_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cp_case`
--
ALTER TABLE `cp_case`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `cp_crimetype`
--
ALTER TABLE `cp_crimetype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cp_customerdetails`
--
ALTER TABLE `cp_customerdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cp_word`
--
ALTER TABLE `cp_word`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
