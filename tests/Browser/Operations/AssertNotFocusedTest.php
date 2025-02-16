<?php

declare(strict_types=1);

test('assert element is not focused', function () {
    $url = 'https://laravel.com/docs/11.x';

    $this->visit($url)
        ->assertNotFocused('#docsearch-input');
});
