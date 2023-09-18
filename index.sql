-- USE c1509222c_BD_GAMEGOGS;

DROP DATABASE IF EXISTS BD_GAMEGOGS;

CREATE DATABASE IF NOT EXISTS BD_GAMEGOGS;

USE BD_GAMEGOGS;

CREATE TABLE IF NOT EXISTS video_games (
    id_videogame SMALLINT NOT NULL AUTO_INCREMENT,
    title_videogame VARCHAR(50),
    subtitle_videogame VARCHAR(64),
    plateform_videogame VARCHAR(25),
    genre_videogame VARCHAR(25),
    coverpic_videogame VARCHAR(255),
    year_videogame SMALLINT(4),
    editor_videogame VARCHAR(40),
    country_videogame VARCHAR(20),
    ref_videogame VARCHAR(20), 
    support_videogame VARCHAR(20),
    PRIMARY KEY (id_videogame)
);

CREATE TABLE IF NOT EXISTS users (
    id_user SMALLINT NOT NULL AUTO_INCREMENT,
    name_user VARCHAR(50),
    firstname_user VARCHAR(64),
    pseudo_user VARCHAR(25),
    password_user VARCHAR(25),
    PRIMARY KEY (id_user)
);

INSERT INTO users (name_user, firstname_user, pseudo_user, password_user)
VALUES
    ('BRESSEL','Thomas','zisquier','motdepasse');

INSERT INTO video_games (title_videogame, subtitle_videogame, plateform_videogame, genre_videogame, coverpic_videogame, year_videogame, editor_videogame, country_videogame, ref_videogame, support_videogame)
VALUES
    ('Barbarian', '', 'Amstrad CPC', 'Combat', 'img/covers/cpc-barbarian-cover.jpg', 1986, 'ERBE Software', 'France', '7645REFUI-US', 'Cassette'),
    ('Double Dragon', '', 'Amstrad CPC', 'Beat em up', 'img/covers/cpc-doubledragon-cover.jpg', 1987, 'Virgin Melbourne House', 'France', '7645REFUI-US', 'Disquette 3inch'),
    ('Prehistorik 2', '', 'Amstrad CPC', 'Plateforme', 'img/covers/cpc-prehistorik2-cover.jpg', 1989, 'Titus Software', 'France', '7645REFUI-US', 'Disquette 3inch'),
    ('Rick Dangerous', '', 'Amstrad CPC', 'Plateforme', 'img/covers/cpc-rickdangerous-cover.jpg', 1986, 'Firebirds', 'France', '7645REFUI-US', 'Cassette'),
    ('Goat Simulator', '', 'PC', 'What the fuck', 'img/covers/pc-goatsimulator-cover.jpg', 2013, 'Nintendo', 'France', '7645REFUI-US', 'Digital Download'),
    ('Grand Theft Auto 5', '', 'Playstation 4', 'FPS', 'img/covers/ps4-grandtheftauto5-cover.jpg', 2009, 'Rockstar Games', 'France', '7645REFUI-US', 'Blue-Ray'),
    ('Mortal Kombat 2', '', 'Master System', 'Combat', 'img/covers/sms-mortalkombat2-cover.jpg', 1990, 'Aklaim', 'France', '7645REFUI-US', 'Cartouche'),
    ('Earth Worm Jim 2', '', 'Super Nintendo', 'Plateforme', 'img/covers/snes-earthwormjim2-cover.jpg', 1992, 'Virgin', 'France', '7645REFUI-US', 'Cartouche'),
    ('Energy Breaker', '', 'Super Nintendo', 'Action RPG', 'img/covers/snes-energybreaker-cover.jpg', 1991, 'Taito', 'France', '7645REFUI-US', 'Cartouche'),
    ('Mario Kart Delux 8', '', 'Nintendo Switch', 'Course', 'img/covers/switch-mariokartdeluxe8-cover.png', 2020, 'Nintendo', 'France', '7645REFUI-US', 'Cartouche'),
    ('Splatton 2', '', 'Nintendo Switch', 'Action', 'img/covers/switch-splatoon2-cover.png', 2021, 'Nintendo', 'France', '7645REFUI-US', 'Cartouche'),
    ('The Legend Of Zelda', 'Breath Of The Wild', 'Nintendo Switch', 'Action / Aventure', 'img/covers/switch-thelegendofzelda-breathofthewild-cover.png', 2018, 'Nintendo', 'France', '7645REFUI-US', 'Cartouche');





--$connexion = new PDO('mysql:host=localhost;dbname=c1509222c_BD_GAMEGOGS', 'c1509222c_zisquier', 'creativeformation');