<?php

namespace LaraEditor\App\Contracts;

interface Editable
{
    public function setGjsDataAttribute($value): void;

    public function setPlaceholder($placeolder, $content): self;

    public function getGjsDataAttribute($value): array;

    public function getHtml(): array | string;

    public function getCss(): array | string;

    public function getStyles(): array | string;

    public function getPage(): array;

    public function getStyleSheetLinks(): array;

    public function getScriptLinks(): array;

    public function getAssets(): array;

    public function getEditorStoreUrl(): string | null;

    public function getEditorLoadUrl(): string | null;

    public function getEditorTemplatesUrl(): string | null;
}
