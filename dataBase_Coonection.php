
<?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'back-end';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            //On vérifie la connexion
            if(!$conn){
                die("connection failed" . mysqli_connect_error());
            }
            echo 'Connexion réussie';
        ?>