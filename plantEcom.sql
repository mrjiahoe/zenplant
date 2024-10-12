-- DROP DATABASE IF EXISTS plantEcom;

CREATE DATABASE plantEcom;

USE plantEcom;

CREATE TABLE users (
    userId INT(10) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    userType VARCHAR(50) NOT NULL
);

CREATE TABLE plants ( plantId SMALLINT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(125) NOT NULL,
category VARCHAR(50) NOT NULL,
price FLOAT NOT NULL,
rating TINYINT,
description TEXT,
pros TEXT,
imageUrl VARCHAR(255) );

INSERT INTO
    users (
        username,
        email,
        password,
        userType
    )
VALUES (
        'user',
        'test@email.com',
        '1234',
        'user'
    ),
    (
        'admin',
        'admin@email.com',
        '1234',
        'admin'
    );

INSERT INTO
    plants (
        plantId,
        name,
        category,
        price,
        rating,
        description,
        pros,
        imageUrl
    )
VALUES (
        1,
        'Monstera Deliciosa',
        'Araceae',
        27,
        5,
        'climbing, evergreen perennial vine, noted for its large perforated leaves on thick plant stems and long cord-like aerial roots',
        'Improve air quality, easy to care',
        'assets/img/plant/MonsteraDeliciosa.jpg'
    ),
    (
        2,
        'Pilea Peperomioides',
        'Urticaceae',
        15,
        5,
        'erect, evergreen perennial plant, with shiny, dark green, circular leaves on long petioles',
        'Pet friendly, easy to care',
        'assets/img/plant/PileaPeperomioides.jpg'
    ),
    (
        3,
        'Calathea Ornata',
        'Maranta',
        19,
        3,
        'oval, dark olive green leaves and numerous pinstripes in vivid pink',
        'Remove toxins from air',
        'assets/img/plant/CalatheaOrnata.jpg'
    ),
    (
        4,
        'Calathea Rattlesnake',
        'Maranta',
        23,
        4,
        'long, wavy green leaves with a brushstroke pattern resembling reptile skin',
        'Filter indoor air, boost mood and concentration',
        'assets/img/plant/CalatheaRattlesnake.jpg'
    ),
    (
        5,
        'Orange Orchid',
        'Orchidaceae',
        30,
        3,
        'tiny flower, in shades of yellow and orange',
        'have calming properties, improve sleep quality',
        'assets/img/plant/OrangeOrchid.jpg'
    ),
    (
        6,
        'Pink Anthurium',
        'Araceae',
        30,
        4,
        'herbaceous evergreen plant, heart-shaped and glossy dark green leaves, cream yellow tail-like spadix and waxy red spathe inflorescence',
        'improve indoor air quality, basic and simple care',
        'assets/img/plant/PinkAnthurium.jpg'
    ),
    (
        7,
        'White Phalaenopsis Orchid',
        'Orchidaceae',
        30,
        3,
        'round, pure white flower that can have hints of blush on the back side of the bloom',
        'good for beginner, long bloom period',
        'assets/img/plant/WhitePhalaenopsisOrchid.jpg'
    ),
    (
        8,
        'Zz Plant',
        'Araceae',
        30,
        2,
        'stemless evergreen plant  with attractive, pinnately compound leaves rising up from its rhizomes',
        'Pet friendly, easy to care',
        'assets/img/plant/ZzPlant.jpg'
    ),
    (
        9,
        'Aglaonema Wishes',
        'Araceae',
        30,
        4,
        'pink, green and cream leaves each leaf has its own unique markings and variegation',
        'good for beginner, help purify indoor air',
        'assets/img/plant/AglaonemaWishes.jpg'
    ),
    (
        10,
        'Calathea Orbifolia',
        'Maranta',
        30,
        5,
        'large, round leaves  striped with pale silver-green markings, with the undersides also being a pale silver-green',
        'pet friendly, remove toxins and improve air quality',
        'assets/img/plant/CalatheaOrbifolia.jpg'
    ),
    (
        11,
        'Snake Plant Laurentii',
        'Asparagaceae',
        30,
        3,
        'succulent plant characterized by its upright sword-like leaves with vibrant yellow edges',
        'Requires Little Attention, filter indoor air',
        'assets/img/plant/SnakePlantLaurentii.jpg'
    ),
    (
        12,
        'Braided Money Tree',
        'Malvaceae',
        30,
        1,
        'tree-like plant with a braided trunk',
        'improve air quality, thrive with minimal care, pet friendly',
        'assets/img/plant/BraidedMoneyTree.jpg'
    ),
    (
        13,
        'Cascading Pothos',
        'Araceae',
        30,
        2,
        'smooth and leathery heart-shaped leaves',
        'can thrive in low light, easy to care',
        'assets/img/plant/CascadingPothos.jpg'
    ),
    (
        14,
        'Ficus Chloe',
        'Moraceae',
        30,
        2,
        'cultivar with broad, deep green, glossy leaves',
        'have natural anti-inflammatory properties, easy to care',
        'assets/img/plant/FicusChloe.jpg'
    ),
    (
        15,
        'Bird\'s Nest Fern',
        'Aspleniaceae',
        30,
        3,
        'solid, undivided fronds with dark central rib down its length',
        'easy to care, purify air',
        'assets/img/plant/BirdNestFern.jpg'
    ),
    (
        16,
        'Maranta Red',
        'Maranta',
        30,
        2,
        'oval green leaves feature vivid red veins with lighter green patches, and the undersides are purple',
        'improve air quality',
        'assets/img/plant/MarantaRed.jpg'
    ),
    (
        17,
        'Peperomia Obtusifolia',
        'Peperaceae',
        30,
        3,
        'Waxy, elliptic, thick dark green leaves and Small greenish-white flowers on spikes',
        'pet friendly, help purify air',
        'assets/img/plant/PeperomiaObtusifolia.jpg'
    ),
    (
        18,
        'Philodendron Birkin',
        'Araceae',
        30,
        5,
        'lush green leaves with white or yellow pinstripes',
        'help purify air, easy to care',
        'assets/img/plant/PhilodendronBirkin.jpg'
    ),
    (
        19,
        'Fiddle Leaf Fig',
        'Moraceae',
        30,
        4,
        'large, broad, lyre-shaped, green leaves',
        'purify air, may boost concentration',
        'assets/img/plant/FiddleLeafFig.jpg'
    ),
    (
        20,
        'Hyacinth',
        'Asparagaceae',
        30,
        1,
        'Highly fragrant star shaped florets clustered on a single rounded spike',
        '',
        'assets/img/plant/Hyacinth.jpg'
    ),
    (
        21,
        'Spider Plant',
        'Asparagaceae',
        30,
        4,
        'narrow, strap-shaped leaves arising from a central point',
        'Easy to grow, Help remove harmful pollutants',
        'assets/img/plant/SpiderPlant.jpg'
    ),
    (
        22,
        'Hibiscus',
        'Malvaceae',
        30,
        3,
        'trumpet shaped and range in colours of red, orange, yellow, pink or purple',
        '',
        'assets/img/plant/Hibiscus.jpg'
    ),
    (
        23,
        'Lavender',
        'Lamiaceae',
        30,
        3,
        'heavily branched short shrub and broad rootstock bears woody branches with upright, rod like, leafy, green shoots',
        'Improve Short-term Memory, Relieve stress, Decrease Anxiety',
        'assets/img/plant/Lavender.jpg'
    ),
    (
        24,
        'Jasmin Gardenia',
        'Oleaceae',
        30,
        4,
        'shrub with cylindrical to flat branches that are covered with caducous hairs',
        '',
        'assets/img/plant/JasminGardenia.jpg'
    ),
    (
        25,
        'Lemon balm',
        'Lamiaceae',
        30,
        3,
        'roughly heart-shaped or oval wrinkled toothed leaves and are borne in pairs along the square stems',
        'Have Relaxing Properties in its Leaves',
        'assets/img/plant/LemonBalm.jpg'
    ),
    (
        26,
        'Tuscan Blue Rosemary',
        'Lamiaceae',
        30,
        4,
        'upright evergreen shrub with strongly aromatic, olive green, needle-like leaves and clusters of deep blue, tubular flowers',
        'Calms Body, Energize Mind, Help Improve Memory Function',
        'assets/img/plant/TuscanBlueRosemary.jpg'
    ),
    (
        27,
        'Orange Chrysanthemum',
        'Asteraceae',
        30,
        3,
        'orange/yellow two toned composite flowers that grow in varying petal arrangements, daisy-like structure, others having a rounder, pompom-like appearance',
        'Can Purify Air',
        'assets/img/plant/OrangeChrysanthemum.jpg'
    ),
    (
        28,
        'Draceana Marginata',
        'Asparagaceae',
        30,
        2,
        'has elegant long, thin leaves with red edges',
        "Doesn\'t Require Much Water, Long Lifespan, Reduce Stress",
        'assets/img/plant/DraceanaMarginata.jpg'
    ),
    (
        29,
        'Aloe Vera',
        'Asphodelaceae',
        30,
        4,
        'succulent leaves that are arranged in a rosette, have sharp, pinkish spines along their edges',
        'Helps heal burns, Reduce Constipation',
        'assets/img/plant/AloeVerajpg'
    ),
    (
        30,
        'Peace Lily',
        'Araceae',
        30,
        3,
        'glossy, dark green oval leaves that narrow to a point',
        'Removes harmful toxins from the air, natural air freshener',
        'assets/img/plant/PeaceLily.jpg'
    ),
    (
        31,
        'Marigold',
        'Asteraceae',
        30,
        2,
        'cheery, pom-pom, anemone, or daisy-shaped inflorescences in colors ranging from yellow and gold to orange, red, and mahogany',
        'Reduce inflammation caused by eczema, speeds healing of wounds',
        'assets/img/plant/Marigold.jpg'
    ),
    (
        32,
        'Orange Rose',
        'Rosaceae',
        30,
        2,
        'prickly stem and toothed edges glossy, green leaves, with colours ranging from pastel pink, peach, and cream, to vibrant yellow, orange, and red',
        'Help ease inflammation, ease anxiety',
        'assets/img/plant/OrangeRose.jpg'
    );

SELECT * FROM users;