<?php

declare(strict_types=1);

namespace src;

use enums\ValidationAttributes;

abstract class AbstractValidation
{
  protected static array $validation = [];

  protected static function setup($required, $unique = null)
  {
    if (isset(self::$validation)) {
      self::reset();
    }

    self::checkAndSetRequired($required);

    if ($unique) {
      self::setUnique($unique);
    }
  }

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

  protected static function setSize(int $size): void
  {
    self::push(ValidationAttributes::SIZE->value . $size);

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

  protected static function setMinDigits(int $min): void
  {
    self::push(ValidationAttributes::MIN_DIGITS->value . $min);

    return;
  }

  protected static function setMaxDigits(int $max): void
  {
    self::push(ValidationAttributes::MAX_DIGITS->value . $max);

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
