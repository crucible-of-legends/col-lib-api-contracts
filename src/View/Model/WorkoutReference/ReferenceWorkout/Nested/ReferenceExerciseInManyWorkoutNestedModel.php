<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceWorkout\Nested;

final class ReferenceExerciseInManyWorkoutNestedModel
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public ?int $restDuration; // in seconds
    public ?int $nbReps;
    public ?int $distance; // in meters
    public ?int $duration; // in seconds
    public int $position;
}
