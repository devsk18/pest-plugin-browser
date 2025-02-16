<?php

declare(strict_types=1);

test('assert element is focused', function () {
    $url = 'https://www.facebook.com';

    $this->visit($url)
        ->assertFocused("input[name='email']");
});
