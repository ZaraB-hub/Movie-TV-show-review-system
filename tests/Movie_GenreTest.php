<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Movie_GenreTest extends TestCase
{
    private $moviedao;

    protected function setUp(): void
    {
        $this->moviedao = new Movie_GenreDao();
    }

       public function test_get_by_id()
    {

        
        $genreid = 1; 
        $movieGenre =   $this->moviedao->get_by_id($movieId);

        $this->assertNotEmpty($movieGenre);

        $expectedKeys = ['MovieID', 'GenreID']; 
                $this->assertArrayHasKey($expectedKeys, $movieGenre);

        $this->assertEquals($genreid, $movieGenre['GenreID']);
    }