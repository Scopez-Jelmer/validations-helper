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
    $expectedValidationArray = ['string', 'required', 'max:10'];

    $actuealValidationString = ValidationHelper::validateString(true, max: 10);

    $this->assertSame($expectedValidationArray, $actuealValidationString);
  }

  /**
   * @test
   */
  public function uniqueStringValidation(): void
  {
    $expectedValidationArray = ['string', 'nullable', 'unique:posts'];

    $actuealValidationString = ValidationHelper::validateString(false, unique: 'posts');

    $this->assertSame($expectedValidationArray, $actuealValidationString);
  }

  /**
   * @test
   */
  public function additionalRulesStringValidation(): void
  {
    $expectedValidationArray = ['string', 'nullable', 'unique:post', 'accepted:isDraft', 'distinct'];


    $actuealValidationString = ValidationHelper::validateString(false, unique: 'post', additionalRules: ['accepted:isDraft', 'distinct']);

    $this->assertSame($expectedValidationArray, $actuealValidationString);
  }
}
