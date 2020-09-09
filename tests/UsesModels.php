<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Tests;

use Illuminate\Database\Eloquent\Factory;

trait UsesModels
{
    public function registerModelFactories()
    {
        /** @var Factory $factory */
        $factory = resolve(Factory::class);
        $factory->load(__DIR__.DIRECTORY_SEPARATOR.
            'Mocks'.DIRECTORY_SEPARATOR.
            'Models'.DIRECTORY_SEPARATOR.
            'factories');
    }
}
