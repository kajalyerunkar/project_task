create table client(

	us_id int auto_increment primary key,
	us_name varchar(100),
	us_mobile bigint,
	us_email varchar(100),
	us_password varchar(100),
	us_time timestamp

);

create table groups(

	grp_id int auto_increment primary key,
	grp_name varchar(100)
);
create table library(

	lib_id int auto_increment primary key,
	lib_name varchar(100)
);
create table msg(
	msg_id int auto_increment primary key,
	msg_libid int,
	msg longtext

);

create table contact(

	cnt_id int auto_increment primary key,
	cnt_grp int,
	cnt_name varchar(100),
	cnt_num bigint
);