<?php declare(strict_types=1);
final class Exercise 
{
    private $var;

    public function __construct(string $var) {
        $this->var = $var;
    }

    public function saySomething(): string {
        return "Say something $this->var";
    }
}