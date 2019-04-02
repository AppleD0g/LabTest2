<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $userUser = $this->createUser('timetable', 'timetable', ['ROLE_STUDENT']);
        $userAdmin = $this->createUser('grades', 'grades', ['ROLE_LECTURER']);
        $user3 = $this->createUser('servers', 'servers', ['ROLE_TECHNICIAN']);

        $manager->persist($userUser);
        $manager->persist($userAdmin);
        $manager->persist($user3);

        $manager->flush();
    }

    private function createUser($username, $plainPassword, $roles = ['ROLE_STUDENT']):User
    {
        $user = new User();
        $user->setUsername($username);
        $user->setRoles($roles);
        // password - and encoding
        $encodedPassword = $this->passwordEncoder->encodePassword($user, $plainPassword);
        $user->setPassword($encodedPassword);
        return $user;
    }


}
