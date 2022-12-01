<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RateLimiterBundle extends Bundle
{
    public function getContainerExtension()
    {
        return $this->extension = $this->createContainerExtension();
    }
}
