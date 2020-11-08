let menu_title = document.querySelectorAll(".menu-item-has-children");
let submenu = document.querySelectorAll('.sub-menu');
let submenuTimer = [];

//активная страница
window.addEventListener('load', () => {
  let anchor = document.getElementsByTagName("a");
  for (let i = 0; i < anchor.length; i++) {
    if (anchor[i].getAttribute('href') == window.location.href.split("#")[0]) {
      anchor[i].classList.add("active");
    }
  }
})

//menu_title
menu_title.forEach((item, i) => {
  item.children[0].addEventListener('mouseover', () => {
    submenu[i].style.display = 'block';
    clearTimeout(submenuTimer[i]);
  })
  item.children[0].addEventListener('mouseout', () => {
    delay = 50;
    submenuTimer[i] = setTimeout(function() {
      submenu[i].style.display = 'none';
    }, delay)
  })
});

// submenu
submenu.forEach((item, i) => {
  item.addEventListener('mouseover', () => {
    clearTimeout(submenuTimer[i]);
  })
  item.addEventListener('mouseout', () => {
    delay = 50;
    submenuTimer[i] = setTimeout(function() {
      submenu[i].style.display = 'none';
    }, delay)
  })
});

window.onscroll = () =>{
  const header = document.querySelector('.header');
  const login = header.querySelector('.xoo-el-login-tgr');
  const registration = header.querySelector('.xoo-el-reg-tgr');
  const logout = header.querySelector('.xoo-el-logout-menu');
  const sync = document.querySelector('.syncContainer');
  const y = window.scrollY;
  if (y>235){
    header.classList.add('fixed');
    if (login != null && registration != null){
      login.classList.remove('deleteblock');
      registration.classList.remove('deleteblock');
    }
    if (logout != null){
    logout.classList.remove('deleteblock');
    }
    sync.classList.add('deleteblock');
  }  else if (y<220){
    header.classList.remove('fixed');
    if (login != null && registration != null){
    login.classList.add('deleteblock');
    registration.classList.add('deleteblock');
    }
    if (logout != null){
    logout.classList.add('deleteblock');
    }
    sync.classList.remove('deleteblock');
  }
};