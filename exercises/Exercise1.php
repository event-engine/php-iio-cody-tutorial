<?php
declare(strict_types=1);

namespace Cody\Exercises;

use Cody\Tutorial\Command\AddBuilding;
use PHPUnit\Framework\TestCase;
use function class_exists;

final class Exercise1 extends TestCase
{
    /**
     * @test
     * @testdox Generate command called AddBuilding
     */
    public function it_checks_add_building_command()
    {
        $this->assertTrue(class_exists(AddBuilding::class), 'Cannot find an AddBuilding command class');
    }
}
