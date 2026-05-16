<?php
declare(strict_types=1);

// RonSwansonQuotes SDK base feature

class RonSwansonQuotesBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(RonSwansonQuotesContext $ctx, array $options): void {}
    public function PostConstruct(RonSwansonQuotesContext $ctx): void {}
    public function PostConstructEntity(RonSwansonQuotesContext $ctx): void {}
    public function SetData(RonSwansonQuotesContext $ctx): void {}
    public function GetData(RonSwansonQuotesContext $ctx): void {}
    public function GetMatch(RonSwansonQuotesContext $ctx): void {}
    public function SetMatch(RonSwansonQuotesContext $ctx): void {}
    public function PrePoint(RonSwansonQuotesContext $ctx): void {}
    public function PreSpec(RonSwansonQuotesContext $ctx): void {}
    public function PreRequest(RonSwansonQuotesContext $ctx): void {}
    public function PreResponse(RonSwansonQuotesContext $ctx): void {}
    public function PreResult(RonSwansonQuotesContext $ctx): void {}
    public function PreDone(RonSwansonQuotesContext $ctx): void {}
    public function PreUnexpected(RonSwansonQuotesContext $ctx): void {}
}
