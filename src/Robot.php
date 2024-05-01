<?php
class Robot
{
    private $model;
    private $color;
    private $size;
    private $laws;
    private $os;
    private $image; // New property for the image

    public function __construct($model, $color, $size, $laws, $os, $image)
    {
        $this->setModel($model);
        $this->setColor($color);
        $this->setSize($size);
        $this->setLaws($laws);
        $this->setOs($os);
        $this->setImage($image); // Set the image property
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getLaws()
    {
        return $this->laws;
    }

    public function setLaws($laws)
    {
        $this->laws = $laws;
    }

    public function getOs()
    {
        return $this->os;
    }

    public function setOs($os)
    {
        $this->os = $os;
    }

    // Getter and setter for the image property
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function __toString()
    {
        $lawsString = implode(', ', $this->getLaws());
        $imageTag = "<img src='{$this->getImage()}' alt='{$this->getModel()} Image'>"; // Image tag
        return "Your {$this->getColor()} {$this->getSize()} {$this->getModel()} robot with laws {$lawsString} running {$this->getOs()} {$imageTag}";
    }
}
?>
