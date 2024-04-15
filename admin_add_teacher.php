<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      
    .contact{
        width: 1107px;
        margin-right: 213px;
        height: 225px;
        margin-top: 50px;
        background-color: #f6702e;
        display: flex;
        float: right;
    }
    .info{
    margin-right: 10px;
    ;
    }
    .info p{
        color: aliceblue;
        font-size: 15px;
        font-family: 'Times New Roman', Times, serif;
    }
    .info h4{
        color: aliceblue;
        font-family: 'Times New Roman', Times, serif;
    }
    .contact > .info{
        padding-left: 40px;
        padding-top: 20px;
    }

    .pt-3 {
        background-color: #f6702e;
        position: relative;
    }
    .h2{
        margin-left: 20px;
        color: #FFF;
        font-family: 'Times New Roman', Times, serif;
    }
    .ngonngu{
        float: right;
        position: absolute;
        top: 27px;
        right: 150px;
        font-size: 15px;
        color: #FFF;
        font-weight: 400;
    }
    .ngonngu:hover+.boxhover{
    display: block;
    }
    .boxhover{
        width: 150px;
        height: 150px;
        background-color: aqua;
        position: absolute;
        top: 50px;
        right: 120px;
        display: none;
    }
    .pt-3{
        position: relative;
    }
    
    </style>
</head>
<body>
    <div class="container">
        <div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome BTEC FPT</h1>
            <p class="ngonngu"><i class="fa-solid fa-earth-americas"></i>  Vietnamese(vi)
            </p>
        </div>
        <h2>Add Teacher</h2>
        <div id="alert_placeholder"></div> <!-- Thẻ div để hiển thị thông báo -->

        <form action="process_add_teacher.php" method="POST">
            <div class="form-group">
                <label for="teacher_name">Name teacher:</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Birth of date:</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #F6702E; border-color: #F6702E;margin-top: 20px; margin-left: 500px">Add</button>
            <a href="admin_form_teacher.php" class="btn btn-primary" style="background-color: #F6702E; border-color: #F6702E; margin-top: 20px; margin-left: auto; margin-right: auto;">Back</a>
        </form>
    </div>

    <footer>
    <div class="contact">
            <div class="info">
                <h4>Ha Noi</h4>
                <p>Tang 2, Toa nha Detech II, 107 Nguyen Phong Sac, Cau Giay, Ha Noi</p>
                <p>Dien thoai: 0981 090 513</p>
                <p>Email: btec.hn@fpt.edu.vn</p>
                <p>Hotline: 0981 090 513</p>
            </div>
            <div class="info">
                <h4>Da Nang</h4>
                <p>66B Vo Van Tan, Quan Thanh Khe, TP.Da Nang (Toa nha Savico Building)</p>
                <p>Dien thoai: 0236 730 9268</p>
                <p>Email: btec.dn@fpt.edu.vn</p>
                <p>Hotline: 0905 888 535</p>
            </div>
            <div class="info">
                <h4>TP. Ho Chi Minh</h4>
                <p>275 Nguyen Van Dau - Quan Binh Thanh - TP.Ho Chi Minh</p>
                <p>Dien thoai: 028 7300 9268</p>
                <p>Email: btec.hcm@fpt.edu.vn</p>
                <p>Hotline: 0942 25 68 25</p>
            </div>
            <div class="info">
                <h4>Can Tho</h4>
                <p>41 Cach Mang Thang 8, Quan Ninh Kieu, TP. Can Tho.</p>
                <p>Dien thoai: 0354 583 916</p>
                <p>Email: btec.hn@fpt.edu.vn</p>
                <p>Hotline: 091 888 54 35</p>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function(){
            <?php
            if(isset($_GET['success'])) {
                echo '$("#alert_placeholder").append("<div class=\'alert alert-success\' role=\'alert\'>Thêm giáo viên thành công!</div>");';
            }
            ?>
        });
    </script>
</body>
</html>