drop DATABASE if EXISTS shoppinglist;
create database shoppinglist;

use shoppinglist;

create table item (
    id int primary key AUTO_INCREMENT,
    description varchar(255) not null,
    amount SMALLINT UNSIGNED NOT NULL
);

INSERT INTO item (description, amount) values ('Test item', 2);
INSERT INTO item (description, amount) values ('Test item', 3);