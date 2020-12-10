<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetOneUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public array $orderedExercises;
}