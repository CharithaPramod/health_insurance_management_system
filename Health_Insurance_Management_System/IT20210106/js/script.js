    var i = 0;
    var images = [];
    var time = 3000;

    images[0] = "../images/image1.jpg";
    images[1] = "../images/image2.jpg";
    images[2] = "../images/image3.jpg";
    images[3] = "../images/image4.jpg";

    function change_img() {
        document.slide.src = images[i];

        if(i < images.length - 1) {
            i++;
        }
        else {
            i = 0;
        }

        setTimeout("change_img()", time);
    }

    window.onload = change_img;