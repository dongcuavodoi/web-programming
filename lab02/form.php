<html>
    <head><meta charset="UTF-8">
    <title>Result</title>
    </head>
    <body>
    <?php
        $name = $_POST['name'];
        $gender = $_POST['gender'];       
        $class = $_POST['class'];
        $school = $_POST['school'];
        $birthday = $_POST['birthdaytime'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $check = $_POST['check'];
        print("<br>Tên: $name");
        print("<br>Giới tính: $gender");
        print("<br>Lớp: $class");
        print("<br>Trường: $school");
        print("<br>Ngày sinh: $birthday");
        print("<br>Email: $email");
        print("<br>Số điện thoại: $phone");
        if (isset($_POST['habit'])) {
            foreach($_POST['habit'] as $value) {
                print("<br>Sở thích: $value");
            }
        }
    ?>
    </body>
</html>