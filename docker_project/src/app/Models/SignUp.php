<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;
use App\Models\Invoice;
use App\Models\User;
use Throwable;

class SignUp extends Model
{
    public function __construct(
        protected User $userModel,
        protected Invoice $invoiceModel
    ) {
        parent::__construct();
    }
    public function register(array $userInfo, array $invoiceInfo): int
    {

        try {
            $this->db->beginTransaction();

            $userId = $this->userModel->create($userInfo['email'], $userInfo['name'], true);

            $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);

            $this->db->commit();
            return $invoiceId;

        } catch (Throwable $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
        }

    }
}
