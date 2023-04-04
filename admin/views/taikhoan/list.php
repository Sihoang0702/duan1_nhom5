 <!-- page content -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>List Sản Phẩm <small>(Quản lý mặt hàng )</small></h3>
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

                         <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                         <div class="table-responsive">
                             <table class="table table-striped jambo_table bulk_action">
                                 <thead>
                                     <tr class="headings">
                                         <th>
                                             <input type="checkbox" id="check-all" class="flat">
                                         </th>
                                         <th class="column-title">Mã tài khoản </th>
                                         <th class="column-title">Tên đăng nhập </th>
                                         <th class="column-title">MẬT KHẨU</th>
                                         <th class="column-title">EMAIL </th>
                                         <th class="column-title">ĐỊA CHỈ </th>
                                         <th class="column-title">ĐIỆN THOẠI </th>
                                         <th class="column-title no-link last"><span class="nobr">Role</span>
                                         </th>
                                         <th></th>

                                         <th class="bulk-actions" colspan="7">
                                             <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                         </th>
                                     </tr>
                                 </thead>

                                 <tbody>

                                 </tbody>
                                 <?php
                                    foreach ($listtaikhoan as $taikhoan) {
                                        extract($taikhoan);
                                        $suatk = "index.php?act=suatk&id=" . $id;
                                        $xoatk = "index.php?act=xoatk&id=" . $id;
                                        echo '<tr>
                                <td ><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . $role . '</td>
                                <td><a href="' . $suatk . '"><input type="button" value="sửa"></a> <a href="' . $xoatk . '"> <input type="button" value="xoá"></a></td>
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