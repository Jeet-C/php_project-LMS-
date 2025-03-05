<?php 
session_start();
include("teacher/common/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">Role</label>
                <select id="role" name="role" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Select Role</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" name="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
    </div>
</body>
</html>
<?php
   
    if(isset($_POST['submit'])){
        $em=$_POST['email'];
        $role=$_POST['role'];
        $pa=md5($_POST['password']);
        if($_POST['email']!="" && $_POST['password']!=""){
            if($role=="admin"){
                $se="SELECT * FROM admin WHERE email='$em' And password='$pa'"; 
                $ra=$con->query($se);
                                          
                if($ra->num_rows>0){
                $row=$ra->fetch_assoc();
                
                $_SESSION['us']=$row['name'];
                $_SESSION['id']=$row['id'];
                header("location:admin/dashboard.php");
            }
        }

        if($role=="teacher"){
               $see="SELECT * FROM teacher WHERE email='$em' And password='$pa'";
               $rs=$con->query($see);
               if($rs->num_rows>0){
               $row=$rs->fetch_assoc();
            
               $_SESSION['us']=$row['name'];
               $_SESSION['id']=$row['id'];                  
               header("location:teacher/dashboard.php"); 
            }
        }
    }
    }
                                      
?>