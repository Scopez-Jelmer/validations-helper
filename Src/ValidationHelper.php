<?php

declare(strict_types=1);

namespace src;

use enums\DataTypes;
use enums\ValidationAttributes;

class ValidationHelper
{
  protected static array $validation = [];

  protected static function push(string $value): void
  {
    self::$validation[] = $value;
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

  private static function setUnique(string $unique): void
  {
    self::push(ValidationAttributes::UNIQUE->value . $unique);
      
    return;
  }

  public static function validateString(
    bool $required, 
    ?int $min = 0,
    ?int $max = 0, 
    string $unique,
    array $additionValidationRules = null
    ): array
  {
    self::push(DataTypes::STRING->value);

    if($required){

    }
    self::checkAndSetRequired($required);

    if ($min) {
      self::setMin($min);
    }

    if ($max) {
      self::setMax($max);
    }

    if ($unique)
    {
      self::setUnique($unique);
    }

    return self::$validation;
  }
} 