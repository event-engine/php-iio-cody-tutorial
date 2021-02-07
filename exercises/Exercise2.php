<?php
declare(strict_types=1);

namespace Cody\Exercises;

use Cody\Tutorial\Command\RegisterUser;
use PHPUnit\Framework\TestCase;
use function class_exists;

final class Exercise2 extends TestCase
{
    /**
     * @test
     * @testdox Add id (string) and name (string) properties to RegisterUser
     */
    public function it_checks_register_user_properties()
    {
        $this->assertTrue(class_exists(RegisterUser::class), 'Cannot find a RegisterUser command class');
        $this->assertClassHasAttribute('id', RegisterUser::class);
        $this->assertClassHasAttribute('name', RegisterUser::class);
    }
}
