create database votedb;
use votedb;

#选项表
create table item(
	id bigint unsigned primary key auto_increment,
	name varchar(64) not null,
	description varchar(128) not null,
	vote_count bigint unsigned
) engine MyISAM;

#投票日志表
create table vote_log(
	id bigint unsigned primary key auto_increment,
	ip varchar(20) not null,
	vote_date bigint not null,
	item_id bigint unsigned not null
) engine MyISAM;


#过滤ip的表
create table filter(
	id bigint unsigned primary key auto_increment,
	ip varchar(20) not null
) engine MyISAM;