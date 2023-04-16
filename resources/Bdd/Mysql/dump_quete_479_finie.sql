-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)

--

-- Host: localhost    Database: wild_db_quest

-- ------------------------------------------------------

-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!50503 SET NAMES utf8mb4 */

;

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */

;

/*!40103 SET TIME_ZONE='+00:00' */

;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */

;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */

;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */

;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */

;

DROP DATABASE IF EXISTS `wild_db_quest`;

CREATE DATABASE `wild_db_quest`;

USE `wild_db_quest`;

--

-- Table structure for table `school`

--

DROP TABLE IF EXISTS `school`;

/*!40101 SET @saved_cs_client     = @@character_set_client */

;

/*!50503 SET character_set_client = utf8mb4 */

;

CREATE TABLE
    `school` (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `capacity` int DEFAULT NULL,
        `country` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

/*!40101 SET character_set_client = @saved_cs_client */

;

--

-- Dumping data for table `school`

--

LOCK TABLES `school` WRITE;

/*!40000 ALTER TABLE `school` DISABLE KEYS */

;

/*!40000 ALTER TABLE `school` ENABLE KEYS */

;

UNLOCK TABLES;

--

-- Table structure for table `wizard`

--

DROP TABLE IF EXISTS `wizard`;

/*!40101 SET @saved_cs_client     = @@character_set_client */

;

/*!50503 SET character_set_client = utf8mb4 */

;

CREATE TABLE
    `wizard` (
        `id` int NOT NULL AUTO_INCREMENT,
        `firstname` varchar(100) NOT NULL,
        `lastname` varchar(100) NOT NULL,
        `birthday` date NOT NULL,
        `birth_place` varchar(255) DEFAULT NULL,
        `biography` text,
        `is_muggle` tinyint(1) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

/*!40101 SET character_set_client = @saved_cs_client */

;

INSERT INTO
    `wizard` (
        `firstname`,
        `lastname`,
        `birthday`,
        `birth_place`,
        `biography`,
        `is_muggle`
    )
VALUES (
        'harry',
        'potter',
        '1980-07-31',
        'london',
        '',
        '0'
    ), (
        'hermione',
        'granger',
        '1979-09-19',
        '',
        'Friend of Harry Potter',
        '0'
    ), (
        'lily',
        'potter',
        '1960-01-30',
        '',
        'mother of Harry Potter',
        '0'
    ), (
        'ron',
        'weasley',
        '1980-03-01',
        '',
        'Best friend of Harry',
        '0'
    ), (
        'ginny',
        'weasley',
        '1981-08-11',
        '',
        'Sister of Ron and girlfriend of Harry',
        '0'
    ), (
        'fred',
        'weasley',
        '1978-04-01',
        '',
        '',
        '0'
    ), (
        'george',
        'weasley',
        '1978-04-01',
        '',
        '',
        '0'
    ), (
        'arthur',
        'weasley',
        '1950-02-06',
        '',
        '',
        '0'
    ), (
        'molly',
        'weasley',
        ' 1949-01-01',
        '',
        '',
        '0'
    ), (
        'drago',
        'malefoy',
        '1980-06-05',
        '',
        '',
        '0'
    ), (
        'albus',
        'dumbledore',
        '1881-07-01',
        '',
        '',
        '0'
    ), (
        'severus',
        'rogue',
        '1960-01-09',
        '',
        '',
        '0'
    ), (
        'tom',
        'jÃ©dusor',
        '1926-12-31',
        '',
        'Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom alias Voldermort',
        '0'
    ), (
        'dudley',
        'dursley',
        '1980-06-23',
        '',
        'Cousin d\'Harry',
        '1'
    );

--

-- Dumping data for table `wizard`

--

LOCK TABLES `wizard` WRITE;

/*!40000 ALTER TABLE `wizard` DISABLE KEYS */

;

/*!40000 ALTER TABLE `wizard` ENABLE KEYS */

;

UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */

;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */

;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */

;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */

;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */

;