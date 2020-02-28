DROP DATABASE IF EXISTS assignment1;
CREATE DATABASE assignment1;

create table image
(
    img_id      int auto_increment
        primary key,
    header      varchar(50)  not null,
    description varchar(255) not null,
    username    varchar(100) not null,
    img         longblob     not null
);

create table user
(
    user_id  int auto_increment
        primary key,
    username varchar(100) not null,
    password varchar(100) not null
); 
