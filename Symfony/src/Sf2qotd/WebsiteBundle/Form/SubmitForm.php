<?php

namespace Sf2qotd\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SubmitForm extends AbstractType
{
    /**
     * Configures the form
     * 
     * @param FormBuilderInterface $builder
     * @param array $options
     */
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('body', 'textarea');
    }

    /**
     * Returns the name
     * 
     * @return string
     */
    public function getName()
    {
        return 'submit_form';
    }
}