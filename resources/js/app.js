require('./bootstrap');

if (window.location.pathname == "/surveys") {
    console.log("hello");
    let myRedirect = setTimeout(() => {
        window.location.replace("https://library.vcu.edu");
    }, 3000);
}
