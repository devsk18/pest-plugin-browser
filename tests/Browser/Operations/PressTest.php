<?php

declare(strict_types=1);

it('clicks a link', function (): void {
    $this->visit('https://laravel.com')
        ->press('Get Started', 'a')
        ->assertUrlIs('https://laravel.com/docs/11.x');
});
