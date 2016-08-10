<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateElementTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
  public function testStoresElementSuccessfully()
  {

    $post = factory(App\Element::class)->make();

    $this->post('/api/elements', [
      'titre' => $post->titre,
      'description' => $post->description,
      'lieu' => $post->lieu,
      'photo' => $post->photo,
      ])
      ->seeApiSuccess()
      ->seeJsonObject('element')
      ->seeJson(['titre' => $post->titre])
      ->seeJson(['description' => $post->description])
      ->seeJson(['lieu' => $post->lieu])
      ->seeJson(['photo' => $post->topphotoic]);

    $this->seeInDatabase('element', [
      'titre' => $post->titre,
      'description' => $post->description,
      'lieu' => $post->lieu,
      'photo' => $post->photo,
      ]);
  }
}
