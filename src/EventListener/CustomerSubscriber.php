<?php 

namespace App\EventListener;

use App\Entity\Customer;
use Doctrine\ORM\Events;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class CustomerSubscriber implements EventSubscriber {

    public function getSubscribedEvents(): array
        {
            return [
                Events::preUpdate
            ];
        }
        public function preUpdate(LifecycleEventArgs $args): void {
            $entity = $args->getEntity();
            if($entity instanceof Customer){
                if(!$entity->getCompany()){
                    $entity->setCompany("MentalWorks");
                }
            }
        }
        public function prePersist(LifecycleEventArgs $args): void {
            $entity = $args->getEntity();
            if($entity instanceof Customer){
                if(!$entity->getCompany()){
                    $entity->setCompany("MentalWorks");
                }
            }
        }
        public function prePersistt(LifecycleEventArgs $args): void {
            $entity = $args->getEntity();
            if($entity instanceof Customer){
                if(!$entity->getCompany()){
                    $entity->setCompany("MentalWorks");
                }
            }
        }
}
