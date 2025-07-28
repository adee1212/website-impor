<?php

function getStatusBadgeClass($status)
{
    $status = strtolower($status);
    switch($status) {
        case 'paid': return 'badge-paid';
        case 'unpaid': return 'badge-unpaid';
        case 'draft': return 'badge-draft';
        case 'cancelled': return 'badge-cancelled';
        default: return 'badge-secondary';
    }
}
