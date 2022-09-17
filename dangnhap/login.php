<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<title>Đăng nhập</title>
</head> 
<body> 
    <div class="container d-flex justify-content-center">
    <form action='login.php' class="dangnhap" method='POST'>
    <table>
        <tr>
            <th>Tên đăng nhập :</th>
            <td><input type='text' name='username' class="form-control"/> </td>
        </tr>
        <tr>
            <th>Mật khẩu :</th>
            <td><input type='password' name='password' class="form-control"/></td>
        </tr>
    </table> 
        <input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
        <a href='dangky.php' title='Đăng ký'>Đăng ký</a> 
        <?php require 'xulylogin.php';?> 
    <form>      
    </div>

</body> 