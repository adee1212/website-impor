<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body { 
            font-family: 'Arial', sans-serif; 
            color: #333; 
            font-size: 12px; 
            line-height: 1.4;
            margin: 0;
            padding: 20px;
        }
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .header { 
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            border-bottom: 2px solid #295f85; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        .logo { width: 120px; }
        .company-info {
            flex-grow: 1;
            padding-left: 20px;
        }
        .company-info strong {
            display: block;
            font-size: 18px;
            color: #364e68;
            margin-bottom: 5px;
        }
        .invoice-title { 
            font-size: 24px; 
            font-weight: bold; 
            color: #364e68;
        }
        .invoice-meta {
            text-align: right;
        }
        .invoice-number {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .invoice-date {
            color: #666;
        }
        .client-payment-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .client-info {
            width: 55%;
        }
        .client-info strong {
            display: block;
            margin-bottom: 5px;
        }
        .payment-info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            width: 40%;
        }
        .payment-info strong {
            display: block;
            margin-bottom: 8px;
            color: #364e68;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
        }
        th {
            background-color: #364e68;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-weight: normal;
        }
        td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: center;
        }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .totals {
            width: 40%;
            margin-left: auto;
            margin-top: 20px;
        }
        .totals td {
            border: none;
            padding: 8px 15px;
        }
        .totals tr:last-child td {
            font-weight: bold;
            border-top: 1px solid #e0e0e0;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
            font-size: 11px;
            border-top: 1px solid #e0e0e0;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <div style="display: flex; align-items: flex-end;">
                <div class="logo">
                    <img src="<?= base_url('assets/logo.png') ?>" width="120">
                </div>
                <div class="company-info">
                    <strong>World Wide Global Import</strong>
                    Your Gateway to International Trade<br>
                    <small>123 Business Ave, Jakarta, Indonesia</small>
                </div>
            </div>
            <div class="invoice-meta">
                <div class="invoice-title">INVOICE</div>
                <div class="invoice-number">INV-<?= date('Ymd') ?></div>
                <div class="invoice-date"><?= date('F d, Y') ?></div>
            </div>
        </div>

        <div class="client-payment-container">
            <div class="client-info">
                <strong>BILL TO:</strong>
                <?= $invoice['customer_name'] ?><br>
                <?php if (!empty($invoice['customer_address'])): ?>
                    <?= $invoice['customer_address'] ?><br>
                <?php endif; ?>
                <?php if (!empty($invoice['customer_phone'])): ?>
                    Phone: <?= $invoice['customer_phone'] ?>
                <?php endif; ?>
            </div>

            <div class="payment-info">
                <strong>PAYMENT INFORMATION</strong>
                Account: 5370367401<br>
                Name: An Dohan Harmando<br>
                Bank: BCA (Bank Central Asia)<br>
                <small>Please include invoice number in payment reference</small>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Receipt</th>
                    <th width="25%">Description</th>
                    <th width="10%">CTNS</th>
                    <th width="10%">Weight</th>
                    <th width="15%">Freight</th>
                    <th width="20%">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($items)): ?>
                <?php $subtotal = 0; foreach ($items as $item): ?>
                <tr>
                    <td><?= esc($item['no']) ?></td>
                    <td><?= esc($item['receipt']) ?></td>
                    <td class="text-left"><?= esc($item['description']) ?></td>
                    <td><?= esc($item['ctns']) ?></td>
                    <td><?= esc($item['weight']) ?></td>
                    <td class="text-right"><?= esc($item['freight']) ?></td>
                    <td class="text-right">IDR <?= number_format($item['total'], 2, ',', '.') ?></td>
                </tr>
                <?php $subtotal += $item['total']; endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No items to display</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <?php if (!empty($items)): ?>
        <table class="totals">
            <tr>
                <td class="text-right">Subtotal</td>
                <td class="text-right">IDR <?= number_format($subtotal, 2, ',', '.') ?></td>
            </tr>
            <tr>
                <td class="text-right">Tax (0%)</td>
                <td class="text-right">IDR 0,00</td>
            </tr>
            <tr>
                <td class="text-right">Total</td>
                <td class="text-right">IDR <?= number_format($subtotal, 2, ',', '.') ?></td>
            </tr>
        </table>
        <?php endif; ?>

        <div class="footer">
            <p>Thank you for your business!</p>
            <p>World Wide Global Import | Phone: +62 21 1234 5678 | Email: accounting@wwgi.com</p>
            <p>This is a computer generated invoice. No signature required.</p>
        </div>
    </div>
</body>
</html>