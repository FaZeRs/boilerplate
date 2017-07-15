<?php

namespace Tests;

use Modules\User\Entities\Access\Role\Role;
use Modules\User\Entities\Access\User\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

/**
 * Class TestCase.
 */
abstract class BrowserKitTestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseTransactions;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://boilerplate.dev';

    /**
     * @var
     */
    protected $admin;

    /**
     * @var
     */
    protected $executive;

    /**
     * @var
     */
    protected $user;

    /**
     * @var
     */
    protected $adminRole;

    /**
     * @var
     */
    protected $executiveRole;

    /**
     * @var
     */
    protected $userRole;

    /**
     * Set up tests.
     */
    public function setUp()
    {
        parent::setUp();

        $this->baseUrl = config('app.url', 'http://boilerplate.dev');

        // Set up the database
	    Artisan::call('module:publish-config');
	    Artisan::call('module:migrate');
	    Artisan::call('module:seed');

        // Run the tests in English
        App::setLocale('en');

        /*
         * Create class properties to be used in tests
         */
        $this->admin = User::find(1);
        $this->executive = User::find(2);
        $this->user = User::find(3);
        $this->adminRole = Role::find(1);
        $this->executiveRole = Role::find(2);
        $this->userRole = Role::find(3);
    }

    public function tearDown()
    {
        $this->beforeApplicationDestroyed(function () {
            DB::disconnect();
        });

        parent::tearDown();
    }
}
