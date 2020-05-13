<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class TestAdherent extends TestCase
{
    public function testCreateAdherent(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            new Adherent("commerot", "yann", "20/01/1998")
        );
    }

    public function testIdNormalise(): void
    {
        $adh = new Adherent("Commerot", "Yann", "20/01/1998");
        $this->assertEquals("yann commerot 20/01/1998", $adh->idNormalise());
    }

    public function testTiret(): void
    {
        $adh = new Adherent("Commerot", "Jean-Charles", "20/01/1998");
        $this->assertEquals("jean charles commerot 20/01/1998", $adh->idNormalise());
    }
}