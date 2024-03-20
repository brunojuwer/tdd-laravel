<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;
use Illuminate\Testing\Fluent\AssertableJson;

class BooksControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_books_endpoint_get(): void
    {

        $books = Book::factory(3)->create();

        $response = $this->getJson('/api/books');

        $response->assertStatus(200);
        $response->assertJsonCount(3);

        $response->assertJson(function (AssertableJson $json) {
            $json->whereType('0.id', 'integer');
            $json->whereType('0.name', 'string');
            $json->whereType('0.author', 'string');
        });
    }
}
