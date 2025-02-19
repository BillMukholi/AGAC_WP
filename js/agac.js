//Navigation
let menuBtn = document.getElementById('menu_btn')

let menuAnimation = gsap.timeline();
menuAnimation.pause()
menuAnimation.set(".site-header-bottom-cont",{display:"block"})
menuAnimation.to(".site-header-bottom-cont",{opacity:1,duration:1})
menuAnimation.from(".site-header-bottom-bg-cont",{x:"-20cm"},"-=1")
menuAnimation.set(".menu-header-container",{display:"block"})
menuAnimation.to(".menu-header-container",{opacity:1, duration:0.2},"-=1")

if(menuBtn){
    menuBtn.addEventListener("click",()=>{
        if(menuBtn.getAttribute('status') != 'true' ){
            menuAnimation.restart()
            menuBtn.setAttribute('status','true')
        }
        else{
            menuAnimation.reverse(1)
            menuBtn.setAttribute('status','fa;se')
        }
    })
}
else{

}