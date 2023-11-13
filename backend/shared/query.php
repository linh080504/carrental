<?php
    function db_query($conn, $sql){
        $ketqua = $conn->query($sql);
        if(substr($sql, 0, 6) == 'SELECT ' ||
            substr($sql, 0, 6) == 'UPDATE' ||
            substr($sql, 0, 11) == 'DELETE FROM ' ||
            substr($sql, 0, 11) == 'INSERT INTO ' )
        {
            ktquery($ketqua);
        }
        return $ketqua;
    }

    function ktquery($ketqua){  
        if(!isset($ketqua->num_rows) && $ketqua->num_rows <= 0){
            exit('Lỗi câu truy vấn sql!');
        }
    }

    // mình bỏ luôn hàm valid này luôn nha
    // xử lý bên input html luôn rồi đó
//     function emailValid($email)
// {
//     $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
//     if(!preg_match($regex, $email)) {
//         return true;
//     }
//     else
//     {
//         return false;
//     }
// }
    function db_fetch_assoc($ketqua){
        return $ketqua->fetch_assoc();
    }


?>