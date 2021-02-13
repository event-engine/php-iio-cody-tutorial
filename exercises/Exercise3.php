<?php
declare(strict_types=1);

namespace Cody\Exercises;

use Cody\Tutorial\Command\AddBuilding;
use Cody\Tutorial\Aggregate\Building;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use function class_exists;

final class Exercise3 extends TestCase
{
    /**
     * @test
     * @testdox Add a Building aggregate class with an addBuilding(AddBuilding $command) method
     */
    public function it_checks_building_aggregate()
    {
        $this->assertTrue(class_exists(Building::class), 'Cannot find a Building aggregate class');
        $buildingRef = new ReflectionClass(Building::class);

        $this->assertTrue($buildingRef->hasMethod('addBuilding'), 'Building aggregate could be found, but addBuilding method is missing');

        $addBuildingMethod = $buildingRef->getMethod('addBuilding');

        $this->assertTrue($addBuildingMethod->getNumberOfParameters() === 1, 'Building::addBuilding method does not take AddBuilding command as input parameter');

        $addBuildingMethodParameter = $addBuildingMethod->getParameters()[0];

        $this->assertTrue(
            $addBuildingMethodParameter->hasType()
            && $addBuildingMethodParameter->getType()->getName() === AddBuilding::class,
            'Building::addBuilding method does not take AddBuilding command as input parameter'
        );
    }
}
