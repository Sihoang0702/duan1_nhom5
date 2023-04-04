<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Danh sách Tài khoản <small>(Quản lý thông tin)</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">

            <div class="clearfix"></div>






            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bảng tải khoản <small>Custom design</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <form action="index.php?act=listsp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddm">
                                <option value="0" selected> Tất cả</option>
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                }
                                ?>
                                <option value=""></option>
                            </select>
                            <input type="submit" name="listok" value="GO">
                        </form>

                        <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                        <div class="table-responsive">


                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MÃ LOẠI</th>
                                        <th>TÊN Sản Phẩm</th>
                                        <th>HÌNH</th>
                                        <th>Giá</th>
                                        <th>Lượt xem</th>


                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>




                                <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp = "index.php?act=suasp&id=" . $id;
                                    $xoasp = "index.php?act=xoasp&id=" . $id;
                                    $hinhpath = "../upload/" . $img;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' height='50'>";
                                    } else {
                                        $hinh = "no photo";
                                    }
                                    echo '<tr>
                                <td ><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $price . '</td>
                                <td>' . $luotxem . '</td>
                                <td><a href="' . $suasp . '"><input type="button" value="sửa"></a> <a href="' . $xoasp . '"> <input type="button" value="xoá"></a></td>
                            </tr> ';
                                }
                                ?>




                            </table>
                        </div>

                        <div class="row mb20">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="bỏ chọn tất cả">
                            <input type="button" value="Xoá các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->