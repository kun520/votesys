create database votedb;
use votedb;

#ѡ���
create table item(
	id bigint unsigned primary key auto_increment,
	name varchar(64) not null,
	description varchar(128) not null,
	vote_count bigint unsigned
) engine MyISAM;

#ͶƱ��־��
create table vote_log(
	id bigint unsigned primary key auto_increment,
	ip varchar(20) not null,
	vote_date bigint not null,
	item_id bigint unsigned not null
) engine MyISAM;


#����ip�ı�
create table filter(
	id bigint unsigned primary key auto_increment,
	ip varchar(20) not null
) engine MyISAM;