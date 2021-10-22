<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceExercise;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManyMediumReferenceExerciseViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
    public string $video;
}
