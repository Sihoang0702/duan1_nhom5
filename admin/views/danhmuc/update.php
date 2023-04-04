<?php
if (is_array($dm)) {
    extract($dm);
}
?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Add Danh Mục</h3>
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
                        <h2>Thêm mới danh mục sản phẩm <small>sub title</small></h2>
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
                        <!-- page content -->
                        <div class="right_col" role="main">
                            <div class="">
                                <div class="page-title">
                                    <div class="title_left">
                                        <h3>Cập nhật Loại Hàng Hoá</h3>
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
                                                <h2>Thêm mới danh mục sản phẩm <small>sub title</small></h2>
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
                                            <div class="row">
                                                <div class="row header">
                                                    <!-- <h1>cập nhậtLoại Hàng Hoá</h1> -->
                                                </div>
                                                <div class="x_content">
                                                    <form action="index.php?act=updatedm" method="post">
                                                        <div class="field item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mã loại<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" type="text" name="maloai" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tên loại<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="ln_solid">
                                                            <div class="form-group">
                                                                <div class="col-md-6 offset-md-3">
                                                                    <input class="btn btn-primary" type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                                                                    <input class="btn btn-primary" type="submit" name="capnhat" value="Cập Nhật">
                                                                    <input class="btn btn-primary" type="reset" value="Nhập lại">
                                                                    <a href="index.php?act=lisdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
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