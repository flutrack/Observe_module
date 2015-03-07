##Creating a back-end for submitting personalized flu reports through the FluTrack android app
Download a  web server solution stack package e.g. XAMPP. In the location in which you have installed it create a folder and put there all the .php files from this repository.

From your browser open the phpmyadmin and create a database named flutrack. Select the newly created database and in the SQL tab put the following code.

```

```

Make sure that your SQL query **is exactly the same** with this one. If you wish to make any changes (e.g. remove or add table columns) you must update the android source code accordingly, otherwise the app will always crash on startup.
