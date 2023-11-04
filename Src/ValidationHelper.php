<?php

declare(strict_types=1);

namespace src;

use enums\DataTypes;

class ValidationHelper extends AbstractValidation
{

  public static function validateString(
    bool $required,
    ?int $min = 0,
    ?int $max = 0,
    ?string $unique = null,
    array $additionalRules = null
  ): array {
    if (self::$validation) {
      self::reset();
    }

    self::push(DataTypes::STRING->value);

    if ($required) {
    }
    self::checkAndSetRequired($required);

    if ($min) {
      self::setMin($min);
    }

    if ($max) {
      self::setMax($max);
    }

    if ($unique) {
      self::setUnique($unique);
    }

    if ($additionalRules) {
      self::setAddationalRules($additionalRules);
    }
    return self::$validation;
  }
}
