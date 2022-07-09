let data = {
    username: "wael",
    age: 26
};
// for request data
fetch("http://localhost/postApi.php", {
    body: JSON.stringify(data),
    method: 'POST'
}).then(response => response.json()).then(api_data => {
    console.log(api_data);
});



let myPromise = new Promise(function(myResolve, myReject) {
    let x = 0;

    // some code (try to change x to 5)

    if (x == 0) {
        myResolve("OK");
    } else {
        myReject("Error");
    }
});

myPromise.then(
    function(value) { myDisplayer(value); },
    function(error) { myDisplayer(error); }
);