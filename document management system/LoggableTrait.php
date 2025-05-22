<?php

trait LoggableTrait
{
    private array $logs = [];

    protected function log(string $message): void
    {
        $logEntry = "[ЛОГ]: " . $message;
        $this->logs[] = $logEntry;
        echo $logEntry . PHP_EOL;
    }

    public function getLogs(): array
    {
        return $this->logs;
    }
}