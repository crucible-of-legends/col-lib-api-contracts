<?php

namespace COL\Library\Contracts\InputModel\UserWorkout;

use COL\Library\Contracts\InputModel\InputModelInterface;

final class PostUserWorkoutInputModel implements InputModelInterface
{
    public string $name;
    public string $visibility;
    public ?string $image = null;
    public ?int $workoutReferenceId = null;
}