<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
    	$this->layout('layout/test');
    	$this->layout()->header = 'Header Dinamico'; // envia parametros al Layout
    	$this->layout()->title = 'Title Dinamico'; // envia parametro title al layout
        return new ViewModel();
    }

    public function ajaxAction()
    {
    	$view = new ViewModel();
    	$view->setTerminal(true); //desestima el uso de cualquier layout(util para ajax)
    	return $view;
    }
}
