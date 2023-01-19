<?php include_once("includes/header.php"); ?>
<?php include_once("includes/navbar.php"); ?>
<?php include_once("includes/script.php"); ?>

<div class="container my-3">
    <div class="card shadow">
        <div class="card-header">
            <h3>ระบบลงทะเบียนสมัครสมาชิก</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row d-flex justify-contect-center">
                    <div class="col-md-6">
                        <div class="md-3">
                            <label for="">ลงทะเบียนหน้าที่ ระบบสั่งจองอาหารออนไลน์</label>
                            <select name="role_as" class="form-control">
                                <option value="">กรุณาเลือกหน้าที่</option>
                                <option value="1">1.ผู้ดูแลร้านอาหาร</option><!-- 1.manager -->
                                <option value="2">2.สมาชิกหรือลูกค้า</option><!-- 2.customer -->
                                <option value="3">3.ผู้ส่งอาหาร</option><!-- 3.rider -->
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fs-6">ฃื่อ-สกุล</label>
                        <input type="text" name="Name" class="form-control" require placeholder="กรอกชื่อ-สกุล">
                    </div>
                    <div class="mb-3">
                        <label for="fs-6">อีเมลล์</label>
                        <input type="text" name="Email" class="form-control" require placeholder="กรอกอีเมลล์">
                    </div>
                    <div class="mb-3">
                        <label for="fs-6">รหัสผ่าน</label>
                        <input type="text" name="Password" class="form-control" require placeholder="กรอกรหัสผ่าน">
                    </div>
                    <class="col-md-6">
                        <div class="mb-3">
                            <label for="fs-6">ยืนยันรหัสผ่าน</label>
                            <input type="text" name="Confirm_Password" class="form-control" require placeholder="ยืนยันรหัสผ่าน">

                        </div>
                        <div class="mb-3">
                            <label for="fs-6">เบอร์โทร</label>
                            <input type="text" name="Phone" class="form-control" require placeholder="เบอร์โทร">
                        </div>
                        <div class="mb-3">
                            <label for="fs-6">รูปภาพ</label>
                            <input type="file" name="photo" class="form-control" require placeholder="ใส่รูปภาพ">
                            <div class="md-3">
                                <label for="fs-6">รหัสผ่าน</label>
                                <input type="text" name="Password" class="form-control" require placeholder="กรอกรหัสผ่าน">
                            </div>
                            <div class="mb-3">
                                <label for="fs-6">ที่อยู่</label>
                                <textarea name="address" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="register_btn" value="ลงทะเบียน" class="btn btn-success form-control">
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>
<?php include_once("includes/script.php"); ?>