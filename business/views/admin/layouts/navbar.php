<div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li class="active-menu"><a href="<?=BASE_URL?>cp-admin/dashboard"><i class="far fa-chart-bar"></i> Bảng điều khiển</a></li>
                        <li><a><i class="fas fa-user"></i>Người dùng</a>
                            <ul>
                                <li>
                                    <a href="<?=BASE_URL?>cp-admin/list_user">Danh sách người dùng</a>
                                </li>
                                <!-- <li>
                                    <a href="user-edit.html">User edit</a>
                                </li> -->
                                <li>
                                    <a href="<?=BASE_URL?>cp-admin/new_user">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?=BASE_URL?>cp-admin/tour-add"><i class="fas fa-umbrella-beach"></i>Thêm tour</a></li>
                        <li>
                            <a><i class="fas fa-hotel"></i></i>Danh sách tour</a>
                            <ul>
                                <li><a href="<?=BASE_URL?>cp-admin/tour-active">Hoạt động </a></li>
                                <li><a href="<?=BASE_URL?>cp-admin/tour-pending">Đang chờ xử ký </a></li>
                                <li><a href="<?=BASE_URL?>cp-admin/tour-expired">Hết hạn</a></li>
                            </ul>   
                        </li>
                        <li><a href="<?=BASE_URL?>cp-admin/booking"><i class="fas fa-ticket-alt"></i> Đặt chỗ</a></li>
                        <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Danh sách yêu thích</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Bình luận</a></li>
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
                    </ul>
                </div>
            </div>