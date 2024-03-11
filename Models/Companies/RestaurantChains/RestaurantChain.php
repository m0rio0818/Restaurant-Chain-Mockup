<?php

namespace RestaurantChain;

use Interfaces\FileConvertible;
use Company\Company;

class RestaurantChain extends Company implements FileConvertible
{
    private int $chainId;
    private array $restaurantLocations;
    private string $cuisineType;
    private int $numberOfLocations;
    private string $parentCompany;


    public function __construct(
        string $name,
        int $foundingYear,
        string $website,
        string $phone,
        string $industry,
        string $ceo,
        bool $isPubliclyTraded,
        string $country,
        string $founder,
        int $totalEmployees,
        int $chainId,
        array $restaurantLocations,
        string $cuisineType,
        int $numberOfLocations,
        string $parentCompany
    ) {
        parent::__construct($name, $foundingYear, $website, $phone, $industry, $ceo, $isPubliclyTraded, $country, $founder, $totalEmployees);
        $this->chainId = $chainId;
        $this->restaurantLocations = $restaurantLocations;
        $this->cuisineType = $cuisineType;
        $this->numberOfLocations = $numberOfLocations;
        $this->parentCompany = $parentCompany;
    }

    public function toString(): string
    {
        return sprintf(
            "Name: %s\nFounding Year: %s\nDescription: %s\nWebsite: %s\nPhone: %s\nIndustry: %s\nCEO: %s\nCountry: %s\nFounder: %s\nTotalEmployees Num: %s",
            $this->getName(),
            $this->getFoundingYear(),
            $this->getDescription(),
            $this->getWebsite(),
            $this->getPhone(),
            $this->getIndustry(),
            $this->getCeo(),
            $this->getCountry(),
            $this->getFounder(),
            $this->getTotalEmployee(),
        );
    }
    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='user-card'>
                <div class='avater'>SAMPLE</div>
                <h2>%s</h2>
                <p>FoundYear: %s</p>
                <p>Descripiton: %s</p>
                <p>URL: %s</p>
                <p>Phone: %s</p>
                <p>Industry : %s</p>
                <p>CEO: %s</p>
                <p>Country : %s</p>
                <p>Founder : %s</p>
                <p>Total Num : %s</p>
            </div>",
            $this->getName(),
            $this->getFoundingYear(),
            $this->getDescription(),
            $this->getWebsite(),
            $this->getPhone(),
            $this->getIndustry(),
            $this->getCeo(),
            $this->getCountry(),
            $this->getFounder(),
            $this->getTotalEmployee()
        );
    }

    public function toMarkDown(): string
    {
        return "## User : {$this->getName()}
        -Found Year : {$this->getFoundingYear()}
        -Description : {$this->getDescription()}
        -WebSite : {$this->getWebsite()}
        -Phone : {$this->getPhone()}
        -Industry: {$this->getIndustry()}
        -CEO : {$this->getCeo()}
        -Country: {$this->getCountry()}
        -Founder : {$this->getFounder()}
        -Total Num : {$this->getTotalEmployee()}
        ";
    }

    public function toArray(): array
    {
        return [
            "name" => $this->getName(),
            "foundYear" => $this->getFoundingYear(),
            "description" => $this->getDescription(),
            "website" => $this->getWebsite(),
            "phone" => $this->getPhone(),
            "industry" => $this->getIndustry(),
            "ceo" => $this->getCeo(),
            "country" => $this->getCountry(),
            "founder" => $this->getFounder(),
            "totalemployees" => $this->getTotalEmployee(),
        ];
    }
}
