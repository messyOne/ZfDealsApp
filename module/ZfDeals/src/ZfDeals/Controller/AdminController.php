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
    
    public function addProductAction()
    {
        $form = new \ZfDeals\Form\ProductAdd();
        
        if ($this->getRequest()->isPost()) {
            $form->setData($this->getRequest()->getPost());
            
            if ($form->isValid()) {
                return $this->redirect()->toRoute('zf-deals\admin\product\add');
            } else {
                return new ViewModel(
                    array(
                        'form' => $form
                    )
                );
            }
        } else {
            return new ViewModel(
                array(
                    'form' => $form
                )
            );
        }
    }
}