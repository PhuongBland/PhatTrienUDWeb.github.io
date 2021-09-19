$(document).ready(function () {
    $("#find").click(function () {
        var str = $("#t1").val();
        // Vong lap duyet tung ki tu trong chuoi neu co 'a,e,o,u,i' 
        // ==> tra ve nguyen am ben trai gan nhat cua chuoi va vi tri

        for (i = 0; i < str.length; i++) {
            if (str.charAt(i) == 'a' || str.charAt(i) == 'e'
                || str.charAt(i) == 'i' || str.charAt(i) == 'o'
                || str.charAt(i) == 'u') {
                alert("Left most vowel of " + str + " is at location " + (i + 1));
                return;
            }
        }
        // khong co nguyen am trong chuoi
        alert("No vowels found for string " + str);
    });
    $("#reverse").click(function () {
        var num = parseInt($("#t2").val());
        var rnum = 0;
        var temp = num;

        // kiem tra du lieu nhap vao co phai la so khong
        if (isNaN(num)) {
            alert("invalid number");
            return;
        }
        // ex 12345
        while (num != 0) {
            rnum *= 10;
            // rnum=0    rnum=50    rnum = 540

            rnum += num % 10;
            // rnum=5    rnum = 54   rnum = 543

            num -= num % 10;
            // num=12340 // num=1230

            num = Math.floor(num / 10);
            // lam tron
            // num= 123  num=12

        }
        alert("Reverse of num " + temp + " is " + rnum);
    })
});