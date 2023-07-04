<?php

namespace Tests\Feature;

use Tests\FeatureTestCase;
use Modules\Auth\Enums\RoleType;

class ExampleFeatureTest extends FeatureTestCase
{
    /**
     * Whenever we post to `/users`,
     *
     * @test
     * @dataProvider validRolesToCreateUserProvider
     */
    public function user_can_only_be_created_by_valid_role(RoleType $role): void
    {
        // arrange
        $this->asRole($role);

        // act
        $response = $this->postJson('/users', [
            'name' => '::name::',
            'email' => '::name::@domain.com',
        ]);

        // assert
        $response->assertSuccessful();
        $this->assertDatabaseHas('users', [
            'name' => '::name::',
            'email' => '::name::@domain.com',
        ]);
    }


    /**
     * Whenever we post to `/users` with invalid role, we should see 403
     *
     * @test
     * @dataProvider invalidRolesThatCannotCreateUserProvider
     */
    public function user_cannot_be_created_by_invalid_role(RoleType $role): void
    {
        // arrange
        $this->asRole($role);

        // act
        $response = $this->postJson('/users', [
            'name' => '::name::',
            'email' => '::name::@domain.com',
        ]);

        // assert
        $response->assertStatus(403);
    }

    public static function validRolesToCreateUserProvider(): array
    {
        return [
            [RoleType::TeamOwner],
        ];
    }

    public static function invalidRolesThatCannotCreateUserProvider(): array
    {
        return [
            [RoleType::TeamMember],
            [RoleType::Admin],
        ];
    }
}
