<?php
namespace ZfDeals\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of AdminController
 *
 * @author messy
 */
class AdminController extends AbstractActionController
{
    public function indexAction() 
    {
        return new ViewModel();
    }
}