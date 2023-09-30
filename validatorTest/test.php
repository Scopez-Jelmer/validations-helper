<?php

declare(strict_types=1);

namespace validatorTest;

use Src\ValidationHelper;

class test
{

  public function rules(): array
  {

    return [
      'string'   => [ValidationHelper::validateString(true)],
      'int' => [],
      'content'      => [],
    ];
  }
}
