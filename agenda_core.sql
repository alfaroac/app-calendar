
CREATE TABLE Users (
                IdUsers BIGINT AUTO_INCREMENT NOT NULL,
                username VARCHAR(40) NOT NULL,
                password VARCHAR(50) NOT NULL,
                name VARCHAR(40) NOT NULL,
                lastname VARCHAR(60) NOT NULL,
                dni INT NOT NULL,
                sex VARCHAR(20) NOT NULL,
                address VARCHAR(60) NOT NULL,
                telephone INT NOT NULL,
                email VARCHAR(50) NOT NULL,
                state INT NOT NULL,
                image VARCHAR(50) NOT NULL,
                role VARCHAR(40) NOT NULL,
                PRIMARY KEY (IdUsers)
);


CREATE TABLE Evidences (
                IdEvidences BIGINT AUTO_INCREMENT NOT NULL,
                description VARCHAR(100) NOT NULL,
                file VARCHAR(60) NOT NULL,
                PRIMARY KEY (IdEvidences)
);


CREATE TABLE Institution (
                IdInstitution BIGINT AUTO_INCREMENT NOT NULL,
                code VARCHAR(20) NOT NULL,
                name VARCHAR(60) NOT NULL,
                address VARCHAR(60) NOT NULL,
                latitude VARCHAR(10) NOT NULL,
                longitude VARCHAR(10) NOT NULL,
                state INT NOT NULL,
                PRIMARY KEY (IdInstitution)
);


CREATE TABLE Files (
                IdFiles BIGINT AUTO_INCREMENT NOT NULL,
                name VARCHAR(40) NOT NULL,
                description VARCHAR(10) NOT NULL,
                date DATE NOT NULL,
                IdInstitution BIGINT NOT NULL,
                PRIMARY KEY (IdFiles)
);


CREATE TABLE Director (
                IdDirector BIGINT AUTO_INCREMENT NOT NULL,
                year VARCHAR(4) NOT NULL,
                state INT NOT NULL,
                IdUsers BIGINT NOT NULL,
                IdInstitution BIGINT NOT NULL,
                PRIMARY KEY (IdDirector)
);


CREATE TABLE Events (
                IdEvents BIGINT AUTO_INCREMENT NOT NULL,
                title VARCHAR(20) NOT NULL,
                description VARCHAR(100) NOT NULL,
                place VARCHAR(40) NOT NULL,
                startDate DATE NOT NULL,
                endDate DATE NOT NULL,
                type VARCHAR(15) NOT NULL,
                IdUsers BIGINT NOT NULL,
                IdEvidences BIGINT NOT NULL,
                PRIMARY KEY (IdEvents)
);


CREATE TABLE Guests (
                IdGuest BIGINT AUTO_INCREMENT NOT NULL,
                IdEvents BIGINT NOT NULL,
                PRIMARY KEY (IdGuest)
);


ALTER TABLE Director ADD CONSTRAINT users_director_fk
FOREIGN KEY (IdUsers)
REFERENCES Users (IdUsers)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Events ADD CONSTRAINT users_events_fk
FOREIGN KEY (IdUsers)
REFERENCES Users (IdUsers)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Events ADD CONSTRAINT evidences_events_fk
FOREIGN KEY (IdEvidences)
REFERENCES Evidences (IdEvidences)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Director ADD CONSTRAINT institution_director_fk
FOREIGN KEY (IdInstitution)
REFERENCES Institution (IdInstitution)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Files ADD CONSTRAINT institution_files_fk
FOREIGN KEY (IdInstitution)
REFERENCES Institution (IdInstitution)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Guests ADD CONSTRAINT events_guests_fk
FOREIGN KEY (IdEvents)
REFERENCES Events (IdEvents)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
