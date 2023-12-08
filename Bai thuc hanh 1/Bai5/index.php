<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
    <style>
        #wallpaper-login {
            background: white;
            height: 500px;
        }

        .reg-container label {
            display: block;
            margin-bottom: 8px;
        }

        .reg-container input {
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .reg-container {
            background-color: #787ae3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin: 0px auto;
        }

        #wallpaper-reg {
            background: white;
            height: 800px;
        }
    </style>
</head>

<body>
<h2 class="text-center">BẢNG ĐĂNG KÍ</h2>
    <div id="wallpaper-reg" class="py-5">
        <div class="reg-container">
            
            <form>
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" class="form-control" required />

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control" required />
                <label for="email">Địa chỉ email:</label>
                <input type="text" id="email" name="email" class="form-control" required />
                <div class="d-flex">
                    <label for="gender" class="me-5">Giới tính:</label>
                    <div class="d-flex">
                        <label class="me-1">
                            <input type="radio" name="gender" value="nam"> Nam
                        </label>
                        <label class="me-1">
                            <input type="radio" name="gender" value="nu"> Nữ
                        </label>
                        <label class="me-1">
                            <input type="radio" name="gender" value="khac"> Khác
                        </label>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="regions" class="me-5">Khu vực</label>
                    <select name="" id="regions">
                        <option value="">Miền Bắc</option>
                        <option value="">Miền Trung</option>
                        <option value="">Miền Nam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="note" class="me-5">Ghi chú</label>
                    <textarea name="note" id="note" cols="60" rows="5"></textarea>
                </div>
                <div class="d-flex justify-content-around mt-2">
                    <input type="submit" value="Gửi thông tin ">
                    <input type="submit" value="Hủy thông tin ">
                </div>
            </form>
        </div>
    </div>
</body>
</html>