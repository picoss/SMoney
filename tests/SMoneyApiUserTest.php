<?php

class SMoneyApiUserTest extends PHPUnit_Framework_TestCase
{
    /**
     * apiUser
     *
     * @var \Picoss\SMoney\Api\ApiUser
     */
    private $apiUser;

    public function setUp()
    {
        $httpClient = new \Picoss\SMoney\HttpClient(null, null);

        $mock = new \GuzzleHttp\Subscriber\Mock();
        $mock->addResponse(__DIR__ . '/stubs/users.txt');
        $mock->addResponse(__DIR__ . '/stubs/user.txt');

        $httpClient->getClient()->getEmitter()->attach($mock);

        $smoneyApi = new Picoss\SMoney\SMoneyApi($httpClient);
        $this->apiUser = $smoneyApi->user();
    }

    public function testApi()
    {
        $this->getUsersApi();
        $this->getUserApi();
    }

    public function getUsersApi()
    {
        $users = $this->apiUser->findAll();
        $this->assertInstanceOf('\Doctrine\Common\Collections\ArrayCollection', $users);
        $this->assertCount(2, $users);
    }

    public function getUserApi()
    {
        $user = $this->apiUser->findOneByAppUserId('S-Money-01');
        $this->assertInstanceOf('Picoss\SMoney\Entity\User', $user);
        $this->assertEquals(1, $user->getId());
        $this->assertEquals('S-Money-01', $user->getAppUserId());
        $this->assertEquals(1, $user->getType());
        $this->assertEquals(1, $user->getRole());

        $profile = $user->getProfile();
        $this->assertInstanceOf('Picoss\SMoney\Entity\Profile', $profile);
        $this->assertEquals('0', $profile->getCivility());
        $this->assertEquals('S', $profile->getFirstName());
        $this->assertEquals('Money', $profile->getLastName());
        $this->assertInstanceOf('\DateTime', $profile->getBirthdate());
        $this->assertEquals('1980-01-01T00:00:00+01:00', $profile->getBirthdate()->format('c'));
        $this->assertEquals('0600000001', $profile->getPhoneNumber());
        $this->assertEquals('contact@s-money.fr', $profile->getEmail());
        $this->assertEquals('S-Money', $profile->getAlias());

        $address = $profile->getAddress();
        $this->assertInstanceOf('Picoss\SMoney\Entity\Address', $address);
        $this->assertEquals('100 Rue SMoney', $address->getStreet());
        $this->assertEquals('75001', $address->getZipCode());
        $this->assertEquals('Paris', $address->getCity());
        $this->assertEquals('FR', $address->getCountry());
    }
}