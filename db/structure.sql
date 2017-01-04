drop table if exists t_offers;

create table t_offers (
id integer not null primary key auto_increment,
title varchar(100) not null,
content varchar(2000) not null,
date_publication datetime not null,
region varchar(50)
) engine=innodb character set utf8 collate utf8_unicode_ci;
