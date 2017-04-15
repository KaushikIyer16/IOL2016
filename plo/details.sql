-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 07:08 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `roll` varchar(7) DEFAULT NULL,
  `name` varchar(27) DEFAULT NULL,
  `school` varchar(46) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`roll`, `name`, `school`, `email`) VALUES
('BLRJ001', 'Sachin Rammoorthy', 'National Public School Rajajinagar', 'madhu.rammoorthy@gmail.com'),
('BLRJ004', 'RAGHAV CHINTAKUNTA MADHUKAR', 'SRI KUMARAN CHILDREN''S HOME', 'veena.madhukar@gmail.com'),
('BLRJ005', 'Shirin Laturkar', 'National Public School Indiranagar', 'slaturkar@yahoo.com'),
('BLRJ006', 'Sampada Venkatesh', 'National Public School Indiranagar', 'sampada.s.venkatesh@gmail.com'),
('BLRJ011', 'Karmanya GB', 'Vagdevi Vilas Marathahalli', 'karmanyagb@gmail.com'),
('BLRJ014', 'Rohit  Thirupasur', 'Sri Kumaran Children''s Home - CBSE', 'rthirupa@yahoo.co.in'),
('BLRJ026', 'Tara Jaigopal', 'National Public School Indiranagar', 'tara.jaigopal@gmail.com'),
('BLRJ029', 'Sankalp Ramesh', 'Kensri School', 'ssannkkallpp@gmail.com'),
('BLRJ030', 'Rohan Kapoor', 'NPS Indiranagar', 'rohankapoor1512@gmail.com'),
('BLRJ031', 'Sneh Gupta', 'Prakriya Green Wisdom', 'guptanikhil123@yahoo.com'),
('BLRJ201', 'Viswesh Krishna', 'National Public School', 'krishnaviswesh@gmail.com'),
('BLRJ202', 'Rishank', 'National Public School', 'shrknt@gmail.com'),
('BLRS002', 'Shashank Rammoorthy', 'Stonehill International School', 'shashankr.blr@gmail.com'),
('BLRS003', 'Nandini Garimella', 'AECS Magnolia Maaruti Public School', 'bgeethas@yahoo.com'),
('BLRS007', 'Pooja Bahukhandi', 'National Public School Indiranagar ', 'pooja.bhknd@gmail.com'),
('BLRS008', 'Shreya Subramanian', 'AECS Magnolia Maaruti PU College', 'LOCLMANI@YAHOO.COM'),
('BLRS009', 'Sahil Agrawal', 'National Public School Indiranagar', 'agrawal_vishakha@yahoo.com'),
('BLRS010', 'ATISHAY JAIN', 'National Public School', 'jains_uk@hotmail.com'),
('BLRS012', 'Akhil Nori', 'National Public School Indiranagar', 'akhilnori.an@gmail.com'),
('BLRS013', 'Mohit Doshi', 'Sri Kumaran Children''s home CBSE', 'mohit.dosi@gmail.com'),
('BLRS016', 'Narayan Srinivasan', 'National Public School', 'narayanseshadri98@gmail.com'),
('BLRS017', 'Guhan Narayanan', 'National Public School', 'rnmanu@hotmail.com'),
('BLRS019', 'Siddharth Chadha', 'National Public School Koramangala', 'sidc97@gmail.com'),
('BLRS022', 'Ankit Sharma', 'National Public School, Indiranagar, Bangalore', 'sujata.sharma@gmail.com'),
('BLRS024', 'Vishal Ranjith', 'National Public School, Indiranagar', 'vshlrnjth@gmail.com'),
('BLRS025', 'Varun Baddam', 'AECS Magnolia Maaruti College', 'Lbaddam@hotmail.com'),
('BLRS027', 'Adithya K. S.', 'Sri Kumaran Children''s Home - CBSE', 'rajeswari_sk@infosys.com'),
('BLRS028', 'Anurag Madnawat', 'AECS Magnolia Maaruti PU College', 'anuragmadnawat1@gmail.com'),
('BLRS032', 'Sharan Srinivasan', 'GEAR School', 'shars991@gmail.com'),
('BLRS102', 'Akash Reddy', 'Narayana PU College', 'amareshapg@gmail.com'),
('BLRS110', 'Shriank K', 'National Public School', 'shrknt@gmail.com'),
('BLRS203', 'Vrishab Krishna', 'National Public School', 'geethgayathri@gmail.com'),
('BOMJ002', 'ADARSH SRIRAM', 'Dhirubhai Ambani International School', 'pearl21rk@hotmail.com'),
('BOMJ007', 'Shreeyash Gotmare', 'Ryan International School, Kharghar', 'shreerockz15@gmail.com'),
('BOMJ008', 'AMMAN PANDE', 'SMT.K.C.GANDHI SCHOOL', 'anpandeysons@gmail.com'),
('BOMS001', 'Amarjiit Pandde', 'M V M college', 'lenovo.amarjiit@gmail.com'),
('BOMS003', 'Devarsh Ruparelia', 'Galaxy school', 'devarsh.ruparelia@gmail.com'),
('BOMS006', 'Abhinav Prasad', 'Dhirubhai Ambani International School', 'abhinavp99@hotmail.com'),
('BOMS109', 'Vyom Thakkar', 'Dhirubhai Ambani International School', '#N/A'),
('DELJ004', 'Nalin Bhardwaj', 'Delhi Public School, Faridabad', 'nalin.bhardwaj@icloud.com'),
('DELJ009', 'Ira Patole', 'DLF Public School', 'irapatole1912@gmail.com'),
('DELJ011', 'Mridul Pathak', 'SUMMERFIELDS SCHOOL', 'mdp.1999@gmail.com'),
('DELJ012', 'Gunjan Anand', 'Delhi Public School, R.K. Puram', 'gunjan183@live.com'),
('DELJ013', 'SHASHWAT GOEL', 'DPS RK PURAM', 'shashwatnow@gmail.com'),
('DELJ015', 'Mradul Bhatnagar', 'Father Agnel School', 'bhatnagar.mradul@gmail.com'),
('DELJ017', 'Utkarsh Gupta', 'DPS Noida', 'ruchibsr@rediffmail.com'),
('DELJ021', 'Saumya Koul', 'D.L.F Public School', '#N/A'),
('DELJ030', 'Rohil Kanwar', 'Delhi Public School Rohini', 'rohilkanwar@gmail.com'),
('DELJ033', 'Sudhanshu Agarwal', 'Delhi Public School, R.K. Puram', 'sudhanshuagarwal2002@gmail.com'),
('DELS001', 'Dev Shaurya Singhal', 'Delhi Public School, R. K. Puram', 'devshauryasinghal@gmail.com'),
('DELS002', 'Sayan Chaudhry', 'Delhi Public School, Rohini', 'sayan.chaudhry@gmail.com'),
('DELS003', 'Saarthak Sachdeva', 'Rukmini Devi Public School', 'hackpert@me.com'),
('DELS006', 'Shraddha Anand', 'Delhi Public School, R.K. Puram', 'domainsquare13@gmail.com'),
('DELS007', 'Anvita Kulshrestha', 'Delhi Public School, Dwarka', 'anvita.kulshreshtha@gmail.com'),
('DELS008', 'Ayaan Mudra Rakshasa', 'DLF Public School, Ghaziabad', 'ayaanmudrarakshasa@gmail.com'),
('DELS010', 'Shagun Goel', 'Delhi Public School, R.K. Puram', 'gshagun20@gmail.com'),
('DELS014', 'YATIK GUPTA', 'DELHI PUBLIC SCHOOL, FARIDABAD', 'yatikgupta@gmail.com'),
('DELS018', 'Anubhav Baweja', 'Delhi Public School, Dwarka', 'bawejaanubhav@gmail.com'),
('DELS019', 'Chaitanya Vaish', 'DELHI PUBLIC SCHOOL R K PURAM', 'cv98.vaish@gmail.com'),
('DELS020', 'Drishtti Rawat', 'Delhi Public School, NOIDA', 'dr.rawat19@gmail.com'),
('DELS022', 'Manav Aggarwal', 'Delhi Public School, R.K. Puram', 'manavaggarwal1234@gmail.com'),
('DELS023', 'Aditya Sengupta', 'Delhi Public School, R. K. Puram', 'adityarohansengupta@gmail.com'),
('DELS025', 'Renasha  Mishra', 'Delhi public school R.K Puram', 'renashamishra@gmail.com'),
('DELS026', 'Aviral Chawla', 'D.A.V. Public School', 'aviralchawlavif@gmail.com'),
('DELS027', 'Tosshaan Thapar', 'DPS Vasant Kunj', 'thapar9t7@gmail.com'),
('DELS031', 'Manan Rai', 'amity international school pushp vihar', 'mananrai128@gmail.com'),
('DELS032', 'Sneheil Saxena', 'St.Columba''s School', 'sneheilsaxena@gmail.com'),
('DELS201', 'Udit Kalra', 'Rukmini Devi Public School', 'udit775@gmail.com'),
('DELS202', 'Parth Raghav', 'K.R.H.', 'iniento12@gmail.com'),
('GAUS001', 'PRANATI MAJHI', 'KV IIT GUWAHATI', 'smajhi@iitg.ernet.in'),
('HYDJ002', 'Venkat Abhinav Nallamalli', 'Delhi Public School', 'sridhar_nallamalli@yahoo.co.in'),
('HYDJ003', 'mansi nanavti', 'Kennedy high the global school ', '#N/A'),
('HYDJ004', 'ANIRUDH SRIKAKOLAPU', 'ST. MARTIN''S HIGH SCHOOL', 'snssrinivas71@gmail.com'),
('HYDJ005', 'Sri Snigdha Karri', 'The Global Edge School', 'jayagangadhara.karri@wipro.com'),
('HYDJ010', 'Advika Solipuram', 'K V No 2 ', 'rekha_svr@yahoo.com'),
('HYDJ011', 'Ashish Resu', 'Little Flower School', 'ashishresu28@gmail.com'),
('HYDJ013', 'Kushal Dulla', 'Oakridge International School', 'padma.kallur@gmail.com'),
('HYDJ015', 'Ameya Kamat', 'Oakridge International School', 'KAMAT_PALLAVI@YAHOO.COM'),
('HYDJ101', 'Aadya Gayatri Kolla', 'Jubilee Hills Public School', 'kkmadhavi@gmail.com'),
('HYDJ104', 'Bhavya Manasa Kolla', 'Jubilee Hills Public School', 'kkmadhavi@gmail.com'),
('IDRS104', 'Pradyumna Bang', 'New Digamber Public School', 'theweblover007@gmail.com'),
('KOLJ004', 'Angikar Ghosal', 'South Point High School', 'angikar_ghosal@yahoo.com'),
('KOLJ005', 'Shinjini Ghosh', 'South Point High School', 'ashisi@gmail.com'),
('KOLJ008', 'Haimoshri  Das', 'South Point High School', 'haimoshridas2000@gmail.com'),
('KOLJ009', 'Agnideepa Sinha', 'The Heritage School', 'csinha68@gmail.com'),
('KOLJ201', 'Gaurav Rajesh Parikh', 'The Heritage School', 'gparikh100@gmail.com'),
('KOLS001', 'Debjit Paria', 'Hijli High School', 'debjit.paria1999@gmail.com'),
('KOLS002', 'Sayan Biswas', 'South Point High School', 'sayan.skywalker@gmail.com'),
('KOLS003', 'Debjit Mandal', 'ARMY PUBLIC SCHOOL, BARRACKPORE', 'debjit.mandal8@gmail.com'),
('KOLS006', 'Soumava Pal', 'South Point High School', 'soumavapal@gmail.com'),
('KOLS010', 'Shiv Agrawal', 'La Martiniere For Boys.', 'shiv98agr@gmail.com'),
('KOLS011', 'Swarnabja Bhaumik', 'South Point High School', 'arijiteiil@gmail.com'),
('KOLS101', 'Animesh Fatehpuria', 'La Martiniere For Boys', 'animesh_fatehpuria@outlook.com'),
('MAAJ002', 'Sacheth Sathyanarayanan', 'National Public School', 'sacheth.sathyanarayanan@outlook.com'),
('MAAJ004', 'Harish Manoharan', 'Sunshine Chennai Senior Secondary School', 'banurajamani@gmail.com'),
('MAAJ005', 'Sriram Muanagala', 'National Public School Indiranagar', 'Sriram Munagala'),
('MAAJ006', 'Shravan Anbu', 'Sunshine Chennai Senior Secondary School', 'shravan.anbu@gmail.com'),
('MAAJ007', 'Advay Ramesh', 'National Public School', 'advay.ramesh@gmail.com'),
('MAAJ008', 'Surya Sridhar', 'Sunshine Chennai Senior Secondary School', 'sujaachoo@gmail.com'),
('MAAS001', 'Sabhareesh Muralidaran', 'Maharishi Vidya Mandir Sr. Sec. School', 'printmurali@gmail.com'),
('MAAS003', 'Sairandri Sathyanarayanan', 'National Public School, Gopalapuram', 'shunchacha7@yahoo.com'),
('PATJ201', 'Anjali Kumari', 'S.R. Vidyapeeth', '#N/A'),
('PATJ202', 'Piyush Gautam Pathak', 'Adarsh Vikash Vidyalaya', '#N/A'),
('PATJ203', 'Kundan Kumar', 'Dayanand School', '#N/A'),
('PATJ204', 'Madhumay', 'K.P.S. Memorial Highschool', '#N/A'),
('PATJ205', 'Chandrashekhar Vyza', 'K.P.S. Memorial Highschool', 'padma.kallur@gmail.com'),
('PATS001', 'Pooja Priya', 'St. Michael''s Highschool', 'pooja.priya222@gmail.com'),
('PNQJ001', 'Soham Jog', 'Symbiosis Primary School', 'asj123@gmail.com'),
('PNQJ007', 'Sanhita  Phansalkar', 'Jnanaprabodhini ', '#N/A'),
('PNQJ008', 'Shardul Chiplunkar', 'Vidya Valley School', 'shardul.chiplunkar@gmail.com'),
('PNQJ011', 'Sai Nikam', 'Kline Memorial School', 'sai203.nikam@gmail.com'),
('PNQJ012', 'Rohinee Joshi', 'Jnana Prabodhini Prashala, Pune', 'rohi1729@gmail.com'),
('PNQJ201', 'Mandar Juvekar', 'Vidya Valley School', 'mjuvekar7@gmail.com'),
('PNQS002', 'Ketan Jog', 'Symbiosis Secondary School', 'asj123@gmail.com'),
('PNQS003', 'Purva Barve', 'Sir Parshurambhau College', 'puru125@gmail.com'),
('PNQS004', 'Shreyasi Kinhekar', 'NMV Girls Junior College', 'shreyasikinhekar@rocketmail.com'),
('PNQS009', 'Aditya Joshi', 'P.Jog junior coleege', 'anaghajoshi02@yahoo.com'),
('PNQS014', 'Niyati Bafna', 'St. Mary''s Junior College', 'niyatibafna13@gmail.com'),
('PNQS103', 'Soumitra  Sovale ', 'Kalmadi shamarao junior college', '#N/A'),
('RPRJ001', 'Mukund Choudhary', 'Krishna Public School', 'mukundc2k@gmail.com'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
