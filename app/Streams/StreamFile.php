<?php

namespace App\Streams;

class StreamFile
{
    protected $handle;

    public function __toString(): string
    {
        return $this->readAllFile();
    }

    public function boot($filePath, $mode = "r", $readEachLine = false)
    {
        return $this->setHandle($filePath, $mode)
            ->readFile($readEachLine);
    }

    public function tellTheLineItReadsFrom(): self
    {
        echo ftell($this->handle) ." Line.";
        return $this;
    }

    public function restartProcess($handle): void
    {
        rewind($handle);
    }

    protected function openFile($filePath, $mode): mixed
    {
        return fopen("file://" . __DIR__ . $filePath, $mode);
    }

    protected function setHandle($filePath, $mode): self
    {
        $this->handle = $this->openFile($filePath, $mode);
        return $this;
    }

    protected function readFile($readEachLine): bool|string|StreamFile
    {
        if ($readEachLine) {
            echo $this->readEachLineOfFile();
            return false;
        }
        echo $this->readAllFile();
        return false;
    }

    protected function readEachLineOfFile(): bool|string
    {
        return fgets($this->handle);
    }

    protected function readAllFile(): self
    {
        while (1) {
            $item = $this->readEachLineOfFile();
            if (!$item) {
                break;
            }

            echo $item;
        }
        return $this;
    }

    public function closeFile($filePath): self
    {
        fclose($filePath);
        return $this;
    }


}