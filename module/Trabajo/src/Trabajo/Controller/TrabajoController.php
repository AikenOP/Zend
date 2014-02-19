<?php
/**
 * 
 * @package Trabajo
 * 
 */
namespace Trabajo\Controller;

use Trabajo\Model;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 *
 * @package Trabajo
 */
class TrabajoController extends AbstractActionController
{
    /**
     * Index - Trabajo
     * 
     * @return Zend\View\Model\ViewModel Zend View Model
     */
    public function indexAction()
    {

    	$this->layout('layout/test');
    	$this->layout()->header = 'Header Dinamico'; // envia parametros al Layout
    	$this->layout()->title = 'Title Dinamico'; // envia parametro title al layout
    	return new ViewModel();
    }
  
}