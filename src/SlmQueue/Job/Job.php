<?php

namespace SlmQueue\Job;

interface Job
{
    public function __invoke();
    public function getId();
}