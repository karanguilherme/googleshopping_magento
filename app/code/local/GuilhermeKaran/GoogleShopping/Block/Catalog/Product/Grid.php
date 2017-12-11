<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 11/12/17
 * Time: 15:33
 */

class GuilhermeKaran_GoogleShopping_Block_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    protected function _prepareMassaction()
    {
        parent::_prepareMassaction();

        $this->getMassactionBlock()->addItem(
            'googleshopping',
            array('label' => $this->__('Google Shopping'),
                'url'   => $this->getUrl('googleshopping/controller/action') //this should be the url where there will be mass operation
            )
        );
    }



}