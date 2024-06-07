<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $adres = $_POST['adres'];

    // Database verbinding
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mijn_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Verbinding mislukt: " . $conn->connect_error);
    }

    $sql = "INSERT INTO klanten (naam, email, telefoonnummer, adres)
            VALUES ('$naam', '$email', '$telefoonnummer', '$adres')";

    if ($conn->query($sql) === TRUE) {
        echo "De nieuwe klant is succesvol toegevoegd.";
    } else {
        echo "Fout: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>