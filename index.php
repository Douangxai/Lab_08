<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form {
            width: 600px;
            margin: auto;
        }
        input, textarea {
            margin-bottom: 15px;
        }
    </style>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>
<body>
    
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <h1>Email tới bạn</h1>
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
        <label for="tieude">Subject</label>
        <input type="text" class="form-control" name="tieude" placeholder="ten">
        <label for="content"> Nội dung</label>
        <textarea name="content" id="editor" class="form-control"></textarea>
        <script>
            CKEDITOR.replace('editor');
        </script>
        <label for="file"> file đính kèm</label>
        <input type="file" class="form-control" name="file">
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>
</html>