<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CoreBundle\Form\Elements;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class TextArea
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class TextArea extends TextField implements ElementInterface
{
    /**
     * {@inheritdoc}
     */
    public function configureAttributes(OptionsResolver $resolver)
    {
        parent::configureAttributes($resolver);

        $resolver->setDefined([
            'rows',
            'cols',
        ]);

        $resolver->setAllowedTypes([
            'rows' => 'int',
            'cols' => 'cols'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAttributesJs()
    {
        return [
            $this->formatAttributeJs('name', 'sName'),
            $this->formatAttributeJs('label', 'sLabel'),
            $this->formatAttributeJs('rows', 'iRows', ElementInterface::TYPE_NUMBER),
            $this->formatAttributeJs('cols', 'iCols', ElementInterface::TYPE_NUMBER),
            $this->formatAttributeJs('comment', 'sComment'),
            $this->formatAttributeJs('error', 'sError'),
            $this->formatRulesJs(),
            $this->formatDependencyJs(),
        ];
    }
}
