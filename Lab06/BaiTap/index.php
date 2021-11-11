<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1812828</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <style>
       .table{
            width:40%;
        }
        #kq{
            color:blue;
            font-size:20px;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Các phép tính</h1>
            <table class="table table-primary">
                <tr>
                    <th scope="row">số a : </th>
                    <td><input type="number" name="so_a" id="so_a"></td>
                </tr>
                <tr>
                    <th scope="row">số b : </th>
                    <td><input type="number" name="so_b" id="so_b"></td>
                </tr>
                <tr>
                    <th scope="row">phép tính :</th>
                    <td>
                        <div id="pheptinh">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepcong" value="plus"
                                    checked="checked">
                                <label class="form-check-label" for="pheptinh">Cộng</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="pheptru" value="-">
                                <label class="form-check-label" for="pheptinh">Trừ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepnhan" value="*">
                                <label class="form-check-label" for="pheptinh">Nhân</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepchia" value="/">
                                <label class="form-check-label" for="pheptinh">Chia</label>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="xemketqua" onclick="tinhketqua()">Xem Kết Quả</button>
                    </td>
                    <td id="kq"></td>
                </tr>
            </table>
            <script>
            function tinhketqua() {
                var soA = document.getElementById("so_a").value;
                var soB = document.getElementById("so_b").value;
                var pheptinh = document.querySelector('input[name="pheptinh"]:checked').value;
                if (soA.length === 0 || soB.length === 0) {
                    alert('Vui lòng không để trống số ');
                } else {
                    var reponse = new XMLHttpRequest();
                        debugger;
                    reponse.open('GET', 'ajax.php?so_a=' + soA + '&so_b=' + soB + '&pheptinh=' + pheptinh)
                    reponse.send();
                    reponse.onload = function() {
                        if(this.readyState== 4 && this.status == 200){
                        document.getElementById("kq").innerHTML = this.responseText;
                        }
                    };
                }
            }
            </script>
        </div>
    </div>
</body>
</html>