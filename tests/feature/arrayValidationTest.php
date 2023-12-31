<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class arrayValidationTest extends TestCase
{

  /**
   * @test
   */
  public function basicArrayValidation(): void
  {
    $expectedValidationArray = ['required', 'array', 'size:10'];

    $actualValidationArray = ValidationHelper::validateArray(true, 10);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
