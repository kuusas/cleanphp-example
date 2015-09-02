<?php

namespace CleanPhp\TrackerBundle\Form;

use CleanPhp\TrackerBundle\Entity\TagRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MoneyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount')
            ->add('date')
            ->add('tag', 'entity', array(
                'class' => 'CleanPhp\TrackerBundle\Entity\Tag',
                'query_builder' => function (TagRepository $er) {
                        $queryBuilder = $er->createQueryBuilder('tag');
                        $queryBuilder->resetDQLPart('select');
                        $queryBuilder->resetDQLPart('from');
                        $queryBuilder->select('tag')
                            ->from('CleanPhpTrackerBundle:Tag', 'tag');
                        return $queryBuilder;
                    },
                'property' => 'name'
            ))
            ->add('submit', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CleanPhp\TrackerBundle\Entity\Money'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cleanphp_trackerbundle_money';
    }
}
