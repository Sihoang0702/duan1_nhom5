<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Update new</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cập nhật lại sản phẩm <small>sub title</small></h2>
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
                        <form class="" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

                            <p>Update sản phẩm mới ra mắt <code>thị trường</code> check out in the <a href="form.html">form page</a>
                            </p>
                            <span class="section">Products Info</span>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Tên sản phẩm<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="tensp" value="<?= $name ?>">
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Danh mục<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">

                                    <select name="iddm">
                                        <option value="0" selected> Tất cả</option>
                                        <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            if ($iddm == $id)
                                                echo '<option value="' . $id . '" selected>' . $name . '</option>';
                                            else
                                                echo '<option value="' . $id . '">' . $name . '</option>';
                                        }
                                        ?>
                                        <option value=""></option>
                                    </select>

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Giá sản phẩm<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="giasp" value="<?= $price ?>">
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Hình ảnh sản phẩm<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="file" name="hinh"> <?= $hinh ?>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Mô tả<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea name="mota" cols="30" rows="10" value="<?= $mota ?>"></textarea>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <input class="btn btn-primary" type="hidden" name="id" value="<?= $id ?>">
                                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                                        <input class="btn btn-primary" type="reset" value="Nhập lại">
                                        <a href="index.php?act=listsp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>


                                    </div>
                                </div>
                            </div>

                            <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>





        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->