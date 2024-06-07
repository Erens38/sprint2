<?php
use PHPUnit\Framework\TestCase;

class VerwerkNieuweKlantTest extends TestCase
{
    public function testNieuweKlantToevoegen()
    {
        $_POST['naam'] = 'Jan Jansen';
        $_POST['email'] = 'jan.jansen@example.com';
        $_POST['telefoonnummer'] = '0612345678';
        $_POST['adres'] = 'Hoofdstraat 123, 1234 AB Amsterdam';

        ob_start();
        include 'verwerk_nieuwe_klant.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('De nieuwe klant is succesvol toegevoegd.', $output);
    }
}
?>