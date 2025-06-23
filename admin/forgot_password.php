<!-- forgot_password.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ลืมรหัสผ่าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-4">รีเซ็ตรหัสผ่าน</h4>
                    <form action="send_reset_link.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">กรอกอีเมลของคุณ</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">ส่งลิงก์รีเซ็ตรหัสผ่าน</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="login.php">กลับสู่หน้าล็อกอิน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
