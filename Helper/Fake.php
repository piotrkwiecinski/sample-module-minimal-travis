<?php

namespace Piotrkwiecinski\SampleMinimal\Helper;

class Fake extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getFakeValue()
    {
        return true;
    }
}