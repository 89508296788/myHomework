<?php

interface UserInterface {
    
    public function getId(): int;
    public function getUsername(): string;
    public function getEmail(): string;
    public function getCreatedAt(): dateTimeInterface;
    public function setPassword(string $password): void;

}