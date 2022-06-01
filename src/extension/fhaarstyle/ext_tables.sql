#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
  header text DEFAULT '' NOT NULL,
  row_space_class VARCHAR(255) DEFAULT '' NOT NULL,
    row_item_class VARCHAR(255) DEFAULT '' NOT NULL,

	col_1_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_md_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_1_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

  col_2_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_md_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_2_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

  col_3_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_md_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_3_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

  col_4_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_sm_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_md_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_lg_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_xl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_xxl_class VARCHAR(255) DEFAULT '' NOT NULL,
  col_4_custom_class VARCHAR(255) DEFAULT '' NOT NULL,

  parallax tinyint(4) DEFAULT '0' NOT NULL,
  parallaxoption VARCHAR(255) DEFAULT '' NOT NULL,
  animatecss VARCHAR(255) DEFAULT '' NOT NULL,

  space_start_class VARCHAR(255) DEFAULT '' NOT NULL,
  space_end_class VARCHAR(255) DEFAULT '' NOT NULL,
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
