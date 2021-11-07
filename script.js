function menu(){
    document.querySelector('.nav-flex').classList.toggle("js-nav")
    let list = document.querySelectorAll('.js')
    for (let i=0; i<list.length; i++){
        list[i].classList.toggle('active')
    }
}