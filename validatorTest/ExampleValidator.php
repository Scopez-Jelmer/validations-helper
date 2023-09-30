<?php

namespace Domains\Employee\Validators;


class EmployeeValidator
{
  public function rules(): array
  {
    return [
      'birth_date'                     => ['required', 'date'],
      'nickname'                       => ['nullable', 'string'],
      'initials'                       => ['required', 'string', 'max:10'],
      'last_name_at_birth_infix'       => ['nullable', 'string', 'max:10'],
      'last_name_at_birth'             => ['required', 'string'],
      'partner_name_infix'             => ['nullable', 'string', 'max:10'],
      'partner_name'                   => ['nullable', 'string'],
    ];
  }
}
