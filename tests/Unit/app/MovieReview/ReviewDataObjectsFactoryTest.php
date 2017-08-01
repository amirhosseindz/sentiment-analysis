<?php

namespace tests\Unit\App\MovieReview;

use App\MovieReview\ClassifiedReview;
use App\MovieReview\Review;
use App\MovieReview\ReviewDataObjectsFactory;
use Tests\TestCase;

class ReviewDataObjectsFactoryTest extends TestCase
{
    /**
     * @var ReviewDataObjectsFactory
     */
    protected $factory;

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->factory = new ReviewDataObjectsFactory();
    }

    protected function tearDown()
    {
        unset($this->factory);

        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testMakeEmptyReviewMethod()
    {
        $this->assertInstanceOf(
            Review::class,
            $this->factory->makeEmptyReview()
        );
    }

    public function testMakeEmptyClassifiedReviewMethod()
    {
        $this->assertInstanceOf(
            ClassifiedReview::class,
            $this->factory->makeEmptyClassifiedReview()
        );
    }
}
