<?php

namespace COL\Library\Contracts\InputModel\UserWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\InputModel\InputModelInterface;

final class PostUserWorkoutInputModel implements InputModelInterface
{
    public string $name;
    public string $visibility;
    public ?string $image = null;
    public ?int $workoutReferenceId = null;
}