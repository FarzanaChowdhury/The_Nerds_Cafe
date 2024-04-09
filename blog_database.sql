-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 11:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `name`, `email`, `pwd`, `date`) VALUES
(8, 'Zannatul Ferdous', 'zannatulferdous@iut-dhaka.edu', 'b5e89ff68a89e8438e955fdf1e1d1409', '2022-10-31'),
(12, 'Sakif Ahbab', 'sakifahbab2@iut-dhaka.edu', '827ccb0eea8a706c4c34a16891f84e7b', '2022-11-01'),
(14, 'Farzana Chowdhury', 'farzanachowdhury@iut-dhaka.edu', '827ccb0eea8a706c4c34a16891f84e7b', '2022-10-31'),
(21, 'Rakin Abrar', 'rakinabrar@iut-dhaka.edu', 'e2fc714c4727ee9395f324cd2e7f331f', '2022-11-01'),
(38, 'Sidratul Tanzila Tasmi', 'sidratultanzila@iut-dhaka.edu', '202cb962ac59075b964b07152d234b70', '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `all_posts`
--

CREATE TABLE `all_posts` (
  `post_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `cate` text NOT NULL,
  `slug` text NOT NULL,
  `banner` text NOT NULL,
  `content` text NOT NULL,
  `describ` text NOT NULL,
  `keyword` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_posts`
--

INSERT INTO `all_posts` (`post_id`, `title`, `cate`, `slug`, `banner`, `content`, `describ`, `keyword`, `status`, `date`) VALUES
(6, 'Top 10 Universities Of Bangladesh', 'php', 'study', 'http://localhost/Nerds%20Cafe/Blog/images/blog-images/Top-10-Public-Universities-list-in-Bangladesh.webp', '<p><img alt=\"\" src=\"https://ordnur.com/wp-content/uploads/2016/09/Top-University-in-Bangladesh.jpg\" style=\"height:235px; width:450px\" /></p>\r\n\r\n<p>What are the most popular Universities in Bangladesh? uniRank tries to answer this question by publishing the&nbsp;<strong>2022 Bangladeshi University Ranking</strong>&nbsp;of&nbsp;<strong>138 Bangladeshi higher-education institutions</strong>&nbsp;meeting the following uniRank selection criteria:</p>\r\n\r\n<ul>\r\n	<li>being chartered, licensed or accredited by the appropriate&nbsp;<a href=\"https://www.4icu.org/institutions/bd/\">Bangladeshi higher education-related organization</a></li>\r\n	<li>offering at least four-year undergraduate degrees (bachelor degrees) or postgraduate degrees (master or doctoral degrees)</li>\r\n	<li>delivering courses predominantly in a traditional, face-to-face, non-distance education format</li>\r\n</ul>\r\n\r\n<p>Our aim is to provide a non-academic&nbsp;<em>League Table</em>&nbsp;of the top Bangladeshi Universities based on valid, unbiased and non-influenceable web metrics provided by independent web intelligence sources rather than data submitted by the Universities themselves.</p>\r\n', ' top 10', 'university', 1, '2022-10-30'),
(7, 'Top 10 Private Universities Of Bangladesh', 'javascript', 'private', 'http://localhost/Nerds%20Cafe/Blog/images/blog-images/30424328.jpg', '<p><img alt=\"\" src=\"https://www.top10bd.com/wp-content/uploads/2019/02/top-10.jpg\" style=\"height:185px; width:290px\" /></p>\r\n\r\n<p>What are the most popular Private Universities in Bangladesh? uniRank tries to answer this question by publishing a complete list of top&nbsp;<strong>Private Bangladeshi Universities</strong>&nbsp;ranked by the 2022 uniRank University Ranking and meeting the following uniRank selection criteria:</p>\r\n\r\n<ul>\r\n	<li>being chartered, licensed or accredited by the appropriate&nbsp;<a href=\"https://www.4icu.org/institutions/bd/\">Bangladeshi higher education-related organization</a></li>\r\n	<li>offering at least four-year undergraduate degrees (bachelor degrees) or postgraduate degrees (master or doctoral degrees)</li>\r\n	<li>delivering courses predominantly in a traditional, face-to-face, non-distance education format</li>\r\n</ul>\r\n\r\n<p>Our aim is to provide a non-academic&nbsp;<em>League Table</em>&nbsp;of the top Private Bangladeshi Universities based on valid, unbiased and non-influenceable web metrics provided by independent web intelligence sources rather than data submitted by the Universities themselves.</p>\r\n', ' NSU, Brac, AIUB', 'university', 1, '2022-10-31'),
(8, 'Top 10 Career Options in the World', 'bootstrap', 'career', 'http://localhost/Nerds%20Cafe/Blog/images/blog-images/Careers-in-Commerce-3.jpg', '<p><img alt=\"\" src=\"https://www.upgrad.com/blog/wp-content/uploads/2020/07/top10-image.png\" style=\"height:200px; width:400px\" /></p>\r\n\r\n<p>After completing their formal education, a large number of students ponder over the wide range of&nbsp;<strong>career options in India</strong>. Although everybody is made for something different, opting for a&nbsp;<strong>career in India</strong>&nbsp;that is secure and provides a decent job satisfaction still remains one of the mainstream choices for freshers.</p>\r\n\r\n<p><strong>Some major factors you must consider while choosing your career path are-&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li>Salary</li>\r\n	<li>Growth</li>\r\n	<li>Security</li>\r\n	<li>Brand</li>\r\n	<li>Job Satisfaction</li>\r\n	<li>Opportunities</li>\r\n</ol>\r\n\r\n<p><br />\r\nEach individual has his/her own preferences. For example, some people love a job that involves a lot of traveling while others prefer to work in a comfy cubicle. However, salary, growth, and job satisfaction are those parameters that are preferred by most of the candidates.&nbsp;</p>\r\n\r\n<p>In this article, we will list out top career options in India to choose from.</p>\r\n\r\n<p>Learners receive an average Salary hike of 58% with the highest being up to 400%.<br />\r\nTable of Contents&nbsp;&nbsp; &nbsp;<br />\r\nTop Career Options in India<br />\r\n1. Data Science<br />\r\nData science can be defined as a process that involves the collection of a structured or unstructured data, pre-processing it to make it readable by algorithms, fetching important details and metrics, and sometimes making predictions, etc. It is considered to be the topmost career option in India because of its vast future offerings.&nbsp;</p>\r\n\r\n<p>To understand this interesting field, let us divide it into further parts-</p>\r\n\r\n<p><br />\r\nData Mining: The job of a data miner is to collect or mine the data from a vast set of structured/unstructured data. The process involves extracting important data points from internal or sometimes publicly available data sources and presenting them in a readable form.<br />\r\nData Analyst/Scientist: The Data Analyst/scientist team thoroughly investigates the data given to them by the data miners and comes up with interesting insights that help in driving business decisions and identifying potential threats.<br />\r\nMachine Learning Engineers: Machine Learning engineers use the mined data to predict outcomes and analyze the future of a business move.&nbsp;<br />\r\nSince the dawn of data tools in the 1990s, the opportunities in the field of data science have drastically increased. After some major companies like Google started using useless data piles to their advantage, companies all over the world adopted similar techniques to excel in their particular domains. Hence, for at least a century, data science has become one of the top choices of students for a career in India.&nbsp;</p>\r\n\r\n<p>From the data mentioned above, we can clearly see the rise of data scientist postings on Indeed. It is, in fact, one of the highest booming sectors in the world. Due to its versatility, data science has become a need for all the major organizations across domains and hence is deemed to be one of the best career options in India. This also helps a fresher from any field to fit into the role of a data scientist very easily.</p>\r\n\r\n<p>upGrad&rsquo;s PG diploma program in Data Science acts as a brilliant end-to-end learning experience for any level of candidates to get into a data science career in India. This course will serve as a perfect mixture of different concepts like Predictive Analytics using Python, Machine Learning, Data Visualization, Big Data, Natural Language Processing, etc. It is certified and taught by experienced professors from IIIT Bangalore, along with industry experts who know what it takes to get into this exciting field of data science. This is one of the most interesting and best career options out there.</p>\r\n\r\n<p>Read: Data Scientist Salary in India</p>\r\n\r\n<p>2. Digital Marketing<br />\r\nFor every brand out there, however big or small, promotion of their product stands out to be one of their ultimate jobs. For years, brands have been using different tactics to promote their products in a quest to maximize sales. With the rise of digital tools, especially social media platforms, where a considerable number of people engage every day, the digital form of marketing has become one of the foremost ways of promotions.</p>\r\n\r\n<p>Due to this fact, almost all the major brands hire a large number of digital marketing people who can drive strategies for the promotion of their products through different channels of communication. The primary role of a digital marketer is to create campaigns for specific products and even companies in general that help them create an ever-lasting impact on potential customers or clients. A digital marketer is also responsible for creating and maintaining the brand image of a particular company.&nbsp;</p>\r\n\r\n<p>Digital marketing is an essential ingredient that is required for companies to stand out against competitors. The better a brand looks, the better are the sales.</p>\r\n\r\n<p>There are multiple channels or techniques used by digital marketers in this mission.&nbsp;</p>\r\n\r\n<p>The major digital marketing career options in India are-&nbsp;</p>\r\n\r\n<p>Content Marketing<br />\r\nBig Data<br />\r\nMarketing Automation<br />\r\nMobile Marketing<br />\r\nSocial Media Marketing<br />\r\nConversion Rate Optimisation<br />\r\nInternet of Things<br />\r\nSearch Engine Optimisation<br />\r\nWearables<br />\r\nPaid Search Marketing<br />\r\nOnline PR<br />\r\nCommunities<br />\r\nDisplay&nbsp;<br />\r\nPartnerships<br />\r\nAs we can see from the above visualization of data, the number of job postings in Digital Marketing has drastically increased over the last decade. This is majorly due to the sharp rise in the number of digital platforms and advancements in technologies. Over the years, more and more people have started engaging with the online forms of content.</p>\r\n\r\n<p>Hence, to keep up in this competitive sphere, companies need to strategically come up with techniques that help them to reach out to the customers easily. This requirement has helped in fueling this field to be one of the best career options in India.&nbsp;</p>\r\n\r\n<p>To get a kickstart in digital marketing, you should enroll in upGrad&rsquo;s Post Graduate Certification in Digital Marketing and Communication. This program has covered all the essentialities that the students would require for developing a career in Digital Marketing. Interestingly, through this program, you will be able to get a grasp on different techniques used in digital marketing like Social Media, Public Relations, Content Promotion and Marketing, Marketing Analytics, and Branding.&nbsp;</p>\r\n\r\n<p>Taught and mentored by experienced professors from Mudra Institute of Communications (MICA), Ahmedabad, and professionals from companies like Facebook, this program will help you ace any post related to digital marketing like SEO Manager, Social Media Specialist, Content Manager, etc. with ease.&nbsp;</p>\r\n', '    Career Choices', 'Career', 1, '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `cate_manager`
--

CREATE TABLE `cate_manager` (
  `id` int(255) NOT NULL,
  `cate_name` text NOT NULL,
  `cate_for` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `message`, `status`, `date`) VALUES
(7, 6, 'mimi', 'zannatulferdous@iut-dhaka.edu', 'Very Helpful', 1, '2022-10-31'),
(8, 6, 'mimi', 'zannatulferdous@iut-dhaka.edu', 'good', 1, '2022-10-31'),
(9, 6, 'mimi', 'zannatulferdous@iut-dhaka.edu', 'very good', 1, '2022-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'mimi', 'z1@gmail.com', 'hdueyfyurg', '2022-10-27'),
(2, 'mimi', 'hghag@gmail.com', 'yutdytyhghdhd', '2022-10-27'),
(3, 'mimi', 'z1@gmail.com', '74367367', '2022-10-27'),
(4, 'mimi', 'zannatulferdous@iut-dhaka.edu', 'udggudgdhgd', '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_us`
--

CREATE TABLE `subscribe_us` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_posts`
--
ALTER TABLE `all_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `cate_manager`
--
ALTER TABLE `cate_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe_us`
--
ALTER TABLE `subscribe_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `all_posts`
--
ALTER TABLE `all_posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cate_manager`
--
ALTER TABLE `cate_manager`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribe_us`
--
ALTER TABLE `subscribe_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
