-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 mai 2022 à 19:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocomplete`
--

-- --------------------------------------------------------

--
-- Structure de la table `elements`
--

DROP TABLE IF EXISTS `elements`;
CREATE TABLE IF NOT EXISTS `elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `provenance` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `elements`
--

INSERT INTO `elements` (`id`, `name`, `description`, `data1`, `provenance`) VALUES
(1, 'Pessoa', 'Fernando António Nogueira Pessoa was a Portuguese poet, writer, literary critic, translator, publisher, and philosopher, described as one of the most significant literary figures of the 20th century and one of the greatest poets in the Portuguese language', 'Fernando', 'Portugal'),
(2, 'Nietzsche', 'Friedrich Wilhelm Nietzsche was a German philosopher, cultural critic and philologist whose work has exerted a profound influence on modern intellectual history. He began his career as a classical philologist before turning to philosophy.', 'Friedrich', 'Germany'),
(3, 'Butler', 'Judith Pamela Butler is an American philosopher and gender theorist whose work has influenced political philosophy, ethics, and the fields of third-wave feminism, queer theory, and literary theory.', 'Judith', 'United States'),
(4, 'Beauvoir, de ', 'Simone de Beauvoir [simɔn də bovwaʁ], née le 9 janvier 1908 dans le 6ᵉ arrondissement de Paris, ville où elle est morte le 14 avril 1986, est une philosophe, romancière, mémorialiste et essayiste française', 'Simone', 'France'),
(5, 'Hooks', 'Gloria Jean Watkins, better known by her pen name bell hooks, was an American author and social activist who was Distinguished Professor in Residence at Berea College. She is best known for her writings on race, feminism, and class.', 'Bell', 'United States'),
(6, 'Morrison', 'Chloe Anthony Wofford Morrison, known as Toni Morrison, was an American novelist. Her first novel, The Bluest Eye, was published in 1970. The critically acclaimed Song of Solomon brought her national attention and won the National Book Critics Circle Awar', 'Toni', 'United States'),
(7, 'Ngozi Adichie', 'Chimamanda Ngozi Adichie (/ˌtʃɪmɑːˈmɑːndə əŋˈɡoʊzi əˈdiːtʃeɪ/ CHIM-ah-MAHN-də əng-GOH-zee ə-DEE-chay; born 15 September 1977 is a Nigerian writer whose works include novels, short stories and nonfiction. She was described in The Times Literary Supplement ', 'Chimamanda', 'Nigeria'),
(8, 'Goldman', 'Emma Goldman was an anarchist political activist and writer. She played a pivotal role in the development of anarchist political philosophy in North America and Europe in the first half of the 20th century', 'Emma', 'United States'),
(9, 'Mies', 'Maria Mies (born 1931, Steffeln, Rhine Province, Prussia, Germany) is a German professor of sociology and author of several feminist books.', 'Maria', 'Germany'),
(10, 'Highsmith', 'Patricia Highsmith was an American novelist and short story writer widely known for her psychological thrillers, including her series of five novels featuring the character Tom Ripley', 'Patricia', 'United States'),
(11, 'Davis', 'Angela Yvonne Davis is an American political activist, philosopher, academic, scholar, and author. She is a professor at the University of California, Santa Cruz.', 'Angela', 'United States'),
(12, 'Baldwin', 'James Arthur Baldwin was an American writer and activist. As a writer, he garnered acclaim across various mediums, including essays, novels, plays, and poems.', 'James', 'United States'),
(13, 'Hesse', 'Hermann Karl Hesse was a German-Swiss poet, novelist, and painter. His best-known works include Demian, Steppenwolf, Siddhartha, and The Glass Bead Game, each of which explores an individual\'s search for authenticity, self-knowledge and spirituality.', 'Herman', 'Germany'),
(14, 'Kafka', 'Franz Kafka was a German-speaking Bohemian novelist and short-story writer, widely regarded as one of the major figures of 20th-century literature. His work fuses elements of realism and the fantastic.', 'Franz', 'Czechia'),
(15, 'Borges', 'Jorge Francisco Isidoro Luis Borges Acevedo was an Argentine short-story writer, essayist, poet and translator, and a key figure in Spanish-language and international literature.', 'Jorge Luis', 'Argentina'),
(16, 'Saramago', 'José de Sousa Saramago, GColSE ComSE GColCa, was a Portuguese writer and recipient of the 1998 Nobel Prize in Literature for his \"parables sustained by imagination, compassion and irony continually enables us once again to apprehend an elusory reality.\"', 'Jose', 'Portugal'),
(17, 'Beckett', 'Samuel Barclay Beckett was an Irish novelist, playwright, short story writer, theatre director, poet, and literary translator. A resident of Paris for most of his adult life, he wrote in both French and English', 'Samuel', 'Ireland'),
(18, 'Arendt', 'Hannah Arendt was a political philosopher, author, and Holocaust survivor. Her contributions influenced 20th and 21st century political theorists.', 'Hannah', 'Germany');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
