<?php

class TextDocument extends AbstractDocument 
{
    use LoggableTrait;

    protected function processContent(): void
    {
        $this->log("Обработка текстового документа");
        $this->content = trim(preg_replace('/\s+/', ' ', $this->content)); // Удаляем лишние пробелы и переносы строк
        $this->log("Текст нормализован");
    }

    public function countWords(): int
    {
        $this->log("Подсчет слов в документе");
        return count(preg_split('/\s+/',$this->content));
    }
}