<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NotesTest extends TestCase
{

    public function testNotes()
    {
        $response = $this->getJson('/notes');

        $response
            ->assertStatus(200);
    }

    public function testAddNote()
    {
        $response = $this->postJson('/notes', ['content' => 'Lorem ipsum']);

        $response
            ->assertStatus(201);
    }

}
