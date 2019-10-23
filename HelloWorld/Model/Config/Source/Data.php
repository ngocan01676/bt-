<?php 
 namespace AN\HelloWorld\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Data implements ArrayInterface
{

/*
 * Option getter
 * @return array
 */
public function toOptionArray()
{
    $arr = $this->toArray();
    $ret = [];
    foreach ($arr as $key => $value) {
        $ret[] = [
            'value' => $key,
            'label' => $value
        ];
    }
    return $ret;
}

/*
 * Get options in "key-value" format
 * @return array
 */
public function toArray()
{
    $choose = [
        '1' => 'Home page',
        '2' => 'Category page',
        '3' => 'Product page',
        '4' => 'Cart',
        '5' => 'Cms page'
       

    ];
    return $choose;
}
}