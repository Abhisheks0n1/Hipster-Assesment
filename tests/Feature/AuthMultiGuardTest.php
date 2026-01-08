<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class AuthMultiGuardTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function admin_can_register()
    {
        $response = $this->post('/admin/register', [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/admin/login');
        $this->assertDatabaseHas('admins', ['email' => 'admin@example.com']);
    }

    #[Test]
    public function admin_can_login_and_see_dashboard()
    {
        $admin = Admin::factory()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/admin/login', [
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/admin/dashboard');

        $this->actingAs($admin, 'admin')
             ->get('/admin/dashboard')
             ->assertOk()
             ->assertSee('Admin Dashboard');
    }

    #[Test]
    public function admin_cannot_access_dashboard_without_login()
    {
        $this->get('/admin/dashboard')->assertRedirect('/admin/login');
    }

    #[Test]
    public function admin_can_logout()
    {
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')
                         ->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest('admin');
    }

    #[Test]
    public function customer_can_register()
    {
        $response = $this->post('/customer/register', [
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/customer/login');
        $this->assertDatabaseHas('customers', ['email' => 'customer@example.com']);
    }

    #[Test]
    public function customer_can_login_and_see_dashboard()
    {
        $customer = Customer::factory()->create([
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/customer/login', [
            'email' => 'customer@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/customer/dashboard');

        $this->actingAs($customer, 'customer')
             ->get('/customer/dashboard')
             ->assertOk()
             ->assertSee('Customer Dashboard');
    }

    #[Test]
    public function customer_cannot_access_dashboard_without_login()
    {
        $this->get('/customer/dashboard')->assertRedirect('/customer/login');
    }

    #[Test]
    public function customer_can_logout()
    {
        $customer = Customer::factory()->create();

        $response = $this->actingAs($customer, 'customer')
                         ->post('/customer/logout');

        $response->assertRedirect('/customer/login');
        $this->assertGuest('customer');
    }
}