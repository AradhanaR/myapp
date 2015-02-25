<?php

namespace Acme\StoreBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'Acme\StoreBundle\Model\Product',
        'name'       => 'product',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('price');
        $builder->add('description');
    }
}
