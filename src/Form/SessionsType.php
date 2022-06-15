<?php

namespace App\Form;

use App\Entity\Session;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomDeSession')
            ->add('EtatDeSession', ChoiceType::class, [
                'choices' => [
                    'Non Démarré' => 'Non Démarré',
                    'En cours' => 'En cours',
                    'Terminé' => 'Terminé',
                ],
                'expanded' => true,
                'attr' => ['class' => 'd-flex'],
                'label_attr' => ['class' => 'me-3'],
            ])
            ->add('NombreParticipants', ChoiceType::class, [
                'choices' => [
                    '8' => 8,
                    '10' => 10,
                    '12' => 12,
                ],
                'expanded' => true,
                'attr' => ['class' => 'd-flex'],
                'label_attr' => ['class' => 'me-3'],
            ])
            //le CollectionType permet d'imbriqué un autre formulaire dans le 1er formulaire.
            ->add('users', CollectionType::class, [
                //chaque entrée dans ce champ sera un champ de type User
                'entry_type' => ParticipantsType::class,
                'label' => 'Participants',
                //ces options sont passées à chacun des champs créer, dans mon cas cela me permet d'injecter Bootstrap
                // afin de créer un rendu visuel plus intéressant
                'entry_options' => ['label' => false, 'attr' => ['class'=> 'col-6 border-bottom border-2 border-danger mb-3']],
                // le allow_add => true permet d'ajouter des items non reconnus en cas de soumission de formulaire
                //cependant cela demande de faire un peu de JS afin de pouvoir afficher correctement les nouveaux champs créés.
                'allow_add' => true,
                // Cette option permet d'implémenter un bouton "supprimer", et d'effectivement supprimer un champ et une fois le formulaire soumis,
                // son absence dans les données envoyées signifie qu'on ne le retrouvera pas en base de données
                'allow_delete' => true,
                // Cette option permet de s'assurer que le setter concerné soit appelé dans tous les cas. En effet, il arrive dans certains cas de figures
                //que le setter ne sois pas appelé
                'by_reference' => false,
            ])
        ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
