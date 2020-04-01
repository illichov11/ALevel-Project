<?php


namespace ALevel\Project\Api\Data;

use Magento\Tests\NamingConvention\true\string;

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
    public function setName(string $name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $phone
     * @return QuickOrderInterface
     */
    public function setPhone(string $phone);

    /**
     * @return mixed
     */
    public function getPhone();

    /**
     * @param string $email
     * @return QuickOrderInterface
     */
    public function setEmail(string $email);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $sku
     * @return QuickOrderInterface
     */
    public function setSku(string $sku);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param StatusInterface $status
     * @return QuickOrderInterface
     */
    public function setStatus(StatusInterface $status);

    /**
     * @return StatusInterface
     */
    public function getStatus();

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt();
}