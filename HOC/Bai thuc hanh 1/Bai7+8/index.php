<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 7 + 8</title>
    <style>
        body {
            background-color: gray;
            height: 620px;
            width: 970px;
        }
        #header {
            background-color: azure;
            border-radius: 5px;
            width: 950px;
            height: 130px;
        }
        #logo {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
        }
        #menu {
            width: 100%;
            height: 30px;
            display: flex;
            list-style: none;
            align-items: center;
            justify-content: right;
            font-family: Arial, Helvetica, sans-serif;
        }
        #menu ul {
            display: flex;
            list-style: none;
        }
        #menu ul li {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            width: 120px;
            color: blue;
            font-size: 15px;
        }

        #menu ul li :hover {
            color: greenyellow;
        }
        #nd {
            display: flex;
            justify-content: space-between;
        }
        #conten {
            margin-top: 10px;
            width: 630px;
            background-color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 10px 10px 10px black;
        }
        #subcribe {
            margin-top: 10px;
            width: 300px;
            margin-right: 20px;
            box-shadow: 10px 10px 10px black;
        }
        .td {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            padding: 10px 10px 7px 10px;
            background-color: blue;
            color: whitesmoke;
        }
        .td h3 {
            margin: 0px;
            margin-left: 10px;
        }
        .con {
            padding: 10px 10px 7px 10px;
            background-color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;
        }
        .con input {
            margin-top: 20px;
            height: 40px;
        }
        .con select {
            margin-top: 20px;
            margin-right: 30px;
            height: 40px;
        }
        .chau {
            display: flex;
            padding: 10px 10px 7px 10px;
            background-color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;
        }
        .con button {
            margin-top: 20px;
            margin-right: 30px;
            height: 40px;
            width: 60px;
            color: whitesmoke;
            background-color: rgb(81, 153, 8);
            border: 0px;
        }
        #button {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div id="header">
        <div id="logo">
            <img src="../Img/logo.png" style="border-radius: 5px;" />
            <div style="margin-left: 20px; ">
                <h1>
                    <font color="green">TOTAL</font> SOLUTION
                </h1>
                <h2 style="float:right; margin: 0px;">Company</h2>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a>TRANG CHỦ</a></li>
                <li><a>GIỚI THIỆU</a></li>
                <li><a>TIN TỨC</a></li>
                <li><a>DỊCH VỤ</a></li>
                <li><a>LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
    <div id="nd">
        <div id="conten">
            <div class="td">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Green_Dot.svg/300px-Green_Dot.svg.png" alt="" style="width: 20px; height: 20px; ">
                <h3>CÔNG NGHỆ</h3>
            </div>
            <h3 style="color: blue; margin-left: 20px;">PHÁT TRIỂN VÀ THẾ MẠNH CỦA WEB</h3>
            <div class="chau">
                <img src="../Img/workspace.png" alt="" style="margin: 20px 20px 20px 20px;">
                <p>
                    Bạn có biết rằng website là một công cụ không thể thiếu của bất kỳ
                    cơ quan, doanh nghiệp, tổ chức... nào. Với sự phát triển như vũ
                    bão của của ngành CNTT và đặc biệt là lĩnh vực thương mại điện
                    tử, website được ví như là cửa hàng, là mặt tiền của các tổ chức
                    Yếu tố quyết định lớn đến hiệu quả hoạt động. Thậm chí, hiện nay
                    các cá nhân cũng đang có xu hướng sở hữu những website mang
                </p>
            </div>
            <h3 style="color: blue; margin-left: 20px;">NỘI DUNG CHƯƠNG TRÌNH HỌC TẬP</h3>
            <div class="chau">
                <br>
                <img src="../Img/maybay.png" alt="" style="margin: 20px 20px 20px 20px;">
                <p>
                    - Nắm bắt NGÔN NGỮ mới nhất để xây dựng được trang WEB: xHTML, HTML5<br>
                    - Hiểu rõ kỹ thuật nâng cao khả năng TRÌNH DIỄN, tạo các HIỆU ỨNG trên trang WEB với CSS3, CSS5<br>
                    - Sử dụng thành thạo phương pháp XỬ LÝ các SỰ KIỆN, tương tác với người dùng trên trang WEB thông
                    qua JavaScript, JQuery, AJAX thương hiệu của riêng mình.
                </p>
            </div>
        </div>
        <div id="subcribe">
            <div class="td">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Green_Dot.svg/300px-Green_Dot.svg.png" alt="" style="width: 20px; height: 20px; ">
                <h3>THÔNG TIN ĐĂNG KÝ</h3>
            </div>
            <div class="con">
                <input style="width: 250px;" class="Input" type="text" placeholder="Họ và tên"><br>
                <select text="ngay" placeholder="Ngày">
                    <option>--Ngày--</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                    <option value="">13</option>
                    <option value="">14</option>
                    <option value="">15</option>
                    <option value="">16</option>
                    <option value="">17</option>
                    <option value="">18</option>
                    <option value="">19</option>
                    <option value="">20</option>
                    <option value="">21</option>
                    <option value="">22</option>
                    <option value="">23</option>
                    <option value="">24</option>
                    <option value="">25</option>
                    <option value="">26</option>
                    <option value="">27</option>
                    <option value="">28</option>
                    <option value="">29</option>
                    <option value="">30</option>
                    <option value="">31</option>
                </select>
                <select text="month" placeholder="Tháng">
                    <option>--Tháng--</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select>
                <select text="year" placeholder="Năm">
                    <option>--Năm--</option>
                    <option>2000</option>
                    <option>2001</option>
                    <option>2002</option>
                    <option>2003</option>
                    <option>2004</option>
                    <option value="">2005</option>
                    <option value="">2006</option>
                    <option value="">2007</option>
                    <option value="">2008</option>
                    <option value="">2009</option>
                    <option value="">2010</option>
                    <option value="">2011</option>
                    <option value="">2012</option>
                    <option value="">2013</option>
                    <option value="">2014</option>
                    <option value="">2015</option>
                    <option value="">2016</option>
                    <option value="">2017</option>
                    <option value="">2018</option>
                    <option value="">2019</option>
                </select>
                <input style="width: 250px;" class="Input" type="text" placeholder="Đia chỉ"><br>
                <input style="width: 250px;" class="Input" type="text" placeholder="Email"><br>
                <p>Có thể tham gia được ca :</p>
                <label for="">Sáng :</label>
                <input style="margin-top: 0px; height: 15px;" class="Input" type="checkbox">
                <label for="">Chiều :</label>
                <input style="margin-top: 0px; height: 15px;" class="Input" type="checkbox">
                <label for="">Tối :</label>
                <input style="margin-top: 0px; height: 15px;" class="Input" type="checkbox"> <br><br>
                <label>Giới tính : </label>
                <input style="margin-top: 0px; height: 15px;" type="radio">
                  <label>Nam</label>
                  <input style="margin-top: 0px; height: 15px;" type="radio">
                  <label>Nữ</label>
                <input style="margin-top: 0px; height: 15px;" type="radio">
                <br>
                <div id="button">
                    <button>Gửi đi</button>
                    <button>Làm lại</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>