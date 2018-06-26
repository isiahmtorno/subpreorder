# subpreorder

The database is in the database folder. I used MySQL Database.

REST API CRUD Operation for Products

save and update function.

ex. save: the variable id must be null or dont have value.

http://localhost/subpreorder/maintenance/save.php?id=&category=5&name=Onions

ex. update: the variable id must have a value to update a record.

http://localhost/subpreorder/maintenance/save.php?id=1&category=5&name=Onions


delete funtion.

the variable id must have a value to delete a record.

http://localhost/subpreorder/maintenance/delete.php?id=1


list of products JSON format.

http://localhost/subpreorder/maintenance/list.php
