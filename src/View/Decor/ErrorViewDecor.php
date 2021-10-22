<?php

namespace COL\Library\ApiContracts\View\Decor;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Decor\ViewDecorInterface;

final class ErrorViewDecor implements ViewDecorInterface
{
    public string $errorCode;
    public array $errorMessages;
}