<?php

namespace COL\Library\Contracts\View\Model\WorkoutReference\ReferenceExercise;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManyMediumReferenceExerciseViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $video;
}