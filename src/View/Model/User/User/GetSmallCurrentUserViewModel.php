<?php

namespace COL\Library\ApiContracts\View\Model\User\User;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetSmallCurrentUserViewModel implements ViewModelInterface
{
    public string $username;
    public string $canonicalUsername;
    public string $email;
}