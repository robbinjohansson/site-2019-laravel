<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VisitPagesTest extends TestCase
{
    /** @test */
    public function it_can_visit_the_home_page()
    {
        $this->get('/')->assertStatus(200);
    }

    /** @test */
    public function it_can_visit_the_about_page()
    {
        $this->get('/about')->assertStatus(200);
    }

    /** @test */
    public function it_can_visit_the_archive_page()
    {
        $this->get('/archive')->assertStatus(200);
    }

    /** @test */
    public function it_can_visit_the_post_page()
    {
        $this->get('/using-laravel-with-netlify')
            ->assertStatus(200)
            ->assertSee('Using Laravel with Netlify');
    }
}
