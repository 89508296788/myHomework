<?php

class ImageDocument extends AbstractDocument

{
    use LoggableTrait;

    protected function processContent(): void
    {
        $this->content = "IMAGE_DATA: " . $this->content;
        $this->log("Изображение обработано");
    }

     /**
     * Возвращает фиктивные размеры изображения (заглушка)
     * @return array [width, height]
     */

    public function getDimensions(): array
    {
        $this->log("Получение размеров изображения");
        return [
            'width' => rand(100, 2000),
            'height' => rand(100, 2000)
        ];
    }
}