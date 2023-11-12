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
    self::setup($required, $unique);

    self::push(DataTypes::STRING->value);

    if ($min) {
      self::setMin($min);
    }

    if ($max) {
      self::setMax($max);
    }

    if ($additionalRules) {
      self::setAddationalRules($additionalRules);
    }
    return self::$validation;
  }

  public static function validateInteger(
    bool $required,
    ?int $min = 0,
    ?int $max = 0,
    ?string $unique = null,
    array $additionalRules = null
  ): array {
    self::setup($required, $unique);

    self::push(DataTypes::INTEGER->value);

    if ($min) {
      self::setMinDigits($min);
    }

    if ($max) {
      self::setMaxDigits($max);
    }

    if ($additionalRules) {
      self::setAddationalRules($additionalRules);
    }
    return self::$validation;
  }

  public static function validateBoolean(
    bool $required,
    array $additionalRules = null
  ): array {
    self::setup($required);

    self::push(DataTypes::BOOLEAN->value);

    if ($additionalRules) {
      self::setAddationalRules($additionalRules);
    }
    return self::$validation;
  }

  public static function validateArray(
    bool $required,
    ?int $size = 0,
    ?string $unique = null,
    array $additionalRules = null
  ): array {
    self::setup($required, $unique);

    self::push(DataTypes::ARRAY->value);

    if ($size) {
      self::setSize($size);
    }


    if ($additionalRules) {
      self::setAddationalRules($additionalRules);
    }
    return self::$validation;
  }
}
