CREATE DATABASE spts;

--
-- Database: `spts`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` int(20) NOT NULL,
  `request` varchar(150) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rollno`, `name`, `request`, `date`) VALUES
(2, 21100, 21, 'update my marks of dbms', '12-09-2017');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject1` int(11) NOT NULL,
  `subject2` int(11) NOT NULL,
  `subject3` int(11) NOT NULL,
  `subject4` int(11) NOT NULL,
  `practical` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollno`, `semester`, `subject1`, `subject2`, `subject3`, `subject4`, `practical`, `total`) VALUES
(1, 21100, 1, 56, 54, 63, 43, 76, 292),
(2, 21101, 1, 66, 44, 77, 98, 78, 0),
(3, 21100, 1, 56, 54, 63, 43, 76, 292),
(4, 21101, 1, 66, 44, 77, 98, 78, 0),
(5, 21103, 1, 76, 88, 66, 95, 77, 0),
(7, 21101, 2, 64, 54, 77, 68, 79, 0),
(8, 21101, 3, 54, 74, 87, 58, 78, 0),
(9, 21101, 4, 77, 65, 45, 87, 68, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollno`, `name`, `fathername`, `dob`, `address`, `gender`, `email`, `mobile`, `year`) VALUES
(21100, 'ram', 'shyam', '09-12-1993', 'lucknow', 'male', 'ram@gmail.com', '9125516273', 2015),
(21101, 'rohan', 'sanjay', '08-09-1992', 'Lucknow', 'male', 'roahn@gmail.com', '8899776655', 2015),
(21102, 'sohan ', 'raman ', '02-03-1994', 'lucknow', 'male', 'soahn@gmail.com', '7766558877', 2016),
(21103, 'geeta', 'sanjay', '08-09-1994', 'Lucknow', 'female', 'geeta@gmail.com', '8895776655', 2015),
(21104, 'sangeeta ', 'shubham ', '01-02-1992', 'delhi', 'female', 'sangita@gmail.com', '7666558877', 2016),
(21105, 'anita ', 'rahul ', '01-02-1995', 'lucknow', 'female', 'anita@gmail.com', '7655558877', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'aman singh', 'aman', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`rollno`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`rollno`);


