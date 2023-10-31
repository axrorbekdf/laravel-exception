<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Core\Exceptions\ExceptionCode;
use Modules\User\Exceptions\UserException;
use Tests\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/test');

        $response->assertStatus(500);
        $response->assertJsonPath('code', ExceptionCode::UserAlreadyExists->value);
    }

    public function test_the_application_exception_returns_a_successful(): void
    {
        $this->withoutExceptionHandling();

        $this->expectExceptionObject(
            UserException::test()
        );

        $response = $this->get('/test');
    }
}
