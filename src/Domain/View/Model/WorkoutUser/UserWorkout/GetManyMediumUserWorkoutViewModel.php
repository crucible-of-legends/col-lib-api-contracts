<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManyMediumUserWorkoutViewModel implements ViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public string $visibility;
    public ?string $programmedDate;
    public ?string $completedDate;
}
