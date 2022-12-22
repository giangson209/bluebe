<?php include 'header.php';?>
<main>
    <section class="box-breadcrumbs">
        <div class="container">
            <div class="cap-bread text-center">
                <h2>Bảng vàng thành tích</h2>
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Bảng vàng thành tích</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="box-student">
        <div class="container">
            <div class="nguyetque text-center"><img src="images/vongnguyetque.png" class="img-fluid" alt=""></div>
            <div class="content-hocvien">
                <div class="tab-hocvien text-center">
                    <ul>
                        <li><a href="javascript:void(0)" class="clc-tab active" data-tab="hv-1"">BlueBell Junior</a></li>
                        <li><a href="javascript:void(0)" class="clc-tab" data-tab="hv-2"">BlueBell IELTS</a></li>
                    </ul>
                </div>
                <div class="tabhocvien text-center">
                    <div class="content-tab-hv active" id="hv-1">
                        <div class="row">
                            <?php
                            for ($x = 0; $x <= 8; $x++) { ?>
                                <div class="col-md-4">
                                    <div class="hv-cate item-hv-jun">
                                        <div class="avarta">
                                            <div class="avr"><img src="images/hv-1.png" class="img-fluid" alt=""></div>
                                            <div class="abs-hv"><img src="images/bell-1.png" class="img-fluid" alt=""></div>
                                            <span>6.5</span>
                                        </div>
                                        <div class="info text-center">
                                            <h4>Nguyễn Đình Sinh Quảng</h4>
                                            <p>L: <strong>8.0</strong> - R: <strong>7.0</strong> - W: <strong>6.5</strong> - S: <strong>6.0</strong></p>
                                            <label>IELTS Special</label>
                                            <div class="view-hv"><a href="">Xem chứng chỉ</a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <div class="col-md-12">
                                <div class="pagination text-center justify-content-center">
                                    <ul class="justify-content-center text-center">
                                        <li><a href="" class="active">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="table-scroll">
                                    <table>
                                        <thead class="text-center">
                                            <th>STT</th>
                                            <th>Tên học viên</th>
                                            <th>Khóa học</th>
                                            <th></th>
                                            <th>L</th>
                                            <th>R</th>
                                            <th>W</th>
                                            <th>S</th>
                                            <th>Overall</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        for ($x = 0; $x <= 9; $x++) { ?>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <p><strong>Nguyễn Đình Sinh Quảng</strong><label>Trường THPT Lý Thái Tổ</label></p>
                                                </td>
                                                <td>IELTS Special</td>
                                                <td>7.5</td>
                                                <td>6.5</td>
                                                <td>6.0</td>
                                                <td>6.5</td>
                                                <td><strong>7.0</strong></td>
                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-tab-hv" id="hv-2">
                        <div class="row">
                            <?php
                            for ($x = 0; $x <= 8; $x++) { ?>
                                <div class="col-md-4">
                                    <div class="hv-cate item-hv-bell">
                                        <div class="avarta">
                                            <div class="avr"><img src="images/hv-1.png" class="img-fluid" alt=""></div>
                                            <div class="abs-hv"><img src="images/bell-1.png" class="img-fluid" alt=""></div>
                                            <span>6.5</span>
                                        </div>
                                        <div class="info text-center">
                                            <h4>Nguyễn Đình Sinh Quảng 12</h4>
                                            <p>L: <strong>8.0</strong> - R: <strong>7.0</strong> - W: <strong>6.5</strong> - S: <strong>6.0</strong></p>
                                            <label>IELTS Special</label>
                                            <div class="view-hv"><a href="">Xem chứng chỉ</a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <div class="col-md-12">
                                <div class="pagination text-center justify-content-center">
                                    <ul class="justify-content-center text-center">
                                        <li><a href="" class="active">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="table-scroll">
                                    <table>
                                        <thead class="text-center">
                                            <th>STT</th>
                                            <th>Tên học viên</th>
                                            <th>Khóa học</th>
                                            <th></th>
                                            <th>L</th>
                                            <th>R</th>
                                            <th>W</th>
                                            <th>S</th>
                                            <th>Overall</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        for ($x = 0; $x <= 9; $x++) { ?>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <p><strong>Nguyễn Đình Sinh Quảng</strong><label>Trường THPT Lý Thái Tổ</label></p>
                                                </td>
                                                <td>IELTS Special</td>
                                                <td>7.5</td>
                                                <td>6.5</td>
                                                <td>6.0</td>
                                                <td>6.5</td>
                                                <td><strong>7.0</strong></td>
                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>





