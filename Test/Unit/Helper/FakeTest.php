<?php

namespace Piotrkwiecinski\SampleMinimal\Test\Unit\Helper;

use Piotrkwiecinski\SampleMinimal\Helper\Fake;

class FakeTest extends \PHPUnit_Framework_TestCase
{
    public function testFakeHelper()
    {
        $contextMock = $this->getMockBuilder(\Magento\Framework\App\Helper\Context::class)
            ->disableOriginalConstructor()
            ->getMock();
        $helper = new Fake($contextMock);
        self::assertTrue($helper->getFakeValue());
    }
}