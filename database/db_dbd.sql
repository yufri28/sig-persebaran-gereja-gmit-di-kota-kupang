-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Vyra', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `centroid`
--

CREATE TABLE `centroid` (
  `id_centroid` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `jenis` tinyint(1) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `ket_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centroid`
--

INSERT INTO `centroid` (`id_centroid`, `id_puskesmas`, `jenis`, `kategori`, `ket_kategori`) VALUES
(2, 39, 0, 'C2', 'Rawan'),
(3, 16, 0, 'C3', 'Sangat Rawan'),
(4, 23, 1, 'C1', 'Sedikit Rawan'),
(5, 24, 1, 'C2', 'Rawan'),
(6, 47, 1, 'C3', 'Sangat Rawan'),
(7, 2, 0, 'C1', 'Sedikit Rawan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Alak'),
(2, 'Kelapa Lima'),
(3, 'Kota Raja'),
(4, 'Kota Lama'),
(5, 'Maulafa'),
(6, 'Oebobo');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `polygon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `kelurahan`, `polygon`) VALUES
(1, 1, 'Alak', '[{\"lat\":-10.192753970107622,\"lng\":123.52806329727174},{\"lat\":-10.19642869550866,\"lng\":123.53179693222047},{\"lat\":-10.19769583237052,\"lng\":123.5372042655945},{\"lat\":-10.19769583237052,\"lng\":123.54286909103395},{\"lat\":-10.192373823681816,\"lng\":123.5467314720154},{\"lat\":-10.188065465833718,\"lng\":123.54763269424438},{\"lat\":-10.187178443754476,\"lng\":123.55304002761842},{\"lat\":-10.1838837687141,\"lng\":123.55561494827272},{\"lat\":-10.179321854782852,\"lng\":123.554584980011},{\"lat\":-10.174247277561221,\"lng\":123.54477882385255},{\"lat\":-10.172261956522547,\"lng\":123.54143142700197},{\"lat\":-10.17264212691644,\"lng\":123.54031562805177},{\"lat\":-10.172473141727233,\"lng\":123.53915691375734},{\"lat\":-10.174627462916558,\"lng\":123.53495121002199},{\"lat\":-10.177457559589053,\"lng\":123.53143215179445},{\"lat\":-10.172261954047489,\"lng\":123.53928565979005},{\"lat\":-10.176866202870551,\"lng\":123.53173255920412},{\"lat\":-10.182272899807677,\"lng\":123.52975845336915}]'),
(2, 1, 'Batuplat', '[{\"lat\":-10.206826129533797,\"lng\":123.56756687164308},{\"lat\":-10.216962752047165,\"lng\":123.57683658599855},{\"lat\":-10.215695691902319,\"lng\":123.58610630035402},{\"lat\":-10.211641065508614,\"lng\":123.59357357025148},{\"lat\":-10.204545344957092,\"lng\":123.59563350677492},{\"lat\":-10.197196039050999,\"lng\":123.59692096710206},{\"lat\":-10.194154897343457,\"lng\":123.58610630035402},{\"lat\":-10.192887746397934,\"lng\":123.57709407806398},{\"lat\":-10.202300273245777,\"lng\":123.56797456741334},{\"lat\":-10.200906442573391,\"lng\":123.56720209121706}]'),
(3, 1, 'Fatufeto', '[{\"lat\":-10.163730751381637,\"lng\":123.57222855091095},{\"lat\":-10.165156426099633,\"lng\":123.57422411441804},{\"lat\":-10.165504923396611,\"lng\":123.57560813426973},{\"lat\":-10.164110931928318,\"lng\":123.5773140192032},{\"lat\":-10.162843661680686,\"lng\":123.57724964618684},{\"lat\":-10.1618615237828,\"lng\":123.5767024755478},{\"lat\":-10.161576386408479,\"lng\":123.57586562633516},{\"lat\":-10.161639750291421,\"lng\":123.57480347156526},{\"lat\":-10.162368434042401,\"lng\":123.57348382472993}]'),
(4, 1, 'Mantasi', '[{\"lat\":-10.170403396944923,\"lng\":123.57765197753908},{\"lat\":-10.168798234404536,\"lng\":123.58314514160158},{\"lat\":-10.171248216094368,\"lng\":123.58511924743654},{\"lat\":-10.17412058448464,\"lng\":123.58469009399415},{\"lat\":-10.175303316899265,\"lng\":123.58074188232423},{\"lat\":-10.17378266013281,\"lng\":123.5775661468506}]'),
(5, 1, 'Manulai II', '[{\"lat\":-10.226916863132143,\"lng\":123.52907180786134},{\"lat\":-10.20748885079641,\"lng\":123.54520797729494},{\"lat\":-10.212726084044037,\"lng\":123.56357574462892},{\"lat\":-10.220497303462963,\"lng\":123.58760833740236},{\"lat\":-10.244147670932461,\"lng\":123.57130050659181},{\"lat\":-10.24110700814717,\"lng\":123.5457229614258}]'),
(6, 1, 'Manutapen', '[{\"lat\":-10.178048928824465,\"lng\":123.57469081878664},{\"lat\":-10.179569565265611,\"lng\":123.57417583465578},{\"lat\":-10.180583318867201,\"lng\":123.5749912261963},{\"lat\":-10.181385871517461,\"lng\":123.57709407806398},{\"lat\":-10.17978076419822,\"lng\":123.58426094055177},{\"lat\":-10.177161887554341,\"lng\":123.58391761779785},{\"lat\":-10.174162825003465,\"lng\":123.58554840087892},{\"lat\":-10.172219755353366,\"lng\":123.5859775543213},{\"lat\":-10.171374938774026,\"lng\":123.58426094055177}]'),
(7, 1, 'Naioni', '[{\"lat\":-10.250397830621196,\"lng\":123.57971191406251},{\"lat\":-10.277761942026022,\"lng\":123.59207153320314},{\"lat\":-10.258843796467929,\"lng\":123.61507415771486},{\"lat\":-10.2433030453059,\"lng\":123.60305786132814}]'),
(8, 1, 'Namosain', '[{\"lat\":-10.17048787896043,\"lng\":123.54108810424806},{\"lat\":-10.17454298942144,\"lng\":123.53319168090822},{\"lat\":-10.184849496637002,\"lng\":123.54949951171876},{\"lat\":-10.177246367781523,\"lng\":123.5599708557129},{\"lat\":-10.173022329033515,\"lng\":123.5599708557129},{\"lat\":-10.168291339294921,\"lng\":123.55585098266603},{\"lat\":-10.168291339294921,\"lng\":123.54984283447267}]'),
(9, 1, 'Nunbaun Delha', '[{\"lat\":-10.176401564503466,\"lng\":123.56409072875978},{\"lat\":-10.180878996394274,\"lng\":123.56615066528322},{\"lat\":-10.182568577006323,\"lng\":123.57147216796876},{\"lat\":-10.181301392386183,\"lng\":123.57627868652345},{\"lat\":-10.177415328168802,\"lng\":123.57584953308107},{\"lat\":-10.171332697886395,\"lng\":123.57507705688478},{\"lat\":-10.17048787896043,\"lng\":123.56760978698732}]'),
(10, 1, 'Nunbaun Sabu', '[{\"lat\":-10.180625558530712,\"lng\":123.55705261230469},{\"lat\":-10.181639308777047,\"lng\":123.57559204101564},{\"lat\":-10.18789069743481,\"lng\":123.57473373413087},{\"lat\":-10.188059652184187,\"lng\":123.55516433715822}]'),
(11, 1, 'Nunhila', '[{\"lat\":-10.1638982146566,\"lng\":123.57237339019777},{\"lat\":-10.166179267680912,\"lng\":123.5775661468506},{\"lat\":-10.1693051287098,\"lng\":123.57640743255617},{\"lat\":-10.172346477647501,\"lng\":123.57602119445802},{\"lat\":-10.167319788086644,\"lng\":123.57250213623048},{\"lat\":-10.166432717011796,\"lng\":123.57035636901857}]'),
(12, 1, 'Penkase Oeleta', '[{\"lat\":-10.18738383264948,\"lng\":123.549542427063},{\"lat\":-10.192241253696418,\"lng\":123.54816913604738},{\"lat\":-10.197098600707104,\"lng\":123.55327606201173},{\"lat\":-10.196422800340647,\"lng\":123.55932712554933},{\"lat\":-10.19072067767557,\"lng\":123.5636615753174},{\"lat\":-10.187595026407964,\"lng\":123.5610866546631},{\"lat\":-10.186750250534711,\"lng\":123.55803966522218},{\"lat\":-10.185694277545798,\"lng\":123.55361938476564}]'),
(13, 2, 'Kelapa Lima', '[{\"lat\":-10.151718244634276,\"lng\":123.61063892820053},{\"lat\":-10.15002850087865,\"lng\":123.61789823305752},{\"lat\":-10.149803200607407,\"lng\":123.62018463113125},{\"lat\":-10.14985952601238,\"lng\":123.6230426247986},{\"lat\":-10.151492945552649,\"lng\":123.62298546837911},{\"lat\":-10.15323900638518,\"lng\":123.6235570639727},{\"lat\":-10.156055212331239,\"lng\":123.6245859423209},{\"lat\":-10.159885214067355,\"lng\":123.6152117191149},{\"lat\":-10.161180646017119,\"lng\":123.61081040792523},{\"lat\":-10.159659922027425,\"lng\":123.60909561067824},{\"lat\":-10.154252843536584,\"lng\":123.60618045535828},{\"lat\":-10.153295331185388,\"lng\":123.60600897563359},{\"lat\":-10.152619438085217,\"lng\":123.60600897563359}]'),
(14, 2, 'Lasiana', '[{\"lat\":-10.135172451029344,\"lng\":123.6614227294922},{\"lat\":-10.143621472623044,\"lng\":123.65386962890626},{\"lat\":-10.150380529414885,\"lng\":123.65901947021486},{\"lat\":-10.159167089818945,\"lng\":123.66725921630861},{\"lat\":-10.151394375623681,\"lng\":123.67961883544923},{\"lat\":-10.137538199534136,\"lng\":123.6775588989258},{\"lat\":-10.131454810957583,\"lng\":123.66966247558595}]'),
(15, 2, 'Oesapa', '[{\"lat\":-10.14598715873234,\"lng\":123.6420249938965},{\"lat\":-10.150718478508047,\"lng\":123.64391326904298},{\"lat\":-10.155449728333865,\"lng\":123.65901947021486},{\"lat\":-10.148859754079526,\"lng\":123.6639976501465},{\"lat\":-10.14176270699148,\"lng\":123.6588478088379},{\"lat\":-10.140241890724216,\"lng\":123.65575790405275}]'),
(16, 2, 'Oesapa Barat', '[{\"lat\":-10.146916530635968,\"lng\":123.62425804138185},{\"lat\":-10.149197704778524,\"lng\":123.63181114196779},{\"lat\":-10.14902872947363,\"lng\":123.63842010498048},{\"lat\":-10.14235413358985,\"lng\":123.64099502563478},{\"lat\":-10.141171279301076,\"lng\":123.6281204223633}]'),
(17, 2, 'Oesapa Selatan', '[{\"lat\":-10.149366679994223,\"lng\":123.6379909515381},{\"lat\":-10.149451167568614,\"lng\":123.64554405212404},{\"lat\":-10.150633991268212,\"lng\":123.65386962890626},{\"lat\":-10.153928977091642,\"lng\":123.65301132202148},{\"lat\":-10.163306827881398,\"lng\":123.6423683166504},{\"lat\":-10.155872157951375,\"lng\":123.63661766052246}]'),
(18, 3, 'Air Nona', '[{\"lat\":-10.176908446738627,\"lng\":123.58378887176515},{\"lat\":-10.179949723243661,\"lng\":123.58413219451906},{\"lat\":-10.183286646056665,\"lng\":123.58640670776369},{\"lat\":-10.180329880768763,\"lng\":123.58838081359865},{\"lat\":-10.179823003967973,\"lng\":123.59069824218751},{\"lat\":-10.178935967629071,\"lng\":123.59095573425294},{\"lat\":-10.174965393799352,\"lng\":123.5888957977295},{\"lat\":-10.17378266013281,\"lng\":123.5859775543213},{\"lat\":-10.173993862894616,\"lng\":123.58404636383058}]'),
(19, 3, 'Bakunase', '[{\"lat\":-10.191438728367238,\"lng\":123.58391761779785},{\"lat\":-10.18696144471286,\"lng\":123.58803749084474},{\"lat\":-10.185609799555614,\"lng\":123.58786582946779},{\"lat\":-10.18603218928271,\"lng\":123.59464645385744},{\"lat\":-10.189157855872624,\"lng\":123.59979629516603},{\"lat\":-10.19329720499788,\"lng\":123.59833717346193},{\"lat\":-10.196676225646081,\"lng\":123.58726501464845}]'),
(20, 3, 'Bakunase II', '[{\"lat\":-10.182906492054904,\"lng\":123.5746479034424},{\"lat\":-10.190087102192471,\"lng\":123.57439041137697},{\"lat\":-10.191269775408845,\"lng\":123.57653617858888},{\"lat\":-10.188904424587989,\"lng\":123.58752250671388},{\"lat\":-10.188566515895097,\"lng\":123.59198570251466},{\"lat\":-10.184596061928003,\"lng\":123.59232902526857},{\"lat\":-10.181892745835318,\"lng\":123.59095573425294},{\"lat\":-10.181723787818836,\"lng\":123.5819435119629},{\"lat\":-10.181977224809984,\"lng\":123.5772228240967}]'),
(21, 3, 'Fontein', '[{\"lat\":-10.16347579564311,\"lng\":123.58134269714357},{\"lat\":-10.166939615070435,\"lng\":123.58142852783205},{\"lat\":-10.169727540016373,\"lng\":123.58632087707521},{\"lat\":-10.168502545688348,\"lng\":123.58730792999269},{\"lat\":-10.16660168312069,\"lng\":123.58808040618898},{\"lat\":-10.16402494025177,\"lng\":123.58486175537111}]'),
(22, 3, 'Kuanino', '[{\"lat\":-10.168206856698456,\"lng\":123.58443260192873},{\"lat\":-10.172346477647501,\"lng\":123.59387397766115},{\"lat\":-10.169220646381454,\"lng\":123.59524726867677},{\"lat\":-10.16795340877499,\"lng\":123.59353065490724},{\"lat\":-10.16660168312069,\"lng\":123.58941078186037}]'),
(23, 3, 'Naikoten I', ''),
(24, 3, 'Naikoten II', '[{\"lat\":-10.173444735423319,\"lng\":123.59250068664552},{\"lat\":-10.171839588169238,\"lng\":123.60125541687013},{\"lat\":-10.174711951239676,\"lng\":123.6050319671631},{\"lat\":-10.179611805063315,\"lng\":123.59893798828126},{\"lat\":-10.179189406834663,\"lng\":123.59601974487306}]'),
(25, 3, 'Nunleu', '[{\"lat\":-10.16795340877499,\"lng\":123.58447551727296},{\"lat\":-10.169051681657718,\"lng\":123.58368158340456},{\"lat\":-10.17059348144838,\"lng\":123.58374595642091},{\"lat\":-10.172283116506717,\"lng\":123.58760833740236},{\"lat\":-10.17306456969764,\"lng\":123.59014034271242},{\"lat\":-10.171987431016847,\"lng\":123.59093427658082}]'),
(26, 4, 'Airmata', '[{\"lat\":-10.166221509250018,\"lng\":123.57627868652345},{\"lat\":-10.170234432846865,\"lng\":123.57739448547365},{\"lat\":-10.17002322759859,\"lng\":123.58009815216066},{\"lat\":-10.16778444338097,\"lng\":123.58057022094728},{\"lat\":-10.165123226638267,\"lng\":123.57773780822755},{\"lat\":-10.163771489011177,\"lng\":123.57709407806398},{\"lat\":-10.163729247118212,\"lng\":123.57563495635988}]'),
(27, 4, 'Bonipoi', '[{\"lat\":-10.159927453890045,\"lng\":123.57713699340822},{\"lat\":-10.163940456527238,\"lng\":123.57928276062013},{\"lat\":-10.164193907633827,\"lng\":123.58267307281496},{\"lat\":-10.162250777346859,\"lng\":123.58310222625734},{\"lat\":-10.158744664553694,\"lng\":123.58035564422609},{\"lat\":-10.158364481337829,\"lng\":123.57988357543947}]'),
(28, 4, 'Fatubesi', '[{\"lat\":-10.1561256154541,\"lng\":123.58928203582765},{\"lat\":-10.158364481337829,\"lng\":123.59155654907228},{\"lat\":-10.158786907105327,\"lng\":123.59601974487306},{\"lat\":-10.159251574805038,\"lng\":123.59936714172365},{\"lat\":-10.157012715131877,\"lng\":123.60198497772218},{\"lat\":-10.152915138913897,\"lng\":123.59915256500246},{\"lat\":-10.154013463461428,\"lng\":123.59451770782472},{\"lat\":-10.152999625551423,\"lng\":123.59361648559572},{\"lat\":-10.15397122027932,\"lng\":123.59164237976076},{\"lat\":-10.152957382235453,\"lng\":123.59082698822023},{\"lat\":-10.152281488421375,\"lng\":123.59250068664552},{\"lat\":-10.151774567123837,\"lng\":123.5920286178589},{\"lat\":-10.153084112166635,\"lng\":123.58928203582765},{\"lat\":-10.154858325932077,\"lng\":123.59009742736818}]'),
(29, 4, 'Lai-lai bisi kopan', '[{\"lat\":-10.16163826643815,\"lng\":123.57537746429445},{\"lat\":-10.163391311773418,\"lng\":123.5776734352112},{\"lat\":-10.161955082571945,\"lng\":123.5794758796692},{\"lat\":-10.16032875642074,\"lng\":123.5785746574402},{\"lat\":-10.159758484252734,\"lng\":123.57818841934206}]'),
(30, 4, 'Merdeka', '[{\"lat\":-10.162377503595238,\"lng\":123.58280181884767},{\"lat\":-10.16039211993218,\"lng\":123.5861921310425},{\"lat\":-10.160476604594557,\"lng\":123.58829498291017},{\"lat\":-10.162673197979377,\"lng\":123.58876705169679},{\"lat\":-10.163729247118212,\"lng\":123.58550548553468},{\"lat\":-10.164109423953962,\"lng\":123.58293056488039}]'),
(31, 4, 'Nefonaek', '[{\"lat\":-10.15502729815845,\"lng\":123.6012125015259},{\"lat\":-10.152915138913897,\"lng\":123.60528945922853},{\"lat\":-10.154858325932077,\"lng\":123.60769271850587},{\"lat\":-10.159505029629342,\"lng\":123.60945224761964},{\"lat\":-10.159969696285412,\"lng\":123.6012125015259}]'),
(32, 4, 'Oeba', '[{\"lat\":-10.159927453890045,\"lng\":123.58949661254884},{\"lat\":-10.158237753498751,\"lng\":123.59181404113771},{\"lat\":-10.158237753498751,\"lng\":123.59481811523439},{\"lat\":-10.15942054471023,\"lng\":123.59885215759279},{\"lat\":-10.16305337607132,\"lng\":123.59653472900392},{\"lat\":-10.162715440011919,\"lng\":123.5900115966797}]'),
(33, 4, 'Pasir Panjang', '[{\"lat\":-10.153253085330126,\"lng\":123.59833717346193},{\"lat\":-10.154773839785424,\"lng\":123.5991954803467},{\"lat\":-10.154773839785424,\"lng\":123.6064910888672},{\"lat\":-10.15240821862027,\"lng\":123.61215591430665},{\"lat\":-10.147001018857067,\"lng\":123.61533164978027},{\"lat\":-10.145226761531857,\"lng\":123.61515998840333},{\"lat\":-10.144804317862414,\"lng\":123.61318588256837}]'),
(34, 4, 'Solor', '[{\"lat\":-10.15912484731754,\"lng\":123.57962608337404},{\"lat\":-10.160561089234593,\"lng\":123.58052730560304},{\"lat\":-10.161067996606047,\"lng\":123.58314514160158},{\"lat\":-10.159167089818945,\"lng\":123.58464717864992},{\"lat\":-10.157308414477681,\"lng\":123.58443260192873},{\"lat\":-10.157054957912306,\"lng\":123.58190059661867}]'),
(35, 4, 'Tode Kisar', '[{\"lat\":-10.157012715131877,\"lng\":123.5823941230774},{\"lat\":-10.160307635247475,\"lng\":123.58438968658449},{\"lat\":-10.16015978699553,\"lng\":123.58569860458375},{\"lat\":-10.159230453560609,\"lng\":123.58651399612428},{\"lat\":-10.156843743954388,\"lng\":123.5851836204529},{\"lat\":-10.156526922755967,\"lng\":123.58342409133913},{\"lat\":-10.156548044178953,\"lng\":123.58280181884767}]'),
(36, 5, 'Bello', '[{\"lat\":-10.215678674934807,\"lng\":123.62121583077655},{\"lat\":-10.211932169322267,\"lng\":123.63493124571332},{\"lat\":-10.222047640352196,\"lng\":123.63721713425078},{\"lat\":-10.231413518294186,\"lng\":123.63531222016023},{\"lat\":-10.229165725371658,\"lng\":123.6231207448671}]'),
(37, 5, 'Fatukoa', '[{\"lat\":-10.238803222211398,\"lng\":123.60407313514041},{\"lat\":-10.253600408821372,\"lng\":123.60750198887463},{\"lat\":-10.2522892950995,\"lng\":123.61778855007722},{\"lat\":-10.248355911088,\"lng\":123.62731314145799},{\"lat\":-10.23899053320769,\"lng\":123.62655117163614},{\"lat\":-10.234869676030552,\"lng\":123.61702658025538},{\"lat\":-10.234120426794899,\"lng\":123.6103593600104}]'),
(38, 5, 'Kolhua', '[{\"lat\":-10.200870946633675,\"lng\":123.62989887542052},{\"lat\":-10.194501567588189,\"lng\":123.64142363496757},{\"lat\":-10.200870946633675,\"lng\":123.64742412900242},{\"lat\":-10.207427530448882,\"lng\":123.64742412900242},{\"lat\":-10.209019819931314,\"lng\":123.6404711779223},{\"lat\":-10.208926158183274,\"lng\":123.6338992117531}]'),
(39, 5, 'Maulafa', '[{\"lat\":-10.188701239210605,\"lng\":123.61579810699997},{\"lat\":-10.184298718388947,\"lng\":123.62132236204816},{\"lat\":-10.181863255831226,\"lng\":123.62703712524781},{\"lat\":-10.188139217018454,\"lng\":123.63170417732648},{\"lat\":-10.19613386383779,\"lng\":123.64096089147124},{\"lat\":-10.200979199636425,\"lng\":123.62762797257028}]'),
(40, 5, 'Naikolan', '[{\"lat\":-10.189109496516751,\"lng\":123.59739881007857},{\"lat\":-10.193792957385122,\"lng\":123.59787503860119},{\"lat\":-10.199413016984439,\"lng\":123.60330406050169},{\"lat\":-10.190139864069907,\"lng\":123.61425733745037},{\"lat\":-10.187048753992467,\"lng\":123.61073324010447},{\"lat\":-10.183489255222613,\"lng\":123.60663767062417}]'),
(41, 5, 'Naimata', '[{\"lat\":-10.200748888707835,\"lng\":123.62963341703077},{\"lat\":-10.195503528605727,\"lng\":123.65439738392004},{\"lat\":-10.207118153076806,\"lng\":123.6620170402822},{\"lat\":-10.215735173226856,\"lng\":123.64753967645164},{\"lat\":-10.212363321789853,\"lng\":123.63191934742431}]'),
(42, 5, 'Oepura', '[{\"lat\":-10.186473363233631,\"lng\":123.60509878758322},{\"lat\":-10.189377141349315,\"lng\":123.60552739429997},{\"lat\":-10.193358082202655,\"lng\":123.60838477066781},{\"lat\":-10.192702401701448,\"lng\":123.61300420094065},{\"lat\":-10.19218722248331,\"lng\":123.61881420252},{\"lat\":-10.190875855313914,\"lng\":123.62133822101481},{\"lat\":-10.182867023333252,\"lng\":123.61338518585151}]'),
(43, 5, 'Penfui', '[{\"lat\":-10.164820711440647,\"lng\":123.64660008794911},{\"lat\":-10.160324180118653,\"lng\":123.6671732103543},{\"lat\":-10.16669424662882,\"lng\":123.67364994337579},{\"lat\":-10.18261884939182,\"lng\":123.66907812444485},{\"lat\":-10.1901124960295,\"lng\":123.65060042428169}]'),
(44, 5, 'Sikumana', '[{\"lat\":-10.201352264008435,\"lng\":123.59744442286384},{\"lat\":-10.196294244855451,\"lng\":123.60201622086672},{\"lat\":-10.196481580902288,\"lng\":123.61516017413322},{\"lat\":-10.204724232140167,\"lng\":123.61687460100033},{\"lat\":-10.20847082264344,\"lng\":123.61935099768921},{\"lat\":-10.213528648294808,\"lng\":123.61173132039903},{\"lat\":-10.209407465949031,\"lng\":123.60125425104495}]'),
(45, 6, 'Fatululi', '[{\"lat\":-10.158431909137938,\"lng\":123.60304085354032},{\"lat\":-10.162928464504354,\"lng\":123.60323135122779},{\"lat\":-10.165738777235527,\"lng\":123.60618397643934},{\"lat\":-10.164052591533245,\"lng\":123.61542282652093},{\"lat\":-10.158525588287796,\"lng\":123.61456561308738},{\"lat\":-10.157588798127332,\"lng\":123.60999380462044}]'),
(46, 6, 'Kayu Putih', '[{\"lat\":-10.163711462887555,\"lng\":123.61340845395286},{\"lat\":-10.162212622655407,\"lng\":123.61807550603154},{\"lat\":-10.161463199903727,\"lng\":123.62474272627648},{\"lat\":-10.167739564716218,\"lng\":123.62445698497729},{\"lat\":-10.171205563736331,\"lng\":123.61883747585334},{\"lat\":-10.169894107749563,\"lng\":123.61445616507389},{\"lat\":-10.16661544808474,\"lng\":123.61340845395286}]'),
(47, 6, 'Liliba', '[{\"lat\":-10.155376685081405,\"lng\":123.63440259082624},{\"lat\":-10.156875557359335,\"lng\":123.6324976767357},{\"lat\":-10.166430707457758,\"lng\":123.6293545643007},{\"lat\":-10.170833472189603,\"lng\":123.6289735793898},{\"lat\":-10.171676548257848,\"lng\":123.63973636911501},{\"lat\":-10.167742175090826,\"lng\":123.64002211041424},{\"lat\":-10.156594518377396,\"lng\":123.6372599724261},{\"lat\":-10.155376685081405,\"lng\":123.63583128685822}]'),
(48, 6, 'Oebobo', '[{\"lat\":-10.165654100411162,\"lng\":123.59612774105561},{\"lat\":-10.16968217517548,\"lng\":123.59688971087745},{\"lat\":-10.173429177538091,\"lng\":123.59946135117809},{\"lat\":-10.171555681852396,\"lng\":123.6031759462115},{\"lat\":-10.168745417715913,\"lng\":123.60365217473415},{\"lat\":-10.16499836040927,\"lng\":123.60041380822337}]'),
(49, 6, 'Oebufu', '[{\"lat\":-10.167049851804173,\"lng\":123.62157029295544},{\"lat\":-10.17009431902025,\"lng\":123.62071307952189},{\"lat\":-10.175152753749483,\"lng\":123.62280849129993},{\"lat\":-10.178009798206396,\"lng\":123.62361808292758},{\"lat\":-10.175433775122508,\"lng\":123.62718980207939},{\"lat\":-10.169719615820473,\"lng\":123.62633258864584},{\"lat\":-10.167003013481835,\"lng\":123.62838037861798},{\"lat\":-10.165176318701109,\"lng\":123.62718980207939}]'),
(50, 6, 'Oelete', ''),
(51, 6, 'Tuak Daun Merah', '[{\"lat\":-10.15585427779075,\"lng\":123.62577093054144},{\"lat\":-10.155666917898634,\"lng\":123.63005699770919},{\"lat\":-10.155385880427675,\"lng\":123.63339059736762},{\"lat\":-10.164472688427018,\"lng\":123.63024748493261},{\"lat\":-10.17168574313515,\"lng\":123.62815207315461},{\"lat\":-10.167001960318554,\"lng\":123.624532732197},{\"lat\":-10.156791073032023,\"lng\":123.62519944794306}]');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `jenis` tinyint(1) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_puskesmas`, `jenis`, `id_tahun`, `jumlah`) VALUES
(1, 1, 0, 1, 3),
(2, 1, 1, 1, 0),
(3, 1, 0, 2, 5),
(4, 1, 1, 2, 0),
(5, 1, 0, 3, 10),
(6, 1, 1, 3, 0),
(7, 2, 0, 1, 1),
(8, 2, 1, 1, 0),
(9, 2, 0, 2, 1),
(10, 2, 1, 2, 0),
(11, 2, 0, 3, 5),
(12, 2, 1, 3, 0),
(13, 3, 0, 1, 0),
(14, 3, 1, 1, 0),
(15, 3, 0, 2, 0),
(16, 3, 1, 2, 0),
(17, 3, 0, 3, 13),
(18, 3, 1, 3, 1),
(25, 5, 0, 1, 0),
(26, 5, 1, 1, 0),
(27, 5, 0, 2, 1),
(28, 5, 1, 2, 0),
(29, 5, 0, 3, 11),
(30, 5, 1, 3, 0),
(31, 6, 0, 1, 0),
(32, 6, 1, 1, 0),
(33, 6, 0, 2, 1),
(34, 6, 1, 2, 0),
(35, 6, 0, 3, 4),
(36, 6, 1, 3, 0),
(37, 7, 0, 1, 0),
(38, 7, 1, 1, 0),
(39, 7, 0, 2, 2),
(40, 7, 1, 2, 0),
(41, 7, 0, 3, 11),
(42, 7, 1, 3, 0),
(43, 8, 0, 1, 2),
(44, 8, 1, 1, 0),
(45, 8, 0, 2, 0),
(46, 8, 1, 2, 0),
(47, 8, 0, 3, 7),
(48, 8, 1, 3, 0),
(49, 9, 0, 1, 1),
(50, 9, 1, 1, 0),
(51, 9, 0, 2, 2),
(52, 9, 1, 2, 0),
(53, 9, 0, 3, 8),
(54, 9, 1, 3, 0),
(55, 10, 0, 1, 2),
(56, 10, 1, 1, 0),
(57, 10, 0, 2, 3),
(58, 10, 1, 2, 0),
(59, 10, 0, 3, 6),
(60, 10, 1, 3, 0),
(61, 11, 0, 1, 1),
(62, 11, 1, 1, 0),
(63, 11, 0, 2, 2),
(64, 11, 1, 2, 0),
(65, 11, 0, 3, 9),
(66, 11, 1, 3, 0),
(67, 12, 0, 1, 1),
(68, 12, 1, 1, 0),
(69, 12, 0, 2, 2),
(70, 12, 1, 2, 0),
(71, 12, 0, 3, 5),
(72, 12, 1, 3, 0),
(73, 13, 0, 1, 0),
(74, 13, 1, 1, 0),
(75, 13, 0, 2, 1),
(76, 13, 1, 2, 0),
(77, 13, 0, 3, 6),
(78, 13, 1, 3, 1),
(79, 14, 0, 1, 3),
(80, 14, 1, 1, 0),
(81, 14, 0, 2, 10),
(82, 14, 1, 2, 1),
(83, 14, 0, 3, 38),
(84, 14, 1, 3, 0),
(85, 15, 0, 1, 8),
(86, 15, 1, 1, 0),
(87, 15, 0, 2, 6),
(88, 15, 1, 2, 0),
(89, 15, 0, 3, 39),
(90, 15, 1, 3, 0),
(91, 16, 0, 1, 9),
(92, 16, 1, 1, 0),
(93, 16, 0, 2, 23),
(94, 16, 1, 2, 1),
(95, 16, 0, 3, 31),
(96, 16, 1, 3, 0),
(97, 17, 0, 1, 3),
(98, 17, 1, 1, 0),
(99, 17, 0, 2, 9),
(100, 17, 1, 2, 0),
(101, 17, 0, 3, 17),
(102, 17, 1, 3, 0),
(103, 18, 0, 1, 2),
(104, 18, 1, 1, 0),
(105, 18, 0, 2, 5),
(106, 18, 1, 2, 0),
(107, 18, 0, 3, 20),
(108, 18, 1, 3, 0),
(109, 19, 0, 1, 2),
(110, 19, 1, 1, 0),
(111, 19, 0, 2, 5),
(112, 19, 1, 2, 0),
(113, 19, 0, 3, 21),
(114, 19, 1, 3, 0),
(115, 20, 0, 1, 3),
(116, 20, 1, 1, 0),
(117, 20, 0, 2, 0),
(118, 20, 1, 2, 0),
(119, 20, 0, 3, 5),
(120, 20, 1, 3, 0),
(121, 21, 0, 1, 5),
(122, 21, 1, 1, 0),
(123, 21, 0, 2, 0),
(124, 21, 1, 2, 0),
(125, 21, 0, 3, 7),
(126, 21, 1, 3, 0),
(127, 22, 0, 1, 5),
(128, 22, 1, 1, 0),
(129, 22, 0, 2, 4),
(130, 22, 1, 2, 0),
(131, 22, 0, 3, 5),
(132, 22, 1, 3, 0),
(133, 23, 0, 1, 0),
(134, 23, 1, 1, 0),
(135, 23, 0, 2, 1),
(136, 23, 1, 2, 0),
(137, 23, 0, 3, 1),
(138, 23, 1, 3, 0),
(139, 24, 0, 1, 0),
(140, 24, 1, 1, 0),
(141, 24, 0, 2, 0),
(142, 24, 1, 2, 0),
(143, 24, 0, 3, 9),
(144, 24, 1, 3, 0),
(145, 25, 0, 1, 0),
(146, 25, 1, 1, 0),
(147, 25, 0, 2, 5),
(148, 25, 1, 2, 0),
(149, 25, 0, 3, 8),
(150, 25, 1, 3, 0),
(151, 26, 0, 1, 0),
(152, 26, 1, 1, 0),
(153, 26, 0, 2, 4),
(154, 26, 1, 2, 1),
(155, 26, 0, 3, 5),
(156, 26, 1, 3, 0),
(157, 27, 0, 1, 0),
(158, 27, 1, 1, 0),
(159, 27, 0, 2, 0),
(160, 27, 1, 2, 0),
(161, 27, 0, 3, 2),
(162, 27, 1, 3, 0),
(163, 28, 0, 1, 0),
(164, 28, 1, 1, 0),
(165, 28, 0, 2, 0),
(166, 28, 1, 2, 0),
(167, 28, 0, 3, 3),
(168, 28, 1, 3, 0),
(169, 29, 0, 1, 2),
(170, 29, 1, 1, 0),
(171, 29, 0, 2, 2),
(172, 29, 1, 2, 0),
(173, 29, 0, 3, 13),
(174, 29, 1, 3, 0),
(175, 30, 0, 1, 0),
(176, 30, 1, 1, 0),
(177, 30, 0, 2, 0),
(178, 30, 1, 2, 0),
(179, 30, 0, 3, 2),
(180, 30, 1, 3, 0),
(181, 31, 0, 1, 1),
(182, 31, 1, 1, 0),
(183, 31, 0, 2, 0),
(184, 31, 1, 2, 0),
(185, 31, 0, 3, 3),
(186, 31, 1, 3, 1),
(187, 32, 0, 1, 4),
(188, 32, 1, 1, 0),
(189, 32, 0, 2, 5),
(190, 32, 1, 2, 0),
(191, 32, 0, 3, 10),
(192, 32, 1, 3, 0),
(193, 33, 0, 1, 4),
(194, 33, 1, 1, 0),
(195, 33, 0, 2, 4),
(196, 33, 1, 2, 0),
(197, 33, 0, 3, 11),
(198, 33, 1, 3, 0),
(199, 34, 0, 1, 1),
(200, 34, 1, 1, 0),
(201, 34, 0, 2, 3),
(202, 34, 1, 2, 0),
(203, 34, 0, 3, 18),
(204, 34, 1, 3, 0),
(205, 35, 0, 1, 1),
(206, 35, 1, 1, 0),
(207, 35, 0, 2, 1),
(208, 35, 1, 2, 0),
(209, 35, 0, 3, 6),
(210, 35, 1, 3, 0),
(211, 36, 0, 1, 1),
(212, 36, 1, 1, 0),
(213, 36, 0, 2, 3),
(214, 36, 1, 2, 0),
(215, 36, 0, 3, 11),
(216, 36, 1, 3, 0),
(217, 37, 0, 1, 4),
(218, 37, 1, 1, 0),
(219, 37, 0, 2, 3),
(220, 37, 1, 2, 0),
(221, 37, 0, 3, 8),
(222, 37, 1, 3, 0),
(223, 38, 0, 1, 5),
(224, 38, 1, 1, 0),
(225, 38, 0, 2, 4),
(226, 38, 1, 2, 0),
(227, 38, 0, 3, 5),
(228, 38, 1, 3, 0),
(229, 39, 0, 1, 3),
(230, 39, 1, 1, 0),
(231, 39, 0, 2, 3),
(232, 39, 1, 2, 0),
(233, 39, 0, 3, 19),
(234, 39, 1, 3, 0),
(241, 40, 0, 1, 2),
(242, 40, 1, 1, 0),
(243, 40, 0, 2, 5),
(244, 40, 1, 2, 0),
(245, 40, 0, 3, 9),
(246, 40, 1, 3, 0),
(247, 41, 0, 1, 2),
(248, 41, 1, 1, 0),
(249, 41, 0, 2, 7),
(250, 41, 1, 2, 0),
(251, 41, 0, 3, 12),
(252, 41, 1, 3, 0),
(253, 42, 0, 1, 4),
(254, 42, 1, 1, 0),
(255, 42, 0, 2, 12),
(256, 42, 1, 2, 0),
(257, 42, 0, 3, 16),
(258, 42, 1, 3, 1),
(259, 43, 0, 1, 2),
(260, 43, 1, 1, 0),
(261, 43, 0, 2, 4),
(262, 43, 1, 2, 0),
(263, 43, 0, 3, 30),
(264, 43, 1, 3, 1),
(265, 44, 0, 1, 10),
(266, 44, 1, 1, 0),
(267, 44, 0, 2, 6),
(268, 44, 1, 2, 1),
(269, 44, 0, 3, 18),
(270, 44, 1, 3, 0),
(271, 45, 0, 1, 1),
(272, 45, 1, 1, 0),
(273, 45, 0, 2, 8),
(274, 45, 1, 2, 0),
(275, 45, 0, 3, 22),
(276, 45, 1, 3, 0),
(277, 46, 0, 1, 7),
(278, 46, 1, 1, 0),
(279, 46, 0, 2, 11),
(280, 46, 1, 2, 0),
(281, 46, 0, 3, 21),
(282, 46, 1, 3, 0),
(283, 47, 0, 1, 0),
(284, 47, 1, 1, 0),
(285, 47, 0, 2, 3),
(286, 47, 1, 2, 0),
(287, 47, 0, 3, 30),
(288, 47, 1, 3, 1),
(289, 48, 0, 1, 2),
(290, 48, 1, 1, 0),
(291, 48, 0, 2, 16),
(292, 48, 1, 2, 0),
(293, 48, 0, 3, 34),
(294, 48, 1, 3, 0),
(295, 49, 0, 1, 11),
(296, 49, 1, 1, 0),
(297, 49, 0, 2, 13),
(298, 49, 1, 2, 0),
(299, 49, 0, 3, 15),
(300, 49, 1, 3, 0),
(301, 50, 0, 1, 2),
(302, 50, 1, 1, 1),
(303, 50, 0, 2, 3),
(304, 50, 1, 2, 0),
(305, 50, 0, 3, 10),
(306, 50, 1, 3, 0),
(307, 51, 0, 1, 3),
(308, 51, 1, 1, 1),
(309, 51, 0, 2, 12),
(310, 51, 1, 2, 0),
(311, 51, 0, 3, 22),
(312, 51, 1, 3, 1),
(313, 52, 0, 1, 6),
(314, 52, 1, 1, 1),
(315, 52, 0, 2, 14),
(316, 52, 1, 2, 0),
(317, 52, 0, 3, 22),
(318, 52, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `puskesmas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `id_kecamatan`, `id_kelurahan`, `puskesmas`) VALUES
(1, 1, 1, 'Alak'),
(2, 1, 2, 'Naioni'),
(3, 1, 3, 'Manutapen'),
(5, 1, 4, 'Manutapen'),
(6, 1, 5, 'Naioni'),
(7, 1, 6, 'Manutapen'),
(8, 1, 7, 'Naioni'),
(9, 1, 8, 'Alak'),
(10, 1, 9, 'Alak'),
(11, 1, 10, 'Alak'),
(12, 1, 11, 'Alak'),
(13, 1, 12, 'Alak'),
(14, 2, 13, 'Oesapa'),
(15, 2, 14, 'Oesapa'),
(16, 2, 15, 'Oesapa'),
(17, 2, 16, 'Oesapa'),
(18, 2, 17, 'Oesapa'),
(19, 3, 18, 'Bakunase'),
(20, 3, 19, 'Bakunase'),
(21, 3, 20, 'Bakunase'),
(22, 3, 21, 'Bakunase'),
(23, 3, 22, 'Kota Raja'),
(24, 3, 23, 'Bakunase'),
(25, 3, 24, 'Bakunase'),
(26, 3, 25, 'Bakunase'),
(27, 4, 26, 'Kota Kupang'),
(28, 4, 27, 'Kota Kupang'),
(29, 4, 28, 'P Panjang'),
(30, 4, 29, 'Kota Kupang'),
(31, 4, 30, 'Kota Kupang'),
(32, 4, 31, 'P Panjang'),
(33, 4, 32, 'P Panjang'),
(34, 4, 33, 'P Panjang'),
(35, 4, 34, 'Kota Kupang'),
(36, 4, 35, 'P Panjang'),
(37, 5, 36, 'Sikumana'),
(38, 5, 37, 'Sikumana'),
(39, 5, 38, 'Sikumana'),
(40, 5, 39, 'Penfui'),
(41, 5, 40, 'Sikumana'),
(42, 5, 41, 'Penfui'),
(43, 5, 42, 'Sikumana'),
(44, 5, 43, 'Penfui'),
(45, 5, 44, 'Sikumana'),
(46, 6, 45, 'Oebobo'),
(47, 6, 46, 'Oepoi'),
(48, 6, 47, 'Oepoi'),
(49, 6, 48, 'Oebobo'),
(50, 6, 49, 'Oepoi'),
(51, 6, 50, 'Oebobo'),
(52, 6, 51, 'Oepoi');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, 2017),
(2, 2018),
(3, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `centroid`
--
ALTER TABLE `centroid`
  ADD PRIMARY KEY (`id_centroid`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_puskesmas` (`id_puskesmas`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid`
--
ALTER TABLE `centroid`
  MODIFY `id_centroid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_puskesmas`) REFERENCES `puskesmas` (`id_puskesmas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD CONSTRAINT `puskesmas_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puskesmas_ibfk_2` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;