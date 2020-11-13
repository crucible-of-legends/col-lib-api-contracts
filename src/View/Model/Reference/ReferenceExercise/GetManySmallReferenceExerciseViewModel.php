<?php

namespace COL\Library\Contracts\View\Model\Reference\ReferenceExercise;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetManySmallReferenceExerciseViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
}