function sc() {
    // hien thi thong bao cho nguoi dung nhap 
    rng = prompt('Enter the range');
    
    res = rng.split("-");
     // kiem tra res -> so dau, so cuoi ( 2 so)
    if (res.length != 2) {
        alert("invalid range ");
        return;
    }
    // Because split in array will have 2 elements
    // string --> Int 
    first = parseInt(res[0]);
    second = parseInt(res[1]);
    //Kiem tra so dau phai nho hon so thu 2, neu first>second ==> loi (1>2)
    if (first > second) {
        alert("invalid range ");
        return;
    }
    // Tao bang html
    str = "<table border=2><tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
      
    //vong lap i tu first den second (number, square = number*number, cube = number*number*number)
    //voi moi i tao mot dong hien thi phep tinh tinh duoc , noi vao str

    for (i = first; i <= second; i++) {
        str = str + "<tr><td>" + i + "<td>" + (i * i) + "<td>" + (i * i * i);
    }

    document.write(str);
    
}
