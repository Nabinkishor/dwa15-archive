<?php
namespace susanBuck\Shipping;

class RateAdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        /* @var RateAdapter $mock */
        $mock = $this->getMockForAbstractClass('susanBuck\Shipping\RateAdapter');
        $mockRequestAdapter = $this->getMockForAbstractClass('susanBuck\Shipping\RateRequest\Adapter');
        $mock->setRequestAdapter($mockRequestAdapter);
    }
}
