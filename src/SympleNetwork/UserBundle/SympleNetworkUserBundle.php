<?php

namespace SympleNetwork\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SympleNetworkUserBundle extends Bundle
{
    public function getParent() {
        return "FOSUserBundle";
    }
}
