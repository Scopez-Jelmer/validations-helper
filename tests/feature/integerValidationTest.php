<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class integerValidationTest extends TestCase
{

  /**
   * @test
   */
  public function basicIntegerValidation(): void
  {
    $expectedValidationArray = ['required', 'integer', 'min_digits:10'];

    $actualValidationArray = ValidationHelper::validateInteger(true, min: 10);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
