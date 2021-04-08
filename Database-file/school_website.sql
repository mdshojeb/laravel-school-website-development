-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 05:45 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_campus`
--

CREATE TABLE `about_campus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_campus`
--

INSERT INTO `about_campus` (`id`, `title`, `description`, `image`) VALUES
(1, 'করিমপুর কে.কে. বয়েজের ক্যাম্পাস', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eligendi reiciendis vitae quo id, repellat eaque quasi, sed perspiciatis placeat eveniet error magni nisi! Laudantium nesciunt qui alias expedita quasi doloremque quas veritatis nam aliquid totam! Aliquid natus rerum repellendus! Corrupti a odio dolore doloremque minima, fugiat repellendus cupiditate quis quod voluptas velit nesciunt eligendi natus voluptatibus accusantium nisi ex ratione tenetur corporis quam illo ea laudantium amet. Praesentium, ea. Adipisci impedit quis veniam suscipit ratione aliquid iusto praesentium architecto? Odit ea laborum inventore enim temporibus sint dolores eos. Nobis, laudantium temporibus nemo esse ad quod totam repudiandae odit error.</p>', '1617727740.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_school`
--

CREATE TABLE `about_school` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_school`
--

INSERT INTO `about_school` (`id`, `title`, `description`, `image`) VALUES
(1, 'করিমপুর কে.কে. বয়েজ হাই স্কুল', '<p><strong>করিমপুর কে.কে. বয়েজ হাই স্কুল </strong>নরসিংদী সদর উপজেলার করিমপুর ইউনিয়নের একটি স্বনামধন্য স্কুল যেটি প্রতিষ্ঠিত হয় ২০১৪ সালে। প্রতিষ্ঠালগ্ন থেকেই বিদ্যালয়টি তাদের নিজেদের যোগ্যতার প্রমাণ দিয়ে আসছে বিভিন্ন কাজের মাধ্যমে। প্রতিবছর ১০০% পাশের হারসহ অতিরিক্ত শিক্ষা কার্যক্রম যেমন খেলাধুলা, বিতর্ক ও সাংস্কৃতিক কর্মকান্ডে সাফল্যের সাথে এগিয়ে যাচ্ছে এই বিদ্যালয়টি।</p><p>সজিব মাহমুদ বলেন,</p><blockquote><p>করিমপুর কে.কে. বয়েজ হাই স্কুল একদিন নরসিংদী জেলার একটি সফল ও স্বনামধন্য স্কুলে পরিনত হবে । ইনশাল্লাহ</p></blockquote><p>&nbsp;</p>', '1617725940.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `academic_rules`
--

CREATE TABLE `academic_rules` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_rules`
--

