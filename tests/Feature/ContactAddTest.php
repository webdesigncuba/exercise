<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\User;
use Tests\TestCase;

class ContactAddTest extends TestCase
{
    public function testMainPage()
    {
        $user = User::factory()->create();
        $name = 'Test';
        $response = $this->actingAs($user)->post('/contacts/create', [
            'name' => $name,
            'contact' => 'This is a test functional post',
            'email' => 'dd@dd.com',
            'deleted_at' => false,
        ]);
    }
}