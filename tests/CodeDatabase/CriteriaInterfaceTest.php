<?php

namespace CodePress\CodeDatabase\Tests;

use CodePress\CodeDatabase\Contracts\RepositoryInterface;
use CodePress\CodeDatabase\Contracts\CriteriaInterface;
use CodePress\CodeDatabase\Models\Category;
use Illuminate\Database\Query\Builder;
use Mockery as m;

class CriteriaInterfaceTest extends AbstractTestCase
{

    public function test_should_apply()
    {
        $mockQueryBuilder = m::mock(Builder::class);
        $mockRepository = m::mock(RepositoryInterface::class);
        $mockModel = m::mock(Category::class);
        $mock = m::mock(CriteriaInterface::class);
        $mock->shouldReceive('apply')
            ->with($mockModel, $mockRepository)
            ->andReturn($mockQueryBuilder);

        $this->assertInstanceOf(Builder::class, $mock->apply($mockModel, $mockRepository));

    }

}