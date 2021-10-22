<?php

namespace COL\Library\ApiContracts\View\Model\WorkoutReference\ReferenceExercise;

use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Model\ViewModelInterface;

final class GetManySmallReferenceExerciseViewModel implements ViewModelInterface
{
    public string $name;
    public string $canonicalName;
}
