use radiologger;

drop table radioshow;
drop table station;
drop table observation;
drop table schedule;
drop table source_destination;
drop table showlanguage;

CREATE TABLE radioshow
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  name varchar(5) NULL,
  description varchar(50) NULL,
  PRIMARY KEY (id)
);

CREATE TABLE showlanguage
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  name varchar(5) NULL,
  description varchar(50) NULL,
  PRIMARY KEY (id)
);

CREATE TABLE station
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  name varchar(50),
  description varchar(200),
  PRIMARY KEY (id)
);

CREATE TABLE observation
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  frequency numeric,
  radioshow_id integer,
  station_id integer,
  schedule_id integer,
  strength integer,
  description integer,
  destination integer,
  source varchar(50),
  language_id integer,
  datetime timestamp,
  PRIMARY KEY (id)
);

CREATE TABLE source_destination
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE schedule
(
  id integer NOT NULL AUTO_INCREMENT,
  created_at timestamp NULL,
  updated_at timestamp NULL,
  name varchar(50),
  year_published varchar(4),
  PRIMARY KEY (id)
);

