<!DOCTYPE html>

<head>
    <title>Document</title>
</head>
<body>
<?php echo '<pre>';echo "variable:";print_r($foo);?>
 <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="receipt" />
        <button type="submit">Upload</button>
    </form>
</body>
</html>