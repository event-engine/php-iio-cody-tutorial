<?php
declare(strict_types=1);

namespace Cody\Exercises;

use Cody\Tutorial\Command\AddBuilding;
use PHPUnit\Framework\TestCase;
use function class_exists;

final class Exercise2 extends TestCase
{
    /**
     * @test
     * @testdox Add id (string) and name (string) properties to AddBuilding
     */
    public function it_checks_add_building_properties()
    {
        $this->assertTrue(class_exists(AddBuilding::class), 'Cannot find an AddBuilding command class');
        $this->assertClassHasAttribute('id', AddBuilding::class);
        $this->assertClassHasAttribute('name', AddBuilding::class);
    }
}
