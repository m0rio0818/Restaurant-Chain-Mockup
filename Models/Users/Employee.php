<?php

namespace Models\Users;

use DateTime;
use Interfaces\FileConvertible;
use Models\Users\User;

class Employee extends User implements FileConvertible
{
    private string $jobTitle;
    private float $salary;
    private Datetime $startDate;
    private array $awards;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $phoneNumber,
        string $address,
        DateTime $birthDate,
        DateTime $membershipExpirationDate,
        string $role,
        string $jobTitle,
        float $salary,
        DateTime $startDate,
        array $awards
    ) {
        parent::__construct(
            $id,
            $firstName,
            $lastName,
            $email,
            $password,
            $phoneNumber,
            $address,
            $birthDate,
            $membershipExpirationDate,
            $role
        );
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->awards = $awards;
    }

    public function toString(): string
    {
        return sprintf(
            "
            User ID: %d \n
            Name : %s %s\n
            Email: %s\n
            Address: %s\n
            BirthDate: %s\n
            MemberShip Expiration Date: %s\n
            Role: %s\n
            JobTitle: %s\n
            Salary: %s\n
            StartDate : %s\n
            Award: %s\n
            ",
            $this->getId(),
            $this->getFirstName(),
            $this->getLastName(),
            $this->getAddress(),
            $this->getBirthDate()->format("Y-m-d"),
            $this->getMembershipExpireationDate()->format("Y-m-d"),
            $this->getRole(),
            $this->jobTitle,
            $this->salary,
            $this->startDate,
            $this->awards,
        );
    }

    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='user-card'>
                <div class='avater'>SAMPLE</div>
                <p>%d</p>
                <h2>%s %s</h2>
                <p>%s</p>
                <p>BirthDate : %s</p>
                <p>MemberShip Expireation Date: %s</p>
                <p>Role : %s</p>
                <p>Job Title : %s</p>
                <p>Salary : %s</p>
                <p>startDate : %s</p>
                <p>Awards : %s</p>
            </div>",
            $this->getId(),
            $this->getFirstName(),
            $this->getLastName(),
            $this->getAddress(),
            $this->getBirthDate()->format("Y-m-d"),
            $this->getMembershipExpireationDate()->format("Y-m-d"),
            $this->getRole(),
            $this->jobTitle,
            $this->salary,
            $this->startDate,
            $this->awards,
        );
    }

    public function toMarkDown(): string
    {
        return "## User : {$this->getFirstName()} {$this->getLastName()}
                 -Email : {$this->getEmail()}
                 -Address: {$this->getAddress()}
                 -BirthDate : {$this->getBirthDate()}
                 -IsActive: {$this->hasMembershipExpired()}
                 -Role : {$this->getRole()}
                 -JobTitle : {$this->jobTitle}
                 -Salary : {$this->salary}
                 -startDate : {$this->startDate}
                 -awards : {$this->awards}";
    }

    public function toArray(): array
    {
        return [
            "id" => $this->getId(),
            "firstName" => $this->getFirstName(),
            "lastName" => $this->getLastName(),
            "email" => $this->getEmail(),
            "password" => $this->getPassword(),
            "phoneNumber" => $this->getPhoneNumber(),
            "address" => $this->getAddress(),
            "birthDate" => $this->getBirthDate(),
            "isActive" => $this->hasMembershipExpired(),
            "role" => $this->getRole(),
            "jobtitle" => $this->jobTitle,
            "salary" => $this->salary,
            "startdate" => $this->startDate,
            "awards" => $this->awards,
        ];
    }
}
