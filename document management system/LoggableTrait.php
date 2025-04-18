<?php

trait LoggableTrait
{
    private array $logs = [];

    protected function log(string $message): void
    {
        $logEntry = "[LOG]: " . $message;
        $this->logs[] = $logEntry;
        echo $logEntry . PHP_EOL;
    }

    public function getLogs(): array{
        
        return $this->logs;
    }
}