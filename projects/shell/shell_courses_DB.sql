-- Andrea Diamantini
-- 13 novembre 2017
-- Database per la registrazione ai corsi Shell Project
-- Versione 0.0.1

--- HOST: sql.dvjlabs.org
--- DBNAME: dvjlabso59611
--- USERID: dvjlabso59611
--- PASSWORD: dvjl82330


-- Just use it 
USE dvjlabso59611;

-- Table tbl_class
-- An identified group of students
CREATE TABLE if not exists tbl_class (
    id varchar(5) NOT NULL,
    year int NOT NULL,
    section varchar (4) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE = "InnoDB" DEFAULT CHARACTER SET=utf8; 


-- easy class in ;)
INSERT INTO `tbl_class` ( `id` , `year` , `section` ) VALUES 
( '1AS', 3 , 'AS' ),
( '1BS', 3 , 'BS' ),
( '1CS', 3 , 'AS' ),
( '2AS', 3 , 'BS' ),
( '2BS', 3 , 'AS' ),
( '2CS', 3 , 'BS' ),
( '2DS', 3 , 'AS' ),
( '3AS', 3 , 'AS' ),
( '3BS', 3 , 'BS' ),
( '3CS', 3 , 'CS' ),
( '3DS', 3 , 'DS' ),
( '4AS', 4 , 'AS' ),
( '4BS', 4 , 'BS' ),
( '5AS', 5 , 'AS' ),
( '5BS', 5 , 'BS' ),
( '5CS', 5 , 'CS' );


-- Table tbl_student
-- One student from a class
CREATE TABLE if not exists tbl_student (
  mail varchar(50) NOT NULL,
  name varchar(30) NOT NULL,
  surname varchar(30) NOT NULL,
  class varchar(5) NOT NULL,
  PRIMARY KEY (mail),
  FOREIGN KEY(class) REFERENCES tbl_class(id)
)  ENGINE = "InnoDB" DEFAULT CHARACTER SET=utf8; 



-- Table tbl_course
-- An argument for a task
CREATE TABLE if not exists tbl_course (
  keyword varchar(15) NOT NULL,
  argument varchar(30) NOT NULL,
  PRIMARY KEY (keyword)
)  ENGINE = "InnoDB" DEFAULT CHARACTER SET=utf8; 


-- easy data in ;)
INSERT INTO `tbl_course` ( `keyword` , `argument` ) VALUES 
('sitiweb', 'Creazione siti web' ), 
('sitisuinternet', 'Pubblicazione siti su internet' ),
('RPI0', 'Introduzione a Raspberry PI'),
('RPI1', 'RPI remote'),
('RPI2', ' RPI e sensori'), 
('raceberry', 'monta la macchinina'),
('RPIWEB', 'RPI web server'),
('RPIBLUE', 'RPI e bluetooth'),
('RPIWII', 'RPI e il numchuck Wii'),
('RPIVoice', 'RPI e il controllo vocale'),
('python', 'Programmare in python'),
('pygames','Giochi con python');



-- student/course
-- M to N association
CREATE TABLE if not exists tbl_stud_cors (
  student varchar(50) NOT NULL,
  course varchar(15) NOT NULL,
  PRIMARY KEY(student, course),
  FOREIGN KEY(student) REFERENCES tbl_student(mail),
  FOREIGN KEY(course) REFERENCES tbl_course(keyword)
)  ENGINE = "InnoDB" DEFAULT CHARACTER SET=utf8; 

--------------------------------------------------------------------------
