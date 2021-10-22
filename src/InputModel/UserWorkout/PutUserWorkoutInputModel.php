<?php

namespace COL\Library\Contracts\InputModel\UserWorkout;

use COL\Librairy\Domain\DataInteractor\InputModel\InputModelInterface;
use DateTimeInterface;

final class PutUserWorkoutInputModel implements InputModelInterface
{
    public string $name;
    public string $visibility;
    public ?string $image = null;
    public ?int $programmedForUserId = null;
    public ?DateTimeInterface $programmedDate = null;
}