<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * The kit ships no "/" route; the admin panel lives at /admin.
     */
    public function test_guests_are_redirected_to_the_admin_login(): void
    {
        $this->get('/admin')->assertRedirect(route('filament.admin.auth.login'));
    }

    public function test_the_admin_login_page_renders(): void
    {
        $this->get(route('filament.admin.auth.login'))->assertOk();
    }
}
