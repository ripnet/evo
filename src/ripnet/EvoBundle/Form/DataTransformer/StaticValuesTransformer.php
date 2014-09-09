<?php

namespace ripnet\EvoBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

class StaticValuesTransformer implements DataTransformerInterface
{
    public function transform($list)
    {
        if ($list === null)
            return "";
        else
            return implode("\n", unserialize($list));
    }

    public function reverseTransform($list)
    {
        return serialize(explode("\n", trim($list)));
    }
}