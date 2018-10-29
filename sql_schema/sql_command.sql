use travel;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";

create table country(

);
--insert coutry data

create table city(

);
--insert city data
-- not yep finish, own coutry and city
create table user(
    u_id varchar(20) NOT NULL,
    user_name varchar(50) NOT NULL,
    email varbinary(255) NOT NULL,
    phone_num varbinary(30000) NOT NULL,
    pwd varbinary(30000) NOT NULL,
    last_name varchar(20) NOT NULL,
    first_name varchar(30) NOT NULL,
    yob YEAR(4) NOT NULL,
    gender tinyint(1) NOT NULL,
    country_id ??,
    city ??
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table plan(
    plan_id varchar(20) NOT NULL,
    title varchar(100) not null,
    country_id ?? not null,
    route json,
    est_days double(5,1) not null,
    start_date TIMESTAMP not null,
    end-date TIMESTAMP not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table commentLevel(
    cl_id tinyint(1) not null AUTO_INCREMENT,
    txt_level varchar(30) not null
);
--insert commentlevel
insert into commentLevel(txt_level) values("Excellent","Good","Not bad","Awful");

create table comment(
    comment_id varchar(20) not null,
    t_u_id varchar(20) not null,
    plan_id varchar(20) not null,
    f_u_id varchar(20) not null,
    msg varchar(255) not null,
    msg_level tinyint(1) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;