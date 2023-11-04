<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class stringValidationTest extends TestCase
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

  /**
   * @test
   */
  public function uniqueStringValidation(): void
  {
    $expectedValidationArray = ['nullable', 'unique:posts', 'string'];

    $actualValidationArray = ValidationHelper::validateString(false, unique: 'posts');

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }

  /**
   * @test
   */
  public function additionalRulesStringValidation(): void
  {
    $expectedValidationArray = ['nullable', 'unique:post', 'string', 'accepted:isDraft', 'distinct'];

    $actualValidationArray = ValidationHelper::validateString(false, unique: 'post', additionalRules: ['accepted:isDraft', 'distinct']);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
