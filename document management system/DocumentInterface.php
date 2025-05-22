<?php

interface DocumentInterface {
    public function getContent(): string;
    public function getMetaData(): array;
    public function exportToJson(): string;
}

