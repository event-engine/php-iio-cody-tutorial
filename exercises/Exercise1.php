<?php
declare(strict_types=1);

namespace Cody\Exercises;

use Cody\Tutorial\Command\RegisterUser;
use PHPUnit\Framework\TestCase;
use function class_exists;

final class Exercise1 extends TestCase
{
    /**
     * @test
     * @testdox Generate command called RegisterUser
     */
    public function it_checks_register_user_command()
    {
        $this->assertTrue(class_exists(RegisterUser::class), 'Cannot find a RegisterUser command class');
    }
}
