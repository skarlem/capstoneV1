<?php
//AMBOT WALA NI NAGA GANA ANG PDO GA ERROR PA

$db = getConn();
//function createTables() {
        try {
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql ='CREATE TABLE IF NOT EXISTS public.mapdata2(
			    id serial,
			    lat character varying(50) COLLATE pg_catalog."default",
			    lng character varying(50) COLLATE pg_catalog."default",
			    type character varying(50) COLLATE pg_catalog."default",
			    date text COLLATE pg_catalog."default",
			    location text COLLATE pg_catalog."default",
			    type_id character varying(4) COLLATE pg_catalog."default",
			    CONSTRAINT mapdata2_pkey PRIMARY KEY (id)
			);
			CREATE TABLE IF NOT EXISTS public.admin(
			    id serial,
			    username character varying(50) COLLATE pg_catalog."default",
			    password character varying(50) COLLATE pg_catalog."default",
			    type character varying(50) COLLATE pg_catalog."default",
			    date text COLLATE pg_catalog."default",
			    location text COLLATE pg_catalog."default",
			    type_id character varying(4) COLLATE pg_catalog."default",
			    CONSTRAINT admin_pkey PRIMARY KEY (id)
			);
			';
            $db->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
  //  }
?>