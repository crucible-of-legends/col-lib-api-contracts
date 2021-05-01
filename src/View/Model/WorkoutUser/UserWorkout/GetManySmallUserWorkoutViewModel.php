<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManySmallUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $id;
    public string $name;
}