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
  public function basicStringValidation(): void
  {
    $expectedValidationArray = ['string','required', 'max:10'];

    $actuealValidationString = ValidationHelper::validateString(true, max: 10);
  
    $this->assertSame($expectedValidationArray, $actuealValidationString);
  }

  /**
   * @test
   */
  public function uniqueStringValidation(): void
  {
    $expectedValidationArray = ['string','required', 'unique:posts'];

    $actuealValidationString = ValidationHelper::validateString(false, unique: 'posts');
  
    $this->assertSame($expectedValidationArray, $actuealValidationString);
  }
}
