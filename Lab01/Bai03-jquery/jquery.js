function f(d) {
       //Kiểm tra nếu là nút del thì reset input của thẻ input id = res
       if (d == 'c') {
              $("#res").val("");
              return;
       }

       //Lấy giá trị res
       res = $("#res").val();
       //Kiem tra = 0
       if (res == 0 && d == 0)
              return;
       //Nếu là phép tính
       if (d == '+' || d == '-' || d == '*' || d == '/') {
              //Lưu phép tính vào biến 
              opr = d;
              //Lưu giá trị cũ của res
              num = parseFloat(res);
              // document.getElementById('res').value = d;
              $("#res").val(d);
              return;
       }
       //Kiểm tra phép tính '=','+' '-', '*', '/'
       if (d == '=') {
              num1 = parseFloat(res);
              switch (opr) {
                     case '+': ans = num + num1; break;
                     case '-': ans = num - num1; break;
                     case '*': ans = num * num1; break;
                     //Chia trả về số nguyên
                     case '/': ans = parseInt(num / num1); break;
              }
              $("#res").val(ans);
              return;
       }
       //Chuyển dấu dương thành âm và ngược lại
       if (d == '--') {
              temp = $("#res").val();
              temp *= -1;
              $("#res").val(temp);
              return;
       }
       //Trường hợp nếu res không rỗng sẽ cộng thêm số vào đuôi
       if (!isNaN(document.getElementById('res').value)) {
              temp = $("#res").val();
              temp += d;
              $("#res").val(temp);
              return;
       }
       else {
              temp = $("#res").val(d);
       }
}
