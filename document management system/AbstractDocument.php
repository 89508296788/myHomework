<?php

abstract class AbstractDocument implements DocumentInterface
{
    protected string $content;
    private DateTimeImmutable $createdAt;

    public function __construct(string $content)
    {
        $this->content = $content;
        $this->createdAt = new DateTimeImmutable();
        $this->processContent();
    }

    abstract protected function processContent(): void;

    public function getContent(): string
    {
        return $this->content;
    }

    public function getMetaData(): array
    {
        return [
            'created_at' => $this->createdAt->format('Y-m-d H:i:s'),
            'timestamp' => $this->createdAt->getTimestamp(),
        ];
    }

    public function exportToJson(): string
    {
        $data = [
            'content' => $this->getContent(),
            'metadata' => $this->getMetaData(),
        ];
        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}