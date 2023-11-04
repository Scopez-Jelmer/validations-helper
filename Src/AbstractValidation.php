<?php

declare(strict_types=1);

namespace src;

use enums\ValidationAttributes;

abstract class AbstractValidation
{
  protected static array $validation = [];

  protected static function push(string $value): void
  {
    self::$validation[] = $value;
  }

  protected static function reset(): void
  {
    self::$validation = [];
  }

  protected static function checkAndSetRequired(bool $required): void
  {
    if ($required) {
      self::push(ValidationAttributes::REQUIRED->value);

      return;
    }

    self::push(ValidationAttributes::NULLABLE->value);

    return;
  }

  protected static function setMin(int $min): void
  {
    self::push(ValidationAttributes::MIN->value . $min);

    return;
  }

  protected static function setMax(int $max): void
  {
    self::push(ValidationAttributes::MAX->value . $max);

    return;
  }

  protected static function setUnique(string $unique): void
  {
    self::push(ValidationAttributes::UNIQUE->value . $unique);

    return;
  }

  protected static function setAddationalRules($rules): void
  {
    foreach ($rules as $rule) {
      self::push($rule);
    }

    return;
  }
}
