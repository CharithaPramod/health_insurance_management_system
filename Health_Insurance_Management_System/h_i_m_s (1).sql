-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 07:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h_i_m_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `inq_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pswrd` varchar(30) NOT NULL,
  `plan_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_plan`
--

CREATE TABLE `insurance_plan` (
  `ins_id` int(4) NOT NULL,
  `ins_name` varchar(30) NOT NULL,
  `ins_value` int(5) DEFAULT NULL,
  `min_time` int(2) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `ins_type` varchar(30) DEFAULT NULL,
  `max_time` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_plan`
--

INSERT INTO `insurance_plan` (`ins_id`, `ins_name`, `ins_value`, `min_time`, `description`, `ins_type`, `max_time`) VALUES
(1, 'Annual Medical Plan', 200000, 1, 'Covering a range of health insurance needs at a highly affordable price, you can choose your best suited Annual Medical Plan from 5 packages based on your financial investment. It is an annually renewable health insurance policy that comes with a highly advantageous ‘No Claim Bonus’ that increases the basic sum assured by 5% up to a maximum of 50% for every claim-free year.', 'life', 20),
(2, 'Surgical Plan', 400000, 1, 'For financial coverage in the event of an unexpected surgery, the Surgery Plan provides you with a comprehensive policy that covers surgery costs up to a pre-specified maximum limit. The policy covers you, your spouse and 5 dependent children, and must be purchased together with an life insurance policy.', 'life', 5),
(3, 'Comprehensive Health Plus', 300000, 1, 'A comprehensive health policy that covers surgical, medical and hospitalization expenses in Sri Lanka as well as overseas. The Comprehensive Health Plus plan provides financial support not only for you but also for your spouse and up to 5 dependent children. The cover must be obtained together with a mandatory life insurance.', 'family', 30),
(4, 'Comprehensive D+ Plan', 200000, 1, 'A comprehensive life and health insurance cover for persons with diabetes, our Comprehensive D+ Plan helps you gain access to the best hospitals and medical treatment for diabetes, ensuring peace of mind and financial assistance to the policyholder. The Comprehensive D+ Plan offers financial reimbursement up to a pre-specified maximum amount from your total hospitalization bill.', 'life', 10),
(5, 'Hospital Cash Plan', 500000, 1, 'A unique and innovative health plan that provides a fixed amount as cover for each day you are hospitalized, irrespective of the actual bills or expenses. This affords the policyholder a blanket cover for additional expenses with the fixed daily cash benefit.', 'life', 20),
(6, 'Minimuthu Dayada', 200000, 5, 'Set a strong foundation for your child’s future today with the Minimuthu Dayada insurance policy. Specially designed to ensure your child receives highly beneficial returns at an affordable premium, Minimuthu Dayada guarantees an attractive 125% sum assured on maturity, strategically spread over a payment period of 5 years from the date of maturity.', 'child', 18),
(7, 'Minimuthu Parithyaga', 300000, 1, 'Don’t let exorbitant premiums stop you from safeguarding your child’s future. With the Minimuthu Parithyaga Children’s Plan, we support your responsibility in securing total protection for your child with a low, highly affordable premium. Now you too can gift your child their dream for a brighter future with the Minimuthu Parithyaga Children’s Plan.', 'child', 18);

--
-- Indexes for dumped tables
--

CREATE TABLE `login` (
  `user_email` varchar(200) NOT NULL,
  `user_pwd` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




INSERT INTO `login` (`user_email`, `user_pwd`, `user_id`) VALUES
('admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 52),
('prabodha@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 55);






CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(200) NOT NULL,
  `user_mobile_number` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_address` varchar(300) NOT NULL,
  `user_gender` varchar(200) NOT NULL,
  `user_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `user` (`user_id`, `user_full_name`, `user_mobile_number`, `user_email`, `user_address`, `user_gender`, `user_status`) VALUES
(52, 'Dinidu Rathnayaka', '0719140068', 'admin@gmail.com', 'malabe', 'male', 'Active'),
(55, 'prabodha jayawardena', '0719140068', 'prabodha@gmail.com', 'hanwella', 'male', 'Active');



ALTER TABLE `login`
  ADD PRIMARY KEY (`user_email`),
  ADD KEY `user_id` (`user_id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);



ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;COMMIT;
--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `insurance_plan`
--
ALTER TABLE `insurance_plan`
  ADD PRIMARY KEY (`ins_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
