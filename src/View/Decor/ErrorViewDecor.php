<?php

namespace COL\Library\Contracts\View\Decor;

final class ErrorViewDecor implements ViewDecorInterface
{
    public string $errorCode;
    public array $errorMessages;
}