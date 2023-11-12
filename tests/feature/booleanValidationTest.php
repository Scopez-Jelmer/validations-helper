<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class booleanValidationTest extends TestCase
{

  /**
   * @test
   */
  public function basicBooleanValidation(): void
  {
    $expectedValidationArray = ['required', 'boolean'];

    $actualValidationArray = ValidationHelper::validateBoolean(true);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
