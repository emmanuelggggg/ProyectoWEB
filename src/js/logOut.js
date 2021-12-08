const logoutBtn=document.getElementById('logOutBtn');

logoutBtn.addEventListener("click",()=>{
    axios({
    method: "POST",
    url: "/api/v1/user/logout.php",
    }).then((response) => {
        if (response.status === 200) {
            location.href = "/index.php";
        } else {
            alert(response.data.message);
        }
    }).catch((error) => {
        if (error.response) {
            alert(error.response.message);
        }
    });
});
