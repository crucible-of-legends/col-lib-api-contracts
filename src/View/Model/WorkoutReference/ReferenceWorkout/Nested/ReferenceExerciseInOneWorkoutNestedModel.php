<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceWorkout\Nested;

final class ReferenceExerciseInOneWorkoutNestedModel
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public ?int $restDuration; // in seconds
    public ?int $nbReps;
    public ?int $distance; // in meters
    public ?int $duration; // in seconds
    public int $position;

    /** @var ReferenceExerciseEquipmentNestedModel[] */
    public array $equipments;
}
