<?php

namespace Tests\Feature\Application;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApplicationControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @var string */
    const API_URL = '/api/v1/application';

    /**
     * Test if the API_URL returns a JSON response.
     *
     * @return void
     */
    public function test_it_returns_a_json_response()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ];

        $response = $this->post(self::API_URL, $data, [
            'Accept' => 'application/json',
        ]);

        $response->assertCreated()
            ->assertJsonPath('message', 'Application successfully submitted!');
    }

    /**
     * Test if the API_URL returns a validation error.
     *
     * @return void
     */
    public function test_it_returns_a_validation_error()
    {
        $response = $this->post(self::API_URL);

        $response->assertInvalid();
    }

    /**
     * Test if the API_URL returns creates an application in database.
     *
     * @return void
     */
    public function test_it_stores_an_application_in_the_database()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ];

        $response = $this->post(self::API_URL, $data, [
            'Accept' => 'application/json',
        ]);

        $response->assertCreated()
            ->assertJsonPath('message', 'Application successfully submitted!');

        $this->assertDatabaseHas('applications', $data);
    }

    /**
     * Test if the API_URL required an email, name field.
     *
     * @return void
     */
    public function test_it_requires_an_email_and_name()
    {
        $data = [
            'name' => '',
            'email' => '',
        ];

        $response = $this->post(self::API_URL, $data, [
            'Accept' => 'application/json',
        ]);

        $response
            ->assertJsonPath('errors.name', [0 => 'The name field is required.'])
            ->assertJsonPath('errors.email', [0 => 'The email field is required.']);

        $this->assertDatabaseMissing('applications', $data);
    }

    /**
     * Test if the API_URL does not accept an invalid email.
     *
     * @return void
     */
    public function test_it_does_not_accept_an_invalid_email()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe',
        ];

        $response = $this->post(self::API_URL, $data, [
            'Accept' => 'application/json',
        ]);

        $response->assertJsonPath('errors.email', [0 => 'The email must be a valid email address.']);

        $this->assertDatabaseMissing('applications', $data);
    }

    /**
     * Test if the API_URL does not accept more than 4 words in application name field.
     *
     * @return void
     */
    public function test_it_does_not_accept_more_than_4_words_in_name()
    {
        $data = [
            'name' => 'John Doe John Doe John',
            'email' => 'johndoe@gmail.com',
        ];

        $response = $this->post(self::API_URL, $data, [
            'Accept' => 'application/json',
        ]);

        $response->assertJsonPath('message', 'The name must contain no more than 4 words.');

        $this->assertDatabaseMissing('applications', $data);
    }
}
