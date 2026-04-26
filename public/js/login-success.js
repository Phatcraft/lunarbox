var messagebox = document.getElementById("message")
var submit = document.getElementById("submit")

messagebox.classList.replace("bg-danger", "bg-primary")
messagebox.classList.replace("d-none", "d-block")
submit.disabled = true

// Counter
messagebox.innerHTML = "Đăng nhập thành công! Đang chuyển về trang chủ trong <strong>3</strong>s"
setTimeout(() => {
    messagebox.innerHTML = "Đăng nhập thành công! Đang chuyển về trang chủ trong <strong>2</strong>s"
    setTimeout(() => {
        messagebox.innerHTML = "Đăng nhập thành công! Đang chuyển về trang chủ trong <strong>1</strong>s"
        setTimeout(() => {
            messagebox.innerHTML = "Đang chuyển trang . . . "
            setTimeout(() => {
                location.replace("/")
            },500)
        }, 1000)
    }, 1000)
}, 1000)