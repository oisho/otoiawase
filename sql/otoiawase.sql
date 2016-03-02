create database otoiawase;

grant all on otoiawase.* to otoiawase@localhost identified by '80f54727';

use otoiawase

create table contents (
  id int not null auto_increment primary key,
  name varchar(255),
  email varchar(255),
  opinion varchar(2000),
  created datetime
);

desc contents;