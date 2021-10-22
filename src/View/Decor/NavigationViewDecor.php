<?php

namespace COL\Library\ApiContracts\View\Decor;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Decor\ViewDecorInterface;

final class NavigationViewDecor implements ViewDecorInterface
{
    public ?string $firstItemQueryString;
    public ?string $previousItemQueryString;
    public ?string $currentItemQueryString;
    public ?string $nextItemQueryString;
}
