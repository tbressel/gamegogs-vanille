DROP DATABASE BD_GAMEGOGS;

CREATE DATABASE IF NOT EXISTS BD_GAMEGOGS;
-- USE c1509222c_BD_GAMEGOGS;
USE BD_GAMEGOGS;

CREATE TABLE IF NOT EXISTS video_games (
    id_videogame SMALLINT NOT NULL AUTO_INCREMENT,
    title_videogame VARCHAR(50),
    subtitle_videogame VARCHAR(64),
    plateform_videogame VARCHAR(25),
    coverpic_videogame VARCHAR(255),
    PRIMARY KEY (id_videogame)
);

INSERT INTO video_games (title_videogame, subtitle_videogame, plateform_videogame, coverpic_videogame)
VALUES
    ('Barbarian', '', 'Amstrad CPC', 'img/covers/cpc-barbarian-cover.jpg'),
    ('Double Dragon', "", 'Amstrad CPC', 'img/covers/cpc-doubledragon-cover.jpg'),
    ('Prehistorik 2', '', 'Amstrad CPC', 'img/covers/cpc-prehistorik2-cover.jpg'),
    ('Rick Dangerous', "", 'Amstrad CPC', 'img/covers/cpc-rickdangerous-cover.jpg'),
    ('Goat Simulator', '', 'PC', 'img/covers/pc-goatsimulator-cover.jpg'),
    ('Grand Theft Auto 5', "", 'Playstation 4', 'img/covers/ps4-grandtheftauto5-cover.jpg'),
    ('Mortal Kombat 2', '', 'Master System', 'img/covers/sms-mortalkombat2-cover.jpg'),
    ('Earth Worm Jim 2', "", 'Super Nintendo', 'img/covers/snes-earthwormjim2-cover.jpg'),
    ('Energy Breaker', '', 'Super Nintendo', 'img/covers/snes-energybreaker-cover.jpg'),
    ('Mario Kart Delux 8', "", 'Nintendo Switch', 'img/covers/switch-mariokartdeluxe8-cover.png'),
    ('Splatton 2', '', 'Nintendo Switch', 'img/covers/switch-splatoon2-cover.png'),
    ('The Legend Of Zelda', "Breath Of The Wild", 'Nintendo Switch', 'img/covers/switch-thelegendofzelda-breathofthewild-cover.png'),
    ('Forza Horizon 4', '', 'Xbox One', 'img/covers/xboxone-forzahorizon4-cover.jpg');


SELECT * FROM video_games;

--$connexion = new PDO('mysql:host=localhost;dbname=c1509222c_BD_GAMEGOGS', 'c1509222c_zisquier', 'creativeformation');