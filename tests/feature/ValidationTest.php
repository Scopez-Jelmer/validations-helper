<?php

declare(strict_types=1);

namespace tests\feature;

use PHPUnit\Framework\TestCase;
use src\ValidationHelper;

class ValidationTest extends TestCase
{

  /**
   * @test
   */
  public function uniqueValidation(): void
  {
    $expectedValidationString = ['nullable', 'unique:posts', 'string'];
    $expectedValidationInteger = ['nullable', 'unique:posts', 'integer'];

    $actualValidationString = ValidationHelper::validateString(false, unique: 'posts');
    $actualValidationInteger = ValidationHelper::validateInteger(false, unique: 'posts');

    $this->assertSame($expectedValidationString, $actualValidationString);
    $this->assertSame($expectedValidationInteger, $actualValidationInteger);
  }

  /**
   * @test
   */
  public function additionalRulesValidation(): void
  {
    $expectedValidationArray = ['nullable', 'unique:post', 'string', 'accepted:isDraft', 'distinct'];

    $actualValidationArray = ValidationHelper::validateString(false, unique: 'post', additionalRules: ['accepted:isDraft', 'distinct']);

    $this->assertSame($expectedValidationArray, $actualValidationArray);
  }
}
