<?php

namespace CanalTP\NmmPortalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use CanalTP\SamEcoreApplicationManagerBundle\SamApplication;

class CanalTPNmmPortalBundle extends Bundle implements SamApplication
{
    public function getParent()
    {
        return 'CanalTPSamCoreBundle';
    }

    public function getCanonicalName()
    {
        return 'samcore';
    }
}
