CREATE TABLE show
(
  id serial NOT NULL,
  name character varying(50),
  description character varying(200),
  usual_language character varying(50),
  CONSTRAINT show_pkey PRIMARY KEY (id)
)

CREATE TABLE station
(
  id serial NOT NULL,
  name character varying(50),
  description character varying(200),
  CONSTRAINT station_pkey PRIMARY KEY (id)
)

CREATE TABLE observation
(
  id serial NOT NULL,
  frequency numeric,
  station_id integer,
  schedule_id integer,
  strength integer,
  description character varying(200),
  destination character varying(50),
  source character varying(50),
  datetime timestamp without time zone,
  CONSTRAINT observation_pkey PRIMARY KEY (id)
)

