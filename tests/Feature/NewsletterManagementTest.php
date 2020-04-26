<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Newsletter;

class NewsletterManagementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_newsletter_can_be_created()
    {
        $user = $this->actingAs(factory(User::class)->create());
        
        $response = $user->post('newsletters', [
            'name' => "News",
            'description' => "adsadsadsadadsdas",
            "active" => '1'
        ]);

        $response->assertRedirect();

        $this->assertCount(1, Newsletter::all());

        $this->assertEquals('News', NewsLetter::first()->name);

        $this->assertEquals('adsadsadsadadsdas', NewsLetter::first()->description);

        $this->assertEquals('1', NewsLetter::first()->active);
    }

    /**
     *  @test
     *
     * @return void
     */
    public function news_letter_validation()
    {


        //for test valdation in store method
        $user = $this->actingAs(factory(User::class)->create());
        $response = $user->post('newsletters', [
            'name' => "",
            'description' => "",
            "active" => ''
        ]);

        $response->assertSessionHasErrors(['name', 'description', 'active']);


        //successfully created
        factory(Newsletter::class)->create([
            'name'=>'News'
        ]);


        $response = $user->post('newsletters', [
            'name' => "News",
            'description' => "adsadsadsadadsdas",
            "active" => '9'
        ]);


        $response->assertSessionHasErrors(['name', 'active']);



        //for test update validation method

        //create new newsletter
        $newsletter = factory(Newsletter::class)->create();

        $response->assertRedirect();

        $newsletter = Newsletter::first();


        $response = $user->patch('newsletters/' . $newsletter->id, [
            'name' => "college",
            'description' => "asd asd asd asd asd asd asd as asdas ",
            "active" => '1'
        ]);


        $response->assertSessionHasNoErrors();
    }




    /**
     * @test
     *
     * @return void
     */
    public function  a_newsletter_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $user = $this->actingAs(factory(User::class)->create());

        $newsletter = factory(Newsletter::class)->create();

        $response = $user->patch("newsletters/$newsletter->id", [

            'name' => 'abdo',
            'description' => 'osamaosamaosamaosama',
            'active' => 1,

        ]);


        $response->assertRedirect();

        $this->assertCount(1 , Newsletter::all());

        $this->assertEquals('abdo' , $newsletter->fresh()->name);

        $this->assertEquals('osamaosamaosamaosama' , $newsletter->fresh()->description);

        $this->assertEquals('1' , $newsletter->fresh()->active);

        $response->assertRedirect();

    }
}