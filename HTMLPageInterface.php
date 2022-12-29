<?php

interface HTMLPageInterface
{
    /**
     * @return string
     */
    public function getTagName(): string;

    /**
     * @return string
     */
    public function getTagCount(): string;

    /**
     * @return bool
     */
    public function isNull(): bool;

    /**
     * @return string
     */
    public function __toString(): string;
}