INSERT INTO `academic_rules` (`id`, `title`, `description`, `image`) VALUES
(1, 'Lorem ipsum dolor sit amet.', '<p>Lorem ipsum dolor sit amet.</p>', '1617765298.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comitee`
--

CREATE TABLE `comitee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comitee`
--

INSERT INTO `comitee` (`id`, `name`, `designation`, `image`) VALUES
(1, 'Shajeeb Mahmud', 'Software engineer', '1617754013.png'),
(2, 'সজিব মাহমুদ', 'প্রতিষ্ঠাতা', '1617754241.png'),
(3, 'সজিব মাহমুদ', '<p>প্রতিষ্ঠাতা</p><p>করিমপুর কে.কে. বয়েজ হাই স্কুল, নরসিংদী।</p><p>বিশিষ্ঠ শিল্পপতি ও সমাজসেবক।</p>', '1617755014.png'),
(4, 'Robert Neal', '<p><strong>প্রতিষ্ঠাতা</strong></p><p>করিমপুর কে.কে. বয়েজ হাই স্কুল, নরসিংদী।</p><p>বিশিষ্ঠ সমাজসেবক ও শিল্পপতি।</p>', '1617755361.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `phone2`, `address`, `map`) VALUES
(1, 'karimpurkkbhs.channel@gmail.com', '0194456588', '015533653874', 'করিমপুর, নরসিংদী সদর, নরসিংদী।', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14592.364994014086!2d90.7409167!3d23.8863828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8dd8635005bd799a!2sKarimpur%20K.K%20Boys%20High%20School!5e0!3m2!1sbn!2sde!4v1611556270155!5m2!1sbn!2sde');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `url`) VALUES
(2, 'মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর', 'http://www.dshe.gov.bd'),
(3, 'ঢাকা শিক্ষা বোর্ড', 'https://dhakaeducationboard.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

CREATE TABLE `memory` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`id`, `title`, `description`, `image`, `slug`) VALUES
(7, 'একটি সফল অনলাইন ক্লাস আয়োজনে লক্ষনীয় বিষয়', 'ব্লগ শব্দটি ইংরেজি Blog এর বাংলা প্রতিশব্দ, যা এক ধরনের অনলাইন ব্যক্তিগত দিনলিপি বা ব্যক্তিকেন্দ্রিক পত্রিকা। ইংরেজি Blog শব্দটি Weblog এর সংক্ষিপ্ত রূপ। যিনি ব্লগে পোস্ট করেন তাকে ব্লগার বলা হয়। ব্লগাররা প্রতিনিয়ত তাদের ওয়েবসাইটে কনটেন্ট যুক্ত করেন আর ব্যবহারকারীরা সেখানে তাদের মন্তব্য করতে পারেন। এছাড়াও সাম্প্রতিক কালে ব্লগ ফ্রিলান্স সাংবাদিকতার একটা মাধ্যম হয়ে উঠছে। সাম্প্রতিক ঘটনাসমূহ নিয়ে এক বা একাধিক ব্লগাররা তাদের ব্লগ হালনাগাদ করেন।\r\n\r\nবেশিরভাগ ব্লগই কোন একটা নির্দিষ্ট বিষয়সম্পর্কিত ধারাবিবরণী বা খবর জানায়। বাকীগুলো ব্যক্তিগত অনলাইন দিনলীপি। একটি ব্লগ হলো লেখা, ছবি, অন্য ব্লগ, ওয়েব পৃষ্ঠা, এ বিষয়ের অন্য ওয়েব সাইটের লিংক ইত্যাদির সমাহার। পাঠকদের মন্তব্য করার সুযোগ দেয়া ব্লগের অন্যতম একটি দিক। প্রায় ব্লগই মূলত টেক্সট-বেসড বা লেখাভিত্তিক। কিন্তু কিছু ব্লগ আবার শিল্প (আর্ট ব্লগ), ছবি (ফটোব্লগ), ভিডিও (ভিডিও ব্লগিং), সঙ্গীত (এমপিথ্রিব্লগ) আর অডিও (পডকাস্টিং) ইত্যাদির উপর গড়ে উঠে। মাইক্রোব্লগিং-ও আরেক ধরনের ব্লগিং, যেখানে পোস্টের আকার তূলনামূলক ছোট থাকে। জুন, ২০১৭-এর হিসেবে, ব্লগ খোঁজারু ইঞ্জিন টেকনোরাট্টি প্রায় বাইশ মিলিওনেরও বেশি ব্লগের হদিশ পেয়েছে।[১]', '1617633700.jpg', 'একটি-সফল-অনলাইন-ক্লাস-আয়োজনে-লক্ষনীয়-বিষয়'),
(8, 'কিভাবে সহজেই যেকোন ছবি থেকে ব্যাকগ্রাউন্ড রিমুভ করবো? কোন রকম স্কিল ছাড়াই!!!', '<p><strong>আমরা অনেকেই যখন কোন কাজ করতে যাই</strong>, তখন আমাদের ব্যাকগ্রাউন্ড ছাড়া ইমেজের প্রয়োজন পড়ে। আমরা জানি একটি ইমেইজের ব্যাকগ্রাউন্ড পরিবর্তন বা ব্যাকগ্রাউন্ড রিমুব করা কতটা কষ্টকর। বিশেষ করে যারা ফটোশপ বা ফটো এডিটিং এর কাজ জানেন না। আজকে আমি দেখাবো কিভাবে এইগুলা না জেনেই এই কাজটি সহজেই করা যায়।</p><p>&nbsp;</p><p><strong>কিভাবে সহজেই যেকোন ছবি থেকে ব্যাকগ্রাউন্ড রিমুভ করবো? কোন রকম স্কিল ছাড়াই!!!</strong></p><p>এই কাজটি সহজে করা জন্য আমরা যেটি করবো সেটি হল আমরা একটি অনলাইন ওয়েবসাইট ব্যবহার করবো। যেখানে আপনি সহজে জাস্ট ইমেজ আপ্লোড করে দিলে আপনার ইমেজের ব্যাকগ্রাউন্ড রিমুব হয়ে যাবে। সেই ওয়েবসাইটটির নাম জানতে চান?</p><p><a href=\"www.remove.bg\">www.remove.bg</a> এই লিংক এ ক্লিক করে চলে যান আর ইনজয় করুন।</p>', '1617716642.jpg', '1617716642-কিভাবে-সহজেই-যেকোন-ছবি-থেকে-ব্যাকগ্রাউন্ড-রিমুভ-করবো?-কোন-রকম-স্কিল-ছাড়াই!!!'),
(9, 'আমার সকল পছন্দ ঘুরতে যাওয়া, বেড়াতে যাওয়া।', '<p>আমি ছোট বেলা থেকেই ঘুরতে ভালবাসি। বিশেষ করে অজানা জায়গাতে ঘুরতে আমার অনেক ভাল লাগে। আমি যখন প্রাইমারি স্কুলে পড়তাম তখন সম্ভবত আমার বয়স কত আর হবে ৯ কি ১০ বছর। তখন থেকেই প্রত্যেক শুক্রবার আমি সারাদিন এর খাবার সাথে করে নিয়ে অজানার উদ্দেশ্যে রওনা দিতা।</p><p>&nbsp;</p><h4><strong>আমার প্রথম ঘুরতে যাওয়া</strong></h4><p>আমি তখন ক্লাস ফোর এ পড়ি। আমার সাথে কিছু বন্ধু বান্ধব ছিল। মানে ইয়ে মানে আমার প্রেমিকা ও ছিল। তো তাকে নিয়ে যাব ঘুরতে । তো কোথায় যাওয়া যায় কোথায় যাওয়া যায়। পড়ে মাথায় আসলো গত সপ্তাহে আমি একটা চমৎকার জায়গায় গিয়েছিলাম সেটা হল বলবো না । হাহাহাহা।</p><p>আমি বেসিকালি যেসব জায়গায় ঘুরতে যাই তা হল-</p><ol><li>বনে জঙ্গলে</li><li>নদীর তীরে</li><li>বালুর চরে</li></ol><p>আমার যিনি গুরু তিনি আমাকে বলতেন সজিব মাহমুদ এই কথা টা সব সময় মনে রাখবে । আমি বললাম গুরু কোন কথাটা-</p><blockquote><p>সব লোকে কয় , কি জানি কয় জানিনা…</p><p>ভাল বাসার মত ভালবাসলেই তারে কি গো পাওয়া যায়?</p></blockquote><p>&nbsp;</p>', '1617641011.jpg', 'আমার-সকল-পরীক্ষার-রেসাল্ট');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `message`, `image`) VALUES
(1, 'Shajeeb Mahmud', '<h3><strong>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit</strong>,&nbsp;</h3><blockquote><p>amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Non&nbsp;reiciendis&nbsp;doloribus,&nbsp;unde&nbsp;culpa&nbsp;suscipit&nbsp;recusandae!&nbsp;Dignissimos&nbsp;quibusdam&nbsp;a&nbsp;voluptas&nbsp;soluta.</p><p>amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Non&nbsp;reiciendis&nbsp;doloribus,&nbsp;unde&nbsp;culpa&nbsp;suscipit&nbsp;recusandae!&nbsp;Dignissimos&nbsp;quibusdam&nbsp;a&nbsp;voluptas&nbsp;soluta.</p></blockquote>', '1617814559.jpg'),
(3, 'Robert Neal', '<p>Robert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert NealRobert Neal</p>', '1617816650.jpg'),
(4, 'প্রধান শিক্ষকের বার্তা', '<p>বর্তমানে, ব্লগিং হয়ে উঠেছে বাংলাদেশে ইন্টারনেটে ব্যবহারের অন্যতম কারণ৷ আর তাই বাংলাদেশ থেকে ভিজিট করা হয় এমন ১০০ ওয়েবসাইটের মধ্যে গোটা সাতেক রয়েছে ব্লগ সাইট৷ স্বভাবতই প্রশ্ন আসতে পারে, কেনই বা এত ব্লগিং?</p><p>মাননীয় ভিসি আরও একটা লাশ পড়লো৷ মাত্র কিছুক্ষণ আগে৷ পবিত্র শিক্ষাঙ্গনে... ঢাকা বিশ্ববিদ্যালয়ের সাম্প্রতিক ছাত্র সংঘর্ষ নিয়ে আমার ব্লগে লিখেছেন মুনীর উদ্দীন শামীম৷</p><p>চলুন আরেকটু এগিয়ে যাই ...</p><p>পরশু আমার বন্ধুটি দেখা হতেই কেঁদে ফেলল৷ দৃষ্টিতে যেন হতাশার নীল গহ্বরে ডুবতে থাকা এক মানুষের আর্তনাদ৷ আমার বোনটাকে আর বাঁচাতে পারলাম না দোস্ত! ... আজমেরীকে বাঁচাতে সাহায্যের আকুতি নিয়ে সামহোয়্যার ইন ব্লগে লিখেছেন স্বপ্নকথক৷</p>', '1617839755.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_24_102444_create_user_auths_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `date`) VALUES
(5, '৬ষ্ঠ থেকে ৯ম শ্রেণির ২য় সপ্তাদের এসাইনমেন্ট', 'এতদ্বারা করিমপুর কে.কে. বয়েজ হাই স্কুল এর  সকল শিক্ষার্থীদের অবগতির জন্য জানানো যাচ্ছে যে, ৬ষ্ঠ থেকে ৯ম শ্রেণির ২য় সপ্তাদের এসাইনমেন্ট ২০২১ ইতিমধ্যে স্কুলে চলে এসেছে। ৬ষ্ঠ থেকে ৯ম শ্রেণির ২য় সপ্তাদের এসাইনমেন্ট ২০২১ দেয়ার শুরু হবে আগামি শনিবার। শিক্ষার্থীরা স্কুল থেকে যার যার এসাইনমেন্ট নিয়ে যাবে।\r\nআগামী ১০ই এপ্রিল ,২০২১ এসাইনমেন্ট জমা দেয়ার শেষ দিন।', '2029-03-21'),
(6, 'স্বাধীনতার সুবর্ণ জয়ন্তী উদযাপন উপলক্ষে', 'ddfdfdfdfdfdfdfdfdfdfdfd', '2029-03-21'),
(9, 'নবম ও দশম শ্রেনির ফর্ম পূরন করার নির্দেশ', '<p>তারিখঃ ০৮/০৪/২১ইং &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;স্মারক নংঃ২৩০১</p><p>এত দ্বারা করিমপুর কে.কে. বয়েজের সকল শিক্ষার্থীদের , আগামি ১০/০৪/২১ইং তারিখ রোজ শনিবার হতে নবম ও দশম শ্রেণির ফর্ম ফিলাপ করার নির্দেশ দেয়া যাইতেছে।</p><p><strong>প্রয়োজনীয় কাগজপত্র</strong></p><ol><li>জন্মনিবন্ধন কার্ড</li><li>২ কপি পাসপোর্ট সাইজের ছবি</li></ol><p>নির্দেশক্রমে-</p><p>করিমপুর কে.কে. বয়েজ হাই স্কুল,নরসিংদী।</p>', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `routin`
--

CREATE TABLE `routin` (
  `id` int(11) NOT NULL,
  `classname` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `uploaded_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routin`
--

INSERT INTO `routin` (`id`, `classname`, `link`, `uploaded_at`) VALUES
(4, 'Class 6', 'https://drive.google.com/file/d/1mdfkzvsgpnk9j6iQ2nVGgVeXlUKVvIeI/view?usp=sharing', '2021-04-10'),
(5, 'Class 6', 'https://drive.google.com/file/d/1mdfkzvsgpnk9j6iQ2nVGgVeXlUKVvIeI/view?usp=sharing', '2021-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `image`) VALUES
(3, 'Travel to Himalayan3', '1617806474.jpg'),
(4, 'Travel to Himalayan4', '1617806496.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twetter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `youtube`, `twetter`) VALUES
(1, 'https://facebook.com/shajeebmahmud', 'https://youtube.com/channelname', 'https://twetter.com/accountname');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `link` tinytext NOT NULL,
  `uploaded_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `classname`, `subject_name`, `link`, `uploaded_at`) VALUES
(1, 'Class 6', 'English', 'https://drive.google.com/file/d/1mdfkzvsgpnk9j6iQ2nVGgVeXlUKVvIeI/view?usp=sharing', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twetter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `image`, `facebook`, `linkedin`, `twetter`) VALUES
(1, 'Shajeeb Mahmud', 'Software engineer', '1617734042.jpg', 'https://facebook.com/shajeebmahmudofficial', 'https://linkedin.com/in/mdshojebofficial', 'https://tweeter.com/shajeebmahmud'),
(2, 'Shuvendu Chakrabarty', 'Software engineer', '1617734136.png', NULL, NULL, NULL),
(4, 'Sultana Bhuiya', 'Assistant Teacher', '1617736501.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auths`
--

CREATE TABLE `user_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(5) NOT NULL DEFAULT 1 COMMENT '1=user, 2=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_auths`
--

INSERT INTO `user_auths` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Fahmida Mahmud', 'jaan@gmail.com', NULL, '15901590', '2021-03-24 05:45:24', NULL, 2),
(5, 'Robert Neal', 'shajeebmahmud1947@gmail.com', NULL, '15901590', '2021-03-24 06:12:01', NULL, 1),
(7, 'Shajeeb Mahmud', 'shaj@gmail.com', NULL, '15901590', '2021-03-26 19:02:12', NULL, 3),
(9, 'Elius Asraf', 'eliusasraf1@gmail.com', NULL, '15901590', '2021-03-27 07:24:40', NULL, 2),
(10, 'Robert Neal', 'youremail@gmail.com', NULL, '15901590', '2021-04-07 21:39:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `url`, `name`) VALUES
(1, 'https://www.youtube.com/embed/ZKkX_cBAOqQ', 'Hanif Mia'),
(2, 'https://www.youtube.com/embed/NVvVh555MbA', 'Shuvendu Chakrabarty'),
(3, 'https://www.youtube.com/embed/fzoXpdTyHxk', 'Shofiqul Islam'),
(5, 'https://www.youtube.com/embed/KwXfH6dXKw8', 'Shofiqul Islam'),
(6, 'https://www.youtube.com/embed/QsNbrg322-k', 'Mosarrof Hossain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_campus`
--
ALTER TABLE `about_campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_school`
--
ALTER TABLE `about_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_rules`
--
ALTER TABLE `academic_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comitee`
--
ALTER TABLE `comitee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routin`
--
ALTER TABLE `routin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auths`
--
ALTER TABLE `user_auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_campus`
--
ALTER TABLE `about_campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_school`
--
ALTER TABLE `about_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_rules`
--
ALTER TABLE `academic_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comitee`
--
ALTER TABLE `comitee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memory`
--
ALTER TABLE `memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `routin`
--
ALTER TABLE `routin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_auths`
--
ALTER TABLE `user_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
