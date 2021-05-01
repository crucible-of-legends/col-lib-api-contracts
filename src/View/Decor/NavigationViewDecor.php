<?php

namespace COL\Library\Contracts\View\Decor;

final class NavigationViewDecor implements ViewDecorInterface
{
    public ?string $firstItemQueryString;
    public ?string $previousItemQueryString;
    public ?string $currentItemQueryString;
    public ?string $nextItemQueryString;
}