<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;

final class GetManySmallUserWorkoutViewModel implements ViewModelInterface
{
    public string $id;
    public string $name;
}
