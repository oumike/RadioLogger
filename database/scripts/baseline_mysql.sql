CREATE TABLE radioshow
(
  id integer NOT NULL AUTO_INCREMENT,
  name varchar(50) NULL,
  description varchar(200) NULL,
  language varchar(50) NULL,
  PRIMARY KEY (id)
);

CREATE TABLE station
(
  id integer NOT NULL AUTO_INCREMENT,
  name varchar(50),
  description varchar(200),
  PRIMARY KEY (id)
);

CREATE TABLE observation
(
  id integer NOT NULL AUTO_INCREMENT,
  frequency numeric,
  station_id integer,
  schedule_id integer,
  strength integer,
  description varchar(200),
  destination varchar(50),
  source varchar(50),
  datetime timestamp,
  PRIMARY KEY (id)
);

