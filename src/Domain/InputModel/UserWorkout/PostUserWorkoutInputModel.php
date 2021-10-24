<?php

namespace COL\Library\ApiContracts\Domain\InputModel\UserWorkout;

use COL\Librairy\BaseContracts\Domain\InputModel\InputModelInterface;

final class PostUserWorkoutInputModel implements InputModelInterface
{
    public string $name;
    public string $visibility;
    public ?string $image = null;
    public ?int $workoutReferenceId = null;
}
