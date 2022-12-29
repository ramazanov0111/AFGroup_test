<?php

class HTMLPage implements HTMLPageInterface
{
    /** @var string */
    protected string $tagName;
    /** @var int */
    protected int $tagCount;

    /**
     * HTMLPage constructor.
     * @param string $tagName
     * @param int $tagCount
     */
    public function __construct(string $tagName, int $tagCount)
    {
        $this->tagName = $tagName;
        $this->tagCount = $tagCount;
    }

    /**
     * @return string
     */
    public function getTagName(): string
    {
        return $this->tagName;
    }

    /**
     * @return string
     */
    public function getTagCount(): string
    {
        return $this->tagCount;
    }

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->getTagName();
    }
}
