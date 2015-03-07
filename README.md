##Tutorial for creating a back-end that handles the submission of personalized flu reports through the FluTrack android app
Download a  web server solution stack package e.g. XAMPP. In the location in which you have installed it create a folder and put there all the .php files from this repository.

From your browser open the phpmyadmin and create a database named flutrack. Select the newly created database and in the SQL tab put the following code.

```
CREATE TABLE reports(
pid int(10) primary key auto_increment,
person varchar(30) not null,
symptoms varchar(50) not null,
userID varchar(20) not null,
latitude varchar(20) not null,
longitude varchar(20) not null,
created_at timestamp default now()
);
```

Make sure that your SQL query **is exactly the same** with this one. If you wish to make any changes (e.g. remove/alter/add table columns) you must update the android source code accordingly, otherwise the app **will always crash** on startup.
