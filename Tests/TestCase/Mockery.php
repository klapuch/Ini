<?php
declare(strict_types = 1);
namespace Klapuch\Ini\TestCase;

trait Mockery {
	protected function mock(string $class): \Mockery\MockInterface {
		return \Mockery::mock($class);
	}

	protected function tearDown(): void {
		parent::tearDown();
		\Mockery::close();
	}
}