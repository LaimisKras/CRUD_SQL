# Project Name
Practical work "CRUD_SQL"

# Description
This project was created using PHP, CSS and Bootstrap. Database and tables with employees and projects information was made with "MySQL Workbench".

In this Project Management System you can:

add projects and employees,

update projects and employees,

delete projects and employees,

assign project (from the projects list) to employee. All these changes will be updated in MySQL database.

# Possible launch script
To install this project you need to have "GIT BASH", "XAMPP" and "MySQL Workbench".

In "xampp" folder you need to navigate to folder "htdocs".

Then you need to clone repository. Copy link of repository:
 "https://github.com/LaimisKras/CRUD_SQL.git".
 
Open "GIT BASH" in "htdocs" folder.

Type "git clone",  then paste the URL you copied earlier and press "Enter" to create your local clone: 
"$ git clone  https://github.com/LaimisKras/CRUD_SQL.git".

Open "MySQL Workbench" and create database named "crud".
Create Database "crud".

In top of "MySQL Workbench" choose "Server -> Data Import".

Then, in "Data Import" tab, you need to do these steps:

Section "Import Options" - select "Import from Self-Contained File", and choose file from cloned repository "CRUD_SQL.sql",

Section "Default Schema" to be "Imported To" - select "crud" (the database you just created),

Go to "Import Progress" and press "Start Import".

reload schema, then database with new tables should be there.

Run "XAMPP" and start "Apache" and "MySQL" Web Server.

Open your browser and in the search bar type:
http://localhost/CRUD_SQL/index.php

# Authors and Acknowledgments
I am very grateful to my mentors Vilius Ramulionis and Mindaugas Bernatavičius for their help in programming.

# Project status
Can be used but may be added in the future as there is work to be done.
