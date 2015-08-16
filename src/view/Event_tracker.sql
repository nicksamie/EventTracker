create database eventtracker
use eventtracker

create table user
(
	firstname varchar (30),
	lastname varchar(30),
	orgname varchar(50),
	email varchar (50),
	password varchar(50),
	user_role varchar (20),
	user_id int not null auto_increment primary key
)
select * from user

create table event
(
org_id int not null primary key,
category_id int,
event_name varchar(30),
event_date varchar(30),
event_time time,
event_venue varchar(100),
event_detail varchar(500),
foreign key (org_id) references user (user_id),
foreign key (category_id) references category (category_id)
);

select * from event

create table category
(
category_id int not null primary key,
category_name varchar(50)
);

select * from category

create table organizer
(
user_id int,
org_id int,
org_name varchar (200),
url varchar (200),
detail varchar (200),
foreign key (user_id) references users (user_id),
foreign key (org_id) references event (org_id),
)
select * from organizer