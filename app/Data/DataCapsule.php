<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Data;

class DataCapsule
{
	private array $data;

	public function __construct(array $data = [])
	{
		$this->data = $data;
	}

	public function all(): array
	{
		return $this->data;
	}

	public function set(string $key, $value): static
	{
		$this->data[$key] = $value;

		return $this;
	}

	public function get(string $key, mixed $default = null): mixed
	{
		return $this->data[$key] ?? $default;
	}
}
