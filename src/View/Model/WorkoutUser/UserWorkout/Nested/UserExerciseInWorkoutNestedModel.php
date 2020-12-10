<?php

namespace COL\Library\Contracts\View\Model\WorkoutUser\UserWorkout\Nested;

final class UserExerciseInWorkoutNestedModel
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public int $position;

    public ?int $plannedReps;
    public ?int $plannedWeight;
    public ?int $plannedDuration;

    public ?int $completedReps;
    public ?int $completedWeight;
    public ?int $completedDuration;

    public ?int $restDuration;
}