## About Tanzania's traditional medicine knowledge database

It is a database that contains information on all respects of (TMs) including Traditional medicines, diseases and prescription/usages  which are deeply studied by modern pharmacologists and biomedical scientists.
the database have an interface to display the contents such as medicine, with local name and scientific name and disease to be cured and Descriptions/usages.


## Research objectives

The construction of Tanzanian traditional medicine knowledge base comprises of two main objectives;

The first objective is to document the knowledge of traditional medicine from experts found in Tanzania using our case study in Morogoro region, this objective implies four technological and scientific tasks:

- To identify the available traditional medicine expert, centers and shops in Morogoro
- Capturing knowledge on traditional medicine through interview experts, patients who got services from experts and request the information of authorized medicines by the government from defined available pharmacies.
- To document traditional medicines using local names and English name
- To compare the English names with other traditional medicines for getting the related scientific names

The second objective is to design Tanzanian traditional medicine web application/database. The web-based information system should display information about the traditional medicine with its related information; this objective implies three technological and scientific tasks:
- To design MYSQL database using documented information
- To design an interface that can allow searching of traditional medicine from the database.
- To deploy web based application

## Achievement

The identification of traditional medicine expert, centers and shops in Morogoro was done successfully.
Although it was not easy to achieve this objective by collecting real names of a traditional expert due to their business reasons, the shops and center collected with respect to their important information. 


### Important notes

I changed the project ui but the old one look like
https://ubongofaidas.github.io/ttmkb-ui

