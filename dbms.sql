
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE accounts (
  AccountId int(11) NOT NULL PRIMARY KEY,
  email varchar(50) NOT NULL UNIQUE KEY,
  Passwords char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE accounts
  MODIFY AccountId int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE users (
  userId int(11) NOT NULL PRIMARY KEY,
  Firstname varchar(20) NOT NULL,
  Lastname varchar(20) NOT NULL,
  Username varchar(30) NOT NULL UNIQUE,
  profile_img char(40) NOT NULL UNIQUE,
  cover_img char(40) NOT NULL UNIQUE,
  biography text,
  gender char(6),
  DoB date,
  Residence varchar(30),
  profession varchar(30)

  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE users
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE photo_albums(
  albumId int(11) PRIMARY KEY AUTO_INCREMENT,
  userId int(11) NOT NULL,
  album_name varchar(30) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE photo_albums
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE,
  AUTO_INCREMENT = 100;

CREATE TABLE pictures(
  pictureId int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  albumId int(11) NOT NULL,
  userID int(11) NOT NULL,
  photo_name varchar(30),
  caption varchar(30)

)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE pictures
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`userId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_5` FOREIGN KEY (`albumId`) REFERENCES `photo_albums` (`albumId`) ON DELETE CASCADE ON UPDATE CASCADE,
  AUTO_INCREMENT = 1000;


CREATE TABLE user_hobbies(
  hobby_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  userId int(11) NOT NULL,
  hobby varchar(100) NOT NULL,
  img varchar(100) NOT NULL UNIQUE KEY,
  dtime text NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE user_hobbies
  ADD CONSTRAINT `users_ibfk_6` FOREIGN KEY (`userId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE;
 