<?php
namespace Casino\V1\Rpc\Ping;

use Zend\Mvc\Controller\AbstractActionController;

class PingController extends AbstractActionController
{
    public function pingAction()
    {
		return array('ack' => time());
    }
}
