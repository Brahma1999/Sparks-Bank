SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `spark bank`
--

-- --------------------------------------------------------
--
-- Table structure for table `accountdetails`
--
CREATE TABLE `accountdetails` (
  `sno` int(10) NOT NULL,
  `accID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountdetails`
--

INSERT INTO `accountdetails` (`sno`, `accID`, `name`, `email`, `balance`) VALUES
(1, 1234, 'Ankit Kumar', 'ankitkumarfs@gmail.com', 10000),
(2, 5678, 'Govind Kumar', 'govind.73018@gmail.com', 7000),
(3, 9101, 'Pratik Raj', 'pratikraj3530@gmail.com', 11500),
(4, 1213, 'Taqdees Zeya', 'taqdeeszeya19z@gmail.com', 45000),
(5, 1415, 'Deepak Beniya', 'deepakbeniya64@gmail.com', 6000),
(6, 1617, 'Sumit Sen', 'SumitKr13199@gmail.com', 9000),
(7, 1819, 'Styajit Lenka', 'satyajitlenka45@gmail.com', 8700),
(8, 2021, 'S Ganesh', 'sadaganesh@gmail.com', 5200),
(9, 2122, 'Indtajeet Giri', 'indrajetgiri09@gmail.com', 7800),
(10, 2324, 'Divya Kumari', 'divyaK7886@gmail.com', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sno` int(10) NOT NULL,
  `payer` text NOT NULL,
  `payerAcc` int(10) NOT NULL,
  `payee` text NOT NULL,
  `payeeAcc` int(10) NOT NULL,
  `amount` double NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sno`, `payer`, `payerAcc`, `payee`, `payeeAcc`, `amount`, `time`) VALUES
(1, 'Ankit Kumar', 1234, 'Govind Kumar', 5678, 5000, '2022-07-7 19:37:00'),
(2, 'Pratik Raj', 9101, 'Divya Kumari', 2324, 2000, '2022-07-7 19:15:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountdetails`
--
ALTER TABLE `accountdetails`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountdetails`
--
ALTER TABLE `accountdetails`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

