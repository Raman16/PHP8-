<!DOCTYPE html>

<head>
    <title>Document</title>
</head>
<body>
 <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="receipt" />
        <button type="submit">Upload</button>
    </form>
    <hr/>
    <?php if(!empty($invoice)):?>
        Invoice ID:<?= $invoice['invoice_id']; ?><br/>
        Invoice Amount:<?= $invoice['amount']; ?><br/>
        User:<?= $invoice['full_name']; ?><br/>
    <?php endif ?>
</body>
</html>