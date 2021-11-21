<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExerciseTest extends TestCase {
    public function testSaySomething(): void {
        $p = new Exercise("haha");
        $this->assertEquals("Say something haha", $p->saySomething());
    }
}