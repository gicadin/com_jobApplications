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
	`summary`		VARCHAR(1000)	NOT NULL,
	PRIMARY KEY (`id`)
	)

	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__jobApplications` (`fname`, `lname`, `date`, `jobTitle`, `experience`, `referedBy`, `summary` ) 
VALUES ('John', 'Doe', '20200102', 'CEO', '2 years', 'Leonard Petrovsky', 
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam arcu turpis, eget iaculis tortor condimentum ac. 
	Proin euismod tortor erat, eu convallis risus sagittis sit amet. In ut orci tincidunt, placerat nulla vel, consectetur ipsum. ');

INSERT INTO `#__jobApplications` (`fname`, `lname`, `date`, `jobTitle`, `experience`, `referedBy`, `summary` ) 
VALUES ('Paul', 'McDonalds', '20300101', 'Head Honcho', '10 years', 'Leonard Petrovsky', 
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam arcu turpis, eget iaculis tortor condimentum ac. 
	Proin euismod tortor erat, eu convallis risus sagittis sit amet. In ut orci tincidunt, placerat nulla vel, consectetur ipsum. ');