<?php
    declare(strict_types=1);
    class Transaction{
        private float $amount;
        private string $description;

        public static int $count = 0;

        public const STATUS_PAID = 'paid';
        public const STATUS_PENDING = 'pending';
        public const STATUS_DECLINED = 'declined';

        private string $status;

        public function __construct( float $amount, string $description ){
            $this->setStatus(self::STATUS_PENDING);
            $this->amount = $amount;
            $this->description = $description;
            self::$count++;
        }

        public function addTax(float $rate): Transaction{
            $this->amount += $this->amount * $rate / 100;

            return $this;
        }

        public function applyDiscount(float $rate): Transaction{
            $this->amount -= $this->amount * $rate / 100;
            return $this;
        }

        public function getAmount(): float {
            return $this->amount;
        }

        public function setStatus(string $status): self {
            $this->status = $status;
            return $this;
        }

    }