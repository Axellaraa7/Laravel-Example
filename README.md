# 1: Changing the .env file.
DB_DATABASE should be changed for the name of the database you would use, and if you want to use another database engine u have to change the DB_CONNECTION env variable. Also if u want to check the full data of database u can found at: config/database.php

# 2: Creating a migrations
It's used the commando 'make:migration' with the format create_tablename_table, and the file will be in the following route: "app/databases/migrations"there u can assign the data types of the columns of the respective table;
The u have to use the migrate command to import the changes u have made in the tables.

# 3: ORM && tinker
It's used the commando 'make:model' it takes the plural of the table in english, but if u want to bound the model to another table name u need to define the protected property $table in the model. 
-$object->save(): inserting an element in the table;

# 4: Creating a seeder
It's used the command 'make:seed' with the option --model=tablename and it generates a class with a method called run, this method is filled with the model's objects of the table you want to create. You need to use the save method to insert a register. To import the class created to the Database main seeder file use Seeder::call method with the classname of the seed generated as parameter
its necessary the commando db:seed or migrate --seed

# 5: Creating a factory
To creat a factory you need to use the command 'make:factory'