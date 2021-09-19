$(document).ready(function () {
    $("#check").click(function () {
        // nhap vung du lieu vao
        var rng = document.getElementById("input").value;
        var res = rng.split("-");
        // kiem tra res -> so dau, so cuoi ( 2 so)
        if (res.length != 2) {
            alert("invalid range ");
            return;
        }
        first = parseInt(res[0]);
        second = parseInt(res[1]);

        //Kiem tra so dau phai nho hon so thu 2, neu first>second ==> loi
        if (first > second) {
            alert("invalid range ");
            return;
        }
        // Tao bang html
        str = "<table border=2><tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
        //vong lap i tu first den second (number, square = number*number, cube = number*number*number)
        //voi moi i tao mot dong hien thi phep tinh tinh duoc , noi vao str

        for (i = first; i <= second; i++) { str = str + "<tr><td>" + i + "<td>" + (i * i) + "<td>" + (i * i * i); } str
            += '</table><a href="./index.html"><h1>Về trang chủ</h1></a>';

        document.querySelector(".res").innerHTML = str;
    });
    $("#new").click(function () {
        location.reload();
    })
});