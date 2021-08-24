@extends('layouts.app')

@section('content')
<div class="menu-fixed">
    <div class="menu-abs">
        @include('layouts/partials/_header')
    </div>
</div>

<div class="message container-fluid h-100">
    <div class="row justify-content-center h-100" style="margin-top: 80px;">
        <div class="col-md-4 col-xl-3 mt-5 chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-body contacts_body">
                    <ui class="contacts">
                        <li class="active">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="/images/pdp.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Khalid</span>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="/images/pdp.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Taherah Big</span>
                                    <p>Taherah left 7 mins ago</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="/images/pdp.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Sami Rafi</span>
                                    <p>Sami is online</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="/images/pdp.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="/images/pdp.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Rashid Samim</span>
                                    <p>Rashid left 50 mins ago</p>
                                </div>
                            </div>
                        </li>
                    </ui>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-8 col-xl-6 chat mt-5">
            <div class="card">
                <div class="card-header msg_head">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img">
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span>Chat with Khalid</span>
                            <p>1767 Messages</p>
                        </div>
                    </div>
                    <span id="action_menu_btn"><i class="fa fa-ellipsis-v"></i></span>
                    <div class="action_menu">
                        <ul>
                            <li><i class="fa fa-user-circle"></i> View profile</li>
                            <li><i class="fa fa-users"></i> Add to close friends</li>
                            <li><i class="fa fa-plus"></i> Add to group</li>
                            <li><i class="fa fa-ban"></i> Block</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you samim?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Hi Khalid i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            I am good too, thank you for your chat template
                            <span class="msg_time">9:00 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            You are welcome
                            <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            I am looking for your next templates
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Ok, thank you have a good day
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="/images/pdp.jpg"
                                class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            Bye, see you
                            <span class="msg_time">9:12 AM, Today</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fa fa-paperclip"></i></span>
                        </div>
                        <textarea name="" class="form-control type_msg"
                            placeholder="Type your message..."></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text send_btn"><i class="fa fa-location-arrow"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ##### Posts Area End ##### -->
@include('layouts/partials/_footer')
@endsection