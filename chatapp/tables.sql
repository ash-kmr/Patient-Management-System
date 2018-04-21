-- Table structure for table `chatters`
CREATE TABLE IF NOT EXISTS `chatters` (
  `name` varchar(20) NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Table structure for table `messages`
CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;