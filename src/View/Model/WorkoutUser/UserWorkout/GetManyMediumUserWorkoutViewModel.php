<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceWorkout;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyMediumUserWorkoutViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $image;
    public ?string $programmedDate;
    public ?string $completedDate;
}