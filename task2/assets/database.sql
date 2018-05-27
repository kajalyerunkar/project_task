create table userinfo(

	us_id int auto_increment primary key,
	us_name varchar(100),
	us_email varchar(100),
	us_dob bigint,
	us_password varchar(100),
	us_time timestamp

);

create table categories(

	ca_id int auto_increment primary key,
	ca_name varchar(100)

);

create table items(
	pro_id int auto_increment,
	pro_name text, 
	pro_price numeric,
	pro_discount tinyint,
	pro_description longtext,
	pro_caid int,
	pro_path text,
	pro_time timestamp,
	primary key(pro_id)
);

insert into items values ('','watches',1500.00,80,'branded watches',1,'a.jpg','');
insert into items values ('','jewellry',1000.00,80,'jewellry',2,'b.jpg','');
insert into items values ('','mens jewellry',2000.00,80,'ring',3,'e.jpg','');

