let getTag = document.getElementsByTagName("p")
console.log(getTag)

let getAtt = document.getElementsByClassName("greet")

console.log(getAtt)

let good = document.getElementsByTagName("h2")

console.log(good)

let button = document.getElementsByClassName("buttonUp")
console.log(button)

let detail = document.getElementById("dropdown")
console.log(detail)

let getP = document.querySelector("p")
console.log(getP)

let getAllP = document.querySelectorAll("p")
console.log(getAllP)

getAtt[0].textContent ="we are fine"
getAtt[0].innerHTML ="<h1>we are fine</h1>"

button[0].textContent ="clicked"
let goodA = document.getElementsByClassName("good")
goodA[0].setAttribute("id","null")
console.log(goodA)


let goodAfterNoon = document.querySelector("h2")
goodAfterNoon.style.color = "red"

let creatDiv = document.createElement("div")
document.body.appendChild(creatDiv)
console.log(creatDiv)
creatDiv.innerHTML = "<a href='#'>home</a>"

let ul = document.createElement("ul")
document.body.append(ul)
console.log(ul)



ul.innerHTML = `<li>rice</li> 
<li>Bean</li>`

let submit = document.getElementById("submit")
  function submitForm(event){
    event.preventDefault()
     submit.textContent = "Submited"
    alert("good afternoon")
    let myname = document.getElementById("name").value

    localStorage.setItem("name", myname)
    let email = document.getElementById("email").value
    localStorage.setItem("email", email)
    let pass = document.getElementById("password").value
    localStorage.setItem("password",pass)

}
   
    // submit.addEventListener("click",submitForm)


let myname = document.getElementById("name").value
console.log(myname)
localStorage.setItem("firstname",  "Hey");
localStorage.setItem("name", myname)
 let gethey = localStorage.getItem("firstname")
 console.log(gethey)
function changeColor(){
let pclick = document.getElementsByClassName("click1")
console.log(pclick)
 pclick[0].style.color = "blue"
}