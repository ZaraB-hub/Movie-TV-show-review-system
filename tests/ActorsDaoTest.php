<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class ActorsDaoTest extends TestCase
{
    private $actorsDao;

    protected function setUp(): void
    {
        $this->actorsDao = new ActorsDao();
    }

    public function testGetByName()
    {
        $name = "John Doe";
        $expectedResult = [
            [
                "ActorID" => 1,
                "FirstName" => "John",
                "LastName" => "Doe"
            ],
        ];

        $result = $this->actorsDao->get_by_name($name);
        Assert::assertEquals($expectedResult, $result);
    
    }


    public function testGetByNameNoResults()
    {
        $name = "Non-existent Actor";
        $expectedResult = [];

        $result = $this->actorsDao->get_by_name($name);

        Assert::assertEquals($expectedResult, $result);
    }