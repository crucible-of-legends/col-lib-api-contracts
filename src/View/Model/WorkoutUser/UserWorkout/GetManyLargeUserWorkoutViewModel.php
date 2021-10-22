<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;
use COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout\Nested\UserExerciseInWorkoutNestedModel;

final class GetManyLargeUserWorkoutViewModel implements ViewModelInterface
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