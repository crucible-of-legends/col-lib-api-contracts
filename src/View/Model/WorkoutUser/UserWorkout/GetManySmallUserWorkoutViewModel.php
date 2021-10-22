<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManySmallUserWorkoutViewModel implements ViewModelInterface
{
    public string $id;
    public string $name;
}