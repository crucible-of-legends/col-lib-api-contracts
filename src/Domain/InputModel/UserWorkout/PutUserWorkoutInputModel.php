<?php

namespace COL\Library\ApiContracts\Domain\InputModel\UserWorkout;

use COL\Librairy\BaseContracts\Domain\InputModel\InputModelInterface;
use DateTimeInterface;

final class PutUserWorkoutInputModel implements InputModelInterface
{
    public string $name;
    public string $visibility;
    public ?string $image = null;
    public ?int $programmedForUserId = null;
    public ?DateTimeInterface $programmedDate = null;
}
