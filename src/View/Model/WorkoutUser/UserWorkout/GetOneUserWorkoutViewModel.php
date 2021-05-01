<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout\Nested\UserExerciseInWorkoutNestedModel;

final class GetOneUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public string $visibility;
    public ?string $programmedDate;
    public ?string $completedDate;

    /** @var UserExerciseInWorkoutNestedModel[]  */
    public array $orderedExercises;
}