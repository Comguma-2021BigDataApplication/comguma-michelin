<?php
require_once 'topnav.php';
require_once 'head.html';

session_start();

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

echo '<div class="main">';
if ($_SESSION['id'] == null) {
    echo 'Please login and use this page.<br><br>';
    echo '<div class="btngroup">';
    echo '<a href="login.php"><button type="button">LOG IN</button></a>';
    echo '</div>';
} else {
    echo '<div class="text_mypage">';
    echo '<h3>Your taste profile</h3><br>';
    echo '<div class="edit">';
    echo '<h5 style="display:inline">Location</h5>';
    echo '&nbsp;&nbsp;';

    $conn = mysqli_connect("localhost", "team13", "team13", "team13");
    $sql = "
          SELECT * FROM users
          ;";
    $ret = mysqli_query($conn, $sql);
    if ($ret) {
        $row = mysqli_fetch_array($ret);
        $user_locate = $row['user_locate'];
        if ($user_locate == null) {
            echo 'ERROR';
            exit();
        } else {
            echo '<span style="color:#751A21">';
            echo $user_locate;
            echo '</span>';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="edit.php"><button type="button">edit</button></a>';
            echo '<br><br>';
            echo '</div>';
        }
    } else {
        echo 'ERROR';
        exit();
    }

    echo '<h5 style="display:inline">Preferred food type</h5>';
    echo '&nbsp;&nbsp;';
    $pref = $row['user_pref'];
    echo '<span style="color:#751A21">';
    echo $pref;
    echo '</span>';
    echo '<br><br><br><br>';

    echo '<h3>Recommended restaurants around you</h3><br>';
    if ($user_locate == null) {
        echo 'Add your location information.<br>';
    } else {
        $sql = "
            SELECT * FROM locatnteles
            WHERE reslocat_en LIKE '%" . $user_locate . "%'
            ;";
        $ret = mysqli_query($conn, $sql);
        if ($ret) {
            if (mysqli_num_rows($ret) > 0) {
                $id_list = array();
                $locat_list = array();
                $tele_list = array();
                while ($row = mysqli_fetch_assoc($ret)) {
                    array_push($id_list, $row['resid']);
                    array_push($locat_list, $row['reslocat_en']);
                    array_push($tele_list, $row['restelenum']);
                }
            }
        } else {
            echo 'ERROR';
            exit();
        }
        $i = 0;
        foreach ($id_list as $id_val) {
            if ($i == 18) {
                exit();
            } else {
                $locat_val = $locat_list[$i];
                $tele_val = $tele_list[$i];
                $sql2 = "
                SELECT * FROM nametbl
                WHERE res_id = '" . $id_val . "'
                ;";
                $ret2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($ret2);
                $sql3 = "
                SELECT * FROM typetbl
                WHERE res_id = '" . $id_val . "'
                ;";
                $ret3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($ret3);
                echo '<div class="text_recommended">';
                echo '<div class="resimg">';
                $img = "./resImages/" . $id_val . ".jpg";
                echo '<img src="' . $img . '"/>';
                echo '</div>';
                echo '<br>';
                echo $row2['res_name_en'] . '<br>';
                echo $row3['type_en'] . '<br>';
                echo $locat_val . '<br>';
                echo $tele_val . '<br>';
                echo '</div>';
                $i = $i + 1;
                if ($i % 3 == 0) {
                    echo '<br><br>';
                } else {
                    echo '&nbsp;&nbsp;';
                }
            }
        }
    }
    mysqli_close($conn);
}
echo '<br><br><br><br>';
echo '</div>';
echo '</div>';

echo '</body></html>';