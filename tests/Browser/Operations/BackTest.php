<?php

declare(strict_types=1);

test('navigates forward', function (): void {
    $this->visit('/')
        ->clickLink('Get Started')
        ->assertUrlIs('https://pestphp.com/docs/installation')
        ->back()
        ->assertUrlIs('http://localhost:9357');
});
