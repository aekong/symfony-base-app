drop database if exists test_db;
create database test_db;
\c test_db
drop table if exists test_table;
create table test_table (
  id bigserial primary key,
  first_name varchar(255) not null,
  last_name varchar(255) not null
);
insert into test_table (first_name, last_name) values ('Peter', 'Parker');
insert into test_table (first_name, last_name) values ('Steve', 'Rogers');
insert into test_table (first_name, last_name) values ('Tony', 'Stark');