function findLMV() {
    var str = document.getElementById('t1').value
    // Vong lap duyet tung ki tu trong chuoi neu co 'a,e,o,u,i' 
    // ==> tra ve nguyen am ben trai gan nhat cua chuoi va vi tri
    for (i = 0; i < str.length; i++) {
        if (str.charAt(i) == 'a' || str.charAt(i) == 'e' ||
            str.charAt(i) == 'i' || str.charAt(i) == 'o' || str.charAt(i) == 'u')
            return ("left most vowel of " + str + " is at location " + (i + 1));
    }
    // khong co nguyen am trong chuoi
    return ("No vowels found for string" + str);

}

function reverse(num) {
    rnum = 0;
    temp = num;
    // kiem tra du lieu nhap vao co phai la so khong
    if (isNaN(num)) {
        return "invalid number";
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
    return "Reverse of num " + temp + " is " + rnum;
}