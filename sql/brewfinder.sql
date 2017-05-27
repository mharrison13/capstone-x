DROP TABLE IF EXISTS beerFavorite;
DROP TABLE IF EXISTS beerImage ;
DROP TABLE IF EXISTS breweryImage;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS beer;
DROP TABLE IF EXISTS brewery;
DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS image;

-- type is style

CREATE TABLE image (
	imageId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	imageCloudinaryId VARCHAR(32),
	PRIMARY KEY(imageId)

);

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileImageId INT UNSIGNED,
	profileActivationToken CHAR(32),
	profileAtHandle VARCHAR(32) NOT NULL,
	profileContent VARCHAR(750),
	profileEmail VARCHAR(128) NOT NULL,
	profileHash CHAR(128) NOT NULL,
	profileLocationX DECIMAL(12,9) NOT NULL,
	profileLocationY DECIMAL(12,9) NOT NULL,
	profileName VARCHAR(64) NOT NULL,
	profileSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileAtHandle),
	INDEX(profileId),
	PRIMARY KEY(profileId),
	FOREIGN KEY(profileImageId) REFERENCES image(imageId)
);

CREATE TABLE brewery (
	breweryId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	breweryProfileId INT UNSIGNED,
	breweryActivationToken CHAR(32),
	breweryAddress1 VARCHAR(128) NOT NULL,
	breweryAddress2 VARCHAR(128),
	breweryCity VARCHAR(128) NOT NULL,
	breweryContent VARCHAR(1500),
	breweryEmail VARCHAR(128) NOT NULL,
	breweryHash CHAR(128) NOT NULL,
	breweryImageId INT UNSIGNED,
	breweryName VARCHAR(128) NOT NULL,
	breweryPhone VARCHAR(12) NOT NULL,
	brewerySalt CHAR(64) NOT NULL,
	breweryState VARCHAR(2) NOT NULL,
	breweryZip VARCHAR(10) NOT NULL,
	UNIQUE(breweryEmail),
	UNIQUE(breweryId),
	INDEX(breweryProfileId),
	INDEX(breweryImageId),
	PRIMARY KEY(breweryId),
	FOREIGN KEY(breweryProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(breweryImageId) REFERENCES image(imageId)

);


CREATE TABLE beer (


);





CREATE TABLE breweryImage (

);

CREATE TABLE beerImage (

);

CREATE TABLE beerFavorite (

);
