<?php

namespace COL\Library\Contracts\View\Model\User\User;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetLargeCurrentUserViewModel implements BaseViewModelInterface
{
    public string $username;
    public string $canonicalUsername;
    public string $email;
    public ?string $gender;
    public ?string $firstName;
    public ?string $lastName;
    public ?string $birthDate;
    public ?string $nationality;
    public ?string $registrationDate;
    public ?string $lastLoginDate;
}