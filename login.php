<!-- <?php
    require('register.php');
?>

<script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>

<script>

    liff.init({
        liffId: "1655276625-vBexNj4n" // Use own liffId
    }).then(() => {
        if (!liff.isLoggedIn()) { liff.login(); }
        const idToken = liff.getDecodedIDToken();
        document.getElementById("lineId").value = idToken.sub;
    }).catch((err) => {
        console.log(err.code, err.message);
    });

</script> -->