<?php
namespace ZfDeals\Form;

use Zend\Form\Form;

/**
 * Description of ProductAdd
 *
 * @author messy
 */
class ProductAdd extends Form
{
    public function __construct()
    {
        parent::__construct('productadd');
        $this->setAttribute('action', '/deals/admin/product/add');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'type' => 'ZfDeals\Form\ProductFieldset',
            'options' => array(
                'use_as_base_fieldset' => true
            )
        ));
                
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Add'
            )
        ));
    }
}

?>
