var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img");
        img.src = "https://avatars.dzeninfra.ru/get-zen_doc/244664/pub_6391fd0f50d44f6924970757_6391fd5a4ed77d6cebe1e439/scale_1200"
        document.getElementById("demo").appendChild(img);
    }
}