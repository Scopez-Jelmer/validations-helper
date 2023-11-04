<?php

namespace enums;

enum ValidationAttributes: string
{

  case REQUIRED = 'required';
  case NULLABLE = 'nullable';
  case MIN = 'min:';
  case MAX = 'max:';
  case MIN_DIGITS = 'min_digits:';
  case MAX_DIGITS = 'max_digits:';
  case UNIQUE = 'unique:';
}
