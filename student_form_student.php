<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .contact{
        width: 1294px;
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
            <h1 class="h2">Welcome Admin</h1>
            <p class="ngonngu"><i class="fa-solid fa-earth-americas"></i>  Vietnamese(vi)
            </p>
        </div>
        <h1 class="mt-5 mb-4">List Of Student</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="classSelect" class="form-label">Select Class:</label>
                <select class="form-select" id="classSelect" name="class_id">
                    <option selected disabled>Select Class...</option>
                    <?php
                    include 'connect.php';

                    $sql = "SELECT class_id, class_name FROM Classes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["class_id"] . "'>" . $row["class_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <hr>

        <div class="mt-4">
            <h2>Students</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Date of Birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $class_id = $_POST["class_id"];

                        include 'connect.php';

                        $sql = "SELECT student_id, student_name, date_of_birth FROM Students WHERE class_id = $class_id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["student_id"] . "</td>";
                                echo "<td>" . $row["student_name"] . "</td>";
                                echo "<td>" . $row["date_of_birth"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No students found for selected class.</td></tr>";
                        }

                        $conn->close();
                    }
                    ?>
                </tbody>
            </table>
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
        </div>
    </footer>
    </div>
</body>
</html>
