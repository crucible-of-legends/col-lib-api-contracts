<?php

namespace COL\Library\ApiContracts\Domain\View\Model\User\User;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetLargeCurrentUserViewModel implements ViewModelInterface
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
