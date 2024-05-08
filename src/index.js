'use strict'

// collapsed asked list
let accordian = document.getElementsByClassName("asked__list");
console.log(accordian)

for (let i = 0; i < accordian.length; i++) {
    accordian[i].addEventListener('click', function () {
        let content = this.lastElementChild;

        if (content.classList.contains('show')) {
            content.classList.remove('show')
        } else {
            content.classList.add('show')
        }
    })
}
