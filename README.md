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
    
    
    


## License
"# Tanzanian-s-traditional-medicine-database" 
Please contact me for future development +255 785 669 830
