<?php

require("usarBD.php");

// Creamos la base de datos
$consulta="CREATE DATABASE IF NOT EXISTS ".$NOMBRE_BD." CHARACTER SET utf8;";
$hacerConsulta=mysqli_query($conectado,$consulta);

// Ponemos en uso la base de datos
mysqli_select_db($conectado, $NOMBRE_BD);

// Creamos la consulta para crear la tabla series
$consulta="CREATE TABLE IF NOT EXISTS SERIE(
	idSerie INTEGER NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(100) UNIQUE NOT NULL,
	genero VARCHAR(45) NOT NULL,
	fecha_lanzamiento DATE NOT NULL,
	temporadas INTEGER NOT NULL,
	sinopsis VARCHAR(1000) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
	trailer VARCHAR(200) NOT NULL,
	PRIMARY KEY (idSerie));";

// Lanzamos la consulta
$hacerConsulta=mysqli_query ($conectado, $consulta);

$consulta="CREATE TABLE IF NOT EXISTS ACTOR(
	idActor INTEGER NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(45) NOT NULL,
	apellidos VARCHAR(45) NOT NULL,
	fecha_nacimiento DATE,
	nacionalidad VARCHAR(45) NOT NULL,
	biografia VARCHAR(1000) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
	PRIMARY KEY (idActor));";

$hacerConsulta=mysqli_query ($conectado, $consulta);

$consulta="CREATE TABLE IF NOT EXISTS PERSONAJE (
	idPersonaje INTEGER NOT NULL AUTO_INCREMENT, 
	nombre VARCHAR(45) NOT NULL, 
	descripcion VARCHAR(1500) NOT NULL, 
	idActor INTEGER NOT NULL,
    idSerie INTEGER NOT NULL,
    imagen VARCHAR(200) NOT NULL,
	PRIMARY KEY (idPersonaje),
	FOREIGN KEY (idActor) REFERENCES ACTOR (idActor) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idSerie) REFERENCES SERIE (idSerie) ON DELETE CASCADE ON UPDATE CASCADE);";

$hacerConsulta=mysqli_query ($conectado, $consulta);

$consulta="CREATE TABLE IF NOT EXISTS USUARIOS (
	usuario VARCHAR(45) NOT NULL, 
	nombre VARCHAR(45) NOT NULL, 
	apellidos VARCHAR(45) NOT NULL, 
	email VARCHAR(45) UNIQUE NOT NULL, 
	contrasenya VARCHAR(45) NOT NULL, 
	PRIMARY KEY (usuario));";

$hacerConsulta=mysqli_query ($conectado, $consulta);

header('Location: index.php');
?>