![image](https://user-images.githubusercontent.com/26626005/156308404-4a31e23d-a927-4461-8e9b-2b50d2bb393b.png)

## How to install
Please note rhis is conversion from raW PHP to Laravel;
I did not create ito be seeded so you can get the sql data below and add them manually after doing the following steps execept the last one


    - Clone your project
    
    - Go to the folder application using cd command on your cmd or terminal
    
    - Run composer install on your cmd or terminal
    
    - Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
   
    - Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
    - Run php artisan key:generate
   
    - Run php artisan migrate
    
    - Run php artisan serve
    
    - Go to http://localhost:8000/
    
    ### Medicine data
    
    
INSERT INTO `medicines` (`id`, `image`, `local_name`, `scientific_name`, `approver`, `approved`, `description`, `usage`, `side_effect`, `created_at`, `updated_at`) VALUES
(1, 'pears.png', 'Mapeasi', 'Pyrus communis', 'TMDA', 'Yes', ' The medicine is prepared from an infusion and decoction of barks, leaves, or flowers, either of one or of all\r\nleaves, dried in the shade. The quantities are as follows: 100 g to 1000 ml of water.\r\nThe decoction is allowed to set for 15-30 minutes, and d', '', 'No side effect.', NULL, NULL),
(2, 'apples.png', 'Apples', 'Pyrus malus', 'TMDA', 'Yes', ' These are used to supply the body with vitamins, sugars, enzymes and minerals.\r\nThey are also used for the treatment of rheumatism, gout, liver and kidney diseases.\r\nThey are also used as a laxative, as a stimulant and for the constriction of distended\r\n', '', 'No side effect.', NULL, NULL),
(3, 'cabbages.png', 'Cabbages', 'Brassica oleracea', 'TMDA', 'Yes', '\r\nThe plants are used to make a decoction for the treatment of cirrhosis of the liver,\r\ndysentery, upset bowels, and also as a vermifuge. They are also used as a\r\ndecongestant, for treating tonsillitis and the loss of voice. In their use as a\r\nvermifuge t', '', 'No side effect.', NULL, NULL),
(4, 'carrots.png', 'Carrots', 'Daucus sativus', 'TMDA', 'Yes', '\r\nThe plants are used to supply the body with Vitamins A, B, C, D & E. It is used to\r\ntreat anaemia, general weakness, scurvy, etc. It also has antidiuretic properties, and\r\nis also a vermifuge. It is administered as a decoction, as a juice and as a syrup', '', 'No side effect.', NULL, NULL),
(5, 'eucalyptus.png', 'Eucalyptus', 'Eucaliptus globulus', 'TMDA', 'Yes', '\r\nThe plant is used as an antiseptic; for the treatment of asthma, bronchitis, tonsillitis,\r\ncolds, urinary troubles and hemorrhages. It is used as an infusion and as a\r\ndecoction of leaves. 100 g is broken, dried leaves are added to 1000 ml of water.\r\nTh', '', 'No side effect.', NULL, NULL),
(6, 'lemon.png', 'Lemon', 'Citrus medica', 'TMDA', 'Yes', 'The plant is used as a sedative, as a tonic, as a vermifuge, as antispasmodic, as a\r\ndiuretic substance, and for the supply of vitamins A, B, B2, and C. In its use, 100 g\r\nof dried leaves are added to 1000 ml of water, and the decoction is allowed to set\r', '', 'No side effect.', NULL, NULL),
(7, 'maize.png', 'Maize', 'Zea mays', 'TMDA', 'Yes', '\r\nThe plant is useful as a sedative and also as a diuretic. It is also useful in easing\r\npains of renal colic, bladder stones, cyctitis, gout, and rheumatism. In its use an\r\ninfusion of maize tassels (about 1000 ml of water) is prepared. The dosage\r\nrecom', '', 'No side effect.', NULL, NULL),
(8, 'onion.png', 'Onions', 'Allium cepa', 'TMDA', 'Yes', 'These are used for treatment of diuretic, antiscorbutic (rich in Vitamin C), and\r\nantidiabetic (has glucoquinone that lowers blood sugar level). It is also useful as a\r\nvermifuge and as an antiseptic. Furthermore, it has aphrodisiac qualities, and is\r\nthe', '', 'No side effect.', NULL, NULL),
(9, 'afra.png', 'Fivi', 'Artemisia afra', '', '', '\r\nThis is used as an antimalarial. For its preparation, green or dried leaves are boiled\r\nfor 20 minutes. Alternatively a powder of dried leaves is placed in a hot water\r\ndecoction for 15 minutes and filtered with clean cloth. The dosage recommended is\r\n1', '', 'No side effect.', NULL, NULL),
(10, 'aristolochia.png', 'Unkulwe', 'Aristolochia densivenis', '', '', ' \r\nThe plant is used for the preparation of antisnake bite antidotes. It is thus a source\r\nof a snake venom antidote. For the administration of the First Aid, the snake\'s teeth\r\nare taken off the bitten area of the body. The patient is then tied tightly 1', '', 'No side effect.', NULL, NULL),
(11, 'warburgia.png', 'Mlifu', 'Warburgia ugandensis', '', '', ' \r\nThese plants are used for treatment of rheumatic and spasmodic patients.\r\nFor Warburgia and Ocotea the part used is the bark. For Myrica it is the root. In the\r\npreparations, the barks and roots should be mixed in equal quantities, 1:1. The\r\nmixture is', '', 'No side effect.', NULL, NULL),
(12, 'deinbollia.png', 'Mbwakambwaka', 'Deinbollia borbonica', '', '', '\r\nThese plants are useful for the treatment of hernia. For all of them it is the root\r\nwhich is used. In their preparation, the roots are taken fresh or dry. 7.5 cm pieces\r\nare cut into and 4 -5 smaller pieces, boiled with beef bones for 1 hr, and allowed', '', 'No side effect.', NULL, NULL),
(13, 'acacia.png', 'Kerefu-mzitu', 'Acacia schweinfurthii', '', '', '\r\nRoots of the plants are useful for the treatment of asthmatic patients. In the\r\npreparation of the plants for medicinal use, the roots are pounded separately. 200 g\r\nextracts of each plant are mixed with 20 g of pounded salt. On the dosage, 1\r\nteaspoonf', '', 'No side effect.', NULL, NULL),
(14, 'abrus.png', 'Lufyambo', 'Abrus precatorius', '', '', 'The plant is used for treating impotence (for males). For its preparation, roots of the\r\nplant are dried in the shade, ground to a powder, and mixed with a powder of\r\npound salt. The mixture is chewed and swallowed. The treatment is administered\r\nfor 3 to', '', 'No side effect.', NULL, NULL);


## License
"# Tanzanian-s-traditional-medicine-database" 
Please contact me for future development +255 785 669 830
