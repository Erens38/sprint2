<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe Klant Toevoegen</title>
</head>
<body>
    <h1>Nieuwe Klant Toevoegen</h1>
    <form action="verwerk_nieuwe_klant.php" method="post">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br><br>
        
        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefoonnummer">Telefoonnummer:</label><br>
        <input type="text" id="telefoonnummer" name="telefoonnummer" required><br><br>
        
        <label for="adres">Adres:</label><br>
        <input type="text" id="adres" name="adres" required><br><br>
        
        <input type="submit" value="Opslaan">
    </form>
</body>
</html>
