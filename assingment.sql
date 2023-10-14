CREATE TABLE fallPerson (
  id int not null auto_increment,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  age varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  primary key (id)
);

INSERT into fallPerson(fname, lname, age, email)
VALUES