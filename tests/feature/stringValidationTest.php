<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class StringValidationTest extends TestCase
{

  /**
   * @test
   */
  public function basicStringValidation(): void
  {
    $expectedValidationArray = ['required', 'string', 'max:10'];

    $actualValidationArray = ValidationHelper::validateString(true, max: 10);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
