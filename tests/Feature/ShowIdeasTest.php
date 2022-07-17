<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function list_of_shows_on_main_page(){
        $ideaOne = Idea::factory()->create([
            'title' => 'My Fist idea',
            'decription' => 'Description of my fist idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second idea',
            'decription' => 'Description of my Second idea'
        ]);
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

}
