 <!-- page content -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>Danh mục hàng hóa<small>(Quản lý thông tin)</small></h3>
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

                 <div class="clearfix"></div>

                 <div class="row" style="display: block;">


                     <div class="clearfix"></div>






                     <div class="clearfix"></div>

                     <div class="col-md-12 col-sm-12  ">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>List sản phẩm<small>new product</small></h2>
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
                                                 <th class="column-title">ID</th>
                                                 <th class="column-title">Danh mục sản phẩm</th>
                                                 <th class="column-title">Action</th>


                                                 <th></th>

                                                 <th class="bulk-actions" colspan="7">
                                                     <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                 </th>
                                             </tr>
                                         </thead>

                                         <tbody>

                                             <?php
                                                foreach ($listdanhmuc as $danhmuc) {
                                                    extract($danhmuc);
                                                    $suadm = "index.php?act=suadm&id=" . $id;
                                                    $xoadm = "index.php?act=xoadm&id=" . $id;
                                                    echo '<tr>
                                <td ><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td><a href="' . $suadm . '"><input type="button" value="sửa"></a> <a href="' . $xoadm . '"> <input type="button" value="xoá"></a></td>
                            </tr> ';
                                                }
                                                ?>

                                     </table>
                                 </div>



                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- /page content -->