<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Label;

interface LabelRepositoryInterface
{
    public function save(Label $label);
}