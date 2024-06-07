<?php
use PHPUnit\Framework\TestCase;

class KlantTest extends TestCase
{
    public function testSetGetId()
    {
        $klant = new Klant();
        $klant->setId(1);
        $this->assertEquals(1, $klant->getId());
    }

    public function testSetGetNaam()
    {
        $klant = new Klant();
        $klant->setNaam("Jan Jansen");
        $this->assertEquals("Jan Jansen", $klant->getNaam());
    }

    public function testSetGetEmail()
    {
        $klant = new Klant();
        $klant->setEmail("jan.jansen@example.com");
        $this->assertEquals("jan.jansen@example.com", $klant->getEmail());
    }

    public function testSetGetTelefoonnummer()
    {
        $klant = new Klant();
        $klant->setTelefoonnummer("0612345678");
        $this->assertEquals("0612345678", $klant->getTelefoonnummer());
    }

    public function testSetGetAdres()
    {
        $klant = new Klant();
        $klant->setAdres("Hoofdstraat 123, 1234 AB Amsterdam");
        $this->assertEquals("Hoofdstraat 123, 1234 AB Amsterdam", $klant->getAdres());
    }
}
?>