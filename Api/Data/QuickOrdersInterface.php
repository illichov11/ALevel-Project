<?php

namespace ALevel\Project\Api\Data;

/**
* @package ALevel\Project\Api\Data
*/
interface QuickOrderInterface
{
    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param string $name
     * @return QuickOrderInterface
     */
    public function setName($name);


    public function getName(): string;

    /**
     * @param string $phone
     * @return QuickOrderInterface
     */
    public function setPhone($phone);


    public function getPhone(): string;

    /**
     * @param string $email
     * @return QuickOrderInterface
     */
    public function setEmail($email);


    public function getEmail(): string;

    /**
     * @param string $sku
     * @return QuickOrderInterface
     */
    public function setSku($sku);


    public function getSku(): string;

    /**
     * @param StatusInterface $status
     * @return QuickOrderInterface
     */
    public function setStatus(StatusInterface $status);


    public function getStatus(): StatusInterface;

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt();
}