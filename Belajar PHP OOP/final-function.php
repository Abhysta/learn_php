<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $name, string $password): void
    {
    }
}

//error
class FakeFacebook extends Facebook
{
    public function login(string $name, string $password): void
    {
    }
}
