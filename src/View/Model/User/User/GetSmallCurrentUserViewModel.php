<?php

namespace COL\Library\Contracts\View\Model\User\User;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetSmallCurrentUserViewModel implements BaseViewModelInterface
{
    public string $username;
    public string $canonicalUsername;
    public string $email;
}