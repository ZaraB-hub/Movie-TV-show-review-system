<?php
use PHPUnit\Framework\TestCase;

class BaseDaoTest extends TestCase
{
    private $baseDao;

    protected function setUp(): void
    {
        // Set up the BaseDao instance before each test
        $this->baseDao = new BaseDao("your_table_name");
    }

    public function testGetAll()
    {
        // Test case for get_all method
        $result = $this->baseDao->get_all();

        // Add your assertions based on the expected behavior
        // Example: Assert that the result is an array
        $this->assertIsArray($result);
    }

    public function testGetById()
    {
        // Test case for get_by_id method
        $id = 1;
        $result = $this->baseDao->get_by_id($id);

        // Add your assertions based on the expected behavior
        // Example: Assert that the result is an array
        $this->assertIsArray($result);
        // Example: Assert that the result has a specific key
        $this->assertArrayHasKey('your_table_nameId', $result);
    }

    // Add more test methods for the other methods in the BaseDao class
}
