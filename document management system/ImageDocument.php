<?php

class ImageDocument extends AbstractDocument
{
    use LoggableTrait;

    protected function processContent(): void
    {
        $this->content = "ДАННЫЕ_ИЗОБРАЖЕНИЯ: " . $this->content;
        $this->log("Изображение обработано");
    }

    public function getDimensions(): array
    {
        $this->log("Получение размеров изображения");
        return [
            'width' => rand(100, 2000),
            'height' => rand(100, 2000)
        ];
    }
}