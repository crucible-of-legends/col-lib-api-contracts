<?php

namespace COL\Library\Contracts\InputModel\UserWorkout;

use COL\Library\Contracts\InputModel\InputModelInterface;

final class GetManyUserWorkoutInputModel implements InputModelInterface
{
    public ?string $visibility = null;
    public ?int $programmedForUserId = null;
    public ?string $createdByUserId = null;
}