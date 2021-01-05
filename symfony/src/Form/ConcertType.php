<?php

namespace App\Form;

use App\Entity\Band;
use App\Entity\Concert;
use App\Entity\Hall;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use http\Client\Request;
use http\Client\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class,[
                'widget' => 'choice',
                'format' => 'dd / MM / yyyy'
            ])
            ->add('tourName', TextType::class,[
                'label' => 'Nom de la tournée'
            ])
            ->add('hall', EntityType::class,[
                'class' => Hall::class,
                'choice_label' => 'name'
            ])
            ->add('bands', EntityType::class,[
                'class' => Band::class,
                'choice_label' => 'name'
            ])
        ;
    }

    /**
     * @param Request $request
     * @param Concert $concert
     * @return Response
     *
     * @Route("/delete/{id}", name="concert_delete")
     */
    public function delete(Request  $request, Concert $concert): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($concert);
        $entityManager->flush();

        return $this->redirectToRoute('list_concerts');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Concert::class,
        ]);
    }
}
