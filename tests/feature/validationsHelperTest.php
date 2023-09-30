<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class validationsHelperTest extends TestCase
{
  /**
   * @test
   */
  public function validatesString(): void
  {
    $expectedValidationArray = ['required', 'string', 'max:10'];

    $actuealValidationString = ValidationHelper::validateString(true);
    var_dump($actuealValidationString);
    $this->assertSame($expectedValidationArray, ['test', $actuealValidationString]);
  }
}
