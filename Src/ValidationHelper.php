<?php

declare(strict_types=1);

namespace src;

use enums\DataTypes;
use enums\ValidationAttributes;

class ValidationHelper
{
  protected string $validation;

  protected function checkAndSetRequired(bool $required)
  {
    if ($required) {
      return self::$validation .= ValidationAttributes::REQUIRED->value;
    }

    return self::$validation .= ValidationAttributes::NULLABLE->value;
  }

  public static function validateString(bool $required = false, ?int $min = null, ?int $max = nulll, ?string $additionValidationRules = null): string
  {
    self::$validation .= DataTypes::STRING->value;

    self::checkAndSetRequired($required);

    return 'test';
  }
}