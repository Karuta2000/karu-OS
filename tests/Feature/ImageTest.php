<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function openImagePage(): void
    {
        $response = $this->get('/gallery');

        $response->assertStatus(200);
    }
}
