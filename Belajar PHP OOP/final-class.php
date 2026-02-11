<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
}

//error
class FakeFacebook extends Facebook
{
}
