<?php

declare(strict_types=1);

namespace App\Models;


use App\Model;

class Invoice extends Model
{

    public function create(float $amount, int $userId): int
    {
        $newInvoiceStmt =  $this->db->prepare("INSERT INTO
        invoices(amount,user_id)
        VALUES(?,?)");
        $newInvoiceStmt->execute([$amount, $userId]);
        return (int) $this->db->lastInsertId();
    }

    public function find(int $invoiceId): array
    {

        $fetchStmt =  $this->db->prepare(
            'SELECT invoices.id as invoice_id,
                    invoices.amount,users.full_name
              FROM invoices
             LEFT JOIN users on users.id = invoices.user_id 
             WHERE invoices.id = ?'
        );
        $fetchStmt->execute([$invoiceId]);

        $invoice = $fetchStmt->fetch();
        return $invoice ? $invoice:[];

    }
}
