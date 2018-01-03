<?php

namespace Utility\MasterVendorBundle\Services;


class DummyService
{
    public function generateMessage($name)
    {
        return 'Hello ' . $name . '!';
    }
}