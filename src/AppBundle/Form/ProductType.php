<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-09
 * Time: 18:55
 */

namespace AppBundle\Form;

use AppBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('brochure', FileType::class, array('label' => 'Brochure (PDF file)'))
            //->add('save', SubmitType::class, array('label' => 'Upload'))
;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }
}