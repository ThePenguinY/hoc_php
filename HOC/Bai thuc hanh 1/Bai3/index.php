<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<style>
    body {
            margin: 0;
        }

        #Header {
            display: flex;
            justify-content: space-between;
            border: 1.5px solid red;
        }

        #tilted,
        #sologan {
            margin: 0;
        }

        #titled {
            background-color: rgb(231, 130, 130);
            color: white;
            padding: 7px;
            text-align: right;
        }

        #sologan {
            border-top: 1.5px solid red;
            color: rgb(145, 2, 2);
            background-color: pink;
            margin-top: 10px;
            padding: 9px;
            text-align: center;
        }

        .textheader {
            width: 100%;
        }

        #img {
            border-left: 1.5px solid red;
        }

        #img img {
            height: 119px;
        }

        #content,
        #sidebar {
            width: 50%;
            height: auto;
        }

        #ulcontent,
        #ulsidebar {
            margin: 0;
        }

        #list {
            color: rgb(236, 9, 58);
            font-weight: bold;
        }

        #sidebar {
            float: left;

            border-bottom: 1.5px solid red;
            height: 190px;
        }

        #content {
            width: 49%;
            float: left;
            height: auto;
            border-right: 1.5px solid red;
            border-bottom: 1.5px solid red;
        }

        #main {}
</style>
<body>
<div id="Header">
        <div class="textheader">
            <h2 id="titled">Công nghệ dầu gội dưỡng tóc mới</h2>
            <h1 id="sologan">Tỏa sáng cùng DOUBLE RICH</h1>
        </div>
        <div id="img">
            <img src="../Img/goidau.png" height="119px" width="90.5px" />
        </div>
    </div>
    <div id="main">
        <div id="content">
            <ul id="ulcontent">
                <li>
                    <p id="list">Sản phẩm khuyến mãi :</p>
                    <ul>
                        <li>Dầu gội Double Rich mới 200ml, 400ml có tem khuyến mãi</li>
                    </ul>
                </li>
                <li>
                    <p id="list">Đối tượng tham gia :</p>
                    <ul>
                        <li>Áp dụng cho tất cả người tiêu dùng cuối cùng mua sản phẩm khuyến mãi.</li>
                        <li>Chương trình không áp dụng cho nhân viên, nhà phân phối bao gồm các tổng đại lý, đại lý, cửa
                            hàng bán sỉ, lẻ và các cá nhân kinh doanh sản phẩm của công ty LDMP LG Vina, công ty quảng
                            cáo, công ty làm dịch vụ chương trình khuyến mãi này, nhân viên siêu thị.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="sidebar">
            <ul id="ulsidebar">
                <li>
                    <p id="list">Cách thức nhận giải :</p>
                    <ol>
                        <li><b><i>Giải khuyến khích</i></b> : Khách hàng đổi qua tại các cửa hàng bán lẻ trên toàn quốc
                            bắt đầu. Bắt đầu từ ngày 15/06/2005 đến 17h ngày 12/08/2005</li>
                        <br>

                        <li><b><i>Giải đặc biệt, nhất, nhì</i></b> : khách hàng cắt phần mã vạch trên mỗi chai dầu gội
                            có khuyến mãi và gởi kèm phiếu trúng thưởng về văn phòng công ty. hạn chót đến hết ngày
                            31/07/2005 (căn cứ theo dấu bưu điện nơi gởi). Sau đó công ty sẽ gửi thư thông báo trúng
                            thưởng và cách thức nhận quà cho khách hàng</li>
                    </ol>
                </li>

            </ul>
        </div>
    </div>
</body>
</html>