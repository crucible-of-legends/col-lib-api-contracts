<?php

namespace COL\Library\Contracts\View\Model\Reference;

use COL\Library\Contracts\View\Model\BaseViewModelInterface;

final class GetOneReferenceEquipmentViewModel implements BaseViewModelInterface
{
    public string $name;
    public string $canonicalName;
    private string $image;
    private array $shops;
}