<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-04-10 13:58:09',
                'modified' => '2024-04-10 13:58:09',
            ],
        ];
        parent::init();
    }
}
