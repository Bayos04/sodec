<?php

namespace App\Attribute;

use \Attribute;
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Route
{
    public function __construct(private string $path, private string $method = "get", private string $guard = "NONE")
    {
    }

    public function getPath() : string
	{
        return $this->path;
    }

    public function getMethod() : string
	{
        return $this->method;
    }

	public function getGuard() : string
	{
		return $this->guard;
	}

}
