<?php

namespace Models\RestaurantLocations;

use Interfaces\FileConvertible;

class RestaurantLocation implements FileConvertible
{
    private string $name;
    private string $address;
    private string $city;
    private string $state;
    private string $zipCode;
    private array $employees;
    private bool $isOpen;
    private bool $hasDriveThru;

    public function __construct(
        string $name,
        string $address,
        string $city,
        string $state,
        string $zipCode,
        array $employees,
        bool $isOpen,
        bool $hasDriveThru
    ) {
        $this->name  = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->employees = $employees;
        $this->isOpen = $isOpen;
        $this->hasDriveThru = $hasDriveThru;
    }

    public function toString(): string
    {
        return sprintf(
            "
            Name: %s\n
            Address: %s\n
            City: %s\n
            State: %s\n
            ZipCode: %s\n
            ",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
        );
    }
    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='user-card'>
                <div class='avater'>SAMPLE</div>
                <h2>%s</h2>
                <p>Address: %s</p>
                <p>ZipCode: %s</p>
                <p>State: %s</p>
                <p>City: %s</p>
            </div>",
            $this->name,
            $this->address,
            $this->zipCode,
            $this->state,
            $this->city,
        );
    }

    public function toMarkDown(): string
    {
        return "## User : {$this->name}
        -Address : {$this->address}
        -ZipCode : {$this->zipCode}
        -State : {$this->state}
        -City : {$this->city}
        ";
    }

    public function toArray(): array
    {
        return [
            "name" => $this->name,
            "address" => $this->address,
            "zipCode" => $this->zipCode,
            "state" => $this->state,
            "city" => $this->city,
            "employees" => $this->employees,
            "isOpen" => $this->isOpen,
            "hasDriveThru" => $this->hasDriveThru,
        ];
    }
}
