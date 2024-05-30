<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class CreateTagRequestBody
{
    /**
     * The name of the tag to create.
     * 
     * @var string $tag
     */
	#[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tag;
    
    /**
     * The color of the tag. If not provided, a random color will be used from the list: red, yellow, green, blue, purple, pink, brown.
     * 
     * @var ?\Dub\Models\Operations\Color $color
     */
	#[\JMS\Serializer\Annotation\SerializedName('color')]
    #[\JMS\Serializer\Annotation\Type('enum<Dub\Models\Operations\Color>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Color $color = null;
    
	public function __construct()
	{
		$this->tag = "";
		$this->color = null;
	}
}
