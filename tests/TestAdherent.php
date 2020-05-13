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
}