<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\Comment;
use App\Entity\Conference;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class AppFixtures extends Fixture
{

    private $passwordHasherFactory;

    public function __construct(PasswordHasherFactoryInterface $encoderFactory)
    {
        $this->passwordHasherFactory = $encoderFactory;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        public function load(ObjectManager $manager): void
        {

            $website = new Project();
            $website->setName('Site officiel USD');
            $website->setMainTech('HTML');
            $website->setSecondTech('PHP');
            $website->setDescription('Super site woooo !');
            $manager->persist($website);

            $admin = new Admin();
            $admin->setRoles(['ROLE_ADMIN']);
            $admin->setUsername('admin');
            $admin->setPassword($this->passwordHasherFactory->getPasswordHasher(Admin::class)->hash('admin', null));
            $manager->persist($admin);

            $manager->flush();
        }
        
    }
}
