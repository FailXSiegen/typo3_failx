#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
  header text DEFAULT '' NOT NULL
);

#
# Table structure for table 'pages'
#
CREATE TABLE pages (
  fa_icon_name varchar(255) DEFAULT '' NOT NULL
);

#
# Table structure for table 'sys_file_reference'
#
CREATE TABLE sys_file_reference (
  shadow tinyint(4) DEFAULT 0 NOT NULL
);
