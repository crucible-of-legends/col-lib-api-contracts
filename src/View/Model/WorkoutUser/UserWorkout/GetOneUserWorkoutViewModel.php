<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetOneUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public ?string $programmedDate;
    public ?string $completedDate;
    public array $orderedExercises;
}