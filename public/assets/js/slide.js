const showButton = document.querySelector(".show-button");
const siteBar = document.querySelector(".site-bar");
if (showButton) {
    showButton.addEventListener("click", () => {
        siteBar.classList.toggle("show");
    });
}

// showPasswordCheckbox
const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
const passwordInput = document.getElementById("passwordInput");
if (showPasswordCheckbox) {
    showPasswordCheckbox.addEventListener("change", function () {
        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
}

// เมื่อเอลิเมนต์ภายใน .custom-container ถูกคลิก
document.querySelectorAll(".custom-container").forEach(function (container) {
    container.addEventListener("click", function (e) {
        // ตรวจสอบว่าเอลิเมนต์ที่ถูกคลิกคือ .p-2 หรือไม่
        if (e.target.classList.contains("p-2")) {
            // ลบคลาส active จากเอลิเมนต์ที่เปิดอยู่
            const activeElements = container.querySelectorAll(".p-2.active");
            for (let i = 0; i < activeElements.length; i++) {
                activeElements[i].classList.remove("active");
            }
            // เพิ่มคลาส active ให้กับเอลิเมนต์ที่ถูกคลิก
            e.target.classList.add("active");
        }
    });
});

const footer = document.querySelector(".footer");
const windowHeight = window.innerHeight;
const documentHeight = document.documentElement.offsetHeight;

// if (documentHeight <= windowHeight) {
//     footer.style.position = "fixed";
// }
