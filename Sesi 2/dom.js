const body = document.body
// const title = document.createElement("h1")
// title.innerText = "Hello World"

// body.append(title)

const inputTask = document.querySelector("#taskInput")
const taskList = document.querySelector("#taskList")

function addTask() {
    // Dapetin Value dari Inputnya
    const inputValue = inputTask.value

    // Error Handling
    if (inputValue == "") {
        alert("Please input task")
        return
    }

    const listItem = document.createElement("li")
    listItem.style.color = "blue"
    listItem.style.fontSize = "20px"
    listItem.textContent = inputValue
    taskList.append(listItem)

    inputTask.value = ""
}
