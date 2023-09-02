DROP DATABASE BD_GAMEGOGS;

CREATE DATABASE IF NOT EXISTS BD_GAMEGOGS;
USE c1509222c_BD_GAMEGOGS;

CREATE TABLE IF NOT EXISTS video_games (
    id_videogame SMALLINT NOT NULL AUTO_INCREMENT,
    title_videogame VARCHAR(30),
    subtitle_videogame VARCHAR(20),
    plateform_videogame VARCHAR(20),
    coverpic_videogame VARCHAR(255),
    PRIMARY KEY (id_videogame)
);

INSERT INTO video_games (title_videogame, subtitle_videogame, plateform_videogame, coverpic_videogame)
VALUES
    ('Rick Dangerous', 'aucun', 'Amstrad CPC', 'img/covers/visuel-jeux7.jpg'),
    ('Enery Breaker', "aucun", 'Super Nintendo', 'img/covers/visuel-jeux4.jpg'),
    ('Mortal Kombat 2', 'aucun', 'Master System', 'img/covers/visuel-jeux2.jpg');


SELECT * FROM video_games;

--$connexion = new PDO('mysql:host=localhost;dbname=c1509222c_BD_GAMEGOGS', 'c1509222c_zisquier', 'creativeformation');