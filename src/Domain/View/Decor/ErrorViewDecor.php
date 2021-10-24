<?php

namespace COL\Library\ApiContracts\Domain\View\Decor;

use COL\Librairy\BaseContracts\Domain\View\Decor\ViewDecorInterface;

final class ErrorViewDecor implements ViewDecorInterface
{
    public string $errorCode;
    public array $errorMessages;
}
