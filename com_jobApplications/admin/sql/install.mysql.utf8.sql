DROP TABLE IF EXISTS `#__jobApplications`;

CREATE TABLE `#__jobApplications` 
	(
	`id`			INT(11)		 	NOT NULL AUTO_INCREMENT,
	`date`			DATE		 	NOT NULL, 
	`jobID`			INT(20)		 	NOT NULL, 
	`jobTitle`		VARCHAR(100) 	NOT NULL,
	
	`fname`			VARCHAR(30)		NOT NULL,
	`lname`			VARCHAR(30)		NOT NULL,
	`experience`	VARCHAR(10)		NOT NULL,
	`referedBy`		VARCHAR(50)		NOT NULL,
	`summary`		VARCHAR(2555)	NOT NULL,

	`email`			VARCHAR(30)		NOT NULL,
	`phoneNumber`	VARCHAR(30)		NOT NULL,
	`otherNumber`	VARCHAR(30)		NOT NULL,
	`address`		VARCHAR(50)		NOT NULL,
	`zipCode`		VARCHAR(30)		NOT NULL,

	`description`	VARCHAR(2555)	NOT NULL,
	`jobExperience`	VARCHAR(1000)	NOT NULL,
	`education`		VARCHAR(255)	NOT NULL,
	`skills`		VARCHAR(2555)	NOT NULL,

	`fileName`		VARCHAR(100) 	NOT NULL,
	`fileType`		VARCHAR(25)		NOT NULL,
	`fileSize`		INT 			NOT NULL,
	`fileContent`	MEDIUMBLOB		NOT NULL,

	PRIMARY KEY (`id`)
	)

	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__jobApplications` (`fname`, `lname`, `date`, `jobTitle`, `experience`, `referedBy`, `summary`,
	 `email`, `phoneNumber`, `otherNumber`, `address`, `zipCode`) 
VALUES ('John', 'Doe', '20200102', 'CEO', '2 years', 'Leonard Petrovsky', 
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam arcu turpis, eget iaculis tortor condimentum ac. 
	Proin euismod tortor erat, eu convallis risus sagittis sit amet. In ut orci tincidunt, placerat nulla vel, consectetur ipsum. ',
	'paulMcCarthy@hotmail.com', '6041234567', '6059875432', '805-444 Downtown Street', 'L0V3M1');

INSERT INTO `#__jobApplications` (`fname`, `lname`, `date`, `jobTitle`, `experience`, `referedBy`, `summary` ) 
VALUES ('Paul', 'McDonalds', '20300101', 'Head Honcho', '10 years', 'Leonard Petrovsky', 
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam arcu turpis, eget iaculis tortor condimentum ac. 
	Proin euismod tortor erat, eu convallis risus sagittis sit amet. In ut orci tincidunt, placerat nulla vel, consectetur ipsum. ');