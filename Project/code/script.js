const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((navItem, i) => {
  navItem.addEventListener("click", () => {
    navItems.forEach((item, j) => {
      item.className = "nav-item";
    });
    navItem.className = "nav-item active";
  });
});

const openPop = document.getElementById("openPop");
const popup = document.getElementById("popup");

const rightcontentElement = document.querySelector(".right-content");
const editElement = document.getElementById("editButton");

let clickCount = 0;

openPop.addEventListener("click", function () {
  clickCount++; // 每次点击增加点击次数

  if (clickCount % 2 === 1) {
    // 奇数次点击，打开弹出窗口
    popup.style.display = "grid";
    // 修改 main 元素的 margin
    rightcontentElement.style.display = "none";
    console.log("Popup opened");
  } else {
    // 偶数次点击，关闭弹出窗口
    popup.style.display = "none";
    rightcontentElement.style.display = "grid";
    // 恢复 main 元素的默认 margin
    console.log("Popup closed");
  }
});

const homeNavItem = document.getElementById("homeNavItem");
const profileNavItem = document.getElementById("profileNavItem");
const pickPackageNavItem = document.getElementById("pickPackageNavItem");
const sendPackageNavItem = document.getElementById("sendPackageNavItem");

const pickimg = document.getElementById('pickimg');
const sendimg = document.getElementById('sendimg');

const leftcontentElement = document.querySelector(".left-content");
const profileElement = document.querySelector(".profile");
const friendslistElement = document.querySelector(".friends-list");
const pickPartElement = document.querySelector(".pickpart");
const sendPartElement = document.querySelector(".sendpart");

profileNavItem.addEventListener("click", () => {
  console.log("Profile Successfully!");
  leftcontentElement.style.display = "none";
  sendPartElement.style.display = "none";
  pickPartElement.style.display = "none";
  popup.style.display = "none";

  rightcontentElement.style.display = "grid";
  profileElement.style.display = "grid";
  friendslistElement.style.display = "grid";
});

function handlePickClick() {
  console.log("Pick Successfully!");
  leftcontentElement.style.display = "none";
  sendPartElement.style.display = "none";
  profileElement.style.display = "none";
  popup.style.display = "none";
  homeNavItem.className = "nav-item";

  rightcontentElement.style.display = "grid";
  pickPartElement.style.display = "grid";
  
  pickPackageNavItem.className = "nav-item active";

}
// 在 pickimg 上添加点击事件监听器
pickimg.addEventListener("click", handlePickClick);
// 在 pickPackageNavItem 上添加点击事件监听器
pickPackageNavItem.addEventListener("click", handlePickClick);

// 发送操作的处理函数
function handleSendClick() {
  console.log("Send Successfully!");
  leftcontentElement.style.display = "none";
  pickPartElement.style.display = "none";
  profileElement.style.display = "none";
  popup.style.display = "none";
  homeNavItem.className = "nav-item";
  
  rightcontentElement.style.display = "grid";
  sendPartElement.style.display = "grid";
  sendPackageNavItem.className = "nav-item active";

}

sendimg.addEventListener("click", handleSendClick);

sendPackageNavItem.addEventListener("click", handleSendClick);


// sendimg,sendPackageNavItem.addEventListener("click", () => {
//   console.log("Send Successfully!");
//   leftcontentElement.style.display = "none";
//   pickPartElement.style.display = "none";
//   profileElement.style.display = "none";
//   popup.style.display = "none";
  
//   rightcontentElement.style.display = "grid";
//   sendPartElement.style.display = "grid";
// });
