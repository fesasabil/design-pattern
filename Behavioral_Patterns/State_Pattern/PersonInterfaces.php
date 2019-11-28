<?php

namespace Behavioral_Pattern\State_Pattern;

abstract class Mood
{
    public abstract function insult(Person $context);

    public abstract function hug(Person $context);

    public abstract function getName(Person $context, string $name);
}