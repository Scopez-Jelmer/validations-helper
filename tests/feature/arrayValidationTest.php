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
    $expectedValidationArray = ['required', 'array', 'min_digits:10'];

    $actualValidationArray = ValidationHelper::validateArray(true, min: 10);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
