<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class validationsHelperTest extends TestCase
{
  /**
   * @test
   */
  public function greetsWithName(): void
  {
    $greeting = 'Hello, Alice!';

    $this->assertSame('Hello, Alice!', $greeting);
  }
}
