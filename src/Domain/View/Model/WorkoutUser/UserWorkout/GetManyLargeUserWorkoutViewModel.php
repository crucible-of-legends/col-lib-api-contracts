<?php

namespace COL\Library\ApiContracts\Domain\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
use COL\Library\ApiContracts\Domain\View\Model\WorkoutUser\UserWorkout\Nested\UserExerciseInWorkoutNestedModel;

final class GetManyLargeUserWorkoutViewModel implements ViewModelInterface
{
    public string $id;
    public string $name;
    public string $image;
    public string $visibility;
    public ?string $programmedDate;
    public ?string $completedDate;

    /** @var UserExerciseInWorkoutNestedModel[] */
    public array $orderedExercises;
}
