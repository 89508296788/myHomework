<?php

class PdfDocument extends AbstractDocument 
{
    use LoggableTrait;

    protected function processContent(): void
    {
        $this->log("Обработка PDF документа");
        $this->content = "PDF_СОДЕРЖИМОЕ: " . $this->content;
        $this->log("PDF обработан");
    }

    public function getPageCount(): int
    {
        $this->log("Получение количества страниц PDF");
        return rand(1, 20);
    }
}