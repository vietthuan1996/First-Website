<?php
	
	if(isset($_POST['btnDat'])) {

        $idDonHang = $_SESSION['username'] . date("U");
        $maKH = $_SESSION['username'];
        $ngayDH = $_POST['ngaydh'];
        $ngayGH = $_POST['ngaygh'];
        $tenKH = $_POST['tenkh'];
        $diachi = $_POST['diachikh'];
        $ghichu = $_POST['ghichu'];
        $emailkh = $_POST['emailkh'];
        if (empty($tenKH) || empty($diachi) || empty($ghichu) || empty($emailkh)) {
            ?>
            <script>
                alert("Thông tin không được bỏ trống, vui lòng điền đầy đủ thông tin !!!");
                location.href = "../Laptrinhweb/index.php?pid=11";
            </script>
            <?php
        } else {
            $kiemtra = 1;
            $partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
            $subject = $emailkh;
            if (!preg_match($partten, $subject, $matchs)) {
                ?>
                <script>
                    alert("Xin vui lòng kiểm tra định dạng email !!!");
                    location.href = "../Laptrinhweb/index.php?pid=11";
                </script>
                <?php

                $kiemtra = 0;
            }
            if ($kiemtra == 1) {
                $donhang = "INSERT INTO donhang(idDonHang,ngayDH,ngayGH,maKH,tenKH,ghiChu,diaChi,email) values('$idDonHang','$ngayDH','$ngayGH','$maKH','$tenKH','$ghichu','$diachi','$emailkh') ";
                if (mysql_query($donhang)) {

                    for ($i = 1; $i <= $_SESSION['somathang']; $i++) {
                        $idSP = $_SESSION['masp' . $i];
                        $tenSP = $_SESSION['tensp' . $i];
                        $soluong = $_SESSION['soluong' . $i];
                        $Gia = $_SESSION['gia' . $i];
                       echo $donhangchitiet = "INSERT INTO chitietdonhang(idDonHang,idSP,slDat,tenSP,Gia)VALUES ('$idDonHang','$idSP','$soluong','$tenSP','$Gia')";
                         mysql_query($donhangchitiet);
                    }
                    $_SESSION['somathang'] = 0;

                }


                ?>

                <!--<script>
                    alert("Đặt hàng thành công, xin cảm ơn!!!")
                    location.href = "../Laptrinhweb/index.php";
                </script>-->
<?php

                include("pdf/file_hoadon.php");
                header("location:chucnang/web/gmail.php");

            }
        }
    }
    ?>