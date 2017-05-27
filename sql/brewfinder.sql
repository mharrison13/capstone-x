DROP TABLE IF EXISTS beerFavorite;
DROP TABLE IF EXISTS beerImage ;
DROP TABLE IF EXISTS breweryImage;
DROP TABLE IF EXISTS brewery;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS image;
DROP TABLE IF EXISTS beer;
DROP TABLE IF EXISTS profile;

-- type is style

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
	PRIMARY KEY(profileId),
	FOREIGN KEY(profileImageId)
);

CREATE TABLE beer (

);

CREATE TABLE image (

);

CREATE TABLE brewery (

);

CREATE TABLE breweryImage (

);

CREATE TABLE beerImage (

);

CREATE TABLE beerFavorite (

);
