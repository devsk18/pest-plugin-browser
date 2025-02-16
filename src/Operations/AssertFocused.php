<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

final readonly class AssertFocused implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $selector
    ) {
        //
    }

    /**
     * Compile the operation.
     */
    public function compile(): string
    {
        return "await expect(page.locator('{$this->selector}').toBeFocused();";
    }
}
