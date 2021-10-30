<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Home</title>
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="css/user.css">
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="log">
                Blog
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search...">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo">
                    <img src="img/avatar-user.png">
                </div>
            </div>
        </div>
    </nav>

    <!------------------------- MAIN -------------------------->
    <main>
        <div class="container">
            <!--======================== LEFT ==========================-->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="img/avatar-user.png">
                    </div>
                    <div class="handle">
                        <h4>Lê Trung</h4>
                        <p class="text-muted">
                            20 tuổi - Cung cự giải
                        </p>
                    </div>
                </a>

                <!-------------------- SIDEBAR ------------------------->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                        <h3>Notifications</h3>
                        <!-------------------- NOTIFICATION POPUP ---------------->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Huy Bùi</b> accepted your friend request
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Huy Bùi</b> commented on your post
                                    <small class="text-muted">1 HOUR AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Chinh Vũ</b> and <b>400 others </b> liked your post
                                    <small class="text-muted">4 MINUTES AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Chinh Vũ</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Hoàng Anh</b> commented on a post you are tagged in
                                    <small class="text-muted">1 HOUR AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="notification-body">
                                    <b>Châm Anh</b> commented on your post
                                    <small class="text-muted">1 HOUR AGO</small>
                                </div>
                            </div>
                        </div>
                        <!-------------------- END NOTIFICATION POPUP ---------------->
                    </a>
                    <a class="menu-item" id="messages-notification">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Messagse</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i></span>
                        <h3>Settings</h3>
                    </a>
                </div>
                <!------------------- END OF SIDEBAR -------------------->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!------------------- END OF LEFT -------------------->



            <!--======================== MIDDLE ==========================-->
            <div class="middle">
                <form class="create-post">
                    <div class="profile-photo">
                        <img src="img/avatar-user.png">
                    </div>
                    <input type="text" placeholder="What's on your mind?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>

                <!------------------- FEEDS --------------------->
                <div class="feeds">
                    <!------------------- FEED 1 --------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="ingo">
                                    <h3>Lê Trung</h3>
                                    <small>Hà Nội, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/member-1.png">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Hoàng Anh</b>Ảnh đẹp quá<span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
                    <!---------------- END OF FEED ----------------->
                    <!------------------- FEED 2 --------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="ingo">
                                    <h3>Huy Bùi</h3>
                                    <small>Quảng Ninh, 2 HOURS AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/member-2.png">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Hoàng Anh</b>Ảnh đẹp quá<span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 3,473 comments</div>
                    </div>
                    <!---------------- END OF FEED ----------------->
                    <!------------------- FEED 3 --------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="img/avatar-user.png">
                                </div>
                                <div class="ingo">
                                    <h3>Chinh Vũ </h3>
                                    <small>Thái Bình, 1 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/member-3.png">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <span><img src="img/avatar-user.png"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Hoàng Anh</b>Ảnh đẹp quá<span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
                    <!---------------- END OF FEED ----------------->

                </div>
                <!------------------------------- END OF FEEDS ------------------------------------>
            </div>
            <!--======================== END OF MIDDLE ==========================-->


            <!--======================== RIGHT ==========================-->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="uil uil-edit"></i>
                    </div>
                    <!------------ SEARCH BAR -------------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------------ MESSAGES CATEGORY -------------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(6)</h6>
                    </div>
                    <!------------ MESSAGE -------------->
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="img/avatar-user.png">
                        </div>
                        <div class="message-body">
                            <h5>Huy Bùi</h5>
                            <p class="text-muted">Just woke up</p>
                        </div>
                    </div>
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="img/avatar-user.png">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chinh Vũ</h5>
                            <p class="text-bold">Received. Thanks!</p>
                        </div>
                    </div>
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="img/avatar-user.png">
                        </div>
                        <div class="message-body">
                            <h5>Hoàng Anh</h5>
                            <p class="text-bold">okeee</p>
                        </div>
                    </div>
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="img/avatar-user.png">
                        </div>
                        <div class="message-body">
                            <h5>Châm Anh</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="img/avatar-user.png">
                        </div>
                        <div class="message-body">
                            <h5>Kim Cương</h5>
                            <p class="text-muted">bạn là nhất :)</p>
                        </div>
                    </div>
                </div>
                <!------------ END OF MESSAGES -------------->


                <!------------ FRIEND REQUESTS -------------->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <!----- REQUEST 1----->
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="img/avatar-user.png">
                            </div>
                            <div>
                                <h5>Tuấn Anh</h5>
                                <p class="text-muted">4 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================== END OF RIGHT ==========================-->
        </div>
    </main>

    <!--================================================ THEME CUSTOMIZATION =============================================-->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background.</p>

            <!------------ FONT SIZES ------------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!------------ PRIMARY COLORS ------------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!---------- BACKGROUND COLORS ------------>
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5>Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Lights Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/home-user.js"></script>
</body>

</html>