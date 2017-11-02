-- 創建數據庫
create database mydatabase;

-- 創建數據庫(指定字符集)
create database mydatabase2 charset gbk;

-- 顯示所有數據庫
show databases;

-- 查看以 my 開頭的數據庫
show databases like "my%";

-- 查看以 my 開頭，後面第一個字母不確定，最後為 database 結尾的數據庫
show databases like "m_database";

-- 查看以 database 結尾的數據庫
show databases like "%database";

-- 查看數據庫創建語句
show create database mydatabase;

-- 選擇數據庫
use mydatabase;

-- 修改數據庫字符集
alter database mydatabase2 charset gbk;

-- 刪除數據庫
drop database mydatabase2;



-- 創建數據表
create table class(
-- 字段名 字段類型
name varchar(10) -- 10個字符(不能超過)
);

-- 將數據表挂到數據庫下
create table mydatabase2.class(name varchar(10));

-- 進入數據庫，創建表
use database mydatabase;
create table class(name varchar(10));

-- 使用表選項
create table student(name varchar(10))engine [=] innodb/myisam charset utf8;

-- 在 test 數據庫下創建一個與 teacher 一樣的表
use test;
create table teacher like mydatabase.teacher;

-- 查看所有表
show tables;

-- 查看匹配的數據表(c開頭)
show tables like "c%";

-- 顯示表結構
describe class;
desc teacher;
show columns from student;

-- 查看表創建語句
show table table student;

-- MySQL 結束語句
-- ; 和 \g 效果一樣，都是字段在上排橫著，下面跟對應的數據
-- \G 字段在左側竪著，數據在右側橫著

-- 修改表选项
alter table student charset utf8;

-- 数据库中数据表名字通常有前缀，取数据库的前两个字母加上下划线
rename table student to my_student;

-- 增加字段
alter table my_student add column age int;

-- 增加字段，放在第一个字段位子
alter table my_student add column id int first;

-- 修改字段名
alter table my_student change age my_age int;

-- 修改字段类型
alter table my_student modify name varchar(15);

-- 删除字段
alter table my_student drop my_age;

-- 删除表名
drop table class [, student];

-- 插入数据到数据表
create table teacher(name varchar(10), age int) charset utf8;

insert into teacher (name, age) values("lise", 18);
insert into teacher (age, name) values(12, 'lili');
insert into teacher (name) values("Tomy");

-- 向表中所有数据插入字段
insert into teacher values("ksm", 18);

-- 获取所有数据
select * from teacher;

-- 获取指定字段数据
select name from teacher;

-- 获取年龄为 18 岁的人的名字
select name where age = 18;

-- 删除操作(如果没有where条件，意味着系统会自动删除该表所以数据，慎用)
delete from teacher where name = "lili";

-- 更新年龄
update teacher set age = 24 where name = "Tomy";